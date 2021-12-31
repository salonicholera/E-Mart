@extends('admin.layouts.master')
@section('title', 'Orders')
@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Orders
                            <small>E-MART Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Orders</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Order History</h5>
            </div>
            <div class="card-body">
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
    <!-- Container-fluid Ends-->

</div>
@endsection

@section('scripts')

<script>

$(document).ready(function() {
    $('#order-table').DataTable();
} );

</script>

@endsection