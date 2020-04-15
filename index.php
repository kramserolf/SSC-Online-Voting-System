<?php  
	include 'dbcon.php';
	include 'student/student-login.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="shortcut icon" type="text/css" href="favicon.ico">
<link rel=stylesheet href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel=stylesheet type="text/css" href="student/assets/css/style.css">
<title>Web-Based SSC Voting</title>
</head>
<body>
<div class=container>
<div class="row justify-content-center">
<div class=col-md-5>
<form method=POST>
<div class="card bg-transparent border-white">
<div class=card-header>
Login to start voting <i class="fa fa-lock ml-1"></i>
</div>
<div class=card-body>
<div class=form-group>
<label>ID Number:</label>
<input name=id_number class="form-control" id=id_num placeholder="Enter your Student ID Number" required>
</div>

	<button type=submit name=submit value=Login id=formsubmitbutton class="btn btn-info border-white" onclick="ButtonClicked()"><i class="fa fa-unlock mr-1"></i>Login</button>
	<div class="float-right mt-2 ml-auto" id="canvassing">
		<a href="canvassing.php" target="_blank" class="text-white text-decoration-none">Canvassing <i class="fa fa-hourglass-start text-white"></i></a>
	</div>

<span id=buttonreplacement style="margin-left: 14px;display:none;">
<img src="//www.willmaster.com/images/preload.gif" alt=loading...>
</span>
</div>
</div>
</form>
</div>
</div>
	<footer class="fixed-bottom text-right mr-3 mb-2">
		<a href="#" class="text-decoration-none text-white">v.1.0</a>
	</footer>
	<?php include 'student/about-modal.php'; ?>
</div>
<?php include('student/assets/js/cdn.php'); ?>
<script>function ButtonClicked()
{document.getElementById("formsubmitbutton").style.display="none";document.getElementById("buttonreplacement").style.display="";document.getElementById("canvassing").style.display="none";return true;}
var FirstLoading=true;function RestoreSubmitButton()
{if(FirstLoading)
{FirstLoading=false;return;}
document.getElementById("formsubmitbutton").style.display="";document.getElementById("buttonreplacement").style.display="none";}</script>
</body>
</html>