<?php
	
	session_start();
	$_SESSION['course'] = 'PHP Programming';
	$_SESSION['info'] 	= array(
								'teacher' 	=> 'ZendVN',
								'time'		=> 100
							);
	
	$session = session_encode();  //chuyển nội dung => chuỗi đặc biệt
	
	session_unset();
	
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
	
	session_decode($session); //chuyển nội dung đặc biệt=> bình thường rồi lưu vào json
	
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';