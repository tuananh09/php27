<?php 
	if (isset($_POST['save'])) {
		$maSV = $_POST['masv'];
		$hoTen = $_POST['hoten'];
		$email = $_POST['email'];
		$soDienThoai = $_POST['phone'];
		$diaChi = $_POST['diachi'];
		$gioiTinh = $_POST['gioitinh'];
	}
 ?>

<div style="width: 50%; margin: 0 auto;">
	<h2 style="text-align: center;">Thông tin Sinh viên</h2>
	<div>Mã sinh viên: <?php echo "$maSV"; ?></div>
	<div>Tên sinh viên: <?php echo "$hoTen"; ?></div>
	<div>Email: <?php echo "$email"; ?></div>
	<div>Số điện thoại: <?php echo "$soDienThoai"; ?></div>
	<div>Địa chỉ: <?php echo "$diaChi"; ?></div>
	<div>Giới tính: <?php echo "$gioiTinh"; ?></div>
</div>
