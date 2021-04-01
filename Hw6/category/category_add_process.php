<?php 
	$data = $_POST;
	require_once('connection.php');
  if ($data['category']==0) $data['category']='';
 
  	$query = "INSERT INTO categories (id, name,parent_id, description) VALUES ('".$data['id']."', '".$data['name']."', '".$data['category']."', '".$data['description']."')";

  	$result = $conn->query($query);
  	if ($result == true) {
  		setcookie('cate_add_msg', 'Thêm mới thành công',time()+5);
  		header('Location: category.php');
  	}else{
  		setcookie('cate_add_msg', 'Thêm mới Không thành công',time()+5);
      header('Location: category.php');
  	}

?>