<?php
	//dịnh dạng cách hiển thị thời gian
	$time	= time();
	$time	= mktime(12,12,12,12,2,2013); // giờ,phút, giây, tháng, ngày, năm
	echo date("j/m/Y A - H : i : s", $time);	// 12/12/2013
