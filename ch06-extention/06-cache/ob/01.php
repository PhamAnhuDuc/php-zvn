<?php
	ob_start(); // bật lên 1 bộ nhớ đệm -> các dữ liệu trước khi hiển thị sẽ được lưu vào bộ nhớ đệm
?>

<html>
	<body>
		<h1>PHP is easy</h1>
	</body>
</html>
<?php
	ob_end_flush();  // tắt bộ nhớ đệm
?>