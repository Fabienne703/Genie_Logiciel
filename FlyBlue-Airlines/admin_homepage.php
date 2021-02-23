<?php
	session_start();
?>
<html>
	<head>
		<title>
			Bienvenue Administrateur
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
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.png"/> 
		<h6 id="title">
			FLYBLUE AIRLINES
		</h6>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Tableau de bord</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Deconnecter</a></li>
			</ul>
		</div>
		<!--<h2>Bienvenue Administrateur!</h2>-->
		<?php
		echo "<h2>Bienvenue Administrateur :  ".$_SESSION['login_user']."</h2>";
		?>
		<table cellpadding="5">
			<tr>
				<td class="admin_func"><a href="view_booked_tickets_statistics.php"><i class="fa fa-plane" aria-hidden="true"></i> Afficher les statistiques des billets reserves</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="admin_view_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> Afficher la liste des billets reserves pour un vol</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="add_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Ajouter des details sur les horaires de vol</a>
				</td>
			</tr>
			<!-- <tr>
				<td class="admin_func"><a href="modify_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Modify Flight Schedule Details</a>
				</td>
			</tr> -->
			<tr>
				<td class="admin_func"><a href="delete_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Supprimer les details de l'horaire de vol</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="add_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Ajouter des details sur les avions</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="activate_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Activer avion</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="deactivate_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i> desactiver avion</a>
				</td>
			</tr>
		</table>
	</body>
</html>