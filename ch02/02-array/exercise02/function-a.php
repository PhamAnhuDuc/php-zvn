
<?php

	//đọc nội dung từ file
	$data = file('question.txt') or die("Cannot read file");
	
	array_shift($data); //xóa phần tử đầu tiên
	
	$arrQuestions = array();
	foreach($data as $key=>$value) {	
		$tmp = explode("|", $value); // chuyển chuỗi thành mảng và cách nhau bởi dấu |
		$id			= $tmp[0];
		$question 	= $tmp[1];
		$arrQuestions[$id]	= array("question" => $question);
	}