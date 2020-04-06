<?php  
	// include the database connection
	include('../../dbcon.php');

	// get the selected id
	$id = $_GET['id'];
	// delete query
	$sql = mysqli_query($conn, "DELETE FROM candidates WHERE id = '$id'");
	// proceed if true
	if ($sql == true) {
		header('location: ../view/candidates.php');
		exit();
	} else {
		// proceed if wrong
		echo '
			<script>alert("Something went wrong. Please try again.");</script>
		';
	}
?>