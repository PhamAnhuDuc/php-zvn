
<?php
	$str	= "        Php        is      easy             "; 
	
	// Khoang trang thua o ben trai va ben phai
	$str 	= trim($str);
	
	// Khoang trang du thua giua cac tu
	// Php is easy
	
	$array 	= explode(" ", $str); // chuyển chuỗi thành mảng
	
	
	foreach($array as $key => $value){  //lọc các ký tự
		if(trim($value) == null) unset($array[$key]); //loại bỏ nó ra khỏi mảng
	}
	
	$str = implode(" ", $array); //nhập mảng thành chuỗi
	
	echo $str . ' length: ' . strlen($str);
	
?>
