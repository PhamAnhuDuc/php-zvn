<?php
	//$filename	= 'file';
	$filename	= 'files/abc.tx';
	if(file_exists($filename)){  //kiểm tra xem có tồn tại ko
		echo 'Ton tai';
	}else {
		echo 'Khong ton tai';
	}