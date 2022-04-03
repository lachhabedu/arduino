<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $Name = $_POST['name'];
		$ID = $_POST['id'];
		$Gender = $_POST['gender'];
        $Email = $_POST['email'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO chek_time (Name,ID,Gender,Email) values(?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($Name,$ID,$Gender,$Email));
		Database::disconnect();
		header("Location: time.php");
	
    }
?>