@extends('store.layouts.master')

@section('content')

<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Account</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Account</li>
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
                            <h2>My Account</h2>
                        </div>
                        <div>
                            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link {{ ($errors->has('name') || $errors->has('email') || !$errors->any()) ? 'active' : '' }}" id="top-profile-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true">
                                        <i data-feather="user" class="me-2"></i>{{ __('Profile') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ ($errors->has('current_password') || $errors->has('new_password') || $errors->has('confirm_password') ) ? 'active' : '' }}" id="changepassword-tab" data-bs-toggle="tab" href="#changepassword" role="tab" aria-controls="changepassword" aria-selected="false">
                                        <i data-feather="settings" class="me-2"></i>{{ __('Change Password') }}
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content mt-3" id="top-tabContent">
                                <div class="tab-pane fade {{ ($errors->has('name') || $errors->has('email') || !$errors->any()) ? 'show active' : '' }}" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                    {!! Form::open(['route' => 'account.profile.update', 'method' => 'PUT']) !!}
                                        <div class="form-group row">
                                            {!! Form::label('name', __('Fullname'), ['class' => 'col-xl-2 col-md-3']) !!}
                                            <div class="col-xl-7 col-md-8">
                                                {!! Form::text('name', Auth::user()->name ? Auth::user()->name : old('name'), ['class' => 'form-control']) !!}
                                                @error('name')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror   
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('email', __('Email'), ['class' => 'col-xl-2 col-md-3']) !!}
                                            <div class="col-xl-7 col-md-8">
                                                {!! Form::email('email', Auth::user()->email ? Auth::user()->email : old('email'), ['class' => 'form-control']) !!}
                                                @error('email')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            {!! Form::submit(__('Save'), ['class' => 'btn btn-solid']) !!}
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                                <div class="tab-pane fade {{ ($errors->has('current_password') || $errors->has('new_password') || $errors->has('confirm_password') ) ? 'active show' : '' }}" id="changepassword" role="tabpanel" aria-labelledby="changepassword-tab">
                                    <div class="account-setting">
                                        {!! Form::open(['route' => 'account.password.update', 'method' => 'PUT']) !!}
                                            <div class="form-group row">
                                                {!! Form::label('current_password', __('Current Password'), ['class' => 'col-xl-2 col-md-3']) !!}
                                                <div class="col-xl-7 col-md-8">
                                                    {!! Form::password('current_password', ['class' => 'form-control']) !!}
                                                    @error('current_password')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                {!! Form::label('new_password', __('New Password'), ['class' => 'col-xl-2 col-md-3']) !!}
                                                <div class="col-xl-7 col-md-8">
                                                    {!! Form::password('new_password', ['class' => 'form-control']) !!}
                                                    @error('new_password')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                {!! Form::label('confirm_password', __('Confirm Password'), ['class' => 'col-xl-2 col-md-3']) !!}
                                                <div class="col-xl-7 col-md-8">
                                                    {!! Form::password('confirm_password', ['class' => 'form-control']) !!}
                                                    @error('confirm_password')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-footer">
                                                {!! Form::submit(__('Save'), ['class' => 'btn btn-solid']) !!}
                                            </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection