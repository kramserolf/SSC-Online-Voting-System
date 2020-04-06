<?php  
	if (isset($_POST['btnCast'])) {
		// president
		if (!ISSET($_POST['pres'])) {
			$_SESSION['pres'] = "";
		} else {
			$_SESSION['pres'] = $_POST['pres'];
		}
		// vice president
		if (!ISSET($_POST['vpres'])) {
			$_SESSION['vpres'] = "";
		} else {
			$_SESSION['vpres'] = $_POST['vpres'];
		}
		// secretary
		if (!ISSET($_POST['sec'])) {
			$_SESSION['sec'] = "";
		} else {
			$_SESSION['sec'] = $_POST['sec'];
		}
		// treasurer
		if (!ISSET($_POST['treas'])) {
			$_SESSION['treas'] = "";
		} else {
			$_SESSION['treas'] = $_POST['treas'];
		}
		// auditor
		if (!ISSET($_POST['aud'])) {
			$_SESSION['aud'] = "";
		} else {
			$_SESSION['aud'] = $_POST['aud'];
		}
		// business manager
		if (!ISSET($_POST['bus'])) {
			$_SESSION['bus'] = "";
		} else {
			$_SESSION['bus'] = $_POST['bus'];
		}
			// PRO
		if (!ISSET($_POST['pro'])) {
			$_SESSION['pro'] = "";
		} else {
			$_SESSION['pro'] = $_POST['pro'];
		}
		// sgt male
		if (!ISSET($_POST['sgt_male'])) {
			$_SESSION['sgt_male'] = "";
		} else {
			$_SESSION['sgt_male'] = $_POST['sgt_male'];
		}

		// sgt female
		if (!ISSET($_POST['sgt_female'])) {
			$_SESSION['sgt_female'] = "";
		} else {
			$_SESSION['sgt_female'] = $_POST['sgt_female'];
		}
		// religious
		if (!ISSET($_POST['rel'])) {
			$_SESSION['rel'] = "";
		} else {
			$_SESSION['rel'] = $_POST['rel'];
		}
		// socio
		if (!ISSET($_POST['socio'])) {
			$_SESSION['socio'] = "";
		} else {
			$_SESSION['socio'] = $_POST['socio'];
		}
		// sports
		if (!ISSET($_POST['sports'])) {
			$_SESSION['sports'] = "";
		} else {
			$_SESSION['sports'] = $_POST['sports'];
		}
	}
?>