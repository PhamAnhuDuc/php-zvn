<?php
	// Lấy ra danh sách các data base của local host
	// Kết nối
	$connect = @mysqli_connect('localhost', 'root', '');
	
	// Kiểm tra kết nối
	if(!$connect){
		die('<h3>Fail</h3>');
	}
	
	echo '<h3>Success</h3>';
	
	// Danh sách database
	// $databases = mysql_list_dbs($connect);
	$databases = mysqli_query($connect,'SHOW DATABASES'); //thực hiện 1 câu truy vấn
	
	
	while($row = mysqli_fetch_object($databases)){ //trả kết quả dưới dạng 1 obj
		echo '<h3>' . $row->Database . '</h3>'; //in ra dB
	}
	
	// Đóng kết nối
	mysqli_close($connect);