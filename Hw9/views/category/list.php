  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CATEGORIES</title>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h3 class="text-center">--- CATEGORIES ---</h3>
    <a href="category_add.php" class="btn btn-primary">Add New Category</a>

    <p><?php echo (isset($_COOKIE['cate_add_msg'])?$_COOKIE['cate_add_msg']: '') ?></p>
    <table class="table">
      <th>ID</th>
      <th>Name</th>
      <th>Thumbnail</th>
      <th>Description</th>
      <th>Action</th>
    </thead>

    <?php 
    $i = 0;
     foreach($categories as $cate){ $i++;?>
      
      <tr>
        <td><?=$i?></td>
        <td><?=$cate['name'] ?></td>
        <td>
          <img src="<?=$cate['thumbnail'] ?>" width="100px" height="100px">
        </td>
        <td><?=$cate['description'] ?></td>
        <td>
          <a href="index.php?mod=category&act=detail&id=<?=$cate['id'] ?>" class="btn btn-primary">Detail</a>
          <a href="category_edit.php?id=<?=$cate['id'] ?>" class="btn btn-success">Edit</a>
          <a href="category_delete.php?id=<?=$cate['id'] ?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </table>
  </div>

</body>
</html>