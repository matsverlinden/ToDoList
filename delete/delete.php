<?php 
session_start();
include('../dataconnect.php');
$connection = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno()) {
	printf("Connection failed: %s\n", mysqli_connect_error());
	exit();
}
$lijst_id = $_GET['lijst_id'];
$taak_id= $_GET['taak_id'];

$query = "DELETE FROM taken WHERE taak_id = '$taak_id'";
$delte = mysqli_query($connection,$query);

header("../Location: taken.php?lijst_id=$lijst_id");
 ?>