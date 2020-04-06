<?php  
	include 'dbcon.php';
	include 'student/student-login.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Web-Based SSC Voting</title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<form method="POST">
					<div class="card mt-4">
						<div class="card-header">
							Login to start voting <i class="fa fa-lock ml-1"></i>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>ID Number:</label>
								<input type="text" name="id_number" class="form-control" placeholder="Enter your Student ID Number" required>
							</div>
							<button type="submit" name="submit" value="Login" class="btn btn-primary"><i class="fa fa-unlock mr-1"></i>Login</button>
						</div>
					</div>
				</form>
			</div>
			<div id="message"></div>
		</div>
	</div>

<!-- jquery js -->
<script src="student/assets/js/jquery.min.js" type="text/javascript"></script>
<!-- bootstrap 4 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>