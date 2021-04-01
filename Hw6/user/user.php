<?php 
	require_once('connection.php');
	// Câu lệnh truy vấn
	$query = "SELECT * FROM users";

	// Thực thi câu lệnh
	$result = $conn->query($query);

	// Tạo 1 mảng để chứa dữ liệu
	$users = array();


	while($row = $result->fetch_assoc()) { 
		$users[] = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>USER</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3 class="text-center">--- USER ---</h3>
		<a href="user_add.php" class="btn btn-primary">Add New User</a>

		<p><?php echo (isset($_COOKIE['cate_add_msg'])?$_COOKIE['cate_add_msg']: '') ?></p>
		<table class="table">
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Avatar</th>
			<th>Action</th>
		</thead>
		<?php foreach($users as $cate){ ?>
			
			<tr>
				<td><?=$cate['id'] ?></td>
				<td><?=$cate['name'] ?></td>
				<td><?=$cate['email'] ?></td>
				<td>
					<img src="<?=$cate['avatar'] ?>" width="100px" height="100px">
				</td>
				<td>
					<a href="user_detail.php?id=<?=$cate['id'] ?>" class="btn btn-primary">Detail</a>
					<a href="user_edit.php?id=<?=$cate['id'] ?>" class="btn btn-success">Edit</a>
					<a href="user_delete.php?id=<?=$cate['id'] ?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		<?php } ?>
		</table>
	</div>
</body>
</html>