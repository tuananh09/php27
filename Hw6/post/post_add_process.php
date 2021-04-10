<?php 
	$data = $_POST;
	require_once('connection.php');
 
  	$query = "INSERT INTO posts (title, description,content, view_count) VALUES ('".$data['title']."', '".$data['desciption']."','".$data['content']."' , '".$data['view_count']."')";

  	$result = $conn->query($query);
  	if ($result == true) {
  		setcookie('post_add_msg', 'Thêm mới thành công',time()+5);
  		header('Location: post.php');
  	}else{
  		setcookie('post_add_msg', 'Thêm mới Không thành công',time()+5);
      header('Location: post.php');
  	}

?>