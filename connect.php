<?php
    $server = 'localhost';
    $user = 'root';
    $pass = 'phpAdminPassword';
    $db = 'nhd_db';

    $connect = new mysqli($server, $user, $pass, $db);
    
    if(!$connect){
        die("Unable to Connect");
    }
?>
