<?php  
	session_start();
	$productInCart = $_SESSION['cart'];
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
        <h2 class="text-center">GIỎ HÀNG SẢN PHẨM</h2>
        <table class="table table-bordered">
            <button style="margin-bottom: 10px"><a href="index.php">Quay lại giỏ hàng</button>
            <thead>     
                <tr>
                    <th scope="col" class="text-center">Mã sản phẩm</th>
                    <th scope="col" class="text-center">Tên sản phẩm</th>
                    <th scope="col" class="text-center">Đơn giá</th>
                    <th scope="col" class="text-center">Số lượng</th>
                    <th scope="col" class="text-center">Thành tiền</th>
                    <th scope="col" class="text-center">Image</th>
                    <th scope="col" class="text-center">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                	$thanhTien = 0;
                    foreach ($productInCart as $value) {  
                    	$thanhTien += $value['soLuong'] * $value['donGia'];
                 ?>
                    <tr>
                        <th scope="row" class="text-center"><?php echo $value['maSP']; ?> </th>
                        <td class="text-center"><?php echo $value['tenSP']; ?></td>
                        <td class="text-center"><?php echo number_format($value['donGia']); ?> Vnđ </td>
                        <td class="text-center">
                        	<a href="add_cart.php?maSP=<?php echo $value['maSP']; ?>" class="btn btn-warning">+</a>
                        	
                        	<?php echo $value['soLuong']; ?>
                        	
                        	<a href="decrease_cart.php?maSP=<?php echo $value['maSP']; ?>" class="btn btn-danger">-</a>	
                        	</td>
                        <td class="text-center"><?php echo number_format($value['donGia'] * $value['soLuong']); ?> Vnđ </td>
                        <td class="text-center"><?php echo $value['img']; ?></td>
                        <td class="text-center"><a href="delete.php?maSP=<?php echo $value['maSP']; ?>">Xóa sản phẩm</a></td>
                    </tr>
                   <?php } ?> 
                   <tr>
                   		<td scope="row" colspan="4" class="text-center"><h4><b>Tổng thành tiền</b></h4></td>
                   		<td class="text-center"><?php echo number_format($thanhTien); ?> Vnđ </td>
                   </tr>            
            </tbody>
        </table>  
    </div>
</body>
</html>