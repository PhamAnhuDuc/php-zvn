<?php
	// Kiem tra ton tai: $_SESSION['age']
	// Neu da ton tai -> cap nhat 
	// Neu chua ton tai -> $_SESSION['age'] = 20
	session_start();
	
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
	
	if(isset($_SESSION['age'])){
		unset($_SESSION['age']);  //xóa session
	}
	
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';