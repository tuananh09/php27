<div style="width: 50%; margin: 0 auto;">
	<h2 style="text-align: center;">Thông tin Sinh viên</h2>

<?php 
	session_start();
		$i=0;
		$b = $_SERVER['QUERY_STRING'];
		foreach ($_SESSION['sinhvien'] as $key => $value) {
			$i++;			
		$a =  $_SESSION['sinhvien'][$key]['masv'];
		if ( $a == $b) {
		echo "Mã sinh viên: ". $_SESSION['sinhvien'][$key]['masv']."<br>";
		echo "Tên sinh viên: ".$_SESSION['sinhvien'][$key]['hoten']."<br>";
		echo "Email: ". $_SESSION['sinhvien'][$key]['email']."<br>";
		echo "Số điện thoại: ". $_SESSION['sinhvien'][$key]['phone']."<br>";
		echo "Địa chỉ: ". $_SESSION['sinhvien'][$key]['diachi']."<br>";
		echo "Giới tính: ". $_SESSION['sinhvien'][$key]['gioitinh'];
		}
	}
?>
</div>
