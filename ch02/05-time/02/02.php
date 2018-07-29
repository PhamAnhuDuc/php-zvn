<?php
	date_default_timezone_set('Asia/Ho_Chi_Minh');  //php time zone - thiết lập múi giờ
	
	$time = getdate();
	
	echo "<pre>";
	print_r($time);
	echo "</pre>";