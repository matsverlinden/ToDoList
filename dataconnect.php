<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "todo";

$connection = mysqli_connect($server, $user, $pass, $db);

if (mysqli_connect_errno()) {
	printf("Connection failed: %s\n", mysqli_connect_error());
	exit();
}
?>