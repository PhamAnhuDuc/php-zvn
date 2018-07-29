<?php
	require_once 'library/ThumbLib.inc.php';
	
	$fileName 	= 'images/baby.jpg';
	$thumb 		= PhpThumbFactory::create($fileName);
	
	$thumb->adaptiveResize(300, 100); //chuyển hình ảnh về ddinjg dạng quy định lấy từ tâm của tấm hình
	$thumb->show();