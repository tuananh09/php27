<?php 
	class Post{
		var $title;
		var $path;
		var $description;
		var $content;

		function inThongTinPost(){
			echo '<br>Thông tin Bài viết:';
		}
	}

	//Khởi tạo đối tượng
	$posts = new Post();
	$posts->title = 'Bản tin thời sự';
	$posts->path = 'https://vietnamnet.vn/vn/thoi-su/media/qua-trinh-cong-tac-cua-tan-tong-kiem-toan-nha-nuoc-tran-sy-thanh-725592.html';
	$posts->description = 'Quá trình công tác của tân Tổng Kiểm toán Nhà nước Trần Sỹ Thanh';
	$posts->content = 'Tân Tổng Kiểm toán Nhà nước Trần Sỹ Thanh từng đảm nhiệm các chức vụ như: Bí thư Tỉnh ủy Bắc Giang và Lạng Sơn; Phó Chủ nhiệm Ủy ban Kiểm tra Trung ương...';

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
 		<h3 style="text-align: center;"><?=$posts->inThongTinPost();?></h3>

 		<?php 
 			echo "Tiêu đề bài viết: ".$posts->title.'<br>';
 			echo "<br>Đường dẫn: ".$posts->path.'<br>';
 			echo "<br>Mô tả: ".$posts->description.'<br>';
 			echo "<br>Nội dung: ".$posts->content;
 	 	?>
 	</div>
 </body>
 </html>