@extends('admin.layouts.master')
@section('title', 'Create Product')
@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Create Product
                            <small>E-MART Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Create Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <div class="row">
        <div class="col-sm-12">
            <div class="card tab2-card">
                <div class="card-header">
                    <h5>{{ __('Create Product') }}</h5>
                </div>
                {!! Form::open(['route' => 'admin.product.store', 'method' => 'POST', 'class' => 'needs-validation user-add', 'files' => true]) !!}
                    <div class="card-body">
                        <div class="form-group row">
                            {!! Form::label('category_id', __('Category') .' <span>*</span>', ['class' => 'col-xl-3 col-md-4'], false) !!}
                            <div class="col-xl-8 col-md-7">
                                {!! Form::select('category_id', $categories, null,['class' => 'form-control']) !!}
                                @error('category_id')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('name', __('Name') .' <span>*</span>', ['class' => 'col-xl-3 col-md-4'], false) !!}
                            <div class="col-xl-8 col-md-7">
                                {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                                @error('name')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('description', __('Description') .' <span>*</span>', ['class' => 'col-xl-3 col-md-4'], false) !!}
                            <div class="col-xl-8 col-md-7">
                                {!! Form::textarea('description', old('description'), ['class' => 'form-control']) !!}
                                @error('description')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('image', __('Image') .' <span>*</span>', ['class' => 'col-xl-3 col-md-4'], false) !!}
                            <div class="col-xl-8 col-md-7">
                                {!! Form::file('image', ['class' => 'form-control']) !!}
                                @error('image')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('price', __('Price') .' <span>*</span>', ['class' => 'col-xl-3 col-md-4'], false) !!}
                            <div class="col-xl-8 col-md-7">
                                {!! Form::number('price', old('price'), ['class' => 'form-control']) !!}
                                @error('price')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('quantity', __('Quantity') .' <span>*</span>', ['class' => 'col-xl-3 col-md-4'], false) !!}
                            <div class="col-xl-8 col-md-7">
                                {!! Form::number('quantity', old('quantity'), ['class' => 'form-control']) !!}
                                @error('quantity')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('status', __('Status'), ['class' => 'col-xl-3 col-md-4']) !!}
                            <div class="col-xl-8 col-md-7">
                                {!! Form::select('status', ['1' => 'Active', '0' => 'Deactive'], 1,['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        {!! Form::submit(__('Save'), ['class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

</div>
@endsection