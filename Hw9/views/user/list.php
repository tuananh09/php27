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
		<?php foreach($users as $user){ ?>
			
			<tr>
				<td><?=$user['id'] ?></td>
				<td><?=$user['name'] ?></td>
				<td><?=$user['email'] ?></td>
				<td>
					<img src="<?=$user['avatar'] ?>" width="100px" height="100px">
				</td>
				<td>
					<a href="index.php?mod=user&act=detail&id=<?= $user['id'] ?>" class="btn btn-primary">Detail</a>
					<a href="user_edit.php?id=<?=$user['id'] ?>" class="btn btn-success">Edit</a>
					<a href="user_delete.php?id=<?=$user['id'] ?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		<?php } ?>
		</table>
	</div>
</body>
</html>