<?php  
	include '../dbcon.php';
	include 'admin-login.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="text/css" href="../favicon.ico">
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Web-Based SSC Voting</title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<form method="POST">
					<div class="card mt-4">
						<div class="card-header">
							Login as Administrator <i class="fa fa-lock ml-1"></i>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Username:</label>
								<input type="text" name="username" class="form-control" placeholder="Enter your username" required>
							</div>
							<div class="form-group">
								<label>Password:</label>
								<input type="password" name="password" class="form-control" placeholder="Enter your password" id="password" required
								>
								<div class="custom-control custom-checkbox mt-2">
								  <input type="checkbox" class="custom-control-input" id="chkPass" onclick="showPassword()">
								  <label class="custom-control-label" for="chkPass" style="font-size: 0.95em;">Show password</label>
								</div>
							</div>
							
							<button type="submit" name="submit" value="Login" class="btn btn-primary btn"id="formsubmitbutton" onclick="ButtonClicked()"><i class="fa fa-unlock mr-1"></i>Login</button>
							<span id=buttonreplacement style="margin-left: 14px;display:none;">
							<img src="//www.willmaster.com/images/preload.gif" alt=loading...>
							</span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript" src="../student/assets/js/animation.js"></script>
<!-- show password js -->
<script type="text/javascript">
	function showPassword(){
		var x = document.getElementById("password");
		if (x.type === 'password') {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>
</body>
</html>