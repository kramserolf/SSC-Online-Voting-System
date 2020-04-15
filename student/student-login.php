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
		$voted = mysqli_query($conn, "SELECT * FROM students WHERE id_number = '$id_number' and vote_status = 'Voted'") or die(mysqli_error($voted));
		// check if existing
		$numrow = mysqli_num_rows($query);
		$checkvoted = mysqli_num_rows($voted);
		// validate
		if ($numrow > 0) {
			while ($row = mysqli_fetch_array($query)) {
			    $_SESSION['id_number'] = $row['id_number'];
			    $_SESSION['id_num'] = $row['id_number'];
			} 
				header('location: student/ballot.php');
				exit();
			} elseif ($checkvoted > 0){
				echo '
					<script>
						alert("You can only vote once.");
					</script>
				';
			}
			else {
				echo '
				<script>alert("ID number does not exist.")</script>
				';
			}
			// election ended query
			$ended = mysqli_query($conn, "SELECT * FROM students WHERE id_number = '$id_number' and vote_status = 'Inactive'") or die(mysqli_error($ended));
			$checkelection = mysqli_num_rows($ended);
			if ($checkelection > 0) {
				header('location: student/expired.php');
				exit();
			}
		}
	}
	
?>