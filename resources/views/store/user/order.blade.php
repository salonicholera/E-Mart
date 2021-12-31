@extends('store.layouts.master')
@section('content')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Orders</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Orders</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('store.layouts.partials.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="dashboard-right">
                    <div class="dashboard">
                        <div class="page-title">
                            <h2>My Orders</h2>
                        </div>
                        <div>
                        <table id="order-table" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Order Id</th>
                                    <th>Date</th>
                                    <th>Product Name</th>
                                    <th>Total</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $key => $order)
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>#00{{ $order->id }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>
                                        @foreach($order->order_details as $item)
                                        <p> <b> {{ $item->product->name }} </b> <br></p>
                                        @endforeach
                                    </td>
                                    <td>{{ $order->total }}</td>
                                    <td>COD</td>

                                    <td>
                                        @if($order->status == 1)
                                        <span class="badge bg-success">Completed</span>
                                        @elseif($order->status == 2)
                                        <span class="badge bg-danger">Failed</span>
                                        @elseif($order->status == 0)
                                        <span class="badge bg-warning">Pending</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection