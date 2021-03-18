<?php 
	session_start();

?>
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
	
	<table align="center" cellpadding="10px" cellspacing="1px" border="1px"   hight="200px">
		<tr align="center" class="text">
			<font>
				<td colspan="6"></td>
				<td colspan="1"><a href="sanPham.php">Tiếp tục mua hàng</a></td>
			</font>
		</tr>
		<tr class="text">
			<td colspan="7">Thông tin giỏ hàng</td>
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
		<?php 
		$tongTien=0;
		foreach ($_SESSION["sanpham"] as $key => $value) {
		?>
		<tr>
			<td><?php echo $_SESSION["sanpham"][$key]['maSP']; ?></td>
			<td><?php echo $_SESSION["sanpham"][$key]['tenSP']; ?></td>
			<td><?php echo $_SESSION["sanpham"][$key]['soLuong']; ?></td>
			<td><?php echo $_SESSION["sanpham"][$key]['donGia']; ?></td>
			<td><?php echo $_SESSION["sanpham"][$key]['thanhTien']; ?></td>
			<td><?php echo $_SESSION["sanpham"][$key]['thoiGian']; ?></td>
			<td>
				<?php echo '<a href="deleteSP.php?maSP='. $_SESSION["sanpham"][$key]['maSP'] .'">Xóa khỏi giỏ hàng</a>'; ?>
			</td>
		</tr>
		<?php $tongTien += $_SESSION["sanpham"][$key]['thanhTien'];  } ?>

		<tr>
			<td class="text" colspan="4">Tổng tiền:</td>
			<td><?php echo "$tongTien"; ?></td>
			<td colspan="2"></td>
		</tr>
	</table>
</body>
</html>