<?php
  //DL từ form gán vào data
  $data = $_POST;
  // $id = $_GET['id'];

  require_once('connection.php');


  //Câu lệnh truy vấn thêm DL
  
    $query = "UPDATE users SET name = '".$data['name']."', email='".$data['email']."' WHERE id = ".$data['id'];
  // echo $query;

  // Thực thi câu lệnh
    $result = $conn->query($query);

    if ($result == true) {
      // echo "Thêm mới thành công!";
      setcookie('cate_add_msg', 'Cập nhật thành công', time() + 5);
      header('Location: user.php');
    }else{
      echo "Thêm mới thất bại!";
      setcookie('cate_add_msg', 'Cập nhật không thành công', time() + 5);
      header('Location: user.php');
    }
?>
