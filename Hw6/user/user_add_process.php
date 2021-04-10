<?php 
	$data = $_POST;
	require_once('connection.php');
 
  	$query = "INSERT INTO users (name, email, password) VALUES ('".$data['name']."', '".$data['email']."', '".$data['password']."')";

  	$result = $conn->query($query);
  	if ($result == true) {
  		setcookie('cate_add_msg', 'Thêm mới thành công',time()+5);
  		header('Location: user.php');
  	}else{
  		setcookie('cate_add_msg', 'Thêm mới Không thành công',time()+5);
      header('Location: user.php');
  	}

?>