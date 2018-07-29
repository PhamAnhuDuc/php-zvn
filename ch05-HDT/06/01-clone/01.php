<?php

	require_once 'Cat.class.php';
	
	$catA = new Cat('Mimi', 3, 'yellow', '2kg');
	
	
	$catB = clone $catA;  //sao chép đối tượng A
	
	$catB->setName('Kitty');
	$catB->setAge(5);
	$catB->setColor('blue');
	
	$catA->showInfo();
	echo '<hr /><br />';
	$catB->showInfo();