<?php include('views/header.php'); ?>

    <div class="container-fluid">
 	<div class="container" style="margin-bottom: 50px;">
 		<h1 class="text-center" style="color: red">---> Details <---</h1>
 		<a href="?admin=admin&mod=user&act=list" class="btn btn-primary">Back to users</a>
 		<div class="container" style="width: 65%; color: black" >
 			<p><b>ID</b>: <?= $user['id'] ?></p>
 		 	<p><b>Name</b>: <?= $user['name'] ?></p>
 		 	<p><b>Email</b>: <?= $user['email'] ?></p>
 		 	<p><b>CreatedAt</b>: <?php echo $user['created_at']; ?></p>
 		 	<div class="row">
 		 		<p class="col-2"><b>Avatar</b>:</p>
 		 		<img class="col-10" style="height: 500px;" src="public/img/avatar/<?= $user['avatar'] ?>">
 		 	</div>
 		</div>
 	</div>
</div>
<?php include('views/footer.php'); ?>
