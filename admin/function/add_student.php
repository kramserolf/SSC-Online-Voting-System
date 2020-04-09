<?php  
	include '../../dbcon.php';
		// fields to be submit
		$id_number = $_POST['id_number'];
		$fullname = $_POST['fullname'];
		$course = $_POST['course'];
		$year = $_POST['year'];
		$status = 'Inactive';
		// update the data
		$sql = mysqli_query($conn, "INSERT INTO students (id_number, name, course, year, vote_status) VALUES ('$id_number', '$fullname', '$course', '$year', '$status')") or die(mysqli_error($sql));
		// proceed if true
		if (isset($sql)) {
			header('location: ../view/bsba.php');
			exit();
		} else {
			// proceed if false
			echo '
				<script>alert("Something went wrong. Please try again.");</script>
			';	
		}
?>