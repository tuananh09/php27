<?php  
	$numb = array(1,4,2,6,9,100,40);
	sort($numb);

	$sapXep = count($numb);
	echo "Dẫy số sau khi sắp xếp là:";
	for($i = 0; $i < $sapXep; $i++) {
	echo $numb[$i];
	echo " ";
	}

?>