@extends('layouts.app')

@section('content')

<!-- 
Author: Aubrey Nickerson
Date: May 14th, 2020
Program: email.blade.php
Project: Counselling Website

This is the page where the user requests to change password.
The user enters their email address and an email will be sent 
to the user. In the email, a link is provided for the user to 
access. They will be redirected to the reset.blade.php page to 
reset their password.
-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
            <!-- Header -->
                <div class="card-header">{{ __('Reset Password') }}</div>

               <!-- If the session is successful then carry on -->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                
                            <!-- Email Address -->    
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            <!-- An error will occur if email is empty or if the email does not exist in the system. -->
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit button -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
