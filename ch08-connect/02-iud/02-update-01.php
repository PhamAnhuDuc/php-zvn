<?php
	$connect = @mysqli_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	
	// UPDATE
	mysqli_select_db($connect,'manage_user'); //lựa chọn database
		//câu lệnh update
	$query = "UPDATE `group` SET `status` = '1'
				   WHERE `ordering` = 9";
	
	$result = mysqli_query( $connect,$query);
	
	if($result){
		echo $total = mysqli_affected_rows($connect); //cho biết có 1 dòng dữ liệu được cập nhập
	}else{
		echo mysqli_error();
	}
	mysqli_close($connect);