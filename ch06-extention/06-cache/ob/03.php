<?php
	
	ob_start();
	
	echo $abc = '<html>
				<body>
					<h1>PHP is easy</h1>
				</body>
			</html>';
	$data = ob_get_contents(); //lấy toàn bộ thông tin của bộ nhớ đệm
?>


<?php
	ob_end_flush();  //tắt bộ nhớ đệm
	echo $data;
?>