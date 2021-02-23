<?php
	session_start();
?>
<html>
	<head>
		<title>
			Deactiver Avion
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
    			margin: 0px 67px
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
				<li><a href="home_page.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Deconnecter</a></li>
			</ul>
		</div>
		<form action="deactivate_jet_details_form_handler.php" method="post">
			<h2>ENTRER L'AVION QUE VOUS VOULEZ DESACTIVER</h2>
			<div>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>L'avion a ete desactiver avec success.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color:red'>*code d'avion invalide, svp essayer encore.</strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5" style="padding-left: 20px;">
				<tr>
					<td class="fix_table">Entrer le code d'avion</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="jet_id" required></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Deactivate" name="Deactivate">
			</div>
		</form>
	</body>
</html>