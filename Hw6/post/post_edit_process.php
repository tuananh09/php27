<?php
  //DL từ form gán vào data
  $data = $_POST;
  // $id = $_GET['id'];

  require_once('connection.php');


  //Câu lệnh truy vấn thêm DL
  
    $query = "UPDATE posts SET title = '".$data['title']."', desciption='".$data['desciption']."', content='".$data['content']."', view_count='".$data['view_count']."' WHERE id = ".$data['id'];
  // echo $query;

  // Thực thi câu lệnh
    $result = $conn->query($query);

    if ($result == true) {
      // echo "Thêm mới thành công!";
      setcookie('post_add_msg', 'Cập nhật thành công', time() + 5);
      header('Location: post.php');
    }else{
      echo "Thêm mới thất bại!";
      setcookie('post_add_msg', 'Cập nhật không thành công', time() + 5);
      header('Location: post.php');
    }
?>
