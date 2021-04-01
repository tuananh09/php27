<?php 
	$id = $_GET['id'];
	require_once('connection.php');

	//Câu lệnh truy vấn 
	$query = "SELECT * FROM users WHERE id=".$id;

	//Thực thi câu lệnh
	$result = $conn->query($query);

	$user = $result->fetch_assoc();
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Thông tin chi tiết</title>
 </head>
 <body>
 	<div style="width: 500px; height: 500px; margin: 0 auto">
 		<p>ID:  <?=$user['id'] ?></p>
 		<p>Name:  <?=$user['name'] ?></p>
 		<!-- <p style="width: 100px; height:; 100px" >Images:  <?=$user['avatar'] ?></p> -->
 		<p>Email:  <?=$user['email'] ?></p>
 		<p>Time:  <?=$user['created_at'] ?></p>
 	</div>
 </body>
 </html>