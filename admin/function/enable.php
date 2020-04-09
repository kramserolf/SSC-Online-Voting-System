<?php  
	include('../../dbcon.php');
	// enable query
	$enable = mysqli_query($conn, "UPDATE students SET vote_status = 'Active' WHERE vote_status = 'Inactive'") or die(mysqli_error($enable));
	// check
	if ($enable == true) {
		echo '
			<script>
				alert("The election has started.");
				location.replace("../view/dashboard.php");
			</script>
		';	
	}
?>