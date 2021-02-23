<?php
	session_start();
?>
<html>
	<head>
		<title>
			Bienvenue a FlyBlue AIRLINES
		</title>
		
		<style>
			h6{
				font-family: sans-serif;
				font-style: bold;
				font-size: 50pt;
				color: #14162e;
			  }
		</style>
		
		
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		
		<link rel="stylesheet" href="css1/animate.css">
		<link rel="stylesheet" href="css1/owl.carousel.min.css">
		<link rel="stylesheet" href="css1/owl.theme.default.min.css">
		<link rel="stylesheet" href="css1/magnific-popup.css">
		<link rel="stylesheet" href="css1/ionicons.min.css">
		<link rel="stylesheet" href="css1/flaticon.css">
		<link rel="stylesheet" href="css1/icomoon.css">
		<link rel="stylesheet" href="css1/style.css">
		
		
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.png"/> 
		<h6 id="title">
			FLYBLUE AIRLINES
		</h6>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Reserver Billets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i>Reserver Billets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Reserver Billets</a>";
						}
					?>
				</li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> A propos de nous</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Nous Contacter</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Connecter</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Connecter</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Connecter</a>";
						}
					?>
				</li>
			</ul>
		</div>
		
		
		 <!-- hero-wrap -->
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(images/im1.jpg);">
	      	<div class="overlay"></div>
	        
	      </div>

	      <div class="slider-item" style="background-image:url(images/im2.jpg);">
	      	<div class="overlay"></div>
	        
	      </div>

	      <div class="slider-item" style="background-image:url(images/im3.jpg);">
	      	<div class="overlay"></div>
	        
	      </div>
		  
		  <div class="slider-item" style="background-image:url(images/im4.jpg);">
	      	<div class="overlay"></div>
	        
	      </div>
		  
		  <div class="slider-item" style="background-image:url(images/im5.jpg);">
	      	<div class="overlay"></div>
	        
	      </div>
		  
		  <div class="slider-item" style="background-image:url(images/im6.png);">
	      	<div class="overlay"></div>
	        
	      </div>
	    </div>
	  </div>
		
		
		
		<!--<div class="container">
			<div class="welcome_text" >Bienvenue a FlyBlue Airlines!</div>
			<img src="images/image3.png" width=100%>
		</div>
		-->
		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->
		
		
		
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="js/main.js"></script>
		
		
	</body>
</html>