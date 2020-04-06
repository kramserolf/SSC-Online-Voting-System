<?php  
	session_start();
	$_SESSION['id_number'] = NULL;
	session_unset();
	session_destroy();
	header('location: ../../success.php');
	exit();
?>