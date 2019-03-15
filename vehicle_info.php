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
  	<div class="container">
<form class="form-horizontal" id="form_members" role="form" action="vehicle_input.php" method="POST">
<legend>Vehicle Information</legend>
<div class="form-group">
    <label for="Reg_no" class="col-sm-2">Registration Number</label>
    <div class="col-sm-4">
    	<input type="text" class="form-control" name="Reg_no" id="Reg_no" placeholder="Registration Number">
    </div>
    <label for="Cust_name" class="col-sm-2">Customer Name</label>
    <div class="col-sm-4">
    	<input type="text" class="form-control" name="Cust_name" id="Cust_name" placeholder="Customer Name">
    </div>
    <label for="Model" class="col-sm-2">Model</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Model" id="Model" placeholder="Model">
    </div>
    <label for="cc" class="col-sm-2">Displacement</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="cc" id="cc" placeholder="cc">
    </div>
    <label for="yr" class="col-sm-2">Year</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="yr" id="yr" placeholder="Year">
    </div>
    <label for="kms" class="col-sm-2">Mileage</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="kms" id="kms" placeholder="Kilometers">
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
			<th>Registartion number</th>
			<th>Customer name</th>
			<th>Model</th>
			<th>Displacement</th>
			<th>Manufacturing year</th>
			<th>Mileage</th>
            <th>Warranty</th>
		</tr>
	</thead>

	<tbody>
		<?php

			$connection = mysqli_connect('localhost', 'root', ''); 
			mysqli_select_db($connection, 'project');

			$query = "SELECT * FROM vehicle_info";
			$result = mysqli_query($connection, $query);

			

			while($row = mysqli_fetch_assoc($result)):
		?> 

		<tr>

			<td><?php echo $row['Reg_no']; ?></td>
			<td><?php echo $row['Cust_name']; ?></td>
			<td><?php echo $row['Model']; ?></td>
			<td><?php echo $row['cc']; ?></td>
			<td><?php echo $row['yr']; ?></td>
			<td><?php echo $row['kms']; ?></td>
            <td><?php echo $row['WARRANTY']; ?></td>
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
</body>