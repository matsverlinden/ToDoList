<?php 
include('../dataconnect.php');
$connection = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno()) {
	printf("Connection failed: %s\n", mysqli_connect_error());
	exit();
}
$lijst_naam = $_POST['lijst_naam'];

$query = "INSERT INTO lijsten (lijst_naam) VALUES ('$lijst_naam')";
$create = mysqli_query($connection, $query);

header("Location: ../index.php");
 ?>