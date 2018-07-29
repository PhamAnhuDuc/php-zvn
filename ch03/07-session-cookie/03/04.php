<?php
	session_start();

	if(isset($_SESSION['age'])){ //kiểm tra session đã tồn tại chưa
		echo 'Ton tai';
	}else{
		echo 'Chua Ton tai';
	}

