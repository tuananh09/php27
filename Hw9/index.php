<?php 
	$mod = ''; //module : category, post, user
	$act = ''; //action: list, add, edit

	$mod = (isset($_GET['mod'])?$_GET['mod']:'home');
	$act = (isset($_GET['act'])?$_GET['act']:'error');

	switch ($mod) {
		case 'category':
			require_once('controllers/CategoryController.php');
			$controller = new CategoryController();
				
				switch ($act) {
					case 'list':
						$controller->list();
						break;
					case 'detail':
						$controller->detail();
						break;
					case 'add':
						$category->add();
						break;
					case 'edit':
						$category->edit();
						break;
					default:
						# code...
						break;
				}
			break;
		case 'post':
			require_once('controllers/PostController.php');
			$post = new PostController();

				switch ($act) {
					case 'list':
						$post->list();
						break;
					case 'add':
						$post->add();
						break;
					case 'edit':
						$post->edit();
						break;
					case 'detail':
						$post->detail();
						break;
					default:
						# code...
						break;
				}
			break;
		case 'user':
			require_once('controllers/UserController.php');
			$user = new UserController();

				switch ($act) {
					case 'list':
						$user->list();
						break;
					case 'add':
						$user->add();
						break;
					case 'edit':
						$user->edit();
						break;
					case 'detail':
						$user->detail();
						break;
					default:
						# code...
						break;
				}
			break;
		
		default:
			echo "error";
			break;
	}
 ?>