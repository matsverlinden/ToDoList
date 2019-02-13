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
			<input type="text" id="filter" onkeyup="filter()" placeholder="Zoek...">

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
			<script>
			function takenTable() {
			var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
			table = document.getElementById("takenTable");
			switching = true;
			dir = "asc";
			while (switching) {
			switching = false;
			rows = table.rows;
			for (i = 1; i < (rows.length - 1); i++) {
			shouldSwitch = false;
			x = rows[i].getElementsByTagName("TD")[4];
			y = rows[i + 1].getElementsByTagName("TD")[4];
			if (dir == "asc") {
			if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
			shouldSwitch= true;
			break;
			}
			}
			else if (dir == "desc") {
			if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
			shouldSwitch = true;
			break;
			}
			}
			}
			if (shouldSwitch) {
			rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
			switching = true;
			switchcount ++;
			} else {
			if (switchcount == 0 && dir == "asc") {
			dir = "desc";
			switching = true;
			}
			}
			}
			}

			function filter() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("filter");
  filter = input.value.toUpperCase();
  table = document.getElementById("takenTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

			//ZET JS IN APARTE FILE, LEER HET UIT JE HOOFD EN LAAT HET WERKEN!
			</script>
		</main>
	</body>
</html>