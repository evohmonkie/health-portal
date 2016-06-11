<?php
$servername = "localhost";
$username = "root";
$password = "password";
$database = "health_portal";

// Connect to database
$connect = mysqli_connect($servername, $username, $password, $database);

// Check connection
if(!$connect) {
	die("Unanable to connect: " . mysqli_connect_error());
}
echo "Connected to " . $database . " as " . $username . " at " . $servername . "! <br /> ";