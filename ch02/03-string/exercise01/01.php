<?php
	$url 	= "http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";
	
	/*	URL		: 06_BienTham_TinhYeu_LyMaiTrang.wma
	 *  ID		: 06
	 *  Name	: Bien Tham
	 *  Album	: Tinh Yeu
	 *  Singer	: LyMaiTrang
	 *  Type	: wma
	 */
	
	// Cach 01
	function getInfo01($url){
		$info	= explode('/', $url); // tạo ra mảng cách nhau = dau '/'

		$result	= $info[count($info) - 1]; //lấy phần tử cuối cùng của mảng
		return $result;
	}
	
	// Cach 02
	function getInfo02($url){
		$arrayURL	= parse_url($url); //lấy ra url
		$info		= explode("/", $arrayURL['path']); //thực hiện cắt theo phần tử path
		return $result	= $info[count($info) - 1]; //lấy phần tử cuối cùng của mảng
	}
	
	// Cach 03
	function getInfo03($url){
		$index 	= strripos($url, "/");  // tìm ký tự xuất hiện / cuối cùng 
		$result = substr($url, $index+1);  //lấy kí tự từ giá trị đó về sau
		return $result;
	}
	
	getInfo03($url);