<?php

    global $array;
    $temp = $array;
    
    include('../MainPage/array.php');

    //Getting only the name without the extension
    $name= substr($filename,0,-3);
    

    $myfile = fopen("./Aiken/$name.txt", "w") or die("Unable to open file!");

    for($i = 0; $i < count($array); $i++){
        fwrite($myfile,$array[$i]['Question']."\n");
        fwrite($myfile,"A) ");
        fwrite($myfile,$array[$i]['Option1']."\n");
        fwrite($myfile,"B) ");
        fwrite($myfile,$array[$i]['Option2']."\n");
        fwrite($myfile,"C) ");
        fwrite($myfile,$array[$i]['Option3']."\n");
        fwrite($myfile,"D) ");
        fwrite($myfile,$array[$i]['Option4']."\n");
        fwrite($myfile,"ANSWER: ");
        fwrite($myfile,$array[$i]['Answer']);

        if($i !== count($array) - 1){
            fwrite($myfile,"\n\n");
        }
    }
    $filepath = "./Aiken/$name.txt";

    if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Flush system output buffer
        readfile($filepath);
        die();
    } else {
        http_response_code(404);
        die();
    }
?>