<?php 
require_once('models/Post.php');
class PostController{
	function __construct(){
	}
	
	function list(){
		$model = new Post();
		$posts = $model->all();
		require_once('views/post/list.php');
	}

	function detail(){
		$model = new Post();
		$id = $_GET['id'];
		$post = $model->find($id);
		require_once('views/post/detail.php');
	}

	function add(){
		echo "<br>Form thêm mới Post";
	}
	function add_prosess(){
		echo "<br>Form thêm mới chi tiết Post";
	}
	function edit(){
		echo "<br>Form sửa Post";
	}
}
?>