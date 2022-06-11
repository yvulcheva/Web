<?php

    global $array;
    include('../MainPage/array.php');
    
    fill_array();

        
    for($i = 0; $i < count($array); $i++){
        foreach($array[$i] as $value){
            echo '<pre>'; print_r($value); echo '</pre>';
        }
    }

?>