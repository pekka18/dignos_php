
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand">Jollibot</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<form method="POST" enctype="multipart/form-data">
	<h2>Create Menu</h2>
	<h6>Menu Name</h6>
	<input name="menuName" class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
	<h6>Menu Description</h6>
	<input name="menuDesc" class="form-control" type="text"></textarea>
	<h6>Price</h6>
	<input name="price" class="form-control form-control-sm" type="text" aria-label=".form-control-sm example">
	<button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
<div>
			<table class="table table-bordered table-hover mx-auto p-2" style="width:auto;">
				<tr>
					<td style="text-align: center;"><b>ID</b></td>
					<td style="text-align: center;"><b>MENU NAME</b></td>
					<td style="text-align: center;"><b>MENU DESCRIPTION</b></td>
					<td style="text-align: center;"><b>PRICE</b></td>
				</tr>
				
			</table>
</div>

<?php
	include 'function.php';
	include 'connection.php';
?>
<div>
			<table class="table table-bordered table-hover mx-auto p-2" style="width:auto;">
				<tr>
					<td style="text-align: center;"><b>ID</b></td>
					<td style="text-align: center;"><b>MENU NAME</b></td>
					<td style="text-align: center;"><b>MENU DESCRIPTION</b></td>
					<td style="text-align: center;"><b>PRICE</b></td>
				</tr>
				<?php
				$rows = view_data();
				foreach ($rows as $row) {
					echo "<tr>";
					echo "<td>" . $row['id'] . "</td>";
					echo "<td>" . $row['menu_name'] . "</td>";
					echo "<td>" . $row['menu_desc'] . "</td>";
					echo "<td>" . $row['price'] . "</td>";
				?>
				<?php echo "</tr>";
				}
				?>
			</table>
		</div>


</body>
</html>