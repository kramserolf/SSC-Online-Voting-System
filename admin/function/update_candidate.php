<?php  
	// include the database connection
	include('../../dbcon.php');
	if (isset($_POST['submit'])) {
		// define the fields
		$id = $_POST['update_id'];
		$position = $_POST['position'];
		$name = $_POST['name'];
		$course = $_POST['course'];
		$year = $_POST['year'];
		$party = $_POST['party'];
		$image = $_FILES['uploadImg']['name'];
		$tmpname = $_FILES['uploadImg']['tmp_name'];
		$destination = '../assets/img/';
		move_uploaded_file($tmpname, $destination.$image);

		// query
		$sql = mysqli_query($conn, "UPDATE candidates SET position = '$position', name = '$name', course = '$course', year = '$year', party = '$party', img = '$image' WHERE id = '$id'") or die(mysqli_error($sql));

		if ($sql == true) {
			header('location: ../view/candidates.php');
			exit();
		} else {
			echo '<script>
				alert("Encoutered error. Please try again.")
			</script>';
		}
	}
?>