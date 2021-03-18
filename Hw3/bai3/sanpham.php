<?php 
session_start();

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

		<form action="addSP.php" method="POST">
			<tr>
				<td>SP1</td>
				<td>Iphone 4 32GB</td>
				<td>5000</td>
				<td ><a name="add" href="addSP.php?maSP=SP1&tenSP=ip4&donGia=5000" >Add to cart</a></td>
			</tr>
		</form>

		<form action="addSP.php" method="POST">
			<tr>
				<td>SP2</td>
				<td>Ipad MIni 16GB</td>
				<td>8000</td>
				<td ><a name="add" href="addSP.php?maSP=SP2&tenSP=ip16&donGia=8000" >Add to cart</a></td>
			</tr>
		</form>

		<form action="addSP.php" method="POST">
			<tr>
				<td>SP3</td>
				<td>Iphone 7 32GB</td>
				<td>17000</td>
				<td><a name="add" href="addSP.php?maSP=SP3&tenSP=ip7&donGia=17000">Add to cart</a></td>
			</tr>
		</form>

		<form action="addSP.php" method="POST">
			<tr>
				<td>SP4</td>
				<td>Iphone 5 32GB</td>
				<td>10000</td>
				<td><a name="add" href="addSP.php?maSP=SP4&tenSP=ip5&donGia=10000">Add to cart</a></td>
			</tr>
		</form>

		<form action="addSP.php" method="POST">
			<tr>
				<td>SP5</td>
				<td>Iphone 6 plus 32GB</td>
				<td>15000</td>
				<td><a name="add" href="addSP.php?maSP=SP5&tenSP=ip6&donGia=15000">Add to cart</a></td>
			</tr>
		</table>
	</form>
</body>
</html>