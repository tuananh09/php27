<?php 
session_start();
	if (isset($_GET['masp'])) {
		$masp = $_GET['masp'];
		unset($_SESSION['sanpham'][$masp]);
		header("Location: sanpham.php");
	}
 ?>