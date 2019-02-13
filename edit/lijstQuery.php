<?php 
include('../dataconnect.php');
$connection = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno()) {
	printf("Connection failed: %s\n", mysqli_connect_error());
	exit();
}

$lijst_id = $_GET['lijst_id'];
$lijst_naam = $_POST['naam'];

$query = "UPDATE lijsten SET lijst_naam = '$lijst_naam' WHERE lijst_id = '$lijst_id'";
$result = mysqli_query($connection,$query);

header("Location: ../taken.php?lijst_id=$lijst_id");
 ?>