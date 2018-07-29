<?php
	$value = 'ad';	
	
	if(!filter_var($value, FILTER_VALIDATE_FLOAT)){  //check float
		echo "<br /> $value - khong la float";
	}else{
		echo "<br /> $value - la float";
	}