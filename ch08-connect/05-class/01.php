<?php
	require_once 'Database.class.php';
	
	$params		= array(
						'server' 	=> 'localhost',
						'username'	=> 'root',
						'password'	=> '',
						'database'	=> 'manage_user',
						'table'		=> 'group',
					);
	$database = new Database($params); //tạo ra 1 đối tượng - truyền vào 1 array

		echo "<pre>";
		print_r($database);
		echo "</pre>";
		
	
	
