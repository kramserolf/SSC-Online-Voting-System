<?php  
	include('../../dbcon.php');
	// president
	$pres = mysqli_query($conn, "SELECT votes.candidate_id as id, COUNT(candidates.id) as can_id, candidates.position as position, candidates.name as name FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id where position = 'President'GROUP BY id ORDER BY can_id DESC");
	$row = mysqli_fetch_array($pres); 
	// vice president
	$vpres = mysqli_query($conn, "SELECT votes.candidate_id as id, COUNT(candidates.id) as can_id, candidates.position as position, candidates.name as name FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id where position = 'Vice President'GROUP BY id ORDER BY can_id DESC");
	$row2 = mysqli_fetch_array($vpres); 
	// secretary
	$sec = mysqli_query($conn, "SELECT votes.candidate_id as id, COUNT(candidates.id) as can_id, candidates.position as position, candidates.name as name FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id where position = 'Secretary'GROUP BY id ORDER BY can_id DESC");
	$row3 = mysqli_fetch_array($sec); 
	// treasurer
	$treas = mysqli_query($conn, "SELECT votes.candidate_id as id, COUNT(candidates.id) as can_id, candidates.position as position, candidates.name as name FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id where position = 'Treasurer'GROUP BY id ORDER BY can_id DESC");
	$row4 = mysqli_fetch_array($treas); 
		// auditor
	$aud = mysqli_query($conn, "SELECT votes.candidate_id as id, COUNT(candidates.id) as can_id, candidates.position as position, candidates.name as name FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id where position = 'Auditor'GROUP BY id ORDER BY can_id DESC");
	$row5 = mysqli_fetch_array($aud);
	// Business Manager
	$bus = mysqli_query($conn, "SELECT votes.candidate_id as id, COUNT(candidates.id) as can_id, candidates.position as position, candidates.name as name FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id where position = 'Business Manager'GROUP BY id ORDER BY can_id DESC");
	$row6 = mysqli_fetch_array($bus);
		// PRO
	$pro = mysqli_query($conn, "SELECT votes.candidate_id as id, COUNT(candidates.id) as can_id, candidates.position as position, candidates.name as name FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id where position = 'P.R.O' GROUP BY id ORDER BY can_id DESC");
	$row7 = mysqli_fetch_array($pro);
		// sgt male
	$sgtm = mysqli_query($conn, "SELECT votes.candidate_id as id, COUNT(candidates.id) as can_id, candidates.position as position, candidates.name as name FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id where position = 'Sgt. at Arms(Male)'GROUP BY id ORDER BY can_id DESC");
	$row8 = mysqli_fetch_array($sgtm);
		// sgt female
	$sgtf = mysqli_query($conn, "SELECT votes.candidate_id as id, COUNT(candidates.id) as can_id, candidates.position as position, candidates.name as name FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id where position = 'Sgt. at Arms(Female)'GROUP BY id ORDER BY can_id DESC");
	$row9 = mysqli_fetch_array($sgtf);
		// Religious
	$rel = mysqli_query($conn, "SELECT votes.candidate_id as id, COUNT(candidates.id) as can_id, candidates.position as position, candidates.name as name FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id where position = 'Religious Coordinator'GROUP BY id ORDER BY can_id DESC");
	$row10 = mysqli_fetch_array($rel);
		// Socio Cultural
	$socio = mysqli_query($conn, "SELECT votes.candidate_id as id, COUNT(candidates.id) as can_id, candidates.position as position, candidates.name as name FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id where position = 'Socio Cultural'GROUP BY id ORDER BY can_id DESC");
	$row11 = mysqli_fetch_array($socio);

		// sports coordinator
	$sports = mysqli_query($conn, "SELECT votes.candidate_id as id, COUNT(candidates.id) as can_id, candidates.position as position, candidates.name as name FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id where position = 'Sports Coordinator'GROUP BY id ORDER BY can_id DESC");
	$row12 = mysqli_fetch_array($sports);
?>