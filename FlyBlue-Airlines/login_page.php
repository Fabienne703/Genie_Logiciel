<?php
	session_start();
?>
<html>
	<head>
		<title>
			Account Login
		</title>
		<style>
			input {
    			border: 1.5px solid #555555;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #555555;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 60px
			}
			
			input[type=submit]:hover {
				background-color:blue;
			}
			
			form {
				padding-left:200px;
				
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
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Reserver billets</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> A propos de nous</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Nous Contacter</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Connecter</a></li>
			</ul>
		</div>
		</br>
				<form class="float_form"  action="login_handler.php" method="POST">
					<fieldset>
						<legend>Details de Connexion:-</legend><br>
						<strong>Nom utilisateur :</strong><br>
						<input type="text" name="username" placeholder="Entrer votre nom utilisateur" required><br><br>
						<strong>Mot de passe :</strong><br>
						<input type="password" name="password" placeholder="Entrer votre mot de passe" required><br><br>
						
						<strong>Type utilisateur :</strong><br><br>
						Client <input type='radio' name='user_type' value='Customer' checked/> Admin <input type='radio' name='user_type' value='Administrator'/>
						<br><br>
						<?php
							if(isset($_GET['msg']) && $_GET['msg']=='failed')
							{
								echo "<br>
								<strong style='color:red'>Invalid Username/Password</strong>
								<br><br>";
							}
						?>
						<input type="submit" name="Login" value="Login">
					</fieldset>
					<br>
					<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Nouvel utilisateur?</a>
				</form>	
	</body>
</html>