<?php
	require_once 'Cat.class.php';
	$catA = new Cat('Mimi');
	
	$catA->showInfo();
	
	$strCatA = serialize($catA); //chuyển đối tượng thành một chuỗi đặc biệt
	
	echo '<br />' . $strCatA;
	
	$objCatA = unserialize($strCatA); //chuyển chuỗi đặc biệt thành 1 đối tượng
	
	echo '<pre>';
	print_r($objCatA);
	echo '</pre>';