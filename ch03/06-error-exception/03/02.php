<?php
	
	ini_set('display_errors', 'off');  //chuyển sang off thì thông báo lỗi sẽ tắt
	
	ini_set('log_errors', 'on');   //ghi lại các file log của phần lỗi web
	ini_set('error_log','php-error.log');  // ghi phần log đó vào tập tin này
	
	foreach($array as $key => $value){  //sẽ có lỗi khi biến này chứa được định nghĩa
		$html .= $value;
		
	}