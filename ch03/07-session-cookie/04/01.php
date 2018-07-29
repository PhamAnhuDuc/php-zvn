<?php
	$variable = 'This is a string';
	
	session_start();
	
	$_SESSION['variable'] = $variable; //lưu biến vào section
	
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';