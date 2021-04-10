<?php 
require_once('models/User.php');
class UserController{
	function __construct(){
	}
	
	function list(){
		$model = new User();
		$users = $model->all();
		require_once('views/user/list.php');
	}

	function detail(){
		$model = new User();
		$id = $_GET['id'];
		$user = $model->find($id);
		require_once('views/user/detail.php');
	}

	function add(){
		echo "<br>Form thêm mới User";
	}
	function add_prosess(){
		echo "<br>Form thêm mới chi tiết User";
	}
	function edit(){
		echo "<br>Form sửa User";
	}
}
?>