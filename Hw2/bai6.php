<?php

   echo "Kiểm Tra Chuỗi Palindrome:"."<br>";
   function Palindrome($chuoi){
   	if ($chuoi==strrev($chuoi)){
   		echo $chuoi." :là chuỗi Palindrome"."<br>";

   	}else{
   		echo $chuoi." :không phải là chuỗi Palindrome"."<br>";
   	}
   }
   $chuoi_1 = "Xinchaoae";
   Palindrome($chuoi_1);

   $chuoi_2 = "ZenttneZ";
   Palindrome($chuoi_2);
?>
