<?php 
require_once('models/Category.php');

require_once('models/Post.php');
class PostController{
	var $model;
	function __construct(){
		$this->model= new Post();
	}
	
	function list(){
		$posts = $this->model->all();
		require_once('views/post/list.php');
	}

	function detail(){
		$id = $_GET['id'];
		$post = $this->model->find($id);
		require_once('views/post/detail.php');
	}

	function create(){
		$category_model = new Category();

		$categories = $category_model->all();
		require_once 'views/post/create.php';		
	}

	//Hàm thực hiện(create_process)
	function store(){
		$data =$_POST;
		$success = $this->model->create($data);
		if ($success) {
			setcookie('success', 'Thêm mới thành công', time()+5);
		}else{
			setcookie('error', 'Thêm mới thất bại', time()+5);
		}
		header('Location:?mod=post&act=list');
	}

	function delete(){
		$id = $_GET['id'];

		$success = $this->model->delete($id);
		if ($success) {
			setcookie('success', 'Xóa thành công', time()+5);
		}else{
			setcookie('error', 'Xóa thất bại', time()+5);
		}
		header('Location:?mod=post&act=list');
	}

	function edit(){
		$data = $_GET['id'];
		$post = $this->model->find($data);
		require_once 'views/post/edit.php';		
	}

	function update(){
		$data = $_POST;
		$success = $this->model->update($data);
		if ($success) {
			setcookie('success', 'update thành công', time()+5);
		}else{
			setcookie('error', 'update thất bại', time()+5);
		}
		header('Location:?mod=post&act=list');
	}
}
?>