<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Auth;

class CartController extends Controller
{
    public function index()
    {
        if(!session()->has('cart_user')) {
            session()->put('cart_user', random_int(99999, 999999));
        }
        $userId = Auth::user() ? Auth::user()->id : session('cart_user');

        $items = Cart::where('user_id', $userId)->with('product')->get();
        if(!count($items)){
            return redirect('products');
        }
        return view('store.product.cart', compact('items'));
    }

    public function addToCart(Request $request)
    {
        if($request->ajax()) {


            if(!session()->has('cart_user')) {
                session()->put('cart_user', random_int(99999, 999999));
            }
            $userId = Auth::user() ? Auth::user()->id : session('cart_user');

            $cart = Cart::where('user_id', $userId)->where('product_id', $request->product_id)->first();

            if ($cart) {
                $cart->user_id = Auth::user() ? Auth::user()->id : $userId;
                $cart->quantity = $request->quantity;
                $cart->is_user = Auth::user() ? 1 : 0;
                $cart->save();
            } else {
                $cart = new Cart();
                $cart->user_id = Auth::user() ? Auth::user()->id : $userId;
                $cart->product_id = $request->product_id;
                $cart->quantity = $request->quantity;
                $cart->is_user = Auth::user() ? 1 : 0;
                $cart->save();
            }

            if($request->quantity == 0) {
                $cart->destroy($cart->id);
            }
            return count(Cart::where('user_id', Auth::user() ? Auth::user()->id : $userId)->get());
           
        }
        
    }

    public function buyNow(Request $request)
    {
        $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $request->product_id)->first();

        if(!session()->has('cart_user')) {
            session()->put('cart_user', random_int(99999, 999999));
        }
        $userId = session('cart_user');
        

        if ($cart) {
            $cart->user_id = Auth::user() ? Auth::user()->id : $userId;
            $cart->quantity = $cart->quantity + $request->quantity;
            $cart->is_user = Auth::user() ? 1 : 0;
            $cart->save();
        } else {
            $cart = new Cart();
            $cart->user_id = Auth::user() ? Auth::user()->id : $userId;
            $cart->product_id = $request->product_id;
            $cart->quantity = $request->quantity;
            $cart->is_user = Auth::user() ? 1 : 0;
            $cart->save();
        }
        return redirect('cart');
    }

    public function destroy($id) 
    {
        Cart::destroy($id);
        return redirect('cart');
    }
}
