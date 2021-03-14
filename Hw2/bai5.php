<?php  
	$fullname = ('Nguyễn Tuấn Anh');
	$explode_fullname = explode(' ', $fullname);
	echo "<pre>";
		print_r($explode_fullname);
	echo "</pre>";
	echo "Chuỗi ban đầu là: ".$fullname ."<br>";

	$sur_name = $explode_fullname[count($explode_fullname) - 3];
	echo "Họ: " .$sur_name ."<br>";
	$middle_name = $explode_fullname[count($explode_fullname) - 2];
	echo "Đệm: " .$middle_name ."<br>";
	$last_name = $explode_fullname[count($explode_fullname) - 1];
	echo "Tên: " .$last_name;

?>