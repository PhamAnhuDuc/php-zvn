<?php
	$courses	= array();
 	$courses[]	= "PHP";
// 	$courses[]	= "Zend Framework";
// 	$courses[]	= "Joomla";
	
	$length		= count($courses); // đếm số phần tử trong mảng
	echo $length;
	
	// C1: length
	
// 	if($length > 0) {
// 		echo "Khong la mang rong";
// 	}else{
// 		echo "Mang rong";
// 	}
	
	// C2: empty  // kiểm tra mảng có rỗng hay k
	if(!empty($courses)) {
		echo "Khong la mang rong";
	}else{
		echo "Mang rong";
	}