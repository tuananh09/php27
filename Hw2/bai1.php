<?php 
	$array =[1,4,2,6,9,100,45,8,20];
	
	echo "<pre> Dãy số mảng:";
		print_r($array);
	echo "</pre>";
	//Giá trị max;
	$max = 0;
	$dem = 0;

	for ($i=0; $i < count($array); $i++) { 
		if ($max == null) {
			$max = $array[$i];
			$dem = $i;
		}
		else{
			if ($array[$i] > $max) {
				$max = $array[$i];
				$dem = $i;
			}
		}
	}
	echo "Giá trị lớn nhất của mảng là:".$max;
?>