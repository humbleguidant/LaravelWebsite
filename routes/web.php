<?php

/*
| Author: Aubrey Nickerson
| Date: May 5th, 2020
| Program: web.php
| Project: Counselling Website
*/

// Loads the index html page or welcome page
Route::get('/', function () {
    return view('welcome');
});

// Loads the about html page
Route::get('/about', function () {
    return view('about');
});

// Loads the services html page
Route::get('/services', function () {
    return view('services');
});

// Loads the pricing html page
Route::get('/pricing', function () {
    return view('pricing');
});

// Loads the psychotherapy html page
Route::get('/psychotherapy', function () {
    return view('psychotherapy');
});

// Loads the teletherapy html page
Route::get('/teletherapy', function () {
    return view('teletherapy');
});

// Verify that the user is logged in before accessing the home page.
// If not then return to the login page. 
Auth::routes(['verify' => true]);

// Return the home page if the user is verified.  
Route::get('/home', 'HomeController@index')->name('home');

// Sends an email to the counselor by calling the sendthemail function
// from the Request Appointment Controller. When the client 
// clicks the submit button, an email is sent to the counselor with the 
// appointment details. 
Route::post('/home/send', 'RequestAppointmentController@sendthemail');
