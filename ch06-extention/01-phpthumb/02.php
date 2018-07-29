<?php
	require_once 'library/ThumbLib.inc.php';
	
	$fileName 	= 'images/baby.jpg';
	$thumb 		= PhpThumbFactory::create($fileName);
	
	$thumb->resizePercent(50); //resize giảm còn 50%
	$thumb->show();