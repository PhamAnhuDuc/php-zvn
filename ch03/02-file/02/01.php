<?php
	$filename	= 'files/abc.txt';  
	$filename	= 'files';
	
	$type		= filetype($filename);  //kiểm tra tập tin có tồn tại hay ko
	
	echo $type;