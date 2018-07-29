<?php
	session_start();	

	$name = $_SESSION['name']; //truyền dữ liệu cho session
	
	echo $name;  //in ra giá trị của section đó