<?php
	$value = "lthlan54@gmail.com dsds";	
	
	if(!filter_var($value, FILTER_VALIDATE_EMAIL)){  //check mail
		echo "<br /> $value - khong la email";
	}else{
		echo "<br /> $value - la email";
	}