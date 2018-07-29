<?php
	$course = array("PHP", "Joomla", "Zend Framework", "jQuery");
	
	function removeItem(&$array, $type = "first", $total = 2){
		
		$result = array(); // chứa các danh sách bị xóa
		
		if(!empty($array)){  //kiểm tra mảng có khác rỗng k
			if($total >= count($array)){
				$result = $array;
				$array = null;
			}else {
				if($type == "first"){ //nếu xóa phần tử ở đầu
					for($i = 1; $i <= $total; $i++) {
						$result[] = array_shift($array);
					}
				}else if($type == "last"){  //nếu xóa phần tử ở cuối
					for($i = 1; $i <= $total; $i++) {
						$result[] = array_pop($array);
					}
				}
			}
		}
		
		return $result;
	}
	
	
	
	echo "arrTemp: <br />";
	echo "<pre>";
	print_r($course);
	echo "</pre>";
	
	$arrTemp	= removeItem($course, "last", 2);
	
	echo "arrTemp: <br />";
	echo "<pre>";
	print_r($arrTemp);
	echo "</pre>";
	
	echo "course: <br />";
	echo "<pre>";
	print_r($course);
	echo "</pre>";