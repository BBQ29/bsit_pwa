<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="firstname">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Middle Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="middlename">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Last Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lastname">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Birthdate:</label>
						</div>
						<div class="col-lg-10">
							<input type="date" class="form-control" name="birthdate">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Age:</label>
						</div>
						<div class="col-lg-10">
							<input type="number" class="form-control" name="age" readonly>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Address:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="address">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Contact No.:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="contact_no">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Civil Status:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="civil_stat">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Gender:</label>
						</div>
						<div class="col-lg-10">
							<select class="form-control" name="gender">
								<option value="Male"></option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="LGBTQIA+">LGBTQIA+</option>
							</select>
						</div>
					</div>


					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Education Level:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="education_level">
						</div>
					</div>

                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>


	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Listen for changes in the birthdate input
        $('input[name="birthdate"]').on('change', function () {
            // Get the selected birthdate
            var birthdate = new Date($(this).val());
            
            // Calculate the age
            var today = new Date();
            var age = today.getFullYear() - birthdate.getFullYear();
            
            // Adjust age if the birthday hasn't occurred yet this year
            if (today.getMonth() < birthdate.getMonth() || (today.getMonth() === birthdate.getMonth() && today.getDate() < birthdate.getDate())) {
                age--;
            }

            // Set the calculated age to the age input
            $('input[name="age"]').val(age);
        });
    });
</script>
