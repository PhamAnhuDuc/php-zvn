<?php
	$time	= getdate(); //lấy ra thời gian hiện tại được thiết lập ở máy chủ
	echo "<pre>";
	print_r($time);
	echo "</pre>";
	
	echo $hour	= $time["hours"];