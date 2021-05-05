<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Counselling4Life - Psychotherapy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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

  		<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<span class="fa fa-phone mr-1"> (250) 826-9323</span>  	 
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">					
			    		<p class="mb-0 d-flex">
							<span class="fa fa-paper-plane mr-1" style='color:azure'> counseling4life.ca@gmail.com</span>
			    		</p>
		        	</div>
				</div>
			</div>
		</div>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <span class="navbar-brand">Counselling4Life</span>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
			  <li class="nav-item"><a href="/pricing" class="nav-link">Pricing</a></li>
			  <li class="nav-item"><a href="/psychotherapy" class="nav-link">Psychotherapy</a></li>
			  <li class="nav-item"><a href="/teletherapy" class="nav-link">Tele-therapy</a></li>
			  @if (Route::has('login'))
                @auth
                  <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</a></li>
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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/sea.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Psychotherapy <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Psychotherapy</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				
					
	          <div class="heading-section py-md-5">
                  <span class="subheading">Psychotherapy</span>
                  <br>
	            <p>Psychotherapy begins as a conversation between you and myself.  Initially you will be asked questions
about the problems you are having, about your personal and family history, about your current living
situation, and about any other information that will help me to determine a diagnosis, treatment goals,
and a treatment plan; this process may take more than one session.  Treatment goals and plans may
change as psychotherapy progresses, and we will discuss these changes as they occur.</p>
                <p>Certain techniques are also commonly used in psychotherapy.  These include interpretation, identification
of repetitive behavior patterns, self-monitoring, journal-keeping, integration of thoughts and feelings,
emotional self-regulation, visualization, cognitive reframing, relaxation training, and stress management.  
You have the right to refuse any suggestion, or refuse to try any technique if you so choose.  Successful
psychotherapy will require an active effort on your part during the session, and on your own between
sessions.</p>
                <p>Psychotherapy can have benefits and risks.  Therapy may sometimes result in recalling painful memories, or
experiencing difficult, upsetting emotions.  Making changes in your attitudes and behaviors can lead to
unfamiliar feelings or experiences, and may disrupt relationships that you are in.  Psychotherapy has also
been shown to have many benefits, which may include significant reductions in feelings of distress and
improved relationships. I have a Masters in Counseling from the University of Texas at San Antonio. I have training and experience in working individually
with adults and adolescents, as well as couples and families</p>
              </div>

              <div class="heading-section py-md-5">
                  <span class="subheading">Contacting Me</span>
                  <br>
	            <p>You may reach me by the office phone 24 hours a day.  During clinic hours, I may not be able to come to
the phone immediately, and will return calls as soon as possible.  If for some reason you cannot reach me,
do not hesitate to seek care at an emergency room, or by contacting your family physician.</p>
                
              </div>

              <div class="heading-section py-md-5">
                  <span class="subheading">Confidentiality</span>
                  <br>
	            <p>Anything you tell me is confidential, with some specific exceptions that will be explained.  I will not tell
anyone else what you have told me, discuss your case in any way that identifies you, acknowledge that I
have you as a patient, or release your clinic records.  You can give me permission to release information
about you to specific people or institutions by filling out an Authorization Form.</p>
                <strong><p>These are the exceptions, or limits, to your legal right to confidentiality and the privacy of your records.  
Under the following conditions, I am legally permitted or required to disclose information without your
consent or Authorization:</p></strong>
<br>
                <strong><ol>
                    <li> If I have been given information regarding the physical abuse, sexual abuse, or neglect of a child
(under the age of 18), an elderly person, or a disabled person, I am legally obligated to report this to
either Child Protective Services or Adult Protective Services within 48 hours.</li>
                    <br>
                    <li> In emergency situations, where there may be imminent danger of physical harm to yourself, the
appropriate medical or police personnel may be contacted without your consent.</li>
                    <br>
                    <li> Records will be released in response to subpoenas from the Court.  Every attempt will be made to
promptly notify you of the subpoena and the subsequent release of your records to the Court, so that you
can discuss your rights about your record with your attorney.</li>
                </ol>
                </strong>
                <br>
                <p>If a government agency is requesting information for health oversight activities, I may be required to
provide it for them.</p>
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