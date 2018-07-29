<?php
	require_once 'fractions.php';	


	$fractions	= "52/6"; // 26/3   //dạng của phân số
			
	$result = optimizeFraction($fractions);
	echo $result	= implode("/", $result);
