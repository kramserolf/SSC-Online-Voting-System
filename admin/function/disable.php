<?php  
	include('../../dbcon.php');
	// enable query
	$enable = mysqli_query($conn, "UPDATE students SET vote_status = 'Inactive' WHERE vote_status = 'Active'") or die(mysqli_error($enable));
	// check
	if ($enable == true) {
		echo '
			<script>
				alert("The election has ended.");
				location.replace("../view/dashboard.php");
			</script>
		';	
	}
?>