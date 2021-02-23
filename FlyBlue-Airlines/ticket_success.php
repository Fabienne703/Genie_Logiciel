<?php
	session_start();
?>
<html>
	<head>
		<title>
			Reservation de billets reussie
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
			h6{
				font-family: sans-serif;
				font-style: bold;
				font-size: 50pt;
				color: #14162e;
			  }
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.png"/> 
		<h6 id="title">
			FLYBLUE AIRLINES
		</h6>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Tableau de Bord</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> A propos de nous</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Nous Contacter</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Deconnecter</a></li>
			</ul>
		</div>
		<h2>RESERVATION REUSSIE</h2>
		<h3>Votre paiement de &#36; <?php echo $_SESSION['total_amount']; ?> a ete recu.<br><br> Votre code de reservation PNR est <strong><?php echo $_SESSION['pnr'];?></strong>. Reservation reussie.</h3>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
	</body>
</html>