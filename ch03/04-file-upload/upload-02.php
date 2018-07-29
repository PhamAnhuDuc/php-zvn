<?php

	require_once 'functions.php';
	$configs	= parse_ini_file('config.ini'); //đọc tập tin cấu hình

	$fileUpload = $_FILES['file-upload'];
	
	$fileName 	= randomString($fileUpload['name'], 7);
	
	$flagSize 		= checkSize($fileUpload['size'], $configs['min_size'], $configs['max_size']);
	$flagExtension 	= checkExtension($fileUpload['name'], explode('|', $configs['extension'])); //chuyển chuỗi thành arr
	
	if($flagSize == true && $flagExtension==true){
		@move_uploaded_file($fileUpload['tmp_name'], './files/' . $fileName); //kí hiệu @ nếu có lỗi thì k hiển thị lỗi cho người dùng
	}