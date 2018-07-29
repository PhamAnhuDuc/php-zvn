<?php
	//kiểm tra chuỗi khác rỗng hay ko
	$str	= "                "; 
	
	if(!isset($str) || trim($str) == ""){
		echo "Empty";
	}else{
		echo "Not empty";
	}
?>
