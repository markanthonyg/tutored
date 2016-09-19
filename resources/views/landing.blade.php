
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tutor Ed</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="{{asset('favicon.ico')}}">

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="fh5co-wrap">
		<header id="fh5co-header">
			<div class="container">
				<nav class="fh5co-main-nav">
					<ul>
						<li class="fh5co-active"><a href="#"><span>Home</span></a></li>
						<li class="fh5co-active"><a href="contact"><span>Contact</span></a></li>
						<!--
						<li><a href="services.html"><span>Services</span></a></li>
						<li><a href="about.html"><span>About</span></a></li>
						<li><a href="contact.html"><span>Contact</span></a></li>
						-->
					</ul>
				</nav>
			</div>
		</header>

		<div class="fh5co-hero" style="background-image: url(images/hero_1.jpg);" data-stellar-background-ratio="0.5">
			<div></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">Learn English</h1>
							<p>The easy way</p>
							<br/>
							<a href="#schedule" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-menu-down"></span>  Schedule Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-section">
			<div class="container">
				<div class="row">
					<div id="schedule" class="col-md-5">
						<h2>Set Your Appointment </h2>
						{!! Form::open(['action' => 'HomeController@showLanding']) !!}

						{!! Form::label('Your Name') !!}
						{!! Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Your name')) !!}

						{!! Form::label('Your E-mail Address') !!}
						{!! Form::text('email', null, array('required', 'class'=>'form-control', 'placeholder'=>'Your e-mail address')) !!}

						{!! Form::label('Phone Number') !!}
						{!! Form::text('phone', null, array('required', 'class'=>'form-control', 'placeholder'=>'Your Phone')) !!}

						{!! Form::submit('Submit!', array('class'=>'btn btn-primary')) !!}
						{!! Form::close() !!}
					</div>
					<div class="col-md-7">
						<img src="{{asset('images/hero_1.jpg')}}" alt="Image not available" class="img-responsive">
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-parallax" style="background-image: url(images/hero_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">Keep it simple</h1>
							<p>We'll take you places</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-section">
			<div class="container">

				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-strategy"></i>
							</div>
							<div class="fh5co-text">
								<h3>Strategy</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-telescope"></i>
							</div>
							<div class="fh5co-text">
								<h3>Explore</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-circle-compass"></i>
							</div>
							<div class="fh5co-text">
								<h3>Direction</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-tools"></i>
							</div>
							<div class="fh5co-text">
								<h3>Expertise</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>

		<!--
		<div class="fh5co-parallax" style="background-image: url(images/hero_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">Less is more</h1>
							<p>Made with love by the fine folks at <a href="http://freehtml5.co">FreeHTML5.co</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-section">
			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<h2>Made With Love</h2>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p>
					</div>
					<div class="col-md-6">
						<p>She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
					</div>
				</div>

			</div>
		</div>
	-->
	</div>
<!-- END fh5co-wrap -->


	<footer id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>About Us</h3>
					<p>She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains.</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="#">Blog</a></li>
						<li><a href="contact">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h3>Follow Us</h3>
					<ul class="fh5co-social">
						<li><a href="#"><i class="icon-twitter"></i> <span>Twitter</span></a></li>
						<li><a href="#"><i class="icon-facebook"></i> <span>Facebook</span></a></li>
						<li><a href="#"><i class="icon-instagram"></i> <span>Instagram</span></a></li>
						<li><a href="#"><i class="icon-google"></i> <span>Google Plus</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar -->
	<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
	<!-- MAIN JS -->
	<script src="{{asset('js/main.js')}}"></script>

	</body>
</html>
