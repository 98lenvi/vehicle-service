<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"> 
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
</form>
</div>
<div class="container">
<form class="form-horizontal" id="form_members" role="form" action="part_input.php" method="POST">
<legend>Part Information</legend>
<div class="form-group">
    <label for="Part_no" class="col-sm-2">	Part_no</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Part_no" id="Part_no" placeholder="Part_no">
    </div>
    <label for="Part_name" class="col-sm-2">Part_name</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Part_name" id="Part_name" placeholder="Part_name">
    </div>
    <label for="Part_price" class="col-sm-2">Part_price</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Part_price" id="Part_price" placeholder="Part_price">
    </div>
    <label for="Part_stock" class="col-sm-2">Part_stock</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Part_stock" id="Part_stock" placeholder="Part_stock">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-warning" name="submit" id="submit">Submit</button>
        <button type="submit" class="btn btn-warning" name="delete" id="delete">Delete</button>
    </div>
</div>
</form>
</div>
<table class="table">
	<thead>
		<tr>
			<th>Part number</th>
			<th>Part name</th>
			<th>Price</th>
			<th>Stock</th>
		</tr>
	</thead>

	<tbody>
		<?php

			$connection = mysqli_connect('localhost', 'root', ''); 
			mysqli_select_db($connection, 'project');

			$query = "SELECT * FROM part_info";
			$result = mysqli_query($connection, $query);

			

			while($row = mysqli_fetch_assoc($result)):
		?> 

		<tr>

			<td><?php echo $row['Part_no']; ?></td>
			<td><?php echo $row['Part_name']; ?></td>
			<td><?php echo $row['Part_price']; ?></td>
			<td><?php echo $row['Part_stock']; ?></td>
		</tr>


	<?php endwhile; ?>

	</tbody>
</table>

<link rel="stylesheet" href="bootstrap.css" />
<script src="tables/js/jquery.js"></script>
<script src="tables/js/jquery.dataTables.js"></script>
<script src="tables/js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
	$(".table").Datatable();
</script>