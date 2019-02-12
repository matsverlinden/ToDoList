<?php 
include('../dataconnect.php');
$connection = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno()) {
	printf("Connection failed: %s\n", mysqli_connect_error());
	exit();
}
$lijst_id = $_GET['lijst_id'];
$taak_id = $_GET['taak_id'];

$query = "SELECT * FROM taken WHERE taak_id = '$taak_id'";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_object($result)) {
	$taak_naam = $row->taak_naam;
	$taak_beschrijving = $row->taak_beschrijving;
	$taak_status = $row->taak_status;
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body id="editBody">
		<header>
			<a href="../taken.php?lijst_id=<?php echo $lijst_id ?>">
			<i id="pijl" class="fas fa-arrow-left"></i></a>
			<h1 id="editH1">Edit</h1>
			<hr>
		</header>
	<main id="mainEdit">
			<form method="POST" action="editQuery.php">
				<label>Naam:</label>
				<input class="text" type="text" name="naam" value=" <?php echo $taak_naam ?> "><br>
				<label>Beschrijving:</label>
				<input class="text" type="text" name="beschrijving" value=" <?php echo $taak_beschrijving ?> "><br>
				<p><label>Huidig status:</label><b> <?php echo $taak_status ?></b></p>
				<input type="hidden" name="status" value=" <?php echo $taak_status ?> ">
				<input class="radio" type="radio" name="status" value="Nog niet begonnen">Nog niet begonnen<br>
				<input class="radio" type="radio" name="status" value="Bezig">Bezig<br>
				<input class="radio" type="radio" name="status" value="Afgerond">Afgerond<br>

				<input type="hidden" name="lijst_id" value="<?php echo $lijst_id ?>">
				<input type="hidden" name="taak_id" value="<?php echo $taak_id ?>">
				<input type="submit" name="submit" value="Edit taak">
			</form>
	</main>
</body>
</html>