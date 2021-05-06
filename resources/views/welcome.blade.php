<!-- 
Author: Aubrey Nickerson
Date: May 15th, 2020
Program: welcome.blade.php
Project: Counselling Website
-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Counselling4Life - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
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
    
    <div class="hero-wrap" style="background-image: url('images/giantforest.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text w-100">
			  <h1>Counselling For Your Better Life</h1>
			  <p class="mb-4" style="font-size:30px ; font-family:verdana ; color:#87f3ff; visibility:hidden">You will be guided through the therapy process in a safe and caring atmosphere, fostering trust to help you make the changes you desire. </p>  
	          <p><a href="/about" class="btn btn-primary py-3 px-4">Read more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="intro aside-stretch d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-checklist"></span>
    					</div>
    					<div class="text">
    						<h2>100% Confidential</h2>
    						<p>Anything you tell me is confidential, with some specific exceptions that will be explained.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-1 d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-employee"></span>
    					</div>
    					<div class="text">
    						<h2>Qualified Counselor</h2>
    						<p>Liliana Bermudez is a Canadian Certified Counsellor (CCPA) with  over 14 years of experience in Human Development.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-2 d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-umbrella"></span>
    					</div>
    					<div class="text">
    						<h2>Individual Approach</h2>
    						<p>You will be guided through the therapy process in a safe and caring atmosphere.</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Services</span>
            <h2>How It Works</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>01</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-calendar"></span>
	    					</div>
    					</div>
    					<h2>Make Schedule</h2>
    					<p>Create an account to make an appointment with Liliana Bermudez. You can also email directly or make a phone call.</p>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>02</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-qa"></span>
	    					</div>
    					</div>
    					<h2>Start Discussion</h2>
  						<p>Psychotherapy sessions last approximately 30-50 minutes. Every effort will be made to start on time.</p>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>03</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-checklist"></span>
	    					</div>
    					</div>
    					<h2>Enjoy Plan</h2>
  						<p>You can expect a caring and collaborative experience that focuses on the delivery of outstanding care.</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="heading-section">
					<span class="subheading">Welcome to Counselling4Life</span>
					<br>
					<p>More often having an understanding of thoughts and feelings can make things more manageable allowing individuals to flourish. I believe in the power of cognition and the direct link between thought, emotions and behaviors.  This approach is called cognitive behavioral therapy. With time, individuals can gain back control of their life and make positive everlasting changes and flourish again.</p>
					<p>I believe in unconditional acceptance and genuineness in my therapeutic approach. My strengths include relationship difficulties, and adolescent behavioral issues. My specialty includes children and adolescents with depression, anxiety and anger issues. With my experience in helping youth, emerging adults, individuals, couples and families find peace and healing in their life struggles. I will help you  along the way to facilitate healing.
					<br> <br> - Liliana Bermudez M.A. CCC (Certified Canadian Counselor), The University of Texas San Antonio (UTSA)</p>
				</div>
			</div>
		</section>

		<section class="ftco-section bg-light">
    	<div class="container">
    		
          <div class="heading-section">
          	<span class="subheading">Price &amp; Plans</span>
          </div>
        <br>
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
      </div>
      <div class="container-fluid px-0 py-5 bg-black">
      	<div class="container">
      		<div class="row">
	          <div class="col-md-12">
		
	            <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
