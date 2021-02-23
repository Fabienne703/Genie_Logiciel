<html>
	<head>
		<title>
			Creation Nouvel utilisateur
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
    			margin: 0px 135px
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
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Accueil </a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i>Reserver Billets</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> A propos de nous</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Nous Contacter</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Connecter</a></li>
			</ul>
		</div>
		<br>
		<form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from">
			<h2><i class="fa fa-user-plus" aria-hidden="true"></i>CREER UN NOUVEAU COMPTE UTILISATEUR</h2>
			<br>
			<table cellpadding='10'>
				<strong>DETAILS CONNEXION</strong>
				<tr>
					<td>Entrer un nom d'utilisateur valide  </td>
					<td><input type="text" name="username" required><br><br></td>
				</tr>
				<tr>
					<td>Entrer mot de passe  </td>
					<td><input type="password" name="password" required><br><br></td>
				</tr>
				<tr>
					<td>Entrer votre adresse email</td>
					<td><input type="text" name="email" required><br><br></td>
				</tr>
			</table>
			<br>
			<table cellpadding='10'>
				<strong>ENTREZ LES DETAILS PERSONNELS DU CLIENT</strong>
				<tr>
					<td>Entrer votre nom  </td>
					<td><input type="text" name="name" required><br><br></td>
				</tr>
				<tr>
					<td>Entrer votre numero de telephone.</td>
					<td><input type="text" name="phone_no" required><br><br></td>
				</tr>
				<tr>
					<td>Entrer votre addresse</td>
					<td><input type="text" name="address" required><br><br></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Submit" name="Submit">
			<br>
		</form>
	</body>
</html>