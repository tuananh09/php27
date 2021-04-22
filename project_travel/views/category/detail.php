<?php include('views/header.php'); ?>
    <div class="container-fluid">
 	<div style="margin-bottom: 50px; ">
 	<?php 
 		if($category['parent_id']==''){
 			$category['parent_id'] = 'Danh mục cha';
 		}
 	 ?>
 	<div class="container" >
 		<h1 class="text-center" style="color: red;">---> Details <---</h1>
 		<a href="index.php?admin=admin&mod=category&act=list" class="btn btn-info" style="margin-bottom: 30px;">Back to categories</a>
 		<div class="container" style="width: 65%; color: black;" >
 			<p>ID: <?= $category['id'] ?></p>
 		 	<p>Name: <?= $category['name'] ?></p>
 		 	<p>ParentID: <?= $category['parent_id'] ?></p>
 		 	<p>Description: <?= $category['description'] ?></p>
 		 	<p>CreatedAt: <?php echo $category['created_at']; ?></p>
 		 	
 		</div>
 	</div>
 	</div>
</div>
<?php include('views/footer.php'); ?>
