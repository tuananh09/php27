<?php 
	class User{
		var $name;
		var $email;
		var $passWord;
		var $avatar;

		function inThongTinUser(){
			echo '<br>Thông tin Người dùng';
		}		
	}

	//Khởi tạo
	$user1 = new User();
	$user1->name = 'Tuấn Anh';
	$user1->email = 'ntanh@gmail.com';
	$user1->passWord = '12345';
	$user1->avatar = '<img src="../User/dz.jpg" width="300px" height="370px">';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<div style="width: 60%; margin: 0 auto; font-size: 20px;">
 		<h3 style="text-align: center;"><?=$user1->inThongTinUser();?></h3>
 		<p>Tên người dùng: <?=$user1->name?></p>
 		<p>Email: <?=$user1->email?></p>
 		<p>Password: <?=$user1->passWord?></p>
 		<p>Ảnh đại diện: </p><?=$user1->avatar?>
 	</div>
 </body>
 </html>