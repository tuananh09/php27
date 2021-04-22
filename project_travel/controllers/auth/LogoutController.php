<?php
/**
 * 
 */
require_once 'controllers/auth/BaseController.php';
class LogoutController extends BaseController
{
	
	public function logout()
	{
		unset($_SESSION['auth']);
		return $this->redirect('?admin=auth&mod=login&act=loginForm');
	}
}
?>