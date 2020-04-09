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
			    $_SESSION['id_number'] = $row['id_number'];
			} 
				header('location: student/ballot.php');
				exit();
			}
			else {
				echo '
				<script>alert("ID number does not exist.")</script>
				';
			}
			// election ended query
			$ended = mysqli_query($conn, "SELECT * FROM students WHERE id_number = '$id_number' and vote_status = 'Inactive'") or die(mysqli_error($ended));
			$checkelection = mysqli_num_rows($ended);
			if ($checkelection) {
				header('location: student/expired.php');
				exit();
			}
		}
	}
	
?>