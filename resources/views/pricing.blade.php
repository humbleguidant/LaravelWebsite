<!-- 
Author: Aubrey Nickerson
Date: May 1st, 2020
Program: pricing.blade.php
Project: Counselling Website

This is the pricing page. It includes
details of how much a counselling session costs.
Each conselling session can range from 75 to 
300 dollars. 
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Counselling4Life - Pricing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Add Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

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
					<div class="col-md-6 d-flex justify-content-md-end">	
                    
                    <!-- Email -->
			    		<p class="mb-0 d-flex">
							<span class="fa fa-paper-plane mr-1" style='color:azure'> counseling4life.ca@gmail.com</span>
			    		</p>
		        	</div>
				</div>
			</div>
		</div>
    
    
    <!-- The navbar contains all of the menu options. -->
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
              
              <!-- If the user is signed in then display the first name and last name of the user
                 which will redirect to the schedule appointment page-->
			  @if (Route::has('login'))
                @auth
                  <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</a></li>
                  
                  <!-- 
                       Otherwise display the login and create account option(schedule appointment)     
                   -->
                @else
                  <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>

                  @if (Route::has('register'))
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Schedule Appointment</a></li>
                  @endif
                @endauth  
              @endif
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/morefarms.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Pricing <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Pricing &amp; Plans</h1>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Price &amp; Plans</span>
			<p>Psychotherapy sessions last approximately 30-50 minutes.  Every effort will be made to start on time.  
Standing appointments can be arranged.  My fees are as follows:</p>
          </div>
        </div>
    		<div class="row">
	          	<div class="block-7 w-50">
	            	<div class="text-center">
		            	<span class="price"><sup>$</sup> <span class="number">150</span></span>
		           		<span class="excerpt d-block">Initial Evaluation (One Hour)</span>
		            	
	            	</div>
	          	</div>
	       	 	
	            <div class="block-7 w-50">
	            	<div class="text-center">
		            	<span class="price"><sup>$</sup> <span class="number">140</span> <sub>/per session</sub></span>
		            	<span class="excerpt d-block">Individual Psychotherapy</span>
		            	
	            	</div>
	          	</div>
	        
	          <div class="block-7 w-50">
	            	<div class="text-center">
		            	<span class="price"><sup>$</sup> <span class="number">150</span> <sub>/per session</sub></span>
		            	<span class="excerpt d-block">Marital or Family Therapy</span>
		
	            	</div>
			  </div>
			  
			  <div class="block-7 w-50">
	            	<div class="text-center">
		            	<span class="price"><sup>$</sup> <span class="number">300</span> <sub>/per session</sub></span>
		           		<span class="excerpt d-block">Crises/Emergency Psychotherapy</span>
		            	
	            	</div>
	          	</div>
	       	 	
	            <div class="block-7 w-50">
	            	<div class="text-center">
		            	<span class="price"><sup>$</sup> <span class="number">50</span> <sub>/per 30 minute segment</sub></span>
		            	<span class="excerpt d-block">Telephone Consultation</span>
		            	
	            	</div>
	          	</div>
	        
	          <div class="block-7 w-50">
	            	<div class="text-center">
		            	<span class="price"><sup>$</sup> <span class="number">150-200</span> <sub>/per hour</sub></span>
		            	<span class="excerpt d-block">Other Professional Services</span>
		
	            	</div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section>

    

    <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">Counselling4life.ca</a></h2>
              <p>Counseling for children, teens and families to live a better life. We provide a caring collaborative counseling experience that focuses on the delivery of outstanding care.</p>
			  <p>We provide affordable rates we believe everyone has the right to heal!</p>	
			</div>
          </div>
          
          
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-phone"></span><span class="text">(250) 826-9323</span></li>
	                <li><span class="icon fa fa-paper-plane pr-4"></span><span class="text">counseling4life.ca@gmail.com</span></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Import scripts --> 
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
