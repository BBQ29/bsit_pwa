<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from user where userid='".$row['userid']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Are you sure to delete <strong><?php echo ucwords($drow['firstname'].' '.$row['lastname']); ?></strong> from the list? This method cannot be undone.</center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['userid']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from user where userid='".$row['userid']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['userid']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="firstname" class="form-control" value="<?php echo $erow['firstname']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Middle Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="middlename" class="form-control" value="<?php echo $erow['middlename']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="lastname" class="form-control" value="<?php echo $erow['lastname']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Birth Date:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="birthdate" class="form-control" value="<?php echo $erow['birthdate']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Age:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="age" class="form-control" value="<?php echo $erow['age']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Address:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="address" class="form-control" value="<?php echo $erow['address']; ?>">
						</div>
					</div>

					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Contact No.:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="contact_no" class="form-control" value="<?php echo $erow['contact_no']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Civil Status:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="civil_stat" class="form-control" value="<?php echo $erow['civil_stat']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Gender:</label>
						</div>
						<div class="col-lg-10">
							<select class="form-control" name="gender">
								<!-- Placeholder option with an empty value -->
								<option value="" <?php echo ($erow['gender'] == '') ? 'selected' : ''; ?>></option>
								<!-- Options for Male, Female, and LGBTQIA+ -->
								<option value="Male" <?php echo ($erow['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
								<option value="Female" <?php echo ($erow['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
								<option value="LGBTQIA+" <?php echo ($erow['gender'] == 'LGBTQIA+') ? 'selected' : ''; ?>>LGBTQIA+</option>
							</select>
						</div>
					</div>

                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Show -->
    <div class="modal fade" id="show_info<?php echo $row['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Person's Information</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from user where userid='".$row['userid']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['userid']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="firstname" class="form-control" value="<?php echo $erow['firstname']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Middle Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="middlename" class="form-control" value="<?php echo $erow['middlename']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="lastname" class="form-control" value="<?php echo $erow['lastname']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Birth Date:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="birthdate" class="form-control" value="<?php echo $erow['birthdate']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Age:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="age" class="form-control" value="<?php echo $erow['age']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Address:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="address" class="form-control" value="<?php echo $erow['address']; ?>">
						</div>
					</div>

					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Contact No.:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="contact_no" class="form-control" value="<?php echo $erow['contact_no']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Civil Status:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="civil_stat" class="form-control" value="<?php echo $erow['civil_stat']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Gender:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="gender" class="form-control" value="<?php echo $erow['gender']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Exit</button>
                    </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->