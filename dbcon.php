<?php  
	$conn = mysqli_connect('localhost', 'root', '', 'project1');

	if (!isset($conn)) {
		echo 'Cannot connect to database';
	}
	return $conn;
?>