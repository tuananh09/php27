<?php 
	$a=0;
	$dem=0;
	for ($i = 1; $i <= 50; $i++) {
		if($i%2 == 0){
			$a= $a + $i;
			$dem++;
		}
		if($dem==10){
			break;
		}
	}
	echo "Tổng 10 số chẵn đầu tiên là: ".$a;
 ?>