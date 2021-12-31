<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function orderHistory()
    {
        $orders = Order::get();
        return view('admin.order.index', ['orders' => $orders]);
    }
}
