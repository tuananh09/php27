<?php 
require_once('models/user.php');
require_once('models/post.php');
require_once('models/category.php');
require_once('BaseController.php');



class HomeController{
	public function home(){
		$this->model = new Post();
		$posts = $this->model->all();
		$this->model = new User();
		$users = $this->model->all();
		$this->model = new Category();
		$categories = $this->model->all();
		require('views/home.php');
	}
}

 ?>