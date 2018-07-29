
<?php
	$str	= "Php is easy"; 
	
	echo "Input: " . $str . " - length: " . strlen($str);
	
	$str	= ltrim($str, "Php"); //xóa chữ php
	
	echo "<br />";
	
	echo "Output: " . $str . " - length: " . strlen($str);
?>
