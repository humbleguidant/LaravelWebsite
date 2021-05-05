
@extends('layouts.app')
@section('content')
<!-- 
Author: Aubrey Nickerson
Date May 3rd, 2020
Program: home.blade.php
Project: Counselling Website
-->

<!-- Display the schedule appointment form -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <!-- Only a user with an account can access this page -->
                <div class="card-header">You are logged in!</div>
                
            <!-- If the session expired then display an alert message -->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <!-- If the session is successful then hide the red alert message.  -->
                    @if($message = Session::get('success'))
                        <div class="alert alert-success alert-block" role="alert">
                            <button type="button" class="close" data-dismiss="alert" style='color:green'>x</button>
                            <strong style='color:green'>{{ $message }}</strong>
                        </div>
                    @endif
                    
                    <!-- If there is an error then display the error message under the text field where the error occured. 
                    @if(count($errors) > 0)
                        <div class="alert alert danger">
                            <button type="button" class="close" data-dismiss="alert" style='color:red'>x</button>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li style='color:red'>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <!-- Display the schedule appointment form --> 
                    <form method="POST" action="{{ url('home/send') }}">
                        @csrf
                        
                        <!-- Display the schedule for desired appointment. Cant request an appointment in the past. -->
                        <div class="form-group row">
                            <label for="txtDate" class="col-md-4 col-form-label text-md-right">Desired Schedule</label>

                            <div class="col-md-6">
                                <input id="txtDate" type="date" name="schedule" /> 
                            </div>
                        </div>

                        
                        <!-- Display text field for phone number -->
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                            <div class="col-md-6">
                                <input type="number" id="phone" name="phone">
                            </div>
                            
                        </div>

                        <!-- Display text area for reason of requesting an appointment -->
                        <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right">How Can I Help?</label>

                            <div class="col-md-6">
                                <textarea id="message" name="message" class="form-control"> </textarea>
                            </div>
                        </div>
                        
                        <!-- Data in text fields gets handled by the RequestAppointment Controller -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" name="send" class="btn btn-primary" value="Send"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
