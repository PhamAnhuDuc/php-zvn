<?php 

	//hiển thị hình ảnh
	session_start();
	header('Content-type: image/jpeg');
	
	echo $_SESSION['image']['data'];
