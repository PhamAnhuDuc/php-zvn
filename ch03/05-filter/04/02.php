<?php
	$value = 'zendvn.rar';   //check phần mở rộng của file
	
	// jpg | png | gif
	
	$options = array(								//luôn bắt đầu = dấu . và hoặc ... hoặc...
					'options' => array('regexp' => '#\.(jpg|png|gif)$#')
				);
	
	
	if(!filter_var($value, FILTER_VALIDATE_REGEXP, $options)){
		echo $value . ' khong phai la dinh dang cho phep';
	}else{
		echo $value . ' la dinh dang cho phep';
	}