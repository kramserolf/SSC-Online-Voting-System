<?php  
	// delete candidate
	include '../../dbcon.php';
	$id = $_GET['id'];
	$query = mysqli_query($conn, "DELETE FROM students WHERE id = $id");
	header('location: ../view/bssw.php');
	exit();
?>
