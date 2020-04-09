<!DOCTYPE html>
<html>
<head>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="text/css" href="../../favicon.ico">
	<title>Web-Based SSC Voting</title>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Winners</h1>
		<div class="row">
			<table class="table table-bordered table-striped">
				<thead class="text-center text-success">
					<tr>
						<th>Position</th>
						<th>Name</th>
						<th>Votes</th>
					</tr>
				</thead>
				<tbody>
					<?php  
						include '../function/winners.php';
					?>
					<tr>
						<td><?php echo $row['position']  ?></td>
						<td><?php echo $row['name'] ?></td>
						<td class="text-center"><?php echo $row['can_id'] ?></td>
					</tr>
					<tr>
						<td><?php echo $row2['position']  ?></td>
						<td><?php echo $row2['name'] ?></td>
						<td class="text-center"><?php echo $row2['can_id'] ?></td>
					</tr>
					<tr>
						<td><?php echo $row3['position']  ?></td>
						<td><?php echo $row3['name'] ?></td>
						<td class="text-center"><?php echo $row3['can_id'] ?></td>
					</tr>
					<tr>
						<td><?php echo $row4['position']  ?></td>
						<td><?php echo $row4['name'] ?></td>
						<td class="text-center"><?php echo $row4['can_id'] ?></td>
					</tr>
					<tr>
						<td><?php echo $row5['position']  ?></td>
						<td><?php echo $row5['name'] ?></td>
						<td class="text-center"><?php echo $row5['can_id'] ?></td>
					</tr>
						<tr>
						<td><?php echo $row6['position']  ?></td>
						<td><?php echo $row6['name'] ?></td>
						<td class="text-center"><?php echo $row6['can_id'] ?></td>
					</tr>
						<tr>
						<td><?php echo $row7['position']  ?></td>
						<td><?php echo $row7['name'] ?></td>
						<td class="text-center"><?php echo $row7['can_id'] ?></td>
					</tr>
						<tr>
						<td><?php echo $row8['position']  ?></td>
						<td><?php echo $row8['name'] ?></td>
						<td class="text-center"><?php echo $row8['can_id'] ?></td>
					</tr>
						<tr>
						<td><?php echo $row9['position']  ?></td>
						<td><?php echo $row9['name'] ?></td>
						<td class="text-center"><?php echo $row9['can_id'] ?></td>
					</tr>
						<tr>
						<td><?php echo $row10['position']  ?></td>
						<td><?php echo $row10['name'] ?></td>
						<td class="text-center"><?php echo $row10['can_id'] ?></td>
					</tr>
						<tr>
						<td><?php echo $row11['position']  ?></td>
						<td><?php echo $row11['name'] ?></td>
						<td class="text-center"><?php echo $row11['can_id'] ?></td>
					</tr>
						<tr>
						<td><?php echo $row12['position']  ?></td>
						<td><?php echo $row12['name'] ?></td>
						<td class="text-center"><?php echo $row12['can_id'] ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>