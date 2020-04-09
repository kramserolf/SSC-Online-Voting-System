<?php include '../../dbcon.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="text/css" href="../../favicon.ico">
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Web-Based SSC Voting</title>
</head>
<body>
	<div class="wrapper">
		<div class="container-fluid">
			<div class="d-flex text-black pt-3 pb-2">
			  <div class="w-100">
			    <h4>Canvassing</h4>
			  </div>
			  <div class="flex-shrink-0">
			    <a href="winners.php" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-print mr-1"></i>Show winners</a>
			  </div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<table class="table table-bordered table-sm">
						<thead class="alert alert-info text-center">
							<tr>
								<th>President</th>
								<th>Votes</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'President' GROUP BY id ORDER BY result desc");
							foreach ($query as $row) {
							?>
							<tr>
								<td><?php echo $row['position'] ?></td>
								<td class="text-right"><?php echo $row['result'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-4">
					<table class="table table-bordered table-sm">
						<thead class="alert alert-info text-center">
							<tr>
								<th>Vice President</th>
								<th>Votes</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Vice President' GROUP BY id ORDER BY result desc");
							foreach ($query as $row) {
							?>
							<tr>
								<td><?php echo $row['position'] ?></td>
								<td class="text-right"><?php echo $row['result'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-4">
					<table class="table table-bordered table-sm">
						<thead class="alert alert-info text-center">
							<tr>
								<th>Secretary</th>
								<th>Votes</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Secretary' GROUP BY id ORDER BY result desc");
							foreach ($query as $row) {
							?>
							<tr>
								<td><?php echo $row['position'] ?></td>
								<td class="text-right"><?php echo $row['result'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-4">
					<table class="table table-bordered table-sm">
						<thead class="alert alert-info text-center">
							<tr>
								<th>Treasurer</th>
								<th>Votes</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Treasurer' GROUP BY id ORDER BY result desc");
							foreach ($query as $row) {
							?>
							<tr>
								<td><?php echo $row['position'] ?></td>
								<td class="text-right"><?php echo $row['result'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-4">
					<table class="table table-bordered table-sm">
						<thead class="alert alert-info text-center">
							<tr>
								<th>Auditor</th>
								<th>Votes</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Auditor' GROUP BY id ORDER BY result desc");
							foreach ($query as $row) {
							?>
							<tr>
								<td><?php echo $row['position'] ?></td>
								<td class="text-right"><?php echo $row['result'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-4">
					<table class="table table-bordered table-sm">
						<thead class="alert alert-info text-center">
							<tr>
								<th>Business Manager</th>
								<th>Votes</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Business Manager' GROUP BY id ORDER BY result desc");
							foreach ($query as $row) {
							?>
							<tr>
								<td><?php echo $row['position'] ?></td>
								<td class="text-right"><?php echo $row['result'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-4">
					<table class="table table-bordered table-sm">
						<thead class="alert alert-info text-center">
							<tr>
								<th>P.R.O</th>
								<th>Votes</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'P.R.O' GROUP BY id ORDER BY result desc");
							foreach ($query as $row) {
							?>
							<tr>
								<td><?php echo $row['position'] ?></td>
								<td class="text-right"><?php echo $row['result'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-4">
					<table class="table table-bordered table-sm">
						<thead class="alert alert-info text-center">
							<tr>
								<th>Sgt. at Arms(M)</th>
								<th>Votes</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Sgt. at Arms(Male)' GROUP BY id ORDER BY result desc");
							foreach ($query as $row) {
							?>
							<tr>
								<td><?php echo $row['position'] ?></td>
								<td class="text-right"><?php echo $row['result'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-4">
					<table class="table table-bordered table-sm">
						<thead class="alert alert-info text-center">
							<tr>
								<th>Sgt. at Arms(F)</th>
								<th>Votes</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Sgt. at Arms(Female)' GROUP BY id ORDER BY result desc");
							foreach ($query as $row) {
							?>
							<tr>
								<td><?php echo $row['position'] ?></td>
								<td class="text-right"><?php echo $row['result'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-4">
					<table class="table table-bordered table-sm">
						<thead class="alert alert-info text-center">
							<tr>
								<th>Religious Coordinator</th>
								<th>Votes</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Religious Coordinator' GROUP BY id ORDER BY result desc");
							foreach ($query as $row) {
							?>
							<tr>
								<td><?php echo $row['position'] ?></td>
								<td class="text-right"><?php echo $row['result'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-4">
					<table class="table table-bordered table-sm">
						<thead class="alert alert-info text-center">
							<tr>
								<th>Socio Cultural</th>
								<th>Votes</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Socio Cultural' GROUP BY id ORDER BY result desc");
							foreach ($query as $row) {
							?>
							<tr>
								<td><?php echo $row['position'] ?></td>
								<td class="text-right"><?php echo $row['result'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-4">
					<table class="table table-bordered table-sm">
						<thead class="alert alert-info text-center">
							<tr>
								<th>Sports Coordinator</th>
								<th>Votes</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							$query = mysqli_query($conn, "SELECT votes.candidate_id as id, candidates.name as position, COUNT(candidates.id) as result FROM votes INNER JOIN candidates ON votes.candidate_id = candidates.id WHERE position = 'Sports Coordinator' GROUP BY id ORDER BY result desc");
							foreach ($query as $row) {
							?>
							<tr>
								<td><?php echo $row['position'] ?></td>
								<td class="text-right"><?php echo $row['result'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div> <!-- end row -->
		</div>
	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>