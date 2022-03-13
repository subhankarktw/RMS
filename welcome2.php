<?php 
session_start();
include('session_check.php');
include('session_check.php');
if($_SESSION['bio']['usertype']=='admin')
header('location:admin.php?');
elseif($_SESSION['bio']['usertype']=='employee')
header('location:employee.php?');
$r=$_SESSION['bio']['id'];
?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>CC JITTERSS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<link rel="stylesheet" media="screen and (max-width:902px)" href="mobile-main.css">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">
			
				<!-- Header -->
					<header id="header" class="alt">
						
						<h1><a href="welcome2.html">CC JITTERSS</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="welcome2.php">Home</a></li>
											<li><a href="#">Food Ordering</a></li>
											<li><a href="upd/CCJITTERSS MENU BOOK (2).pdf" DOWNLOAD="CCJITTERSS MENU BOOK">Menus</a></li>
											<li><a href="feedback.php">Feedback/Complain</a></li>
											<li><a href="customer-profile.php?">Profile Settings</a></li>
                                            <li><a href="logout.php">Logout</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
				
						<div class="inner">
							<h2>CC JITTERSS</h2>
							<p>GOOD FOOD
								DELIVERY MOOD<br /></p>
							<ul class="actions special">
								<li><a href="#" class="button primary">ORDER FOOD</a></li>
								
							</ul>
						</div>
						<a href="#one" class="more scrolly">Learn More</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Why Should you Consider Us?</h2>
								<p>CC Jitterss food delivery service enables you to get exposed to your favourite food virtually and lets you order freely
									while sitting back home.</p>
							</header>
						
						</div>
						
						<div class="container">
							<div class="row " >
								<div class="mbbbb">
								</div>
								<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
									<div class="row " style="padding: 10px;">
										<div class="col-xl-12">
											<div class="card cssanimation fadeInBottom"> <a href="#" target="_blank">
													<div class="card-body">
														<div class="row" id="blockitems">
															<div class="col-sm-3 col-md-1 col-lg-1 col-xl-1" id="icons_section"> <i class="fas fa-file-invoice-dollar " style="font-size: 40px;" aria-hidden="true"></i> </div>
															<div class="col-sm-8 col-md-9 col-lg-11 col-xl-11" id="heading_section">
																<h6>No Overhead Charges
																</h6>
																<p>No commission on every order</p>
															</div>
														</div>
													</div>
												</a> </div>
										</div>
									</div>
								</div>
							
								<!--First Card End-->
								<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
									<div class="row" style="padding: 10px;">
										<div class="col-md-12">
											<div class="card cssanimation2 fadeInBottom2"> <a href="#" target="_blank">
													<div class="card-body">
														<div class="row" id="blockitems">
															<div class="col-sm-3 col-md-1 col-lg-1 col-xl-1" id="icons_section"> <i class="fa fa-mobile fa-lg" aria-hidden="true"></i> </div>
															<div class="col-sm-8 col-md-9 col-lg-11 col-xl-11" id="heading_section">
																<h6>Direct Access to Restaurant</h6>
																<p>Only CC Jitterss</p>
															</div>
														</div>
													</div>
												</a> </div>
										</div>
									</div>
								</div>
								<!--Second Card End-->
								<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
									<div class="row" style="padding: 10px;">
										<div class="col-md-12">
											<div class="card cssanimation3 fadeInBottom3" > <a href="#" target="_blank">
													<div class="card-body">
														<div class="row" id="blockitems" >
															<div class="col-sm-3 col-md-1 col-lg-1 col-xl-1" id="icons_section" > <i class="fas fa-desktop" aria-hidden="true"></i> </div>
															<div class="col-sm-8 col-md-9 col-lg-11 col-xl-11" id="heading_section">
																<h6 style="padding-left:20px;">Own Delivery App</h6>
																<p style="padding-left:20px;">With Real Time Ordering</p>
															</div>
														</div>
													</div>
												</a> </div>
										</div>
									</div>
								</div>
								</div>
								<!--Third Card End-->
							</div>
						</div>
						
							
							
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="img/fish fingers.jpeg" alt="" /></div><div class="content">
								<h2>Jitterss Fish Fingers</h2>
								<p>Get the taste of crunchy fish fingers garnished with sliced onion, lemon and coriander leaves exclusively on CC Jitterss.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="img/masaladhosa.jpeg" alt="" /></div><div class="content">
								<h2>Jitterss Masala Dosa</h2>
								<p>Get the taste of Jitterss Masala Dosa dipped in coconut Chutney and Sambar.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="img/panfriedmomo.jpeg" alt="" /></div><div class="content">
								<h2>Jitterss Pan Fired Momos</h2>
								<p>Jitterss Momos are one of our signature dishes, making it pan fried and by tossing it in gravy makes the game on. It's Yummy!!!</p>
							</div>
						</section>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2>How Does it Works?</h2>
								<p>CC JItterss Food Delivery service.</p>
							</header>
							<ul class="features">
								
								<li class="icon solid fa-laptop">
									<h3>Step 1:<br>
										Register youself on CC Jitterss</h3>
									<p>Its very simple. Just Signup with your name,email Id,city state and phone number...</p>
								</li>
								<li class="icon solid fa-sign-in-alt">
									<h3>Step 2:<br>
										Sign In										</h3>
									<p>Sign In into our website by filling email-id and your registered password.</p>
								</li>
								<li class="icon solid fa-shopping-cart">
									<h3>Step:3<br>Order</h3>
									<p>Click on Food Order in the menu. Add food in your cart.Proceed for checkout and choose payment options. Thats it. </p>
								</li>
								<li class="icon solid fa-receipt">
									<h3 >Step 3:<br>
										Pay Online or Offline
										</h3>
									<p>Just have a sit after ordering as we will then make your food get delivered on time.</p>
								</li>
								
							</ul>
						</div>
					</section>

			

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							
							<li><a href="https://www.facebook.com/ccjitterss" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/ccjittersscafe/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="mailto:ccjitterss21@gmail.com" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; CC JITTERSS</li><li> <a href="http://creativecommons.org/licenses/by/3.0/">Liscence</a></li>
							<li>Developed by : Debojyoti Das & Ronit Singh | Design:Html5Up</li><li> </li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>