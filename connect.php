<?php

    $server = 'localhost';
    $user = 'root';
    $pass = "";
    $db = 'nhd_db';

    $connect = mysqli_connect($server, $user, $pass, $db);
    
    if(!$connect){
        die("Connection failed: " . mysqli_connect_error()); 
    }

?>
