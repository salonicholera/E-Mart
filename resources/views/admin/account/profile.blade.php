@extends('admin.layouts.master')

@section('title', __('Profile'))


@section('content')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Profile
                            <small>E-MART Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <div class="row">
        <div class="col-xl-12">
            <div class="card tab2-card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
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
                    <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade {{ ($errors->has('name') || $errors->has('email') || !$errors->any()) ? 'show active' : '' }}" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                            {!! Form::open(['route' => 'admin.account.profile.update', 'method' => 'PUT']) !!}
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
                                    {!! Form::submit(__('Save'), ['class' => 'btn btn-primary']) !!}
                                </div>
                            {!! Form::close() !!}
                        </div>
                        <div class="tab-pane fade {{ ($errors->has('current_password') || $errors->has('new_password') || $errors->has('confirm_password') ) ? 'active show' : '' }}" id="changepassword" role="tabpanel" aria-labelledby="changepassword-tab">
                            <div class="account-setting">
                                {!! Form::open(['route' => 'admin.account.password.update', 'method' => 'PUT']) !!}
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
                                        {!! Form::submit(__('Save'), ['class' => 'btn btn-primary']) !!}
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
@endsection