<?php
    $host = "localhost";
    $username  = $_SERVER['MYSQL_USER']; 
    $password = $_SERVER['MYSQL_PASSWORD']; 
    $db_Name = "student";
    // Establish a connection.
    $con = new mysqli($host, $username, $password, $db_Name);
    if(!$con)
    {
        echo 'Connection failed: '. mysqli_connect_error();
    }
?>