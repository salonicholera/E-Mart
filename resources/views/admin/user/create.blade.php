@extends('admin.layouts.master')
@section('title', 'Create User')
@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Create Users
                            <small>E-MART Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Users</li>
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
                    <h5>{{ __('Create User') }}</h5>
                </div>
                {!! Form::open(['route' => 'admin.user.store', 'method' => 'POST', 'class' => 'needs-validation user-add']) !!}
                    <div class="card-body">
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
                            {!! Form::label('email', __('Email') .' <span>*</span>', ['class' => 'col-xl-3 col-md-4'], false) !!}
                            <div class="col-xl-8 col-md-7">
                                {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                                @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('password', __('Password') .' <span>*</span>', ['class' => 'col-xl-3 col-md-4'], false) !!}
                            <div class="col-xl-8 col-md-7">
                                {!! Form::password('password', ['class' => 'form-control']) !!}
                                @error('password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('confirm_password', __('Confirm Password') .' <span>*</span>', ['class' => 'col-xl-3 col-md-4'], false) !!}
                            <div class="col-xl-8 col-md-7">
                                {!! Form::password('confirm_password', ['class' => 'form-control']) !!}
                                @error('confirm_password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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