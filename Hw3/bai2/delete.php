<?php 
session_start();
	if (isset($_GET['masv'])) {
		$masv = $_GET['masv'];
		unset($_SESSION['sinhvien'][$masv]);
		header("Location: list.php");
	}
 ?>