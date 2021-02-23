<?php
	session_start();
?>
<html>
	<head>
		<title>
			Afficher les vols disponibles
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
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
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
		<form action="view_flights_form_handler.php" method="post">
			<h2>RECHERCHEZ LES VOLS DISPONIBLES</h2>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Entrer Origine vol</td>
					<td class="fix_table">Entrer Destination</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input list="origins" name="origin" placeholder="From" required>
  						<datalist id="origins">
							<option value="Chicago">
  						  	<option value="New-York">
							<option value="Michigan">
							<option value="Washington">
  						  	<option value="Florida">
  						  	<option value="Jacmel">
  						  	<option value="Port-au-Prince">
  						  	<option value="Bergame">
							<option value="Venise	">
							<option value="Da Nang">
  						  	<option value="Hanoi">
  						  	<option value="Ho Chi Minh">
  						  	<option value="Lyon">
  						  	<option value="Paris">
							<option value="Istanbul">
  						  	<option value="Beshisktas">
  						  	<option value="Fort-Lauderdale">
  						  	
  						</datalist>
						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
					<td class="fix_table">
						<input list="destinations" name="destination" placeholder="To" required>
  						<datalist id="destinations">
  						  	<option value="Da Nang">
  						  	<option value="Hanoi">
  						  	<option value="Ho Chi Minh">
  						  	<option value="Lyon">
  						  	<option value="Paris">
							<option value="Istanbul">
  						  	<option value="Beshisktas">
  						  	<option value="Fort-Lauderdale">
  						  	<option value="Chicago">
  						  	<option value="New-York">
							<option value="Michigan">
							<option value="Washington">
  						  	<option value="Florida">
  						  	<option value="Jacmel">
  						  	<option value="Port-au-Prince">
  						  	<option value="Bergame">
							<option value="Venise	">
  						</datalist>
						<!-- <input type="text" name="destination" placeholder="To" required> --></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Entrer la date de depart</td>
					<td class="fix_table">Entrer le numero du Passager</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" min=
						<?php 
							$todays_date=date('Y-m-d'); 
							echo $todays_date;
						?> 
						max=
						<?php 
							$max_date=date_create(date('Y-m-d'));
							date_add($max_date,date_interval_create_from_date_string("90 days")); 
							echo date_format($max_date,"Y-m-d");
						?> required></td>
					<td class="fix_table"><input type="number" name="no_of_pass" placeholder="Eg. 5" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Entrer le type de Classe</td>
				</tr>
				<tr>
					<td class="fix_table">
						<select name="class">
  							<option value="economy">Economique</option>
  							<option value="business">Affaire</option>
  						</select>
  					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Trouver vol disponible" name="Search">
		</form>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
	</body>
</html>