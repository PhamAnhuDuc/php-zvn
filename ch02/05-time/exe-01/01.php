<?php
	$timeStampe = strtotime("now");  //chuyển đổi chuỗi về thời gian hiện tại
	$timeStampe = strtotime("18 June 2013");
	$timeStampe = strtotime("next Monday");  //thứ 2 tuần sau
	$timeStampe = strtotime("15-Mar-2013");
	$timeStampe = strtotime("15/06/2013");

	echo date('d/m/Y', $timeStampe);
?>