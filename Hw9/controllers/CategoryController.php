<?php 
require_once('models/Category.php');
class CategoryController{
	function __construct(){
	}
	
	function list(){
		$model = new Category();
		$categories = $model->all();
		require_once('views/category/list.php');
	}

	function detail(){
		$model = new Category();
		
		$id = $_GET['id'];
		$category = $model->find($id);
		require_once('views/category/detail.php');
	}

	function add(){
		echo "<br>Form thêm mới Category";
	}
	function add_prosess(){
		echo "<br>Form thêm mới chi tiết Category";
	}
	function edit(){
		echo "<br>Form sửa Category";
	}
}
?>