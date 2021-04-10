<?php 
  require_once('connection.php');

  // Câu lệnh truy vấn
  $query = "SELECT * FROM users";
  // $query = "SELECT * FROM users WHERE parent_id is NULL";

  // Thực thi câu lệnh
  $result = $conn->query($query);

  // Tạo 1 mảng để chứa dữ liệu
  $users = array();

  while($row = $result->fetch_assoc()) { 
    $users[] = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ZentGroup - Education And Technology Group</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h3 align="center">ZentGroup - Education And Technology Group</h3>
    <h3 align="center">Add New User</h3>
    <hr>
    <form action="user_add_process.php" method="POST" role="form" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" id="" placeholder="" name="name">
      </div>
      <!-- <div class="form-group">
        <label for="">Images</label>
        <input type="text" class="form-control" id="" placeholder="" name="img">
      </div> -->
      
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" id="" placeholder="" name="email">
      </div>
      <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" id="" placeholder="" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
</body>
</html>