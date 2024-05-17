<?php

require "config/constants.php";

$servername = "localhost";
$username = "root";
$password = "";
$db = "database_name";

// Create connection
$con = mysqli_connect('localhost', 'root', '','database_name');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>