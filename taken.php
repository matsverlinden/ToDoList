<?php
session_start();
include('dataconnect.php');
$connection = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno()) {
	printf("Connection failed: %s\n", mysqli_connect_error());
	exit();
}
	$lijst_id = $_GET['lijst_id'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>To do list</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<script src="script.js"></script>
		<meta charset="utf-8">
	</head>
	<body id="takenBody">
		<header>
			<a href="index.php"><i id="pijl" class="fas fa-arrow-left"></i></a>
			<center>
			
			<h1><a id="deleteTaak" href="delete/lijstDelete.php?lijst_id=<?php echo $lijst_id ?>"><i class="fas fa-minus-square"> </i></a> To do list <a id="editTaak" href="edit/editLijst.php?lijst_id=<?php echo $lijst_id ?>"> <i class="fas fa-marker"></i></a></h1>
			
			</center><hr>
			<a href="create/create.php?lijst_id=<?php echo $lijst_id?>">
			<i id="plus" class="fas fa-plus-circle"></i></a>
		</header>
		<main>
			<input type="text" id="filter" onkeyup="filter()" placeholder="Zoek op tijd...">

			<p><button id="orderBtn" onclick="takenTable()">Sorteer op status</button></p>
			<table id="takenTable">
				<tr>
					<th>Naam</th>
					<th>Beschrijving</th>
					<th>Tijd</th>
					<th>Status</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
					$query = "SELECT * FROM taken WHERE lijst_id = '$lijst_id'";
					$taken = mysqli_query($connection, $query);
					while ($row = mysqli_fetch_object($taken)) {
						$taak_id = $row->taak_id;
						$naam = $row->taak_naam;
						$beschrijving = $row->taak_beschrijving;
						$status = $row->taak_status;
						$tijd = $row->taak_tijd;
				?>
				<tr>
					<td><?php echo $naam ?></td>
					<td><?php echo $beschrijving ?></td>
					<td><?php echo $tijd ?></td>
					<td><?php echo $status ?></td>
					<td><a href="edit/edit.php?taak_id=<?php echo $taak_id ?>&lijst_id=<?php echo $lijst_id ?>"><i id="edit" class="fas fa-pencil-alt"></i></a></td>
					<td><a href="delete/delete.php?taak_id=<?php echo $taak_id ?>&lijst_id=<?php echo $lijst_id ?> "><i id="delete" class="fas fa-trash-alt"></i></a></td>
				</tr>
				<?php
				}
				?>
			</table>
		</main>
	</body>
</html>