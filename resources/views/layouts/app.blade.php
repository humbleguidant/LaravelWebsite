<!-- 
Author: Aubrey Nickerson
Date May 3rd, 2020
Program: app.blade.php
Project: Counselling Website


This is the menu navigation bar of the website.
The menu options are Home, About, Services, Pricing,
Psychotherapy, Teletherapy, Login, and Schedule Appointment.
This page extends the login page, register page, reset password page,
verify email page, and schedule appointment page.
-->


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Counselling4Life') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="js/schedule.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/schedule.css">
    
</head>

    <!-- Display contact information at the top. -->
    <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
                    
                    <!-- Contact Number -->
						<p class="mb-0 phone pl-md-2">
							<span class="fa fa-phone mr-1"> (250) 826-9323</span>  	 
						</p>
					</div>
                    
                    <!-- Email --> 
					<div class="col-md-6 d-flex justify-content-md-end">					
			    	<p class="mb-0 d-flex">
						  <span class="fa fa-paper-plane mr-1" style='color:azure'> counseling4life.ca@gmail.com</span>
			    	</p>
		      </div>
				</div>
			</div>
		</div>
        
<!-- The body contains all of the content. -->
<body>

    <!-- This div displays the navigation bar with all of the menu options. -->
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
      <span class="navbar-brand">Counselling4Life</span>
      
      <!-- This button displays "Menu" if the users screen is too small and it will display the menu options. -->      
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
      
      <!-- This div displays all of the menu options in the navigation bar. -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              <!-- Go to home page. -->
	          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
              <!-- Go to about page. -->
	          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
              <!-- Go to services page. -->
	          <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
              <!-- Go to pricing page. -->
	          <li class="nav-item"><a href="/pricing" class="nav-link">Pricing</a></li>
              <!-- Go to psychotherapy page. -->
              <li class="nav-item"><a href="/psychotherapy" class="nav-link">Psychotherapy</a></li>
			  <!-- Go to tele-therapy page. -->
              <li class="nav-item"><a href="/teletherapy" class="nav-link">Tele-therapy</a></li>
              
              <!-- If the user is a guest then display the login and register menu option. -->
			  @guest
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                @if (Route::has('register'))
                  <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Schedule Appointment</a></li>
                @endif
              
              <!-- 
                   Otherwise if the user is signed in then display the name of the user,
                   which will redirect to schedule appointment, and display the logout option.     
               -->
              @else
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}<span class="caret"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </div>
                </li>
              @endguest
	        </ul>
	      </div>
	    </div>
	  </nav>
        
        <!-- 
             Display other html files in the yield content.
             The other html files will extend the content like
             @extends('layouts.app')
             @section('content') 
         -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
