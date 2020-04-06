<?php  
	include '../../dbcon.php';
		// fields to be submit
		$course = $_POST['course'];
		$status = "Active";
		$id_number = $_POST['id_number'];
		$name = $_POST['name'];
		$year = $_POST['year'];

		$id_number2 = $_POST['id_number2'];
		$name2 = $_POST['name2'];
		$year2 = $_POST['year2'];

		$id_number3 = $_POST['id_number3'];
		$name3 = $_POST['name3'];
		$year3 = $_POST['year3'];

		$id_number4 = $_POST['id_number4'];
		$name4 = $_POST['name4'];
		$year4 = $_POST['year4'];

		$id_number5 = $_POST['id_number5'];
		$name5 = $_POST['name5'];
		$year5 = $_POST['year5'];

		$id_number6 = $_POST['id_number6'];
		$name6 = $_POST['name6'];
		$year6 = $_POST['year6'];

		$id_number7 = $_POST['id_number7'];
		$name7 = $_POST['name7'];
		$year7 = $_POST['year7'];

		$id_number8 = $_POST['id_number8'];
		$name8 = $_POST['name8'];
		$year8 = $_POST['year8'];

		$id_number9 = $_POST['id_number9'];
		$name9 = $_POST['name9'];
		$year9 = $_POST['year9'];

		$id_number10 = $_POST['id_number10'];
		$name10 = $_POST['name10'];
		$year10 = $_POST['year10'];

		// update the data
		$sql = mysqli_query($conn, "INSERT INTO students (id_number, name, course, year, vote_status) VALUES 
			('$id_number', '$name', '$course', '$year', '$status'),
			('$id_number2', '$name2', '$course', '$year2', '$status'),
			('$id_number3', '$name3', '$course', '$year3', '$status'),
			('$id_number4', '$name4', '$course', '$year4', '$status'),
			('$id_number5', '$name5', '$course', '$year5', '$status'),
			('$id_number6', '$name6', '$course', '$year6', '$status'),
			('$id_number7', '$name7', '$course', '$year7', '$status'),
			('$id_number8', '$name8', '$course', '$year8', '$status'),
			('$id_number9', '$name9', '$course', '$year9', '$status'),
			('$id_number10', '$name10', '$course', '$year10', '$status')
			") or die(mysqli_error($sql));
		// proceed if true
		if (isset($sql)) {
			header('location: ../view/add_multiple_student.php');
			exit();
		} else {
			// proceed if false
			echo '
				<script>alert("Something went wrong. Please try again.");</script>
			';	
		}
?>