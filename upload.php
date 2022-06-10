<?php
        
        $filename = $_FILES['file']['name'];
        $location = "upload./".$filename;

        
        if (move_uploaded_file($_FILES['file']['tmp_name'], $location)){
            echo 'File uploading successfully';
            
            if (($uploaded = fopen($location, "r")) && $generated = fopen("generate./generated.txt", "w")) {
                while (($data = fgetcsv($uploaded, 1000, ";")) !== FALSE) {
                    fputcsv($generated, $data, ' ');
                }

                fclose($uploaded);
                fclose($generated);
            }

        }else
        {
            echo 'Error uploading file.';
        }
        
?>