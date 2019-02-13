<?php
include('../dataconnect.php');
$connection = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_errno()) {
	printf("Connection failed: %s\n", mysqli_connect_error());
	exit();
}
$lijst_id = $_GET['lijst_id'];
$query = "SELECT * FROM lijsten WHERE lijst_id = '$lijst_id'";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_object($result)) {
	$lijst_naam = $row->lijst_naam;
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
			<form method="POST" action="lijstQuery.php?lijst_id=<?php echo $lijst_id ?>">
				<label>Naam:</label>
				<input class="text" type="text" name="naam" value=" <?php echo $lijst_naam ?> "><br>
				<input type="submit" name="submit">
				</form>
				</main>
			</body>
			</html>
				?>