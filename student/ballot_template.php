<?php  
	// president
	function pres(){
		include '../dbcon.php';

		// retrieve all the students data
		$sql = mysqli_query($conn, "SELECT * FROM candidates where position = 'President'");

		while ($row = mysqli_fetch_array($sql)) {
		    echo '
		    	<img src="../admin/assets/img/'.$row['img'].'"><br>

		    		<strong>Name: </strong>'.$row['name'].'<br>
		    		<strong>Department: </strong>'.$row['course'].' - '.$row['year'].'<br>
		    		<strong>Partylist: </strong>'.$row['party'].'<br>
		    		<div id="chkbox">
		    			<strong>Vote: </strong><input type="checkbox" value="'.$row['id'].'"name = "pres" class="pres">
		    		</div>
		    ';
		}
	}
	// vice president
	function vpres(){
			include '../dbcon.php';

			// retrieve all the students data
			$sql = mysqli_query($conn, "SELECT * FROM candidates where position = 'Vice President'");

			while ($row = mysqli_fetch_array($sql)) {
			    echo '
			    	<img src="../admin/assets/img/'.$row['img'].'"><br>

			    		<strong>Name: </strong>'.$row['name'].'<br>
			    		<strong>Department: </strong>'.$row['course'].' - '.$row['year'].'<br>
			    		<strong>Partylist: </strong>'.$row['party'].'<br>
			    		<div id="chkbox">
		    			<strong>Vote: </strong><input type="checkbox" value="'.$row['id'].'"name = "vpres" class="vpres">
		    		</div>
			    ';
			}
		}
		// secretary
		function sec(){
			include '../dbcon.php';

			// retrieve all the students data
			$sql = mysqli_query($conn, "SELECT * FROM candidates where position = 'Secretary'");

			while ($row = mysqli_fetch_array($sql)) {
			    echo '
			    	<img src="../admin/assets/img/'.$row['img'].'"><br>

			    		<strong>Name: </strong>'.$row['name'].'<br>
			    		<strong>Department: </strong>'.$row['course'].' - '.$row['year'].'<br>
			    		<strong>Partylist: </strong>'.$row['party'].'<br>
			    		<div id="chkbox">
		    			<strong>Vote: </strong><input type="checkbox" value="'.$row['id'].'"name = "sec" class="sec">
		    			</div>
			    ';
			}
		}
		// treasurer
		function treas(){
			include '../dbcon.php';

			// retrieve all the students data
			$sql = mysqli_query($conn, "SELECT * FROM candidates where position = 'Treasurer'");

			while ($row = mysqli_fetch_array($sql)) {
			    echo '
			    	<img src="../admin/assets/img/'.$row['img'].'"><br>

			    		<strong>Name: </strong>'.$row['name'].'<br>
			    		<strong>Department: </strong>'.$row['course'].' - '.$row['year'].'<br>
			    		<strong>Partylist: </strong>'.$row['party'].'<br>
			    		<div id="chkbox">
		    			<strong>Vote: </strong><input type="checkbox" value="'.$row['id'].'"name = "treas" class="treas">
		    			</div>
			    ';
			}
		}

		// auditor
		function aud(){
			include '../dbcon.php';

			// retrieve all the students data
			$sql = mysqli_query($conn, "SELECT * FROM candidates where position = 'Auditor'");

			while ($row = mysqli_fetch_array($sql)) {
			    echo '
			    	<img src="../admin/assets/img/'.$row['img'].'"><br>

			    		<strong>Name: </strong>'.$row['name'].'<br>
			    		<strong>Department: </strong>'.$row['course'].' - '.$row['year'].'<br>
			    		<strong>Partylist: </strong>'.$row['party'].'<br>
			    		<div id="chkbox">
		    			<strong>Vote: </strong><input type="checkbox" value="'.$row['id'].'"name = "aud" class="aud">
		    			</div>
			    ';
			}
		}

		// business manager
		function bus(){
			include '../dbcon.php';

			// retrieve all the students data
			$sql = mysqli_query($conn, "SELECT * FROM candidates where position = 'Business Manager'");

			while ($row = mysqli_fetch_array($sql)) {
			    echo '
			    	<img src="../admin/assets/img/'.$row['img'].'"><br>

			    		<strong>Name: </strong>'.$row['name'].'<br>
			    		<strong>Department: </strong>'.$row['course'].' - '.$row['year'].'<br>
			    		<strong>Partylist: </strong>'.$row['party'].'<br>
			    		<div id="chkbox">
		    			<strong>Vote: </strong><input type="checkbox" value="'.$row['id'].'"name = "bus" class="bus">
		    			</div>
			    ';
			}
		}
		// PRO
		function pro(){
			include '../dbcon.php';

			// retrieve all the students data
			$sql = mysqli_query($conn, "SELECT * FROM candidates where position = 'P.R.O'");

			while ($row = mysqli_fetch_array($sql)) {
			    echo '
			    	<img src="../admin/assets/img/'.$row['img'].'"><br>

			    		<strong>Name: </strong>'.$row['name'].'<br>
			    		<strong>Department: </strong>'.$row['course'].' - '.$row['year'].'<br>
			    		<strong>Partylist: </strong>'.$row['party'].'<br>
			    		<div id="chkbox">
		    			<strong>Vote: </strong><input type="checkbox" value="'.$row['id'].'"name = "pro" class="pro">
		    			</div>
			    ';
			}
		}
		// sgt at arms male
		function sgt_male(){
			include '../dbcon.php';

			// retrieve all the students data
			$sql = mysqli_query($conn, "SELECT * FROM candidates where position = 'Sgt. at Arms(Male)'");

			while ($row = mysqli_fetch_array($sql)) {
			    echo '
			    	<img src="../admin/assets/img/'.$row['img'].'"><br>

			    		<strong>Name: </strong>'.$row['name'].'<br>
			    		<strong>Department: </strong>'.$row['course'].' - '.$row['year'].'<br>
			    		<strong>Partylist: </strong>'.$row['party'].'<br>
			    		<div id="chkbox">
		    			<strong>Vote: </strong><input type="checkbox" value="'.$row['id'].'"name = "sgt_male" class="sgt_male">
		    			</div>
			    ';
			}
		}

		// sgt at arms female
		function sgt_female(){
			include '../dbcon.php';

			// retrieve all the students data
			$sql = mysqli_query($conn, "SELECT * FROM candidates where position = 'Sgt. at Arms(Female)'");

			while ($row = mysqli_fetch_array($sql)) {
			    echo '
			    	<img src="../admin/assets/img/'.$row['img'].'"><br>

			    		<strong>Name: </strong>'.$row['name'].'<br>
			    		<strong>Department: </strong>'.$row['course'].' - '.$row['year'].'<br>
			    		<strong>Partylist: </strong>'.$row['party'].'<br>
			    		<div id="chkbox">
		    			<strong>Vote: </strong><input type="checkbox" value="'.$row['id'].'"name = "sgt_female" class="sgt_female">
		    			</div>
			    ';
			}
		}

		// religous coordinator
		function rel(){
			include '../dbcon.php';

			// retrieve all the students data
			$sql = mysqli_query($conn, "SELECT * FROM candidates where position = 'Religious Coordinator'");

			while ($row = mysqli_fetch_array($sql)) {
			    echo '
			    	<img src="../admin/assets/img/'.$row['img'].'"><br>

			    		<strong>Name: </strong>'.$row['name'].'<br>
			    		<strong>Department: </strong>'.$row['course'].' - '.$row['year'].'<br>
			    		<strong>Partylist: </strong>'.$row['party'].'<br>
			    		<div id="chkbox">
		    			<strong>Vote: </strong><input type="checkbox" value="'.$row['id'].'"name = "rel" class="rel">
		    			</div>
			    ';
			}
		}


		// socio-cultural coordinator
		function socio(){
			include '../dbcon.php';

			// retrieve all the students data
			$sql = mysqli_query($conn, "SELECT * FROM candidates where position = 'Socio Cultural'");

			while ($row = mysqli_fetch_array($sql)) {
			    echo '
			    	<img src="../admin/assets/img/'.$row['img'].'"><br>

			    		<strong>Name: </strong>'.$row['name'].'<br>
			    		<strong>Department: </strong>'.$row['course'].' - '.$row['year'].'<br>
			    		<strong>Partylist: </strong>'.$row['party'].'<br>
			    		<div id="chkbox">
		    			<strong>Vote: </strong><input type="checkbox" value="'.$row['id'].'"name = "socio" class="socio">
		    			</div>
			    ';
			}
		}


		// sports coordinator
		function sports(){
			include '../dbcon.php';

			// retrieve all the students data
			$sql = mysqli_query($conn, "SELECT * FROM candidates where position = 'Sports Coordinator'");

			while ($row = mysqli_fetch_array($sql)) {
			    echo '
			    	<img src="../admin/assets/img/'.$row['img'].'"><br>

			    		<strong>Name: </strong>'.$row['name'].'<br>
			    		<strong>Department: </strong>'.$row['course'].' - '.$row['year'].'<br>
			    		<strong>Partylist: </strong>'.$row['party'].'<br>
			    		<div id="chkbox">
		    			<strong>Vote: </strong><input type="checkbox" value="'.$row['id'].'"name = "sports" class="sports">
		    			</div>
			    ';
			}
		}
?>