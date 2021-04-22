<?php 
require_once('models/post.php');
require_once('models/user.php');
require_once('models/category.php');
require_once('controllers/admin/BaseController.php');
	class HomeController extends BaseController{
		public $model;
		function __construct(){
			$this->model = new Post();
		}
		function list(){
				$posts = $this->model->all();
				$data = [];
				foreach ($posts as $key => $value) {
					$this->model = new User();
					$value['user_name'] = $this->model->find($value['user_id'])['name'];
					$this->model = new Category();
					$value['category_name'] = $this->model->find($value['category_id'])['name'];
					$data[]=$value;
				}
				$this->model = new Category();
				$categories = $this->model->all();
				require('BlogTravel/garden-index.php');
		}

		function listPost(){

				$this->model = new Category();
				$categories = $this->model->all();
			$posts = [];
			$user = ['name'=>''];
			$category = ['name'=>'Tất cả danh mục'];
			if (isset($_GET['category_id'])) {
				$this->model = new Post();
				$posts = $this->model->findByCategory($_GET['category_id']);
				// var_dump($posts);
				$this->model = new Category();

				$category = $this->model->find($_GET['category_id']);
			}else{
				$this->model = new Post();
				$posts = $this->model->all();

			}
				$data = [];
				foreach ($posts as $key => $value) {
					$this->model = new User();
					$value['user_name'] = $this->model->find($value['user_id'])['name'];
					$this->model = new Category();
					$value['category_name'] = $this->model->find($value['category_id'])['name'];
					$data[]=$value;
				}
				require('BlogTravel/garden-category.php');
			}

		function detail(){
			$id = $_GET['id'];
			$post = $this->model->find($id);
			$this->model = new Category();
				$categories = $this->model->all();
			$this->model=new Post();
			$posts = $this->model->all();
			$data = [];	
			foreach ($posts as $key => $value) {
				$this->model = new User();
				$value['user_name'] = $this->model->find($value['user_id'])['name'];
				$this->model = new Category();
				$value['category_name'] = $this->model->find($value['category_id'])['name'];
				$data[]=$value;
			}
			require('BlogTravel/garden-single.php');
		}

		function contact(){
			require('BlogTravel/garden-contact.php');
		}
	}
	
 ?>