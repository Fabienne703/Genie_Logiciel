<?php
	session_start();
?>
<html>
	<head>
		<title>
			Annuler les billets reserves
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
    			margin: 0px 68px
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
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i>A propos de nous</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Nous Contacter</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Deconnecter</a></li>
			</ul>
		</div>
		<form action="cancel_booked_tickets_form_handler.php" method="post">
			<h2>ANNULER BILLETS RESERVES</h2>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red'>* PNR non valide, veuillez saisir à nouveau le PNR</strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5" style="padding-left: 30px;">
				<tr>
					<td class="fix_table">Entrer le PNR</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="pnr" required></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Cancel Ticket" name="Cancel_Ticket">
		</form>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
			PREDEFINED LOCATION WHEN BOOKING TICKETS
		-->
	</body>
</html>