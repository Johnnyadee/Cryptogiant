<!DOCTYPE html>
<html {{ str_replace('_', '-', app()->getLocale()) }} class="js">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Crypto Giant is a Powerful and Reliable Bitcoin Crypto Currency Wallet and Transactional Platform for Users Around the World">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="shortcut icon" href="{{ asset('assets/images') }}/favicon.png">
		<!-- Site Title  -->
		<title>Crypto Giant - Bitcoin Crypto Currency Wallet</title>
		<!-- Vendor Bundle CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css') }}/vendor.bundle.css" >
		<!-- Custom styles for this template -->
		<link href="{{ asset('assets/css') }}/style.css" rel="stylesheet">
		<link href="{{ asset('assets/css') }}/theme.css" rel="stylesheet">

	</head>
	<body>

		<!-- Header -->
		<header class="site-header header-s1 is-sticky">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<ul class="social">
								<li><a href="#"><em class="fa fa-facebook"></em></a></li>
								<li><a href="#"><em class="fa fa-twitter"></em></a></li>
								<li><a href="#"><em class="fa fa-linkedin"></em></a></li>
								<li><a href="#"><em class="fa fa-google-plus"></em></a></li>
							</ul>
						</div>
						<div class="col-sm-6 al-right">
							<ul class="top-nav">
								<li><a href="{{ url('faq-and-support') }}">Help</a></li>
								<li><a href="{{ url('faq-and-support') }}">Support</a></li>
								<li><a href="{{ url('login') }}">Login</a></li>
								<li><a href="{{ url('register') }}">Register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Navbar -->
			<div class="navbar navbar-primary">
				<div class="container relative">
					<!-- Logo -->
					<a class="navbar-brand" href="/">
						<img class="logo logo-dark" alt="logo" src="{{ asset('assets/images') }}/logo.png">
						<img class="logo logo-light" alt="logo" src="{{ asset('assets/images') }}/logo_white.png">
					</a>
					<!-- #end Logo -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="quote-btn"><a class="btn" href="{{ url('register') }}"><span>get started</span></a></div>
					</div>
					<!-- MainNav -->
					<nav class="navbar-collapse collapse" id="mainnav">
						<ul class="nav navbar-nav">
							<li><a href="/">Home</a>
							<li><a href="{{ url('about-crypto-gaint') }}">About</a>
                            <li><a href="{{ url('how-it-works') }}">How it Works</a></li>
                            <li><a href="{{ url('gaint-coin-features') }}">Features</a></li>
							<li><a href="{{ url('buy-and-sell') }}">buy &amp; Sell</a></li>
							<li><a href="{{ url('contact') }}">Contact</a></li>
							<li class="quote-btn hidden-xs hidden-sm"><a class="btn" href="{{ url('register') }}">get started</a></li>
						</ul>
					</nav>
					<!-- #end MainNav -->
				</div>
			</div>
			<!-- End Navbar -->
			<!-- Banner/Slider -->

			<!-- End Banner/Slider -->
		</header>

        <main>
            {{ $slot }}
        </main>



        <div class="footer-section section section-pad-md light bg-footer">
			<div class="imagebg footerbg">
				<img src="{{ asset('assets/images') }}/footer-bg.png" alt="footer-bg">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 wgs-box res-m-bttm-lg">
						<!-- Each Widget -->
						<div class="wgs-footer wgs-menu">
							<h5 class="wgs-title ucap">Services</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href="#">Buy Bitcoins</a></li>
									<li><a href="#">Buy Ethereum</a></li>
									<li><a href="#">Sell Bitcoins</a></li>
									<li><a href="#">Bitcoin Trading</a></li>
									<li><a href="#">Margin Trading</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="col-md-4 col-sm-6 wgs-box res-m-bttm-lg">
						<!-- Each Widget -->
						<div class="wgs-footer wgs-menu">
							<h5 class="wgs-title ucap">Information</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href="#">Payment Options</a></li>
									<li><a href="#">Fee Schedule</a></li>
									<li><a href="#">Getting Started</a></li>
									<li><a href="#">Identity Verification Guide</a></li>
									<li><a href="#">Card Verification Guide</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>

					<div class="col-md-4 col-sm-6 wgs-box res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs-footer wgs-contact">
							<h5 class="wgs-title ucap">get in touch</h5>
							<div class="wgs-content">
								<ul class="wgs-contact-list">
									<li><span class="pe pe-7s-map-marker"></span>Nigeria</li>
									<li><span class="pe pe-7s-call"></span>Telephone : +234 70 1830 5383</li>
									<li><span class="pe pe-7s-global"></span>Email : <a href="mailto:info@cryptogiant.com">info@cryptogiant.com</a> <br/>Web : <a href="http://example.com">www.example.com</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Section -->

		<!-- Copyright -->
		<div class="copyright light">
			<div class="container">
				<div class="row">
					<div class="site-copy col-sm-7">
						<p>Copyright &copy; 2021 Crypto Giant. Designed & Developed by <a href="https://arome.dev">Arome</a></p>
					</div>
					<div class="col-sm-5 text-right mobile-left">
						<ul class="social">
							<li><a href="#"><em class="fa fa-facebook"></em></a></li>
							<li><a href="#"><em class="fa fa-twitter"></em></a></li>
							<li><a href="#"><em class="fa fa-linkedin"></em></a></li>
							<li><a href="#"><em class="fa fa-google-plus"></em></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Copyright -->

		<!-- Preloader !remove please if you do not want -->
		<div id="preloader"><div id="status">&nbsp;</div></div>
		<!-- Preloader End -->

		<!-- JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<div class="pubble-app" data-app-id="94863" data-app-identifier="94863"></div>
<script type="text/javascript" src="https://cdn.chatify.com/javascript/loader.js" defer></script>
		<script src="{{ asset('assets/js') }}/jquery.bundle.js"></script>
		<script src="{{ asset('assets/js') }}/script.js"></script>
		<script>
		  (function(b,i,t,C,O,I,N) {
			window.addEventListener('load',function() {
			  if(b.getElementById(C))return;
			  I=b.createElement(i),N=b.getElementsByTagName(i)[0];
			  I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
			},false)
		  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
		</script>
	</body>
</html>
