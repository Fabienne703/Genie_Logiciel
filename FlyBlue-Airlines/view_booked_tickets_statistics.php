<?php
	session_start();
?>
<html>
	<head>
		<title>
			Afficher les statistiques des billets reserves
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
    			margin: 0px 72px
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
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Tableau de Bord</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Deconnecter</a></li>
			</ul>
		</div>
		<h2>VOIR LES STATISTIQUES DES BILLETS RESERVES</h2>
		<form action="view_booked_tickets_statistics_form_handler.php" method="post">
			<div>
			<table cellpadding="5" style="padding-left: 30px;">
				<tr>
					<td class="fix_table">Entrer la Date</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="j_date" required></td>
				</tr>
			</table>
			<br>
			<br>
			<input type="submit" value="Submit" name="Submit">
			</div>
		</form>
	</body>
</html>