<?php  
	// show the table of cics
	function cics(){
		include '../../dbcon.php';
		$sql = mysqli_query($conn, "SELECT * FROM students WHERE course = 'BSIT' or course ='BLISS'") or die(mysqli_error($sql));

		foreach ($sql as $row) {
			include '../modals/updateStudentModal.php';
			echo '
				<tr>
					<td>'.$row['id_number'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['course'].' - '.$row['year'].'</td>
					<td>'.$row['vote_status'].'</td>
					<td>
						<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editStudModal'.$row['id'].'" title="Edit"><i class="fas fa-pencil-alt"></i>Edit</button>
						<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delCandModal'.$row['id'].'"  title="Delete"><i class="fas fa-trash-alt"></i>Delete</button>
					</td>
				</tr>	
			';
			include '../modals/deleteCandidateModal.php';
			include '../function/delete_student_cics.php';
		}
	}

		// show the table of educ
	function educ(){
		include '../../dbcon.php';
		$sql = mysqli_query($conn, "SELECT * FROM students WHERE course = 'BSED' or course ='BEED'") or die(mysqli_error($sql));

		foreach ($sql as $row) {
			include '../modals/updateStudentModal.php';
			echo '
				<tr>
					<td>'.$row['id_number'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['course'].' - '.$row['year'].'</td>
					<td>'.$row['vote_status'].'</td>
					<td>
						<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editStudModal'.$row['id'].'" title="Edit"><i class="fas fa-pencil-alt"></i>Edit</button>
						<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delCandModal'.$row['id'].'"  title="Delete"><i class="fas fa-trash-alt"></i>Delete</button>
					</td>
				</tr>	
			';
			include '../modals/deleteCandidateModal.php';
			include '../function/delete_student_educ.php';
		}
	}

		// show the table of bsba
	function bsba(){
		include '../../dbcon.php';
		$sql = mysqli_query($conn, "SELECT * FROM students WHERE course = 'BSBA' or course ='ABEC'") or die(mysqli_error($sql));

		foreach ($sql as $row) {
			include '../modals/updateStudentModal.php';
			echo '
				<tr>
					<td>'.$row['id_number'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['course'].' - '.$row['year'].'</td>
					<td>'.$row['vote_status'].'</td>
					<td>
						<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editStudModal'.$row['id'].'" title="Edit"><i class="fas fa-pencil-alt"></i>Edit</button>
						<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delCandModal'.$row['id'].'"  title="Delete"><i class="fas fa-trash-alt"></i>Delete</button>
					</td>
				</tr>	
			';
			include '../modals/deleteCandidateModal.php';
			include '../function/delete_student_bsba.php';
		}
	}

		// show the table of bssw
	function bssw(){
		include '../../dbcon.php';
		$sql = mysqli_query($conn, "SELECT * FROM students WHERE course = 'BSSW' or course ='BSTM'") or die(mysqli_error($sql));

		foreach ($sql as $row) {
			include '../modals/updateStudentModal.php';
			echo '
				<tr>
					<td>'.$row['id_number'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['course'].' - '.$row['year'].'</td>
					<td>'.$row['vote_status'].'</td>
					<td>
						<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editStudModal'.$row['id'].'" title="Edit"><i class="fas fa-pencil-alt"></i>Edit</button>
						<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delCandModal'.$row['id'].'"  title="Delete"><i class="fas fa-trash-alt"></i>Delete</button>
					</td>
				</tr>	
			';
			include '../modals/deleteCandidateModal.php';
			include '../function/delete_student_bssw.php';
		}
	}

		// show the table of crim
	function crim(){
		include '../../dbcon.php';
		$sql = mysqli_query($conn, "SELECT * FROM students WHERE course = 'BSCRIM'") or die(mysqli_error($sql));

		foreach ($sql as $row) {
			include '../modals/updateStudentModal.php';
			echo '
				<tr>
					<td>'.$row['id_number'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['course'].' - '.$row['year'].'</td>
					<td>'.$row['vote_status'].'</td>
					<td>
						<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editStudModal'.$row['id'].'" title="Edit"><i class="fas fa-pencil-alt"></i>Edit</button>
						<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delCandModal'.$row['id'].'"  title="Delete"><i class="fas fa-trash-alt"></i>Delete</button>
					</td>
				</tr>	
			';
			include '../modals/deleteCandidateModal.php';
			include '../function/delete_student_crim.php';
		}
	}
?>