<?php
$host = "localhost";
$username  = "root";
$password = "";
$dbname = "student";

// Creating a connection
$con = new mysqli($host, $username, $password, $dbname);
// Check if connection error is present.
if(!$con){
echo 'Connection failed: '. mysqli_connect_error();
}
?>