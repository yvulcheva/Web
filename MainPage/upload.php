<?php
    include "./db/config.php";
    include "./db/table.php";
    include "./db/array.php";
    
    $filename = $_FILES['file']['name'];
    $location = "../upload./".$filename;
  
   
    if (move_uploaded_file($_FILES['file']['tmp_name'], $location)){
        echo 'File uploading successfully';
        
        //Put file name and time of uploading into db
        $con = new mysqli($dbHost, $dbUsername, $dbPassword,$myDb);
        // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        
        $query = "INSERT INTO files (file_name, created) VALUES ('$location', NOW())";		
	    if ($con->query($query)) {
	        echo "true";
	    }else{
	        echo "false";
	    }
        
        $con->close();
    
    }else
    {
        echo 'Error uploading file.';
    }
?>