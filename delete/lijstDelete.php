<?php 
include('../dataconnect.php');
$connection = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno()) {
	printf("Connection failed: %s\n", mysqli_connect_error());
	exit();
}
$lijst_id = $_GET['lijst_id'];

$query = "DELETE FROM lijsten WHERE lijst_id = '$lijst_id'";
$delete = mysqli_query($connection,$query);

$query2 = "DELETE FROM taken WHERE lijst_id = '$lijst_id'";
$delete2 = mysqli_query($connection, $query2);

header("Location: ../index.php");
 ?>