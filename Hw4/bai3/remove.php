<?php 
	session_start();
	// Bước 1: Lấy được code cần xóa
	$id = $_GET['id'];

	unset($_SESSION['documents'][$id]); 
	header("Location: index1.php");
 ?>