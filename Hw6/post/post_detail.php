<?php 
	$id = $_GET['id'];
	require_once('connection.php');

	//Câu lệnh truy vấn 
	$query = "SELECT * FROM posts WHERE id=".$id;

	//Thực thi câu lệnh
	$result = $conn->query($query);

	$post = $result->fetch_assoc();
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
 		<p>ID:  <?=$post['id'] ?></p>
 		<p>Title:  <?=$post['title'] ?></p>
 		<!-- <p style="width: 100px; height:; 100px" >Images:  <?=$post['avatar'] ?></p> -->
 		<p>Desciption:  <?=$post['desciption'] ?></p>
 		<p>Content: <?=$post['content']?></p>
 		<p>View Count: <?=$post['view_count']?></p>
 		<p>Time:  <?=$post['created_at'] ?></p>
 	</div>
 </body>
 </html>