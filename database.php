<?php
$servername = "localhost";
$username = "ceves94";
$password = "it_350databases!";
$dbname = "350class";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
	die("Failed to Connect: " . $conn->connect_error);
}

?>
