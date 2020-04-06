<?php  
	// include the database connection
	include('../../dbcon.php');

	// define the fields
	$position = $_POST['position'];
	$name = $_POST['name'];
	$course = $_POST['course'];
	$year = $_POST['year'];
	$party = $_POST['party'];
	$image = $_FILES['uploadImg']['name'];
	$tmpname = $_FILES['uploadImg']['tmp_name'];
	$destination = '../assets/img/';
	move_uploaded_file($tmpname, $destination.$image);

	// add query
	$sql = mysqli_query($conn, "INSERT INTO candidates (position, name, course, year, party, img) VALUES 
		('$position', '$name', '$course', '$year', '$party', '$image')
		") or die(mysqli_error($sql));

	// insert if correct
	if (isset($sql)) {
		header('location: ../view/candidates.php');
		exit();
	} else {
		echo '
			<script>alert("Something went wrong. Please try again.");</script>
		';
	}
?>