<!DOCTYPE html>
<html>
	<head>
		<title>Toevoegen</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body>
		<main id="mainCreate">
			<h1 id="createH1">Toevoegen</h1>
			<hr>
			<form action="createQuery.php" method="POST">
				<label>Naam:</label>
				<input class="text" type="text" name="naam"><br>
				<label>Beschrijving:</label>
				<input class="text" type="text" name="beschrijving"><br>
				<label>Status </label><br>
				<input class="radio" type="radio" name="status" value="Nog niet begonnen">Nog niet begonnen<br>
				<input class="radio" type="radio" name="status" value="Bezig">Bezig<br>
				<input class="radio" type="radio" name="status" value="Afgerond">Afgerond<br>
				<input type="submit" name="submit">
			</form>
		</main>
	</body>
</html>