@extends('store.layouts.master')

@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Register</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Register</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="register-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-11">
                <h3>create account</h3>
                <div class="theme-card">
                    <form class="theme-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row row">
                            <div class="col-md-12  @error('name') mb-4 @enderror">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control @error('name') mb-2 @enderror" id="fname" placeholder="Full Name"
                                    required="" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col-md-12  @error('email') mb-4 @enderror">
                                <label for="email">email</label>
                                <input type="text" class="form-control @error('email') mb-2 @enderror" id="email" placeholder="Email" required="" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12  @error('password') mb-4 @enderror">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') mb-2 @enderror" id="password"
                                    placeholder="Enter your password" required="" name="password">
                                    @error('password')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="review">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter Confirm Password">    
                            </div>
                            <button class="btn btn-solid w-auto">create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
@endsection
