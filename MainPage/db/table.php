<?php 
	include "config.php";
	
	// Create database connection 
	$con = new mysqli($dbHost, $dbUsername, $dbPassword,$myDb); 
	 
	// Check connection 
	if ($con->connect_error) { 
	    die("Connection failed: " . $con->connect_error); 
	}
	echo "Connected successfully";

	$sql = "CREATE TABLE `files` (
		`file_name` varchar(100) NOT NULL,
		`created` datetime NOT NULL)
		ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
		
		if ($con->query($sql) === TRUE) {
			echo "Table Files created successfully";
		} else {
			echo "Error creating table: " . $con->error;
		}

	$con->close();
?>