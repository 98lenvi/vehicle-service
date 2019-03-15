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
<form class="form-horizontal" id="form_members" role="form" action="mech_input.php" method="POST">
<legend>Mechanic Information</legend>
<div class="form-group">
    <label for="Mech_id" class="col-sm-2">mech_id</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Mech_id" id="Mech_id" placeholder="Mech_id">
    </div>
    <label for="Mech_name" class="col-sm-2">Mech_name</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Mech_name" id="Mech_name" placeholder="Mech_name">
    </div>
    <label for="Mech_phone" class="col-sm-2">Mech_phone</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Mech_phone" id="Mech_phone" placeholder="Mech_phone">
    </div>
    <label for="Age" class="col-sm-2">Age</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Age" id="Age" placeholder="Age">
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
			<th>Mechanic id</th>
			<th>Mechanic name</th>
			<th>Phone number</th>
			<th>Age</th>
		</tr>
	</thead>

	<tbody>
		<?php

			$connection = mysqli_connect('localhost', 'root', ''); 
			mysqli_select_db($connection, 'project');

			$query = "SELECT * FROM mech_info";
			$result = mysqli_query($connection, $query);

			

			while($row = mysqli_fetch_assoc($result)):
		?> 

		<tr>

			<td><?php echo $row['Mech_id']; ?></td>
			<td><?php echo $row['Mech_name']; ?></td>
			<td><?php echo $row['Mech_phone']; ?></td>
			<td><?php echo $row['Age']; ?></td>
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