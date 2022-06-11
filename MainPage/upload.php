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

        fill_array();

        
    for($i = 0; $i < count($array); $i++){
        foreach($array[$i] as $value){
            echo '<pre>'; print_r($value); echo '</pre>';
        }
    }
        
        // if (($uploaded = fopen($location, "r")) && $generated = fopen("../generate./generated.txt", "w")) {
        //     while (($data = fgetcsv($uploaded, 1000, ";")) !== FALSE) {
        //         fputcsv($generated, $data, ' ');
        //     }
        //     fclose($uploaded);
        //     fclose($generated);
        // }
        // if (($uploaded = fopen($location, 'r')) !== FALSE) { // Check the resource is valid
        //     //Getting the columns names
        //     $columns = fgetcsv($uploaded, 1000, ";");
        //     $counter = count($columns);
            
        //     for($i=0;$i<$counter;$i++){
        //         //Getting the values for every column 
        //         //Example of $data - 1 Въпрос 1 Отговор едно Отговор 2..
        //         //Example of $element
        //         /*Array
        //             (
        //                 [Number] => 1
        //                 [Question] => Въпрос  първи
        //                 [Option1] => Отговор първи
        //                 [Option2] => Отговор втори
        //                 [Option3] => Отговор трети
        //                 [Option4] => Отговор четвърти
        //                 [Answer] => 1
        //             )
        //         */
                
        //         $data = fgetcsv($uploaded, 1000, ";");
        //         $element=array();
        //         for($j=0;$j<$counter;$j++){
        //             $element[$columns[$j]] = $data[$j];   
        //         }
        //         //Printing every question one by one
        //         //echo '<pre>'; print_r($element); echo '</pre>';
        //         global $array;
        //         array_push($array,$element);
        //     }
        //     //Printing the array
            
        //     // for($i = 0; $i < count($array); $i++){
        //     //     foreach($array[$i] as $value){
        //     //         echo '<pre>'; print_r($value); echo '</pre>';
        //     //     }
        //     // }
        //     fclose($uploaded);
        // }
    
    }else
    {
        echo 'Error uploading file.';
    }
?>