<?php  
	if (session_status() == PHP_SESSION_NONE) {
	session_start();
	include '../../dbcon.php';
	include 'session.php';
	if (isset($_POST['btnCast'])) {
		// retrieve all the vote fields
		$pres = $_SESSION['pres'];
		$vpres = $_SESSION['vpres'];
		$sec = $_SESSION['sec'];
		$treas = $_SESSION['treas'];
		$aud = $_SESSION['aud'];
		$bus = $_SESSION['bus'];
		$pro = $_SESSION['pro'];
		$sgt_male = $_SESSION['sgt_male'];
		$sgt_female = $_SESSION['sgt_female'];
		$rel = $_SESSION['rel'];
		$socio = $_SESSION['socio'];
		$sports = $_SESSION['sports'];
		$user = $_SESSION['id_number'];
						// insert logs
			$insertlogs = mysqli_query($conn, "INSERT INTO votes (candidate_id, student_id, created_at) VALUES 
				('$pres', '$user', now()),
				('$vpres', '$user', now()), 
				('$sec', '$user', now()), 
				('$treas', '$user', now()), 
				('$aud', '$user', now()), 
				('$bus', '$user', now()), 
				('$pro', '$user', now()),
				('$sgt_male', '$user', now()), 
				('$sgt_female', '$user', now()), 
				('$rel', '$user', now()), 
				('$socio', '$user', now()), 
				('$sports', '$user', now())  
				") or die(mysqli_error($insertlogs));

				// update the status of Active to Voted
				$update = mysqli_query($conn, "UPDATE students SET vote_status = 'Voted' WHERE id_number ='$user' ");

				if ($update == true) {
					echo '
						<script>location.replace("logout.php")</script>
					';	
			}
		}
	}
?>