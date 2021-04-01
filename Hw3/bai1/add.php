<?php 
$servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

$username = "root";   // Tên đăng nhập
	
$password = "";    // Mật khẩu truy cập
	
$dbname = "php27.zent";   // Tên cơ sở dữ liệu muốn kết nối đến
	
// Tạo kết nối đến CSDL
	
$conn = new mysqli($servername, $username, $password, $dbname);

// Câu lệnh truy vấn
$query = "SELECT * FROM categories";

// Thực thi câu lệnh
$result = $conn->query($query);



 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		form{
			margin: 0 auto;
			margin-top: 50px;
			width: 70%;
		}
		.form-check{
			float: left;
			padding: 5px;
		}

	</style>
</head>
<body>
	
	<form action="add_process.php" method="POST" role="form">
		<div class="form-group">
		    <label for="">Mã sinh viên</label>
		    <input type="text" class="form-control" id="" placeholder="Nhập vào mã sinh viên" name="masv">
		</div>
		<div class="form-group">
			<label for="">Họ tên</label>
			<input type="text" class="form-control" id="" placeholder="Nhập vào họ tên" name="hoten">
		</div>
		<div class="form-group">
			<label for="">Số điện thoại</label>
			<input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="phone">
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" class="form-control" id="" placeholder="Nhập vào email" name="email">
		</div>
		<div style="margin-bottom: 50px;">
			<div style="color: #0f0f0f; font-weight: bold;">Giới tính</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="gioitinh" id="inlineRadio1" value="Nam">
				<label class="form-check-label" for="inlineRadio1">Male</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="gioitinh" id="inlineRadio2" value="Nữ">
				<label class="form-check-label" for="inlineRadio2">Female</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="gioitinh" id="inlineRadio3" value="Khác" disabled>
				<label class="form-check-label" for="inlineRadio3">Other</label>
			</div>
		</div>

		<div class="form-group">
			<label for="">Địa chỉ</label>
			<input type="text" class="form-control" id=""@ placeholder="Nhập vào địa chỉ" name="diachi">
		</div>
		<div class="form-group row">
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary" name="save">Lưu thông tin</button>
			</div>
		</div>
	</form>
</body>
</html>


