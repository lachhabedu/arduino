<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $Name = $_POST['name'];
		$ID = $_POST['id'];
		$Gender = $_POST['gender'];
        $Email = $_POST['email'];
        $Mobile = $_POST['mobile'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO table_arduino_ethernet (Name,ID,Gender,Email,Mobile) values(?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($Name,$ID,$Gender,$Email,$Mobile));
		Database::disconnect();
		header("Location: user data.php");
	
    }
?>