 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Thông tin chi tiết</title>
 </head>
 <body>
 	<div style="width: 500px; margin: 0 auto;">
 		<p>ID:  <?= $category['id'];  ?></p>
 		<p>Name:  <?=$category['name'] ?></p>
 		<p>Images:<br>
 			<img width="200px" height="250px" src="<?=$category['thumbnail']?>">
 		</p>
 		<p>Description:  <?=$category['description'] ?></p>
 		<p>Slug:  <?=$category['slug'] ?></p>
 		<p>Time:  <?=$category['created_at'] ?></p>
 	</div>
 </body>
 </html>