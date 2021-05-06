@extends('layouts.app')

@section('content')

<!-- 
Author: Aubrey Nickerson
Date: May 13th, 2020
Program: login.blade.php
Project: Counselling Website

This is the login page. When the user logs in,
they are redirected to the request appointment page.
-->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
            <!-- Header -->
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                
                <!-- Call the login route which will log the user in. -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <!-- Email address -->
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    <!-- Display an error message if email is empty or if email does not exist on record. --> 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <!-- Password -->
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            <!-- Display an error message if password is empty. -->
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Remember me -->
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                            
                            <!-- Keep the user logged in next time they log onto the website, if they select the check box "Remember me". -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                    <!-- Login button. -->
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            <!-- If the user forgot their password then they can click the link to reset their password. -->
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
