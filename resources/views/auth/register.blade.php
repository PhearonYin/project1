@include('layouts.header')
@extends('layouts.app')

@section('content')
<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="assets/img/login.png" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Sign Up</h1>
                        <p class="account-subtitle">Enter details to create your account</p>

                        <!-- Laravel Form for Registration -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="username">Username <span class="login-danger">*</span></label>
                                <input id="username" class="form-control @error('username') is-invalid @enderror" type="text" name="username" value="{{ old('username') }}" required>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                            </div>

                            <div class="form-group">
                                <label for="email">Email <span class="login-danger">*</span></label>
                                <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="profile-views"><i class="fas fa-envelope"></i></span>
                            </div>

                            <div class="form-group">
                                <label for="password">Password <span class="login-danger">*</span></label>
                                <input id="password" class="form-control pass-input @error('password') is-invalid @enderror" type="password" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!-- Eye icon to toggle password visibility -->
                                <span class="profile-views feather-eye toggle-password" onclick="togglePasswordVisibility('password')"></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="password-confirm">Confirm Password <span class="login-danger">*</span></label>
                                <input id="password-confirm" class="form-control pass-confirm" type="password" name="password_confirmation" required>
                                <!-- Eye icon to toggle password visibility -->
                                <span class="profile-views feather-eye toggle-password" onclick="togglePasswordVisibility('password-confirm')"></span>
                            </div>
                            

                            <div class="dont-have">
                                Already Registered? <a href="{{ route('login') }}">Login</a>
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block" type="submit">Register</button>
                            </div>
                        </form>

                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or">or</span>
                        </div>

                        <div class="social-login">
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('layouts.footer')