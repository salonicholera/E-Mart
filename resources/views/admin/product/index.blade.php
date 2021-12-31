@extends('admin.layouts.master')
@section('title', 'Products')
@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Products
                            <small>E-MART Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Products</li>
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
                <h5>Products</h5>
            </div>
            <div class="card-body">
            <table id="product-table" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $product)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <a href="{{route('admin.product.edit', $product->id)}}" class="text-dark" title="Edit"> 
                                <i class="edit-icon fa fa-edit t-edit"></i> 
                            </a>

                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#confirmationModal{{$product->id}}">
                                <i class="remove-icon fa fa-trash-o t-trash delete-confirmation"></i>
                            </a>
                            <!-- Delete Confirmation -->
                            <div class="modal fade" id="confirmationModal{{$product->id}}" tabindex="-1" aria-labelledby="confirmationModalLabel{{$product->id}}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmationModalLabel{{$product->id}}">
                                                {{ __('Confirmation') }}
                                            </h5>
                                            {!! Form::button(null, ['class' => 'btn-close', 'data-bs-dismiss' => 'modal']) !!}
                                        </div>
                                        <div class="modal-body text-start">
                                            Are You sure ?
                                        </div>
                                        <div class="modal-footer">
                                            {!! Form::open(['route' => ['admin.product.destroy', $product->id], 'method' => 'DELETE']) !!}
                                        
                                                {!! Form::button(__('Cancel'), ['class' => 'btn btn-secondary cancel', 'data-bs-dismiss' => 'modal']) !!}
                            
                                                {!! Form::submit(__('Delete'), ['class' => 'btn btn-primary delete']) !!}
                            
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

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
    $('#product-table').DataTable();
} );

</script>

@endsection