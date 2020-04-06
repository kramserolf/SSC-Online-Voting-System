<?php  
	// include the database connection
	// declare if the session is started or not
	if (session_status() == PHP_SESSION_NONE) {
	session_start();
	if (isset($_POST['submit'])) {
		// define the fields
		$id_number = $_POST['id_number'];
		// select query 
		$query = mysqli_query($conn, "SELECT * FROM students WHERE id_number = '$id_number' and vote_status = 'Active'") or die(mysqli_error($query));
		// check if existing
		$numrow = mysqli_num_rows($query);
		// validate
		if ($numrow > 0) {
			while ($row = mysqli_fetch_array($query)) {
			    $_SESSION['id_num'] = $row['id'];
			    $_SESSION['id_number'] = $row['id_number'];
			} 
				header('location: student/ballot.php');
			}
			else {
				echo '
				<script>alert("Incorrect details.")</script>
				';
			}
	}
	}
	
?>