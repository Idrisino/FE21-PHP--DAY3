<?php
    $hostName = "localhost"; #127.0.0.1
    $userName = "root";
    $password = "";
    $dbName = "restaurant";

    #one way to connect db.
    //$conn = new msqli($hostName, $userName, $password, $dbName);
    
    #other way to connect db.
    $conn = new mysqli($hostName, $userName, $password, $dbName);

    #error
    if(mysqli_connect_error()) {
        die("connection failed!");
    }
?>