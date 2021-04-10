<?php 
	$data = $_POST;
	require_once('connection.php');
 
  	$query = "INSERT INTO categories (name,parent_id, description) VALUES ('".$data['name']."', '".$data['category']."', '".$data['description']."')";

  	$result = $conn->query($query);
    echo "$query";
  	if ($result == true) {
  		setcookie('cate_add_msg', 'Thêm mới thành công',time()+5);
  		header('Location: category.php');
  	}else{
  		setcookie('cate_add_msg', 'Thêm mới Không thành công',time()+5);
      header('Location: category.php');
      echo 'false';
  	}
?>