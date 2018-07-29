<?php
	$data	= file_get_contents('data.txt'); //đọc file
	
	foreach($data as $key => $value){
		echo $value['name'] . '<br />';
	}