<?php 
include('../dataconnect.php');
$connection = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno()) {
	printf("Connection failed: %s\n", mysqli_connect_error());
	exit();
}

$lijst_id = $_GET['lijst_id'];
$naam = $_POST['naam'];
$beschrijving = $_POST['beschrijving'];
$status = $_POST['status'];
$taak_tijd = $_POST['tijd'];

$query = "INSERT INTO taken (taak_naam, taak_beschrijving, taak_tijd, taak_status, lijst_id) VALUES ('$naam','$beschrijving', '$taak_tijd', '$status', '$lijst_id')";
$create = mysqli_query($connection,$query);

header("Location: ../taken.php?lijst_id=$lijst_id");
 ?>	