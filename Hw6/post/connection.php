<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "php27.zent";

	//Tạo kết nối đến csdl
	$conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_set_charset($conn, "UTF8");
 ?>