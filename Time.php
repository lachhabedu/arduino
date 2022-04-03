<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
	$time= time();
	$date = date ('F d, Y, g: i a');
	echo $date;
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #4CAF50;
			width: 30%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		.table {
			margin: auto;
			width: 50%; 
		}
		
		thead {
			color: #FFFFFF;
		}
		</style>
		
		<title>Rfid and Nfc time attendance system Ardino uno web server</title>
	</head>
	
	<body>
		<h2>Rfid and Nfc time attendance system Ardino uno web server</h2>
		<ul class="topnav">
			<li><a href="home.php">Home</a></li>
			<li><a class="active" href="Time.php">Time</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="read tag.php">tst</a></li>
		</ul>
		<br>
		<div class="container">
            <div class="row">
                <h3>Time Table </h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr bgcolor="#10a0c5" color="#FFFFFF">
                      <th>Name</th>
                      <th>ID</th>
					  <th>time in</th>
					  <th>time out</th>
                    </tr>
                  </thead>
                  <tbody>
				                   <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM chek_time ORDER BY name ASC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['id'] . '</td>';
                            echo '<td>'. $row['time_in'] . '</td>';
							echo '<td>'. $row['time_out'] . '</td>';
							echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
				</table>
			</div>
		</div> <!-- /container -->
	</body>
</html>