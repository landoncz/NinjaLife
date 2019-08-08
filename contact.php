<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Ninja Life - Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="Ninja Life - Contact Us. Pensacola ninja obstacle course training gym, special events, and birthday parties">
	<meta name="author" content="Landon Zabcik, Scott Fredrickson">
	<meta name="Subject" content="Fitnees, Training, Sports, Children, School, After School Program, Ninja Warrior">
	<meta name="Classification" content="Pensacola Ninja Warrior Fitness, Pensacola Obstacle Course, Pensacola Gym, Pensacola Training Facility, Pensacola After School Program">
	<meta name="Geography" content="Pensacola, FL">
	<meta name="Language" content="English">
	<meta name="Designer" content="Landon Zabcik">
	<meta name="Publisher" content="Landon Zabcik">
	<meta name="Revisit-After" content="14 Days">
	<meta name="Robots" content="all">
	<meta http-equiv="imagetoolbar" content="no">
	<meta http-equiv="Pragma" content="no-cache">
	<meta name="zipcode" content="32504">
	<meta name="city" content="Pensacola, Escambia, Santa Rosa, Gulf Breeze, Cantonment, Molino, Pace, Milton, Navarre, Pensacola Beach, Destin, Daphne, Orange Beach">
	<meta name="State" content="Florida, FL">
	<meta name="country" content="USA, United States, United States Of America">
	<meta name="MSSmartTagsPreventParsing" content="TRUE">
	<meta http-equiv="Robots" content="index, follow">
	<meta http-equiv="Authors" content="Landon Zabcik">
	<!--<link rel="shortcut icon" href="/favicon/favicon.ico">-->
	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<meta name="keywords" content="american ninja warrior, obstacle course, after school programs, ninja obstacle course, birthday party places, birthday party" />
</head>

<body>
	<section class="main-top-section text-center">
		<nav class="navbar navbar-expand-lg navbar-light navbar-custom navbar-ninja">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo-image-only-small.png" class="mx-2" />
				</a>
				<a class="navbar-brand" href="index.html">
					<img src="images/logo-words-only-small.png" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse pull-xs-right justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav mt-2 mt-md-0">
						<li class="nav-item mx-2">
							<a class="nav-link" href="index.html">
								<strong>Home</strong>
							</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="about_us.html">
								<strong>About Us</strong>
							</a>
						</li>
						<li class="nav-item active mx-2">
							<a class="nav-link" href="contact.php">
								<strong>Contact</strong>
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="news.html">
								<strong>News</strong>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<p class="headerAddress"><a href="https://goo.gl/maps/nR9acvSA6AuE5bFx7" target="_blank" title="Ninja Life Gym">1211 Rainbow Ave</a></p>
		</nav>
	</section>

	<section class="contact-1 bg-light">
		<!-- Success Message display for contact form -->
		<div id="success" class="text-center">
			<?php if (intval($_GET["success"]) == 1) echo "<div class='alert alert-success'>Thank you, your message was sent successfully</div>"; ?>
		</div>

		<div id="map"></div>
		<script src="js/maps.js"></script>
		<!--YOU MUST REPLACE WITH YOUR OWN API KEY FOR THE MAP TO WORK-->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbhfKyI8eTHrEMlHYpqZSxbvuCiA28DjQ&callback=initMap">
		</script>

		<div class="container">
			<div class="row contact-details">
				<div class="col-sm-8 text-center text-md-left mb-4">
					<h3>Get in Touch with Us</h3>
					<form name="sentMessage" id="contactForm" action="bin/contact_send.php" method="POST" novalidate class="contact-form mt-4">
						<div class="row">
							<div class="col-md-5">
								<input type="text" class="form-control-custom mb-4" name="name" id="name" placeholder="Your Name" required data-validation-required-message="Please enter your name.">
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control-custom mb-4" name="email" id="email" placeholder="Your Email Address" required data-validation-required-message="Please enter your email address.">
							</div>
							<br />
						</div>
						<div class="row">
							<div class="col-md-10">
								<textarea class="form-control-custom mb-4" rows="3" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" placeholder="Your Message"></textarea>
								<br />
								<button type="submit" class="btn btn-danger btn-lg mb-4">Send Message</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-4 text-center text-md-left">
					<h3>Contact</h3>
					<h4 class="pt-4">Email</h4>
					<p><a href='mailto:info@ninja-life.com?Subject=Contact'>info@ninja-life.com</a></p>
					<h4 class="pt-2">Phone</h4>
					<p>(850) 287-1717</p>
					<h4 class="pt-2">Address</h4>
					<p>1211 Rainbow Ave, Pensacola, FL 32505
						<br /> United States</p>
					<ul class="social">
						<li>
							<a href="https://www.facebook.com/NinjaLifePensacola/" title="Facebook" class="fa fa-facebook"></a>
						</li>
						<li>
							<a href="#" title="Twitter" class="fa fa-twitter"></a>
						</li>
						<li>
							<a href="https://www.instagram.com/ninjalifepensacola/" title="Instagram" class="fa fa-instagram"></a>
						</li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer-4 bg-secondary">
		<div class="container">
			<div class="row mb-5 text-center text-md-left">
				<div class="col-md-3 col-lg-4 mb-3">
					<h3 class="float-left">Pensacola Obstacle Course Training Facility</h3>
					<img class="float-left" src="images/logo-small_white_circle.png" alt="Ninja Life">
				</div>
				<div class="col-md-3 offset-lg-2 col-lg-2 pt-2">
					<h5>Training</h5>
					<ul class="nav-footer">
						<li class="nav-item">
							<a class="nav-link" href="memberships.html">Memberships</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="classes.html">Classes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="coaches.html">Coaches</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="our_history.html">Our History</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="careers.html">Careers</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Affiliation</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 col-lg-2 pt-2">
					<h5>Facility</h5>
					<ul class="nav-footer">
						<li class="nav-item">
							<a class="nav-link" href="#">Location</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="hours_of_operation.html">Hours of Operation</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Schedule</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Special Events</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 col-lg-2 pt-2">
					<h5>Kids</h5>
					<ul class="nav-footer">
					<li class="nav-item">
							<a class="nav-link" href="kids_classes.html">Classes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="kids_after_school.html">After School</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Compete</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="youth_mission.html">Youth Mission</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="birthday_parties.html">Birthday Parties</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="divider"></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center text-md-left mt-2 mb-3 pt-1">
					<p class="copyright">Copyright &copy; Ninja-Life.com. All rights reserved.</p>
				</div>
				<div class="col-md-6 text-center text-md-right mb-4">
					<ul class="social">
						<li>
							<a href="https://www.facebook.com/NinjaLifePensacola/" title="Facebook" class="fa fa-facebook"></a>
						</li>
						<li>
							<a href="https://www.instagram.com/ninjalifepensacola/" title="Instagram" class="fa fa-instagram"></a>
						</li>
						<li>
							<a href="#" title="YouTube" class="fa fa-youtube"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>