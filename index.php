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
		<title>Lijsten</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<main id="lijstenMain">
			<?php
			$query = "SELECT * FROM lijsten";
			$lijsten = mysqli_query($connection, $query);
			while ($row = mysqli_fetch_object($lijsten)) {
					$lijst_naam = $row->lijst_naam;
 			?>
			<form action="taken.php" method="POST">
			<input id="lijstSub" type="submit" name="submit" value="<?php echo $lijst_naam ?>">
			<?php
		}
			?>
		</form>
		</main>
	</body>
</html>