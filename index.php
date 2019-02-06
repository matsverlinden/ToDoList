<?php 
include('dataconnect.php');
$connection = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno()) {
	printf("Connection failed: %s\n", mysqli_connect_error());
	exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>To do list</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<main>
	<center><h1>To do list</h1></center><hr>
	<table>
		<tr>
		<th>Naam</th>
		<th>Beschrijving</th>
		<th>Status</th>
		<th>Einddatum</th>
		<th>Edit</th>
		<th>Delete</th>
		</tr>
		<?php 
			$query = "SELECT * FROM taken";
			$taken = mysqli_query($connection, $query);
			while ($row = mysqli_fetch_object($taken)) {
				$naam = $row->taak_naam;
				$beschrijving = $row->taak_beschrijving;
				$status = $row->taak_status;
				$datum = $row->taak_datum;
		 ?>
		<tr>
			<td><?php echo $naam ?></td>
			<td><?php echo $beschrijving ?></td>
			<td><?php echo $status ?></td>
			<td><?php echo $datum ?></td>
			<td><i id="edit" class="fas fa-pencil-alt"></i></td>
			<td><i id="delete" class="fas fa-trash-alt"></i></td>
		</tr>
		<?php 
	}
		 ?>
	</table>
			<form action="create.php">
		<input id="submit" type="submit" name="submit">
	</form>
</main>
</body>
</html>