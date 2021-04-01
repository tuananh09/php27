<?php 
	$id = $_GET['id'];
	require_once('connection.php');

	//Câu lệnh truy vấn 
	$query = "SELECT * FROM categories WHERE id=".$id;

	//Thực thi câu lệnh
	$result = $conn->query($query);

	$category = $result->fetch_assoc();
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Thông tin chi tiết</title>
 </head>
 <body>
 	<div style="width: 500px; margin: 0 auto;">
 		<p>ID:  <?=$category['id'] ?></p>
 		<p>Name:  <?=$category['name'] ?></p>
 		<!-- <p style="width: 100px; height:; 100px" >Images:  <?=$category['thumbnail'] ?></p> -->
 		<p>Description:  <?=$category['description'] ?></p>
 		<p>Slug:  <?=$category['slug'] ?></p>
 		<p>Time:  <?=$category['created_at'] ?></p>
 	</div>
 </body>
 </html>