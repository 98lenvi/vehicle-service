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
<form class="form-horizontal" id="form_members" role="form" action="job_input.php" method="POST">
<legend>Job Information</legend>
<div class="form-group">
    <label for="Job_no" class="col-sm-2">Job Number</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Job_no" id="Job_no" placeholder="Job Number">
    </div>
    <label for="Reg_no" class="col-sm-2">Reg_no</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Reg_no" id="Reg_no" placeholder="Reg_no">
    </div>
    <label for="Part_name" class="col-sm-2">Part_name</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Part_name" id="Part_name" placeholder="Part_name">
    </div>
    <label for="Mech_name" class="col-sm-2">Mech_name</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Mech_name" id="Mech_name" placeholder="Mech_name">
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
			<th>Job number</th>
			<th>Vehicle number</th>
			<th>Part name</th>
			<th>Mechanic name</th>
		</tr>
	</thead>

	<tbody>
		<?php

			$connection = mysqli_connect('localhost', 'root', ''); 
			mysqli_select_db($connection, 'project');

			$query = "CALL clearall()";
			$result = mysqli_query($connection, $query);

			

			while($row = mysqli_fetch_assoc($result)):
		?> 

		<tr>

			<td><?php echo $row['Job_no']; ?></td>
			<td><?php echo $row['Reg_no']; ?></td>
			<td><?php echo $row['Part_name']; ?></td>
			<td><?php echo $row['Mech_name']; ?></td>
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