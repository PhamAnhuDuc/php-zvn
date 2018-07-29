<?php
	error_reporting(E_ALL ^ E_NOTICE);  //hiển thị tất cả các lỗi
	//ini_set('error_reporting', 0);  //ẩn thông báo lỗi 
	
	foreach($array as $key => $value){
		$html .= $value;
		
	}