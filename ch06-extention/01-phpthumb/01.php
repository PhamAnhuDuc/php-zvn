<?php
	// thư viện xử lí hình ảnh
	require_once 'library/ThumbLib.inc.php';
	
	$fileName 	= 'images/baby.jpg';
	$thumb 		= PhpThumbFactory::create($fileName);
	
	$thumb->resize(200,200); //phương thức thay đổi kích thước của tấm hình - chiều rộng cao nhất và chiều rộng cao nhất
	$thumb->show(); //hiển thị ảnh đó ra