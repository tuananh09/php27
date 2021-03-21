<?php 
	session_start();
	if (isset($_POST['save'])) {
		$_SESSION['sinhvien'][$_POST['masv']] = array(
			'masv' => $_POST['masv'],
			'hoten' => $_POST['hoten'],
			'phone' => $_POST['phone'],
			'email' => $_POST['email'],
			'gioitinh' => $_POST['gioitinh'],
			'diachi' => $_POST['diachi']
		);
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>list</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.table{
			margin: 0 auto;
			width: 70%;
		}
		.btn{
			margin-left: 15%; 
		}
		h2{
			margin-left: 15%; 
			margin-top:50px;
		}
		.btn-btn-success{
			margin: 0 5px 0 5px;
		}
	</style>
</head>
<body>
	<h2>Danh sách người dùng</h2>
	<a href="add_list.php">
		<button type="button" class="btn btn-primary">Thêm mới</button>
	</a>
	<?php
	if(isset($_COOKIE['msg'])){
	?>
		<div class="alert alert-success">
			<strong>Thông báo: </strong><?php echo $_COOKIE['msg'] ?>
		</div>
	<?php } ?>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Mã Sinh viên</th>
				<th scope="col">Họ tên</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$i=0;
			foreach ($_SESSION['sinhvien'] as $key => $value) {
				$i++;			
			?>
			<tr>
			 	<td><?php echo $i; ?></td>
			 	<td><?php echo $_SESSION['sinhvien'][$key]['masv']; ?></td>
			 	<td><?php echo $_SESSION['sinhvien'][$key]['hoten']; ?></td>
			 	<td>
			 		<a href="detail.php?<?php echo $_SESSION['sinhvien'][$key]['masv'];?>" class="btn-btn-success">Detail</a>
			 		<a name="detail" href="delete.php?masv=<?php echo $_SESSION['sinhvien'][$key]['masv'];?>" class="btn-btn-success">Delete</a>
			 	</td>
			 </tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>