<!DOCTYPE html>
<html>
<head>
	<?php include('../layouts/css.php'); ?>
</head>
<body>

<div class="container">
	<form method="POST" action="../function/multiple_add.php">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="col-md">
					<div class="form-group text-center">
						<label class="font-weight-bold">Course</label>
						<select class="custom-select" name="course">
							<option selected>Select Course</option>
							<option value="BSED">BSED</option>	
							<option value="BEED">BEED</option>
							<option value="BSIT">BSIT</option>
							<option value="BLISS">BLISS</option>
							<option value="BSBA">BSBA</option>
							<option value="ABEC">ABEC</option>
							<option value="BSSW">BSSW</option>
							<option value="BSTM">BSTM</option>
							<option value="BSCRIM">BSCRIM</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- 1st -->
		<div class="form-group row justify-content-center">
			<label class="col-form-label font-weight-bold">1. ID Number:</label>
			<div class="col-sm-3">
				<input type="text" name="id_number" placeholder="e.g BSIT-001"  class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Name:</label>
			<div class="col-sm-3">
				<input type="text" name="name" placeholder="e.g Flores, Mark G." class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Course:</label>
			<div class="col-sm-3">
				<select class="custom-select" name="year">
				<option selected>Select Year</option>
				<option value="1st year">1st year</option>
				<option value="2nd year">2nd year</option>
				<option value="3rd year">3rd year</option>
				<option value="4th year">4th year</option>
			</select>
			</div>
		</div>
		<!-- 2nd -->
		<div class="form-group row justify-content-center">
			<label class="col-form-label font-weight-bold">2. ID Number:</label>
			<div class="col-sm-3">
				<input type="text" name="id_number2"  class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Name:</label>
			<div class="col-sm-3">
				<input type="text" name="name2" class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Course:</label>
			<div class="col-sm-3">
				<select class="custom-select" name="year2">
				<option selected></option>
				<option value="1st year">1st year</option>
				<option value="2nd year">2nd year</option>
				<option value="3rd year">3rd year</option>
				<option value="4th year">4th year</option>
			</select>
			</div>
		</div>
		<!-- 3rd -->
		<div class="form-group row justify-content-center">
			<label class="col-form-label font-weight-bold">3. ID Number:</label>
			<div class="col-sm-3">
				<input type="text" name="id_number3"  class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Name:</label>
			<div class="col-sm-3">
				<input type="text" name="name3" class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Course:</label>
			<div class="col-sm-3">
				<select class="custom-select" name="year3">
				<option selected></option>
				<option value="1st year">1st year</option>
				<option value="2nd year">2nd year</option>
				<option value="3rd year">3rd year</option>
				<option value="4th year">4th year</option>
			</select>
			</div>
		</div>
		<!-- 4th -->
		<div class="form-group row justify-content-center">
			<label class="col-form-label font-weight-bold">4. ID Number:</label>
			<div class="col-sm-3">
				<input type="text" name="id_number4"  class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Name:</label>
			<div class="col-sm-3">
				<input type="text" name="name4" class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Course:</label>
			<div class="col-sm-3">
				<select class="custom-select" name="year4">
				<option selected></option>
				<option value="1st year">1st year</option>
				<option value="2nd year">2nd year</option>
				<option value="3rd year">3rd year</option>
				<option value="4th year">4th year</option>
			</select>
			</div>
		</div>
		<!-- 5th -->
		<div class="form-group row justify-content-center">
			<label class="col-form-label font-weight-bold">5. ID Number:</label>
			<div class="col-sm-3">
				<input type="text" name="id_number5"  class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Name:</label>
			<div class="col-sm-3">
				<input type="text" name="name5" class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Course:</label>
			<div class="col-sm-3">
				<select class="custom-select" name="year5">
				<option selected></option>
				<option value="1st year">1st year</option>
				<option value="2nd year">2nd year</option>
				<option value="3rd year">3rd year</option>
				<option value="4th year">4th year</option>
			</select>
			</div>
		</div>
		<!-- 6th -->
		<div class="form-group row justify-content-center">
			<label class="col-form-label font-weight-bold">6. ID Number:</label>
			<div class="col-sm-3">
				<input type="text" name="id_number6"  class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Name:</label>
			<div class="col-sm-3">
				<input type="text" name="name6" class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Course:</label>
			<div class="col-sm-3">
				<select class="custom-select" name="year6">
				<option selected></option>
				<option value="1st year">1st year</option>
				<option value="2nd year">2nd year</option>
				<option value="3rd year">3rd year</option>
				<option value="4th year">4th year</option>
			</select>
			</div>
		</div>
		<!-- 7th -->
		<div class="form-group row justify-content-center">
			<label class="col-form-label font-weight-bold">7. ID Number:</label>
			<div class="col-sm-3">
				<input type="text" name="id_number7"  class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Name:</label>
			<div class="col-sm-3">
				<input type="text" name="name7" class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Course:</label>
			<div class="col-sm-3">
				<select class="custom-select" name="year7">
				<option selected></option>
				<option value="1st year">1st year</option>
				<option value="2nd year">2nd year</option>
				<option value="3rd year">3rd year</option>
				<option value="4th year">4th year</option>
			</select>
			</div>
		</div>
		<!-- 8th -->
		<div class="form-group row justify-content-center">
			<label class="col-form-label font-weight-bold">8. ID Number:</label>
			<div class="col-sm-3">
				<input type="text" name="id_number8"  class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Name:</label>
			<div class="col-sm-3">
				<input type="text" name="name8" class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Course:</label>
			<div class="col-sm-3">
				<select class="custom-select" name="year8">
				<option selected></option>
				<option value="1st year">1st year</option>
				<option value="2nd year">2nd year</option>
				<option value="3rd year">3rd year</option>
				<option value="4th year">4th year</option>
			</select>
			</div>
		</div>
		<!-- 9th -->
		<div class="form-group row justify-content-center">
			<label class="col-form-label font-weight-bold">9. ID Number:</label>
			<div class="col-sm-3">
				<input type="text" name="id_number9"  class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Name:</label>
			<div class="col-sm-3">
				<input type="text" name="name9" class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Course:</label>
			<div class="col-sm-3">
				<select class="custom-select" name="year9">
				<option selected></option>
				<option value="1st year">1st year</option>
				<option value="2nd year">2nd year</option>
				<option value="3rd year">3rd year</option>
				<option value="4th year">4th year</option>
			</select>
			</div>
		</div>
		<!-- 10th -->
		<div class="form-group row justify-content-center">
			<label class="col-form-label font-weight-bold">10. ID Number:</label>
			<div class="col-sm-3">
				<input type="text" name="id_number10"  class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Name:</label>
			<div class="col-sm-3">
				<input type="text" name="name10" class="form-control">
			</div>
			<label class="col-form-label font-weight-bold">Course:</label>
			<div class="col-sm-3">
				<select class="custom-select" name="year10">
				<option selected></option>
				<option value="1st year">1st year</option>
				<option value="2nd year">2nd year</option>
				<option value="3rd year">3rd year</option>
				<option value="4th year">4th year</option>
			</select>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="text-center pb-md-2">
				<input type="submit" name="submit" class="btn btn-primary" value="Save">
			</div>
		</div>
	</form>
</div>

<?php include('../layouts/scripts.php'); ?>
</body>
</html>