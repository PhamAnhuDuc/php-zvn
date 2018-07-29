<?php
	$url 	= "http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";
	
	//truyền vào chuỗi 
	function format($str){
		$result = $str[0];// ký tự đầu tiên
		for($i = 1; $i < strlen($str); $i++){  //duyệt qua tất cả các phần tử trong chuỗi
			if(ctype_upper($str[$i])==true){ //hàm ctype_upper : kiểm tra xem kí tự đó có phải là chữ hoa ko
				$result .= " " . $str[$i]; //nếu dúng thì thêm vào ""
			}else{
				$result .= $str[$i]; //ngược lại thì giữ nguyên
			}
		}
		return $result;
	}
	
	// Cach 03
	function getInfo03($url){
		$index 	= strripos($url, "/");
		$result = substr($url, $index+1);
		return $result;
	}
	
	$info 	= getInfo03($url);
	
	$result = array();
	
	$arrayInfo	= explode("_", $info); // tạo ra 1 mảng mới từ chuỗi ban đầu phân cách nhau bởi dấu _
	
	// ID
	$result["id"]	= $arrayInfo[0];

	// TYPE
	$arrType		= explode(".", $arrayInfo[3]); //kí tự cắt là dấu .
	$result["type"]	= $arrType[1];
	
	// NAME, AUDIO, SINGER
	$arrayInfo[3]	= $arrType[0];
	
	$result["singer"]	=	format($arrayInfo[3]);
	$result["name"]		=	format($arrayInfo[1]);
	$result["album"]	=	format($arrayInfo[2]);
	
	echo "<pre>";
	print_r($result);
	echo "</pre>";
	