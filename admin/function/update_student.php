<?php  
	include '../../dbcon.php';
	// when the user click the submit button
	if (isset($_POST['submit'])) {
		// fields to be submit
		$id = $_POST['update_id'];
		$id_number = $_POST['id_number'];
		$fullname = $_POST['fullname'];
		$course = $_POST['course'];
		$year = $_POST['year'];
		$status = $_POST['vote_status'];
		// update the data
		$update = mysqli_query($conn, "UPDATE students SET id_number = '$id_number', name = '$fullname', course = '$course', year = '$year', vote_status = '$status' WHERE id = '$id'") or die(mysqli_error($check));
		// proceed if true
		if ($update == true) {
			header('location: '.$_SERVER['PHP_SELF']);
			exit();
			 // header("location: ".$_SERVER['REQUEST_URI']);
		} else {
			// proceed if false
			echo '
				<script>alert("Something went wrong. Please try again.");</script>
			';	
			}
	}
?>