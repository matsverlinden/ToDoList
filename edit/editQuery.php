<?php 
include('../dataconnect.php');
$connection = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno()) {
	printf("Connection failed: %s\n", mysqli_connect_error());
	exit();
}
$lijst_id = $_POST['lijst_id'];
$taak_id = $_POST['taak_id'];

$taak_naam = $_POST['naam'];
$taak_beschrijving = $_POST['beschrijving'];
$taak_status = $_POST['status'];
$taak_tijd = $_POST['tijd'];

$query = "UPDATE taken SET taak_naam = '$taak_naam', taak_beschrijving = '$taak_beschrijving', taak_tijd = '$taak_tijd', taak_status = '$taak_status' WHERE taak_id = '$taak_id'";
$result = mysqli_query($connection, $query);

header("Location: ../taken.php?lijst_id=$lijst_id");
 ?>