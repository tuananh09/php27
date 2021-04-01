<?php 
	require_once('connection.php');
	$id = $_GET['id'];
	// Câu lệnh truy vấn
    $query = "DELETE FROM categories WHERE id = ".$id;

    // Thực thi câu lệnh
    $result = $conn->query($query); 
    if($result == true){
		setcookie('cate_add_msg','Xóa thành công',time()+5);
		header('Location: category.php');
	}else{
		setcookie('cate_add_msg','Xóa KHÔNG thành công',time()+5);
		header('Location: category.php');
	}
 ?>


