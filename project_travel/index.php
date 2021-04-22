<?php 
session_start();

	$mod = ''; // module: category, post, user
	$act = ''; // action: list, add, edit
	$admin = '';
	$admin = (isset($_GET['admin'])?$_GET['admin']:'userBlog');
	$mod = (isset($_GET['mod'])?$_GET['mod']:'home');
	$act = (isset($_GET['act'])?$_GET['act']:'list');

	$controller_class_name = ucfirst($mod) . 'Controller';
	$path = __DIR__ . '/controllers/' .$admin.'/'. $controller_class_name . '.php';
	if (!file_exists($path)){
	    echo "File $path khong ton tai";
	    exit();
	}

	require($path);
	$controller_obj = new $controller_class_name();
	if (!method_exists($controller_obj, $act)){
	    echo "Method $act khong ton tai";
	    exit();
	}
	$controller_obj->$act();


 ?>
