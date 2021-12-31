@extends('store.layouts.master')
@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>cart</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="cart-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 table-responsive-xs">
                <table class="table cart-table">
                    <thead>
                        <tr class="table-head">
                            <th scope="col">image</th>
                            <th scope="col">product name</th>
                            <th scope="col">price</th>
                            <th scope="col">quantity</th>
                            <th scope="col">action</th>
                            <th scope="col">total</th>
                        </tr>
                    </thead>
                    @foreach($items as $item)
                    <tbody>
                        <tr>
                            <td>
                                <a href="{{ route('product.details', $item->product->slug) }}">
                                    <img src="{{ asset('upload/products') }}/{{$item->product->image}}" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('product.details', $item->product->slug) }}">{{ $item->product->name }}</a>
                                <div class="mobile-cart-content row">
                                    <div class="col">
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="text" name="quantity" class="form-control input-number"
                                                    value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">${{ $item->product->price }}</h2>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">
                                            <a href="{{ route('cart.destroy', $item->id) }}" class="icon">
                                                <i class="ti-close"></i>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>${{ $item->product->price }}</h2>
                            </td>
                            <td>
                                <div class="qty-box">
                                    <div class="input-group">
                                        <input type="number" name="quantity" class="form-control input-number"
                                            value="{{ $item->quantity }}" disabled readonly>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('cart.destroy', $item->id) }}" class="icon"><i class="ti-close"></i></a>
                            </td>
                            <td>
                                <h2 class="td-color">${{ $item->quantity * $item->product->price }}</h2>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                <div class="table-responsive-md">
                    <table class="table cart-table ">
                        <tfoot>
                            <tr>
                                <td>total price :</td>
                                <td>
                                    <h2>
                                        ${{ 
                                            $items->sum(function($item) {
                                                return $item->quantity * $item->product->price;
                                            }) 
                                        }}
                                    </h2>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-6"><a href="{{ route('product') }}" class="btn btn-solid">continue shopping</a></div>
            <div class="col-6"><a href="{{ route('checkout') }}" class="btn btn-solid">check out</a></div>
        </div>
    </div>
</section>
<!--section end-->
@endsection