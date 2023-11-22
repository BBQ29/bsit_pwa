<!DOCTYPE html>
<html>
<head>
	<title>PHP/MySQLi CRUD Operation using Bootstrap/Modal</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:auto;">
	<span style="font-size:25px; color:blue"><center class="animate__animated animate__pulse animate__infinite infinite"><strong>Event-Driven Programming Progressive Web-Application</strong></center></span>	
		<span class="pull-left animate__animated animate__bounce animate__infinite infinite"><a href="#addnew" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Birthdate</th>
				<th>Address</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				include('conn.php');
				
				$query=mysqli_query($conn,"select * from `user`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo ucwords($row['firstname']); ?></td>
						<td></td>
						<td><?php echo ucwords($row['lastname']); ?></td>
						<td></td>
						<td><?php echo $row['address']; ?></td>
						<td>
							<a href="#show_info<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open animate__animated animate__rubberBand animate__infinite infinite"></span> Show Info</a> || 
							<a href="#edit<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-primary animate__animated animate__jackInTheBox btn-edit"><span class="glyphicon glyphicon-edit animate__animated animate__swing animate__infinite infinite"></span> Edit</a> || 
							<a href="#del<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-danger animate__animated animate__headShake animate__infinite infinite"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>
</body>
</html>