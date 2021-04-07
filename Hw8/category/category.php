<?php 
	class Category{
		var $name;
		var $path;
		var $parent;
		var $images;
		var $description;

		function inThongTinCategory(){
			echo '<br>Thông tin Danh mục';
		}
	}

	//Khởi tạo đối tượng
	$cate = new Category();
	$cate->name = 'Tin nóng';
	$cate->path = 'https://vietnamnet.vn/vn/thoi-su/media/tieu-su-cua-nu-pho-chu-tich-nuoc-tre-nhat-tu-truoc-toi-nay-725306.html';
	$cate->parent = '2';
	$cate->images = '<img src="../category/cate.png" width="350px" height="370px">';
	$cate->description = 'Tiểu sử của nữ Phó Chủ tịch nước trẻ nhất từ trước tới nay'
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<div style="width: 60%; margin: 0 auto; font-size: 20px; ">
 		<h3 style="text-align: center;"><?=$cate->inThongTinCategory();?></h3>
 		<p>Tên danh mục: <?=$cate->name?></p>
 		<p>Đường dẫn: <?=$cate->path?></p>
 		<p>Danh mục cha: <?=$cate->parent?></p>
 		<p>Mô tả: <?=$cate->description?></p>
 		<p>Ảnh hiển thị: </p><?=$cate->images?>
 	</div>
 </body>
 </html>