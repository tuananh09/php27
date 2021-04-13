<?php 
require_once('models/Category.php');
class CategoryController{
	var $model;
	function __construct(){
		$this->model= new Category();
	}
	
	function list(){
		$categories = $this->model->all();
		require_once('views/category/list.php');
	}

	function detail(){
		$id = $_GET['id'];
		$category = $this->model->find($id);
		require_once('views/category/detail.php');
	}

	function create(){
		require_once 'views/category/create.php';		
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
		header('Location:?mod=category&act=list');
	}

	function delete(){
		$id = $_GET['id'];

		$success = $this->model->delete($id);
		if ($success) {
			setcookie('success', 'Xóa thành công', time()+5);
		}else{
			setcookie('error', 'Xóa thất bại', time()+5);
		}
		header('Location:?mod=category&act=list');
	}

	function edit(){
		$data = $_GET['id'];
		$category = $this->model->find($data);
		require_once 'views/category/edit.php';		
	}

	function update(){
		$data = $_POST;
		$success = $this->model->update($data);
		if ($success) {
			setcookie('success', 'update thành công', time()+5);
		}else{
			setcookie('error', 'update thất bại', time()+5);
		}
		header('Location:?mod=category&act=list');
	}

}
?>