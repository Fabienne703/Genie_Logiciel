<?php
	session_start();
?>
<html>
	<head>
		<title>Desactiver avion</title>
	</head>
	<body>
		<?php
			if(isset($_POST['Deactivate']))
			{
				$data_missing=array();
				if(empty($_POST['jet_id']))
				{
					$data_missing[]='Jet ID';
				}
				else
				{
					$jet_id=trim($_POST['jet_id']);
				}

				if(empty($data_missing))
				{
					require_once('mysqli_connect.php');
					//require_once('../mysqli_connect.php');
					$query="UPDATE Jet_Details SET active='No' WHERE jet_id=?";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"s",$jet_id);
					mysqli_stmt_execute($stmt);
					$affected_rows=mysqli_stmt_affected_rows($stmt);
					//echo $affected_rows."<br>";
					// mysqli_stmt_bind_result($stmt,$cnt);
					// mysqli_stmt_fetch($stmt);
					// echo $cnt;
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					/*
					$response=@mysqli_query($dbc,$query);
					*/
					if($affected_rows==1)
					{
						echo "Desactivation reussie";
						header("location: deactivate_jet_details.php?msg=success");
					}
					else
					{
						echo "Erreur de renvoie";
						echo mysqli_error();
						header("location: deactivate_jet_details.php?msg=failed");
					}
				}
				else
				{
					echo "Champs de data vide. <br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
			}
			else
			{
				echo "Requete de desactivation non recue";
			}
		?>
	</body>
</html>