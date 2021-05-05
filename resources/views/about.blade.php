<!-- 
Author: Aubrey Nickerson
Date: May 1st, 2020
Program: about.blade.php
Project: Counselling Website
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Counselling4Life - About</title>
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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/thenature.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				
					
	          <div class="heading-section py-md-5">
	          	<span class="subheading">Welcome to Counselling4Life</span>
              <br>
              <p>The therapeutic relationship is the foundation of a client’s well-being in therapy. It is my goal to build this relationship and empower my clients to live a fulfilled life. I help clients grow and change through a client-centered approach. However, I use a variety of techniques to guide and support clients through life’s challenges.</p>
	            <p>One of the greatest things about life is the opportunity we have to truly discover ourselves whether it is alone or through close relationships. However, sometimes we get lost and we may feel alone, anxious, depressed, stressed, unimportant, alone or feel disconnected from the world. As much as we try to reach for life it can sometimes feel strange to feel or explain what is going on with us but counseling gives you the opportunity to feel safe. Seeking out help makes you strong, and gives you power to face your fears. This process may feel intimidating, but I strive to make counseling fit each person's unique experience. 
I have experience over 15 years working with couples, individuals, and families on a diverse set of issues. Topics in which I specialize in are depression, anxiety,  trauma.  My goal as a counselor is to engage with you in ways that will be supportive and beneficial.</p>
              <p>My goal is to help you find a way to feel comfortable, and know how to self-care, accept and have coping skills. I will be there every step of the way to remind you that you are not alone by being compassionate, and nonjudgmental. <br> <br> - Liliana Bermudez M.A. CCC (Certified Canadian Counselor), the University of Texas San Antonio (UTSA)</p>
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
