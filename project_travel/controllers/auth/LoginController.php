<?php
/**
 * 
 */
require_once 'controllers/auth/BaseController.php';
require_once 'models/user.php';

class LoginController extends BaseController
{
	
	public function loginForm(){
		if (!empty($_SESSION['auth'])) {
			return $this->redirect('?admin=admin&mod=home&act=home');
		}
		return $this->view('views/auth/login');
	}

	public function login(){
		$data = $_POST;
		$modelUser = new User();
		$users = $modelUser->all();
		
		foreach ($users as $user) {
			if ($user['email'] == $data['email'] && $user['password'] == md5($data['password'])) {
				
				$_SESSION['auth'] = $user;
				// var_dump($_SESSION);
				// die();
				return $this->redirect('?admin=admin&mod=home&act=home');
			}
		}

		$_SESSION['error'] = 'lỗi đăng nhập';
		return $this->back();
	}
}
?>