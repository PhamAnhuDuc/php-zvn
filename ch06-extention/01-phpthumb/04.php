<?php
	require_once 'library/ThumbLib.inc.php';
	
	$fileName 	= 'images/baby.jpg';
	$thumb 		= PhpThumbFactory::create($fileName);
	
	//$thumb->cropFromCenter(300);  // lấy từ vị trí chính giữa lấy sang mỗi bên 150px 
	//$thumb->cropFromCenter(300, 200);
	//$thumb->crop(0, 0, 400, 250); //crop 4 vị trí từ 0 0 đến chiều ngang 400px chiều dọc 250px
	$thumb->crop(200, 100, 400, 250); //cách left 200 , cách top 100
	$thumb->show();
