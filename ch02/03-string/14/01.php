<?php
	$array = array("yellow", "pink", "blue");
	
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	
	$str	= implode("+", $array); //chuyền arr => chuỗi
	
	echo $str;
?>
