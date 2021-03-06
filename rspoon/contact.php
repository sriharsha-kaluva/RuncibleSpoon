<?php
/*
Free Bootstrap Themes : http://www.365bootstrap.com
Free Responsive Html5 Templates : http://www.zerotheme.com
*/

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "sriharsha.sh2@gmail.com";
	$subject = "Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = $email;
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
	<title>Runcible Spoon</title>
	
	
	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/contact-buttons.css" rel="stylesheet">
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	
	<!---pop-up-box---->
	<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!---//pop-up-box---->
	<script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
			
			});
	</script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>	
	
	<!-- /////////////////////////////////////////Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>

				</button>
				<a class="navbar-brand" href="#">
					<img src="images/logo.png" class="hidden-xs" alt="">
					<h3 class="visible-xs">RedRestaurant</h3>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
                        <a class="page-scroll" href="index.html#intro">Home</a>
                    </li>
					<li>
                        <a class="page-scroll" href="index.html#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#menu">Menu</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#staff">Staff</a>
                    </li>
					<li>
                        <a class="page-scroll" href="index.html#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#booking">Booking</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.html">Contact Us</a>
                    </li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!-- Header -->
	
	<a id='backTop'>Back To Top</a>
	<!-- /Back To Top -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="archives-page">
		<div class="container">
			<div class="row">
				<div id="main-content" class="col-md-8">
					<article class="contact">
						<div class="art-header">
							<h2 class="center">Contact</h2>
						</div>
						<!--Warning-->
						<center><?php echo $text;?></center>
						<!---->
						<div class="art-content">
							<div id="contact_form">
								<form name="form1" id="ff" method="post" action="contact.php">
									<label>
									<span>Enter your name:</span>
									<input type="text"  name="name" id="name" required>
									</label>
									<label>
									<span>Enter your email:</span>
									<input type="email"  name="email" id="email" required>
									</label>
									<label>
									<span>Your message here:</span>
									<textarea name="message" id="message"></textarea>
									</label>
									<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
								</form>
							</div>
						</div>
					</article>
				</div>
				<div id="sidebar" class="col-md-4">
					<div class="widget wid-about">
						<div class="heading"><h4>About Us</h4></div>
						<div class="content">
							<img src="images/about.jpg" />
							<p>Since 1976, the Spoon has been a home gathering place for Bloomington for residents and Indiana University students. The tradition as the only coffee roaster in town continues today; just one unique feature that has made the Spoon a favorite for 25 years</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-footer footer-1">
						<div class="footer-heading"><h4>Partners</h4></div>
						<div class="content">
							<div class="row">
								<div class="col-md-6">
									<a href="#"><img src="images/15.jpg" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/16.jpg" /></a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<a href="#"><img src="images/17.jpg" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/18.jpg" /></a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<a href="#"><img src="images/19.jpg" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/20.jpg" /></a>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-md-4 col-footer footer-3">
						<div class="footer-heading"><h4>Labels</h4></div>
						<div class="content">
							<ul>
								<li><a href="#">Foods</a></li>
								<li><a href="#">Restaurant</a></li>
								<li><a href="#">Chefs</a></li>
								<li><a href="#">Menus</a></li>
								<li><a href="#">New Food</a></li>
								<li><a href="#">Consectetuer</a></li>
								<li><a href="#">Tincidunt</a></li>
								<li><a href="#">Laoreet</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<div class="coppy-right">
		<div class="wrap-footer">
			<div class="clearfix">
				<div class="col-md-6 col-md-offset-3">
					<p>Copyright 2018 - <a href="http://www.365bootstrap.com" target="_blank" rel="nofollow">Designed by Group 7</p>
				</div>
			</div>	
		</div>
	</div>
	<!-- Footer -->
	
	<!-- Core JavaScript Files -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.backTop.min.js"></script>
	<script>
		$(document).ready( function() {
			$('#backTop').backTop({
				'position' : 1200,
				'speed' : 500,
				'color' : 'red',
			});
		});
	</script>
	<script src="js/jquery.contact-buttons.js"></script>
	<script src="js/demo.js"></script>
</body>
</html>
	
