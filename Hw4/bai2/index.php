<?php 
    require 'products.php';  
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
     <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="text-center">DANH MỤC SẢN PHẨM</h2>


        <table class="table table-bordered">
          <button style="margin-bottom: 10px;"><a href="cart.php">Xem giỏ hàng</button>
            <thead>     
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Tên sản phẩm</th>
                    <th scope="col" class="text-center">Đơn giá</th>
                    <th scope="col" class="text-center">Số lượng</th>
                    <th scope="col" class="text-center">Image</th>
                    <th scope="col" class="text-center">#</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($product as $value) {  
                 ?>
                    <tr>
                        <th scope="row" class="text-center"><?php echo $value['maSP']; ?> </th>
                        <td class="text-center"><?php echo $value['tenSP']; ?></td>
                        <td class="text-center"><?php echo number_format($value['donGia']); ?> Vnđ </td>
                        <td class="text-center"><?php echo $value['soluong']; ?></td>
                        <td class="text-center"><?php echo $value['img']; ?></td>
                        <td class="text-center"><a href="add_cart.php?maSP=<?php echo $value['maSP']; ?>">Add to cart</a></td>
                    </tr>
                   <?php } ?>             
            </tbody>
        </table>  
    </div>
</body>
</html>