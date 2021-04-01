<?php 
	$data = $_POST;
	require_once('connection.php');
  if ($data['user']==0) $data['user']='';
 
  	$query = "INSERT INTO users (id, name, email, password) VALUES ('".$data['id']."', '".$data['name']."', '".$data['email']."', '".$data['password']."')";

  	$result = $conn->query($query);
  	if ($result == true) {
  		setcookie('cate_add_msg', 'Thêm mới thành công',time()+5);
  		header('Location: user.php');
  	}else{
  		setcookie('cate_add_msg', 'Thêm mới Không thành công',time()+5);
      header('Location: user.php');
  	}

?>