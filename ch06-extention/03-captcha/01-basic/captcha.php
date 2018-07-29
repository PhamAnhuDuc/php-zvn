<?php
	session_start();
	header('Content-type: image/jpeg'); //hiển thị hình ảnh
	$captcha	= imagecreate(100, 50); //tạo hình ảnh theo chiêu rộng và cao
	
	imagecolorallocate($captcha, 42, 194, 42); //thiết lập mầu sắc - R : 42 B : 42 theo mã mầu ở pts
	
	$content	= substr(md5(time()*20-1345),0,5);
	//tạo nội dung cho văn bản và hình ảnh
	$text		= imagettftext($captcha, 18, 5, 20, 30, imagecolorallocate($captcha, 15, 24, 15), 'vnavan.ttf', $content); 
	$_SESSION['code'] = $content;
	imagejpeg($captcha);
	
	imagedestroy($captcha);