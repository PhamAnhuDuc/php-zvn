<?php
	// Kết nối
	$connect = @mysqli_connect('localhost', 'root', '');
	
	// Kiểm tra kết nối
	if(!$connect){
		die('<h3>Fail</h3>');
	}
	
	echo '<h3>Success</h3>';
	
	//Hiển thị  Danh sách table
	$tables = mysqli_list_tables( 'manage_user',$connect);
	
	while($row = mysqli_fetch_array($tables)){
 		echo '<h3>' . $row[0] . '</h3>';
	}
	
	// Đóng kết nối
	mysqli_close($connect);