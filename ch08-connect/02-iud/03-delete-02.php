<?php
	$connect = @mysqli_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	
	// delete
	mysqli_select_db($connect,'manage_user'); //lựa chọn database
	
	
	$ids = array(229, 202);
	$deleteID ='';
	foreach($ids as $id) {
		$deleteID .= "'" . $id . "', ";  
	}
	$deleteID .= "'0'";
	
	$query 	= "DELETE FROM `group` WHERE `id` IN ($deleteID)";
	$result = mysqli_query($connect,$query);
	if($result){
		echo $total = mysqli_affected_rows($connect);
	}else{
		echo mysqli_error();
	}
	
	
	mysqli_close($connect);