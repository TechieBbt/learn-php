<?php

// Php code showing default error handling

$file = fopen("hey.txt", "r");

if (!file_exists("hey.txt") ){
    die("File is not present");
}

else {
    $file = fopen("hey.txt", "w");
}

//Custom Error Handling

//Error handler function

function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr";
}

//set error handler

set_error_handler("customError");

//trigger error

// $test = 9;
echo($test);

?>