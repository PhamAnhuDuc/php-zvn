<?php
	//hàm thay đổi chuỗi 
	function callback($buffer){
		return str_replace("PHP", "Zend", $buffer); //tìm php thay đổi thành zend trong chuỗi $buffer
	}
	
	ob_start("callback");  // toàn bộ dữ liệu bên dưới được load vào bộ nhớ đệm
?>

<html>
	<body>
		<h1>PHP is easy</h1>
	</body>
</html>
<?php
	ob_end_flush(); 
?>