<?php
session_start();
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
		<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	</head>
	
	<body id="indexBody">
		<header id="indexHeader">
			<h1 id="indexH1">Lijsten</h1>
			<a href="create/createLijst.php">
			<i id="plus2" class="fas fa-plus-circle"></i></a>
		</header>
		<main id="lijstenMain">
			<?php
			$query = "SELECT * FROM lijsten";
			$lijsten = mysqli_query($connection, $query);
			while ($row = mysqli_fetch_object($lijsten)) {
					$lijst_naam = $row->lijst_naam;
					$lijst_id = $row->lijst_id;
			?>
			<form action="taken.php" method="POST">
				<input id="lijstSub" type="submit" name="submit" value="<?php echo $lijst_naam ?>">
				<input type="hidden" value="<?php echo $lijst_id ?>" name="<?php echo $lijst_id ?>">
				<?php
				}
				?>
			</form>
		</main>
	</body>
</html>