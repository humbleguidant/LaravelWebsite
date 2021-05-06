<!-- 
Author: Aubrey Nickerson
Date: May 1st, 2020
Program: services.blade.php
Project: Counselling Website
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Counselling4Life - Services</title>
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
              
              <!-- 
                If the user is signed in then display the first name and last name of the user
                 which will redirect to the schedule appointment page
              -->
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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/farmers.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Services</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">	
	          <div class="heading-section py-md-5">
				  <span class="subheading">How It Works</span>
				  <br>
	            <p>Individual psychotherapy allows for focused attention on the unique circumstances that
					each person brings to the clinic.  After an initial
					assessment is made, particular solutions are
					identified, then put into play. Such solutions
					may include understanding the nature of
					habitual behaviors (and how to change them),
					or the use of basic techniques to reduce
					anxiety, or reframe negative thoughts.  It also
					encourages, through self-refection, the
					recognition that even everyday thoughts and
					feelings can become useful building blocks for
					self-development.  After all, we are adaptable
					creatures of habit, which allows mastery of both
					the ability to change when needed, and equally,
					to develop comfortable, functional routines that
					you can rely on in familiar situations.</p>
	            <p>Therapy can also involve learning more about
					ways to balance the interaction of thoughts
					with emotions.  Many find it very helpful to
					improve mastery over powerful emotions.  Some
					find that they need to learn the best way for
					them to recover from psychological wounds.
					Others seek to discover ways to interrupt their
					recurring patterns of  self-defeating emotions,
					maladaptive behaviors, or failed relationships.</p>
	          </div>
			</div>
	</section>

    <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Areas of Specialization and Interest</span>
            <h2 class="mb-3">Depression and Anxiety</h2>
          </div>
        </div>
				<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1">Relationship Difficulties</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2">Developing Self Esteem</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3">Family Problems</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4">Feeling "Stuck"</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5">Individual Psychotherapy</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6">Stress Disorders</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7">Trauma Recovery</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-8">Problems with Self-Regulation</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	<div class="img" style="background-image: url(images/forestsky_2.jpg);"></div>
						  	<h3><a href="#">Relationship Difficulties</a></h3>
							  <li>Trust</li>
							  <li>Insecure Attachments</li>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	<div class="img" style="background-image: url(images/clouds.jpg);"></div>
						  	<h3><a href="#">Developing Self Esteem</a></h3>
							  <li>Self Confidence</li>
							  <li>Assertiveness Skills</li>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	<div class="img" style="background-image: url(images/lakewanaka.jpg);"></div>
						  	<h3><a href="#">Family Problems</a></h3>
						  	  <li>Communication Skills</li>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	<div class="img" style="background-image: url(images/bridgeisover.jpg);"></div>
						  	<h3><a href="#">Feeling "Stuck"</a></h3>
							  <li>Self-Defeating Behaviors</li>
							  <li>Repetitive Behaviors or Life Patterns</li>
							  <li>Setting Boundaries</li>
							  <li>Seeking Alternative Solutions</li>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	<div class="img" style="background-image: url(images/road.jpg);"></div>
						  	<h3><a href="#">Individual Psychotherapy</a></h3>
								<li>Self Exploration</li>
								<li>Personal Growth & Development</li>
								<li>Increased Self Awareness</li>
								<li>Deteriorated Communication</li>
								<li>Unclear Boundaries and Roles</li>
								<li>Generational Transitions</li>
								<li>Interpersonal Conflicts</li>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url(images/france.jpg);"></div>
						  	<h3><a href="#">Stress Disorders</a></h3>
								<li>Workplace & School Stress</li>
								<li>Adjusting to Chronic Illness or Disability</li>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-7">
						  	<div class="img" style="background-image: url(images/anotherlake.jpg);"></div>
						  	<h3><a href="#">Trauma Recovery</a></h3>
								<li>Traumatic Loss & Grief Resolution</li>
								<li>Childhood Abuse/Neglect</li>
								<li>Post Traumatic Stress Disorder (PTSD)</li>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-8">
						  	<div class="img" style="background-image: url(images/fallcolors.jpg);"></div>
						  	<h3><a href="#">Problems with Self-Regulation</a></h3>
						  	<li>Impulsive Behaviors</li>
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
