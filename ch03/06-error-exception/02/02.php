<?php
	
	//kiểm tra tập tin có tồn tại ko
	if(file_exists('data.txt')){
		$data	= file_get_contents('data.txt');
		
		foreach($data as $key => $value){
			echo $value['name'] . '<br />';
		}
	}else{
		die('File not found'); //ngừng chương trình
	}
	
	// Xu ly $data
	echo '<br />Here!';