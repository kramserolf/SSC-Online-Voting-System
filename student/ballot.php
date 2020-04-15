<?php  
	ob_start();
	include '../dbcon.php';
	include 'student-login.php';
	if (!isset($_SESSION['id_number'])) {
		header('location: ../');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="text/css" href="../admin/assets/favicon.ico">

<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<!-- custom css -->
<link rel="stylesheet" type="text/css" href="assets/ballot.css">

</head>
<body>
	<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand mr-auto" href="#!">
			Voting Ballot
		</a>
	  <a class="navbar-brand ml-auto" href="#!">
	  	<?php  
	  		echo $_SESSION['id_number'] ;
	  	?>
	  	<p hidden><?php $_SESSION['id_num'] ?></p>
	  </a>
	</nav>
	<form method="POST" action="function/addVote.php">

		<?php  
			include 'ballot_template.php';
			include 'ballot_layout.php';
		?>
		
		<div class="pb-md-2 text-center">
			<button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#castvote">Cast Vote</button>
		</div>
		<!-- <div class="pb-md-2 text-center">
			<a href="function/addVote.php" class="btn btn-primary mb-4" onclick="return confirm('Are you sure your?')">Cast Vote</a>
		</div> -->

		<!-- modal for confirmation -->
		<!-- Modal -->
		<div class="modal fade" id="castvote" tabindex="-1" role="dialog" aria-labelledby="castvoteLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h6 class="modal-title" id="castvoteLableCenter">Confirmation</h6>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body" id="modal-body">
		        Are you sure you want to cast your vote now?
		      </div>
		      <div class="modal-footer">
		      	<button type="submit" name="btnCast" class="btn btn-primary" id="formsubmitbutton" onclick="ButtonClicked()">Yes</button>
		      	<button type="button" class="btn btn-secondary" data-dismiss="modal" id="formsubmitcancel">Cancel</button>
		      </div>
		      	<div id="buttonreplacement" style="display:none;" class="text-center">
					<span class="mr-2 text-center">Your vote is being processed...<br></span><img src="assets/loader.gif" alt="loading..." style="width: 30px; height: auto; padding-bottom: 22px;">
		        </div>
		    </div>
		  </div>
		</div>
	</form>
	

<!-- jquery -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>	
<!-- bootstrap js -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!-- checkbox js -->
<script type="text/javascript" src="assets/ballot.js"></script>
<script type="text/javascript">
function ButtonClicked()
{
   document.getElementById("formsubmitbutton").style.display = "none"; // to undisplay
   document.getElementById("formsubmitcancel").style.display = "none"; // to undisplay
   document.getElementById("modal-body").style.display = "none"; // to undisplay
   document.getElementById("buttonreplacement").style.display = ""; // to display
   return true;
}
var FirstLoading = true;
function RestoreSubmitButton()
{
   if( FirstLoading )
   {
      FirstLoading = false;
      return;
   }
   document.getElementById("formsubmitbutton").style.display = ""; // to display
   document.getElementById("buttonreplacement").style.display = "none"; // to undisplay
}
// To disable restoring submit button, disable or delete next line.
document.onfocus = RestoreSubmitButton;
</script>
</body>
</html>