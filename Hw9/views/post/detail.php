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
 		<!-- <p>Images:<br>
 			<img width="200px" height="250px" src="<?=$user['thumbnail']?>">
 		</p> -->
 		
 		<p>Desciption:  <?=$post['description'] ?></p>
 		<p>Content: <?=$post['content']?></p>
 		<p>View Count: <?=$post['view_count']?></p>
 		<p>Time:  <?=$post['created_at'] ?></p>
 	</div>
 </body>
 </html>