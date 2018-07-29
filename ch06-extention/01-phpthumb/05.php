<?php
	require_once 'library/ThumbLib.inc.php';
	
	$fileName 	= 'images/baby.jpg';
	$thumb 		= PhpThumbFactory::create($fileName);
	
		//CW : xoay trái , CVV : xoay phải
	//$thumb->rotateImage('CVV');
	$thumb->rotateImageNDegrees(130); //hàm xoay theo độ
	$thumb->show();