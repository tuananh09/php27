<?php 
	session_start();
	if (isset($_POST['add'])) {
		$_SESSION['sanpham'][$_POST['masp']] = array(
			'masp' => $_POST['masp'],
			'tensp' => $_POST['tensp'],
			'dongia' => $_POST['dongia']
		);
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Danh sách sản phẩm</title>
</head>

<style type="text/css">
	.text{
		font-weight: bold;
		font-size: 20px;
	}
</style>
<body>
	<form action="addGH.php" method="POST" role="form">
		<table align="center" cellpadding="10px" cellspacing="1px" border="1px"  width="500px" hight="200px">
			<tr align="center" class="text">
				<font>
					<td colspan="3">Danh sách sản phẩm</td>
					<td colspan="2"><a href="addGH.php">Xem giỏ hàng</a></td>
				</font>
			</tr>
			<tr align="center" class="text">
				<td>ID</td>
				<td>Tên sản phẩm</td>
				<td>Đơn giá</td>
				<td>Hành động</td>
			</tr>
			<tr>
				<td name="masp">SP1</td>
				<td name="tensp">Iphone 4 32GB</td>
				<td name="dongia">5,000,000</td>
				<td ><a href="addGH.php" name="add">Add to cart</a></td>
			</tr>
			<tr>
				<td name="masp">SP2</td>
				<td name="tensp">Ipad MIni 16GB</td>
				<td name="dongia">8,000,000</td>
				<td ><a href="addGH.php" name="add">Add to cart</a></td>
			</tr>
			<tr>
				<td name="masp">SP3</td>
				<td name="tensp">Iphone 4 32GB</td>
				<td name="dongia">7,000,000</td>
				<td name="add"><a href="">Add to cart</a></td>
			</tr>
			<tr>
				<td name="masp">SP4</td>
				<td name="tensp">Iphone 5 32GB</td>
				<td name="dongia">10,000,000</td>
				<td name="add"><a href="">Add to cart</a></td>
			</tr>
			<tr>
				<td name="masp">SP5</td>
				<td name="tensp">Iphone 6 plus 32GB</td>
				<td name="dongia">15,000,000</td>
				<td name="add"><a href="">Add to cart</a></td>
			</tr>
		</table>
	</form>
</body>
</html>