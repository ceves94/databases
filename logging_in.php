<?php
session_start();

include 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$prep_sql = $conn->prepare("SELECT * FROM Users WHERE username=? AND password=?");
$prep_sql->bind_param("ss", $username, $password);

$prep_sql->execute();

$result = $prep_sql->get_result();

if($row = $result->fetch_assoc()){
	$prep_sql->close();
	$conn->close();
	$_SESSION['logged_in'] = 1;
	$_SESSION['username'] = $row['username'];
	header("Location: http://192.168.50.24/admin_page.php");
}
else{
	echo "The username or the password does not match what is in our records, please try again.";
}
?>
