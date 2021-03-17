<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Giỏ hàng</title>
</head>

<style type="text/css">
	.text{
		font-weight: bold;
		font-size: 20px;
		text-align:center;
	}
</style>
<body>
	<form action="sanpham.php" method="POST" role="form">
		<table align="center" cellpadding="10px" cellspacing="1px" border="1px"   hight="200px">
			<tr align="center" class="text">
				<font>
					<td colspan="6"></td>
					<td colspan="1"><a href="sanpham.php">Tiếp tục mua hàng</a></td>
				</font>
			</tr>
			<tr class="text">
				<td colspan="7">Thông tin giỏ hàng(Hiện có    sản phẩm trong giỏ)</td>
			</tr>
			<tr class="text">
				<td>ID</td>
				<td>Tên sản phẩm</td>
				<td>Số lượng</td>
				<td>Đơn giá</td>
				<td>Thành tiền</td>
				<td>Thời gian cập nhật</td>
				<td></td>
			</tr>
			<tbody>
				<?php
				<tr>
					<td><?php echo $value['masp']?></td>
					<td><?php echo $value['tensp']?></td>
					<td><?php echo $value['soluong']?></td>
					<td><?php echo $value['dongia']?></td>
					<td><?php echo $value['thanhtien']?></td>
					<td><?php echo $value['time']?></td>
					<td><a href="addGH.php?masp=<?php echo $key ?>">Xóa khỏi giỏ hàng</a></td>
				</tr>
				?>
			</tbody>
			<tr>
				<td class="text" colspan="4">Tổng tiền:</td>
				<td></td>
				<td colspan="2"></td>
			</tr>
		</table>
	</form>
</body>
</html>