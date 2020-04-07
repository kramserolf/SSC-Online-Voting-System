<?php include('../../dbcon.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<!-- canvassing css -->
	<link rel="stylesheet" type="text/css" href="../assets/css/canvassing.css">
</head>
<body>
	<div class="d-flex text-black pt-3 pb-md-2">
	  <div class="w-100">
	    <h4 class="pl-5">Canvassing</h4>
	  </div>
	  <div class="flex-shrink-0 pr-5">
	    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-print mr-1"></i>Show Winners</a>
	  </div>
	</div>
	<div class="container">
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