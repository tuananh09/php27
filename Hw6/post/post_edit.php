<?php
$id = $_GET['id'];
require_once('connection.php');

    // $id = $_GET['id'];

    //Câu lệnh truy vấn
$query = "SELECT * FROM posts WHERE id = ". $id;

    //Thực thi câu lệnh
$result = $conn->query($query);
    // $result = $conn->query($query)->fetch_assoc();

$post = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Education And Technology Group</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">

		<h3 align="center">---Update Post---</h3>
		<hr>
		<form action="post_edit_process.php?id=<?= $post['id'] ?>" method="POST" role="form" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">Title</label>
				<input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $post['id'] ?>">
				<input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $post['title'] ?>">
			</div>
			<div class="form-group">
				<label for="">Desciption</label>
				<input type="text" class="form-control" id="" placeholder="" name="desciption" value="<?= $post['desciption'] ?>">
			</div>
			<div class="form-group">
				<label for="">Content</label>
				<input type="text" class="form-control" id="" placeholder="" name="content" value="<?= $post['content'] ?>">
			</div>
			<div class="form-group">
				<label for="">View count</label>
				<input type="text" class="form-control" id="" placeholder="" name="view_count" value="<?= $post['view_count'] ?>">
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
</body>
</html>