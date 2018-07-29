<?php

class Sample{
	static $a = 1000;
	
	static public function showInfo(){  //truy cập nhanh 1 method mà k cần khởi tạo đối tượng
		echo '<h3>showInfo</h3>';
	} 
}

/*
$sample = new Sample();
echo 'Static $a: ' . Sample::$a;
$sample->showInfo();
*/

Sample::showInfo();  //cú pháp truy cập nhanh và truy cập trực tiếp qua tên class