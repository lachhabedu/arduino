<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $Name = $_POST['name'];
		$ID = $_POST['id'];
		$date = date ('F d, Y, g: i a');
	
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO chek_time (Name,ID , time_in) values(?, ?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($Name,$ID ,$date));
		Database::disconnect();
		header("Location: time.php");
	
    }
?>
