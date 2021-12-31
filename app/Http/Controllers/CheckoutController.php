<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $items = Cart::where('user_id', Auth::user()->id)->with('product')->get();
        if(!count($items)){
            return redirect('products');
        }
        return view('store.product.checkout', compact('items'));
    }
}
