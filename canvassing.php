<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="d-flex text-black pb-md-2 text-center">
	 	<div class="card-header w-100 text-white" style="background-color: #17a2b8;">Canvassing</div>
	</div>
		<div class="row">
			<div class="col-md-4">
				<table class="table table-bordered table-sm">
					<thead class="thead-light text-center">
						<tr>
							<th>President</th>
							<th>Votes</th>
						</tr>
					</thead>
					<?php  
						$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'President' GROUP BY id ORDER BY result desc");
							while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $row['position'] ?></td>
						<td class="text-right"><?php echo $row['result'] ?></td>
					</tr>
				<?php } ?>
				</table>
			</div>

			<div class="col-md-4">
				<table class="table table-bordered table-sm">
					<thead class="thead-light text-center">
						<tr>
							<th>Vice President</th>
							<th>Votes</th>
						</tr>
					</thead>
										<?php  
						$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Vice President' GROUP BY id ORDER BY result desc");
							while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $row['position'] ?></td>
						<td class="text-right"><?php echo $row['result'] ?></td>
					</tr>
				<?php } ?>
				</table>
			</div>

				<div class="col-md-4">
				<table class="table table-bordered table-sm">
					<thead class="thead-light text-center">
						<tr>
							<th>Secretary</th>
							<th>Votes</th>
						</tr>
					</thead>
									<?php  
						$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Secretary' GROUP BY id ORDER BY result desc");
							while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $row['position'] ?></td>
						<td class="text-right"><?php echo $row['result'] ?></td>
					</tr>
				<?php } ?>
				</table>
			</div>
			<!-- end of 1st row -->
		</div>
		<div class="row">
				<div class="col-md-4">
				<table class="table table-bordered table-sm">
					<thead class="thead-light text-center">
						<tr>
							<th>Treasurer</th>
							<th>Votes</th>
						</tr>
					</thead>
										<?php  
						$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Treasurer' GROUP BY id ORDER BY result desc");
							while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $row['position'] ?></td>
						<td class="text-right"><?php echo $row['result'] ?></td>
					</tr>
				<?php } ?>
				</table>
			</div>
				<div class="col-md-4">
				<table class="table table-bordered table-sm">
					<thead class="thead-light text-center">
						<tr>
							<th>Auditor</th>
							<th>Votes</th>
						</tr>
					</thead>
										<?php  
						$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Auditor' GROUP BY id ORDER BY result desc");
							while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $row['position'] ?></td>
						<td class="text-right"><?php echo $row['result'] ?></td>
					</tr>
				<?php } ?>
				</table>
			</div>
			<div class="col-md-4">
				<table class="table table-bordered table-sm">
					<thead class="thead-light text-center">
						<tr>
							<th>Business Manager</th>
							<th>Votes</th>
						</tr>
					</thead>
					<?php  
						$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Business Manager' GROUP BY id ORDER BY result desc");
							while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $row['position'] ?></td>
						<td class="text-right"><?php echo $row['result'] ?></td>
					</tr>
				<?php } ?>
				</table>
			</div>
			<!-- end of 2nd row -->
		</div>
		<div class="row">
				<div class="col-md-4">
				<table class="table table-bordered table-sm">
					<thead class="thead-light text-center">
						<tr>
							<th>P.R.O</th>
							<th>Votes</th>
						</tr>
					</thead>
										<?php  
						$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'P.R.O' GROUP BY id ORDER BY result desc");
							while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $row['position'] ?></td>
						<td class="text-right"><?php echo $row['result'] ?></td>
					</tr>
				<?php } ?>
				</table>
			</div>
				<div class="col-md-4">
				<table class="table table-bordered table-sm">
					<thead class="thead-light text-center">
						<tr>
							<th>Sgt. at Arms (Male)</th>
							<th>Votes</th>
						</tr>
					</thead>
										<?php  
						$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Sgt. at Arms(Male)' GROUP BY id ORDER BY result desc");
							while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $row['position'] ?></td>
						<td class="text-right"><?php echo $row['result'] ?></td>
					</tr>
				<?php } ?>
				</table>
			</div>
				<div class="col-md-4">
				<table class="table table-bordered table-sm">
					<thead class="thead-light text-center">
						<tr>
							<th>Sgt. at Arms (Female)</th>
							<th>Votes</th>
						</tr>
					</thead>
										<?php  
						$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Sgt. at Arms(Female)' GROUP BY id ORDER BY result desc");
							while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $row['position'] ?></td>
						<td class="text-right"><?php echo $row['result'] ?></td>
					</tr>
				<?php } ?>
				</table>
			</div>
			<!-- end of 3rd row -->
		</div>
		<div class="row">
				<div class="col-md-4">
				<table class="table table-bordered table-sm">
					<thead class="thead-light text-center">
						<tr>
							<th>Religious Coordinator</th>
							<th>Votes</th>
						</tr>
					</thead>
										<?php  
						$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Religious Coordinator' GROUP BY id ORDER BY result desc");
							while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $row['position'] ?></td>
						<td class="text-right"><?php echo $row['result'] ?></td>
					</tr>
				<?php } ?>
				</table>
			</div>
				<div class="col-md-4">
				<table class="table table-bordered table-sm">
					<thead class="thead-light text-center">
						<tr>
							<th>Socio Cultural</th>
							<th>Votes</th>
						</tr>
					</thead>
										<?php  
						$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Socio Cultural' GROUP BY id ORDER BY result desc");
							while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $row['position'] ?></td>
						<td class="text-right"><?php echo $row['result'] ?></td>
					</tr>
				<?php } ?>
				</table>
			</div>
				<div class="col-md-4">
				<table class="table table-bordered table-sm">
					<thead class="thead-light text-center">
						<tr>
							<th>Sports Coordinator</th>
							<th>Votes</th>
						</tr>
					</thead>
										<?php  
						$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Sports Coordinator' GROUP BY id ORDER BY result desc");
							while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $row['position'] ?></td>
						<td class="text-right"><?php echo $row['result'] ?></td>
					</tr>
				<?php } ?>
				</table>
			</div>
			<!-- end of 4th row -->
		</div>
	</div>
</body>
</html>