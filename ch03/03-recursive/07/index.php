<?php
	
	//liệt kê tất cả các đường dẫn
				//đường dẫn muốn hiển thị tập itn và thư mục , biến tham chiếu để kết quả trả về cho nó
	function showAll($path, &$newString ){
		$data	= scandir($path);
		
		$newString .= '<ul>';
		foreach($data as $key => $value){
			if($value != '.' && $value != '..'){
				$dir	= $path . '/' . $value;
				if(is_dir($dir)){
					$newString .= '<li>D: ' . $value;
					showAll($dir, $newString);
					$newString .= '</li>';
				}else{
					$newString .= '<li>F: ' . $value . '</li>';
				}
			}
		}
		$newString .= '</ul>';		
	}
	
	showAll('.', $newString);
	echo $newString;
	
	
	
	
	
	
	

	
