<?php 
	$data = $_POST;
	require_once('connection.php');
  if ($data['post']==0) $data['post']='';
 
  	$query = "INSERT INTO posts (id, title, desciption,content, view_count) VALUES ('".$data['id']."', '".$data['title']."', '".$data['desciption']."','".$data['content']."' , '".$data['view_count']."')";

  	$result = $conn->query($query);
  	if ($result == true) {
  		setcookie('post_add_msg', 'Thêm mới thành công',time()+5);
  		header('Location: post.php');
  	}else{
  		setcookie('post_add_msg', 'Thêm mới Không thành công',time()+5);
      header('Location: post.php');
  	}

?>