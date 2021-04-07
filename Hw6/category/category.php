<?php 
require_once('connection.php');
	// Câu lệnh truy vấn
$query = "SELECT * FROM categories";

	// Thực thi câu lệnh
$result = $conn->query($query);

	// Tạo 1 mảng để chứa dữ liệu
$categories = array();


while($row = $result->fetch_assoc()) { 
	$categories[] = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CATEGORIES</title>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3 class="text-center">--- CATEGORIES ---</h3>
		<a href="category_add.php" class="btn btn-primary">Add New Category</a>

		<p><?php echo (isset($_COOKIE['cate_add_msg'])?$_COOKIE['cate_add_msg']: '') ?></p>
		<table class="table">
			<th>ID</th>
			<th>Name</th>
			<th>Thumbnail</th>
			<th>Description</th>
			<th>Action</th>
		</thead>
		<?php foreach($categories as $cate){ $i = 1;?>
			
			<tr>
				<td><?=$cate['id'] ?></td>
				<td><?=$cate['name'] ?></td>
				<td>
					<img src="<?=$cate['thumbnail'] ?>" width="100px" height="100px">
				</td>
				<td><?=$cate['description'] ?></td>
				<td>
					<a href="" class="btn btn-primary ViewModal">Detail</a>
					<!-- <a href="category_detail.php?id=<?=$cate['id'] ?>" class="btn btn-primary">Detail</a> -->
					<a href="category_edit.php?id=<?=$cate['id'] ?>" class="btn btn-success">Edit</a>
					<a href="category_delete.php?id=<?=$cate['id'] ?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			<?php $i++;} ?>
		</table>
	</div>

	<div class="modal" tabindex="-1" id='modalViewCategory' role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Category Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              	<h5>Name: <span id="nameCategory"></span></h5>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
    </div>

	<script>
		$(document).ready(function (){
			$('.ViewModal').click(function (e){
				e.preventDefault()

				// //đưa ra alert thông báo
				// $('#modalViewCategory').modal('show');

				let id = $(this).attr('data-id');

				$.ajax({
					url: '/php27.zent/HomeWork/Hw6/category/process.php?id=' +id ,
					type: 'get',
					success: (response) =>{
						var response = JSON.parse(response);
						console.log(response);
						if(response){
						$('$nameCategory').text(response.name);
						$('$descriptionCategory').text(response.description);
						if (response.parent_id == null) $('#nameCategoryParent').text('KHong co danh muc cha') 
						else $('#nameCategoryParent').text(response.parent_id)
						$('#modalViewCategory').modal('show');
					}
				}
				})
			})

		})
	</script>
</body>
</html>