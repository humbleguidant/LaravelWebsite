<!-- 
Author: Aubrey Nickerson
Date: May 11th, 2020
Program: appointment.blade.php
Project: Counselling Website

This is an email form that gets sent to the counselor
when a client wants to request an appointment. It provides
the clients details such as the name, email, phone, day of
appointment, and additional comments. 
-->


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
            <!-- Title of form -->
                <div class="card-header">New Appointment Request</div>
                <br>
                <div class="card-body">
                    
                    <!-- Clients first name and last name -->
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Name: <strong>{{ $user->firstname }} {{ $user->lastname }}</strong></label>
                    </div>
                    <br>
                    <!-- Clients email -->
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Email: <strong>{{ $user->email }}</strong></label>
                    </div>
                    <br>
                    <!-- Clients phone -->
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Phone Number: <strong>{{ $data['phone'] }}</strong></label>
                    </div>
                    <br>
                    <!-- Day of requested appointment -->
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Desired Schedule: <strong>{{ $data['schedule'] }}</strong></label>
                    </div>
                    <br>
                    <!-- Clients Additional Comments -->
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Additional Comments:</label>
                        <div class="col-md-6">
                            <p><strong>{{ $data['message'] }}</strong></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
