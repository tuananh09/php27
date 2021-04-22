<?php include('views/header.php'); ?>
    <div class="container-fluid">

 	<div class="container" style="margin-bottom: 50px;">
 		<h1 class="text-center" style="color: red">---> Details <---</h1>
 		<a href="?admin=admin&mod=posadmin=admin&t&act=list" class="btn btn-primary">Back to posts</a>
 		<div class="container" style="width: 65%; color: black" >
 			<p><b>ID</b>: <?= $post['id'] ?></p>
 		 	<p><b>Title</b>: <?= $post['title'] ?></p>
 		 	<p><b>Description</b>: <?= $post['description'] ?></p>
            <p><b>Slug</b>: <?= $post['slug'] ?></p>
            <p><b>Content</b>: <?= $post['content'] ?></p>
            <p><b>View</b>: <?= $post['view_count'] ?></p>
            <p><b>UserID</b>: <?= $post['user_id'] ?></p>
            <p><b>CategoryID</b>: <?= $post['category_id'] ?></p>
 		 	<p><b>CreatedAt</b>: <?php echo $post['created_at']; ?></p>
 		 	<div class="row">
 		 		<p class="col-2"><b>Thumbnail</b>:</p>
 		 		<img class="col-10" style="height: 500px; width: 200px" src="public/img/postImg/<?= $post['thumbnail'] ?>">
 		 	</div>
 		</div>
 	</div>
</div>
<?php include('views/footer.php'); ?>
