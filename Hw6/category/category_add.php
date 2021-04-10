<?php 
  require_once('connection.php');

  // Câu lệnh truy vấn
  $query = "SELECT * FROM categories WHERE parent_id is NULL";

  // Thực thi câu lệnh
  $result = $conn->query($query);

  // Tạo 1 mảng để chứa dữ liệu
  $categories = array();

  while($row = $result->fetch_assoc()) { 
    $categories[] = $row;
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
    <h3 align="center">Add New Category</h3>
    <hr>
    <form action="category_add_process.php" method="POST" role="form" enctype="multipart/form-data">
      
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" id="" placeholder="" name="name">
      </div>
      <!-- <div class="form-group">
        <label for="">Images</label>
        <input type="text" class="form-control" id="" placeholder="" name="img">
      </div> -->
      <div class="form-group">
        <label for="">Danh mục cha</label>
        <select name="category" id="category" class="form-control">
          <?php foreach ($categories as $cate) {?>
             <option value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="">Description</label>
        <input type="text" class="form-control" id="" placeholder="" name="description">
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
</body>
</html>