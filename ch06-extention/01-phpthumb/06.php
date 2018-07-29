<?php
	require_once 'library/ThumbLib.inc.php';
	
	$fileName 	= 'images/baby.jpg';
	$thumb 		= PhpThumbFactory::create($fileName);
	

	$thumb->resize(110, 110); //chuyển về kích thước
	$thumb->save('img110/baby110.png'); //lưu vào 1 tập tin nào đó và thay đổi phầm mở rộng của nó
	$thumb->show();