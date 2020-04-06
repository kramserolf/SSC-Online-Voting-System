<?php  
	// declare if the session is started or not
	if (session_status() == PHP_SESSION_NONE) {
	session_start(); 
	}

	if (isset($_POST['submit'])) {
		// define the fields
		$username = $_POST['username'];
		$password = $_POST['password'];
		// select query 
		$query = mysqli_query($conn, "SELECT * FROM admins WHERE username = '$username' and password = '$password'") or die(mysqli_error($query));
		// check if existing
		$numrow = mysqli_num_rows($query);
		// validate
		if ($numrow > 0) {
			while ($row = mysqli_fetch_array($query)) {
			    $_SESSION['id'] = $row['id'];
			    $_SESSION['username'] = $row['username'];
			} 
				header('location: view/dashboard.php');
			}
			else {
				echo '
					<script>
						alert("Incorrect details.");
					</script>
				';	
			}
	}
?>