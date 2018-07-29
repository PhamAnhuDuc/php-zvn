<?php
	$x = "on";	// 1, true, on
	
	if(!filter_var($x, FILTER_VALIDATE_BOOLEAN)){  //bien can kiem tra la X
		echo "<br /> $x - khong la kieu Boolean";
	}else{
		echo "<br /> $x - la kieu Boolean";
	}