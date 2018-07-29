<?php


	//Sử dụng biểu thức chính quy trong phần filter
	$value = '084-08-38.234561';
	
	$options = array(								//thao tác với biểu thức chính quy thì cần bắt đầu và kết thúc bởi dấu ##
					'options' => array('regexp' => '#^084-[0-9]{2}-[0-9]{2}\.[0-9]{6}$#')
				);
	
	
	if(!filter_var($value, FILTER_VALIDATE_REGEXP, $options)){
		echo $value . ' khong phai la so phone';
	}else{
		echo $value . ' la so phone';
	}