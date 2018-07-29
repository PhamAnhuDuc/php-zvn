<?php
	//tự định nghĩa 1 hàm 

	$variable = 'Nguyen Van A';
	
	function convertString($string){
		$string = str_replace(' ', '_', $string);
		return $string;
	}
													//tham số thứ 3 là 1 arr và giá trị truyền vào đúng = hàm đó
	echo filter_var($variable, FILTER_CALLBACK, array('options'=>'convertString'));