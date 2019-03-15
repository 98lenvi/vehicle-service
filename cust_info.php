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
<form class="form-horizontal" id="form_members" role="form" action="cust_input.php" method="POST">
<legend>Customer Information</legend>
<div class="form-group">
    <label for="Cust_no" class="col-sm-2">Customer Number</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Cust_no" id="Cust_no" placeholder="Customer Number">
    </div>
    <label for="Cust_name" class="col-sm-2">Customer Name</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Cust_name" id="Cust_name" placeholder="Customer Name">
    </div>
    <label for="Cust_phone" class="col-sm-2">Customer Phone</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Cust_phone" id="Cust_phone" placeholder="Customer Phone">
    </div>
    <label for="Cust_ad" class="col-sm-2">Customer Address</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Cust_ad" id="Cust_ad" placeholder="Customer Address">
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
			<th>Customer number</th>
			<th>Customer name</th>
			<th>Customer phone</th>
			<th>Customer address</th>
		</tr>
	</thead>

	<tbody>
		<?php

			$connection = mysqli_connect('localhost', 'root', ''); 
			mysqli_select_db($connection, 'project');

			$query = "SELECT * FROM cust_info";
			$result = mysqli_query($connection, $query);

			

			while($row = mysqli_fetch_assoc($result)):
		?> 

		<tr>

			<td><?php echo $row['Cust_no']; ?></td>
			<td><?php echo $row['Cust_name']; ?></td>
			<td><?php echo $row['Cust_phone']; ?></td>
			<td><?php echo $row['Cust_ad']; ?></td>
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