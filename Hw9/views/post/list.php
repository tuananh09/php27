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
		<a href="?mod=post&act=create" class="btn btn-primary">Add New Post</a>

		<?php if(isset($_COOKIE['success'])){ ?>
	      <div class="alert alert_success" role="alert">
	        <strong>Thông báo: </strong>
	        <?php echo $_COOKIE['success'] ?>
	      </div>
	    <?php } ?>

	    <?php if(isset($_COOKIE['error'])){ ?>
	      <div class="alert alert_error" role="alert">
	        <strong>Thông báo: </strong>
	        <?php echo $_COOKIE['error'] ?>
	      </div>
	    <?php } ?>
		<table class="table">
			<th>ID</th>
			<th>Title</th>
			<th>Desciption</th>
			<th>Thumbnail</th>
			<th>View Count</th>
		</thead>

		<?php 
		$i = 0;	
		foreach($posts as $post){ $i++ ?>
			<tr>
				<td><?=$i ?></td>
				<td><?=$post['title']?></td>
				<td><?=$post['description'] ?></td>
				<td>
					<img src="<?=$post['thumbnail'] ?>" width="100px" height="100px">
				</td>
				<td class="text-center"><?=$post['view_count'] ?></td>
				<td>
					<a href="?mod=post&act=detail&id=<?= $post['id'] ?>" class="btn btn-primary">Detail</a>
					<a href="?mod=post&act=edit&id=<?= $post['id'] ?>" class="btn btn-success">Edit</a>
					<a href="?mod=post&act=delete&id=<?= $post['id'] ?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		<?php } ?>
		</table>
	</div>
</body>