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
    <h3 align="center">Update Post</h3>
    <hr>
    <form action="?mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">Name</label>
        <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?=$category['id']?>"> 

        <input type="text" class="form-control" id="" placeholder="" name="name" value="<?=$category['name']?>"> 
      </div>
      <!-- <div class="form-group">
        <label for="">Images</label>
        <input type="text" class="form-control" id="" placeholder="" name="img">
      </div> -->
      
      <div class="form-group">
        <label for="">Description</label>
        <input type="text" class="form-control" id="" placeholder="" name="description" value="<?=$category['description']?>">
      </div>
      
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</body>
</html>