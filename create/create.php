<!DOCTYPE html>
<html>
	<head>
		<title>Toevoegen</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	</head>
	<body id="createBody">
		<header>
			<a href="../taken.php"><i id="pijl" class="fas fa-arrow-left"></i></a>
			<h1 id="createH1">Toevoegen</h1>
			<hr>
		</header>
			<main id="mainCreate">
			<form action="createQuery.php" method="POST">
				<label>Naam:</label>
				<input class="text" type="text" name="naam"><br>
				<label>Beschrijving:</label>
				<input class="text" type="text" name="beschrijving"><br>
				<label>Status:</label><br>
				<input class="radio" type="radio" name="status" value="Nog niet begonnen">Nog niet begonnen<br>
				<input class="radio" type="radio" name="status" value="Bezig">Bezig<br>
				<input class="radio" type="radio" name="status" value="Afgerond">Afgerond<br>
				<input type="submit" name="submit" value="Voeg toe">
			</form>
		</main>
	</body>
</html>