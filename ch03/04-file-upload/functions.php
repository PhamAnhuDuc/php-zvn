<?php
	// Check file size : dung lượng file hiện tại - kích thước tối thiểu , kích thước tối đa
	function checkSize($size, $min, $max){
		$flag = false;
		if($size >= $min && $size <= $max) $flag = true;
		return $flag;
	}
	
	// Check file extensions  : chỉ cho phép những file có đuôi mở rộng cho phép dựa vào filename truyền vào lấy phần mở rộng kiểm tra xem có
	//TRONG mảng đó ko nếu có là được phép upload k thì k được phép upload
	
	function checkExtension($fileName, $arrExtension){
		$ext = pathinfo($fileName, PATHINFO_EXTENSION);  //hàm này trả về đuôi mở rộng của nó
		$flag = false;
		if(in_array(strtolower($ext), $arrExtension)==true) $flag = true;  //kiểm tra xem có giá trị đó ko
		return $flag;
	}
	
	// Random file name
	function randomString($fileName, $length = 5){
		
		$ext = pathinfo($fileName, PATHINFO_EXTENSION);
		$arrCharacter = array_merge(range('A','Z'), range('a','z'), range(0,9));
		$arrCharacter = implode($arrCharacter, '');
		$arrCharacter = str_shuffle($arrCharacter);
	
		$result		= substr($arrCharacter, 0, $length) . '.' . $ext;
		return $result;
	}