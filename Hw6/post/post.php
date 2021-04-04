<?php 
	require_once('connection.php');

	//Câu lệnh truy vấn
	$query = "SELECT * FROM posts";

	$result = $conn->query($query);

	while ($row = $result ->fetch_assoc()) {
		$posts[] = $row;
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>POST</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3 class="text-center">--- POST ---</h3>
		<a href="post_add.php" class="btn btn-primary">Add New Post</a>

		<p><?php echo (isset($_COOKIE['post_add_msg'])?$_COOKIE['post_add_msg']: '') ?></p>
		<table class="table">
			<th>ID</th>
			<th>Title</th>
			<th>Desciption</th>
			<th>Thumbnail</th>
			<th>View Count</th>
		</thead>
		<?php foreach($posts as $post){ ?>
			
			<tr>
				<td><?=$post['id'] ?></td>
				<td><?=$post['title']?></td>
				<td><?=$post['desciption'] ?></td>
				<td>
					<img src="<?=$post['thumbnail'] ?>" width="100px" height="100px">
				</td>
				<td class="text-center"><?=$post['view_count'] ?></td>
				<td>
					<a href="post_detail.php?id=<?=$post['id'] ?>" class="btn btn-primary">Detail</a>
					<a href="post_edit.php?id=<?=$post['id'] ?>" class="btn btn-success">Edit</a>
					<a href="post_delete.php?id=<?=$post['id'] ?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		<?php } ?>
		</table>
	</div>
</body>