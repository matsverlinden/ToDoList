<?php 
include('../dataconnect.php');
$connection = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno()) {
	printf("Connection failed: %s\n", mysqli_connect_error());
	exit();
}

$naam = $_POST['naam'];
$beschrijving = $_POST['beschrijving'];
$status = $_POST['status'];

echo $naam;
echo $beschrijving;
echo $status;

$query = "INSERT INTO taken (taak_naam, taak_beschrijving, taak_status, lijst_id) VALUES ('$naam','$beschrijving', '$status', '1')";
$create = mysqli_query($connection,$query);
header("Location: ../taken.php");
 ?>