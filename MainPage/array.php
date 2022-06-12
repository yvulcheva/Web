<?php
    include_once __DIR__ ."/db/config.php";

    $uploaded = "";
    $array=array();
    $filename = "";
    $location ="";
    
    $con = new mysqli($dbHost, $dbUsername, $dbPassword,$myDb);
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "SELECT file_name FROM files ORDER BY created DESC LIMIT 1";
    $results = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($results);
    $filename = $row["file_name"];

    $location="../upload/" . $filename;
    
    if (($uploaded = fopen($location, 'r')) !== FALSE) {
        //Getting the columns names
        $columns = fgetcsv($uploaded, 1000, ";");
        $counter = count($columns);
    
        for($i=0;$i<=$counter;$i++){
            //Getting the values for every column 
            //Example of $data - 1 Въпрос 1 Отговор едно Отговор 2..
            //Example of $element
            /*Array
                (
                    [Number] => 1
                    [Question] => Въпрос  първи
                    [Option1] => Отговор първи
                    [Option2] => Отговор втори
                    [Option3] => Отговор трети
                    [Option4] => Отговор четвърти
                    [Answer] => 1
                )
            */
            //Printing the array
        
            // for($i = 0; $i < count($array); $i++){
            //     foreach($array[$i] as $value){
            //         echo '<pre>'; print_r($value); echo '</pre>';
            //     }
            // }
                
            $data = fgetcsv($uploaded, 1000, ";");
            $element=array();
            for($j=0;$j<$counter;$j++){
                $element[$columns[$j]] = $data[$j];   
            }

            array_push($array,$element);
        }       
         
        fclose($uploaded);
    }

?>