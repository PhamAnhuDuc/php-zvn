<?php
	$connect = @mysqli_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	
	// delete
	mysqli_select_db($connect,'manage_user'); //lựa chọn database
	
	$id = 9;
	$query 	= "DELETE FROM `group` WHERE `id` = '" . $id . "'";
	$result = mysqli_query($connect,$query);
	
	if($result){
		echo $total = mysqli_affected_rows($connect);
	}else{
		echo mysqli_error();
	}
	mysqli_close($connect);