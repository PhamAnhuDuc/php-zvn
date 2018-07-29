<?php
	$config	= ini_get_all();  // lấy ra file cấu hình ở tập tin config nó nằm trong thư mục xampp tập tin php.ini
	
	echo $timeZone	= ini_get('date.timezone');  //thuộc tính này cũng lấy  ở trong file đó ra  file php.ini
	
	ini_set('date.timezone', 'Asia/Ho_Chi_Minh'); //thay đổi tập tin cấu hình : thuộc tính muốn thay đổi - giá trị muốn thay đổi
	
	echo '<br />' . ini_get('date.timezone');