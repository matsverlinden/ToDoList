<!DOCTYPE html>
<html>
	<head>
		<title>Toevoegen</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	</head>
	<body id="createBody">
		<header>
			<a href="../index.php"><i id="pijl" class="fas fa-arrow-left"></i></a>
			<h1 id="createH1">Lijst toevoegen</h1>
			<hr>
		</header>
			<main id="mainCreate">
			<form action="lijstQuery.php" method="POST">
				<label>Naam:</label>
				<input class="text" type="text" name="lijst_naam"><br>
				<input type="submit" name="submit" value="Voeg toe">
			</form>
		</main>
	</body>
</html>