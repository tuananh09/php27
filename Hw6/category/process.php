<?php 
	require_once('connection.php');
	$id = isset($_GET['id']) ? $_GET['id'] :null;

	if ($id) {
		$query = "select * from categories where id=". $id;
		
		$data = $conn->query($query);

		$data = $data->fetch_assoc();
	}

echo json_encode($data);
 ?>
