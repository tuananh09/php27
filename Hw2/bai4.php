<?php 
	$name ="ngUyễn tuấN anH";
	echo "Chuỗn ban đầu: ".$name;

	$name = strtolower($name); //chuyển sang chữ thường
	$name = trim($name); //Cắt khoảng trắng ở đầu cuối
	// $name = ucwords($name); //viết hoa chữ cái đầu cách 2

	echo "<br>"."Tên sau khi định dạng là: " .ucwords($name);
	
?>