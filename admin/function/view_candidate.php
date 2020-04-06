<?php  
	// table name
	$table = 'candidates';

	// primary key id
	$primaryKey = 'id';
	$columns = array(
		array('db' => 'position', 'dt' => 0),
		array('db' => 'name', 'dt' => 1),
		array('db' => 'year', 'dt' => 2),
		array('db' => 'party', 'dt' => 3),
	);
	$sql = array(
		'user' => 'root',
		'pass' => '',
		'db' => 'project1',
		'host' => 'localhost',
	);

	include ( 'ssp.class.php' );
 
	echo json_encode(
    SSP::simple( $_GET, $sql, $table, $primaryKey, $columns));
?>