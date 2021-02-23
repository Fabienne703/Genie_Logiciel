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
    			margin: 0px 390px
			}
			table {
			 border-collapse: collapse; 
			}
			tr/*:nth-child(3)*/ {
			 border: solid thin;
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
			<?php
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['j_date']))
				{
					$data_missing[]='Journey Date';
				}
				else
				{
					$j_date=$_POST['j_date'];
				}
				
				$no_of_tickets_booked=0;
				if(empty($data_missing))
				{
					require_once('mysqli_connect.php');
					$query="CALL GetFlightStatistics(?)";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"s",$j_date);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$flight_no,$journey_date,$no_of_tickets_booked,$total_capacity);
					mysqli_stmt_store_result($stmt);
					if(mysqli_stmt_num_rows($stmt)==0)
					{
						echo "<h3>pas de statistiques de vol disponible !</h3>";
					}
					else
					{
						echo "<table cellpadding=\"10\" style=\"padding-left: 40px;\">";
						echo "<tr><th>Flight No.</th>
						<th>Departure Date</th>
						<th>No. of Tickets Booked</th>
						<th>Total Capacity</th>
						</tr>";
						while(mysqli_stmt_fetch($stmt)) {
        					echo "<tr>
        					<td>".$flight_no."</td>
        					<td>".$journey_date."</td>
							<td>".$no_of_tickets_booked."</td>
							<td>".$total_capacity."</td>
        					</tr>";
    					}
    					echo "</table> <br>";
    				}
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					// else
					// {
					// 	echo "Submit Error";
					// 	echo mysqli_error();
					// }
				}
				else
				{
					echo "The following data fields were empty! <br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
			}
			else
			{
				echo "Submit request not received";
			}
		?>
	</body>
</html>