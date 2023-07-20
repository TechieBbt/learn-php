<?php

// To create and write on a file
    $file = fopen("project.txt", "w");
        if ($file){
            $data = "Hello World\n";
            fwrite($file, $data);
            fclose($file);
            echo "Data written to the file.";
        } else{
            echo "Error opening file.";
        };

// To open and read a file
    $file = fopen('project.txt', 'r');

        if ($file){
            while (($line = fgets($file)) !== false){
                echo $line;
            }
            fclose($file);
        ;}

// To read the length of file
    $file_handle = fopen('project.txt', 'r');
        $length = 5;
        $data = fread ($file_handle, $length);
        fclose($file_handle);
            echo $data;

// To delete a file
    $file_path = 'project.txt';

        if (file_exists($file_path)){
            if (unlink($file_path)) {
                echo "File deleted successfully";
            } else {
                echo "Unable to delete the file.";
            } 
        } else {
            echo "File does not exist.";
        }

    $file = fopen("Tobi.txt", "w");

?>