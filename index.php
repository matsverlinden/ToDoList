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
				<a id="lijstSub" href="taken.php?lijst_id=<?php echo $lijst_id?>"><?php echo $lijst_naam ?></a>
				<?php
				}
				?>
		</main>
	</body>
</html>