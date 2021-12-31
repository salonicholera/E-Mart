<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Cart;
use App\Models\User;
use Auth;


class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
        ]);

        $items = Cart::where('user_id', Auth::user()->id)->with('product')->get();

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->total = $items->sum(function($item) {
                            return $item->quantity * $item->product->price;
                        }) ;
        $order->status = 1; // completed
        $order->save();
       
        foreach ($items as $key => $item) {
            $order_details = new OrderDetail();
            $order_details->user_id = Auth::user()->id;
            $order_details->order_id = $order->id;
            $order_details->product_id = $item->product->id;
            $order_details->quantity = $item->quantity;
            $order_details->save();
        }

        $user = User::find(Auth::user()->id);
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->address = $request->address;
        $user->postal_code = $request->postal_code;
        $user->save();

        return redirect()->route('order.success', $order->id);

    }

    public function orderHistory(Request $request)
    {
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('store.user.order', compact('orders'));
    }

    public function orderSuccess($id)
    {
        Cart::where('user_id', Auth::user()->id)->delete();
        $order = Order::with('order_details')->findOrFail($id);
        return view('store.product.success', compact('order'));
    }
}
