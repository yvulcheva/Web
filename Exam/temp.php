<?php
    include "../MainPage/array.php";

    echo $array[0];
    
    // echo $array[0]['Question'];

    for($i = 0; $i < count($array); $i++)
    {
        echo $array[$i]['Question'];
        echo "\nA) ";
        echo $array[$i]['Option1'];
        echo "\nB) ";
        echo $array[$i]['Option2'];
        echo "\nC) ";
        echo $array[$i]['Option3'];
        echo "\nD) ";
        echo $array[$i]['Option4'];
        echo "\nANSWER: ";
        echo "\n";
    }

    // for($i = 0; $i < count($array); $i++){
            //     foreach($array[$i] as $value){
            //         echo '<pre>'; print_r($value); echo '</pre>';
            //     }
            // }
?>