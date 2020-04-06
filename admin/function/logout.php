<?php  
	session_start();
	$_SESSION['username'] = NULL;
	session_unset();
	session_destroy();
	header('location: ../');
	exit();
?>