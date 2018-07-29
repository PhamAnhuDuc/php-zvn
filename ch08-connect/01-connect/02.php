<?php
	// Kết nối
	$connect = @mysqli_connect('localhost', 'root', '');  //@ để tắt các phần cảnh báo
	
	// Kiểm tra kết nối
	if(!$connect){
		die('<h3>Fail</h3>');
	}
	
	echo '<h3>Success</h3>';
	//Danh sách các DB có thể có\

    $databases = dba_list($connect);

    echo '<pre>';
    print_r($databases);
    echo  '<pre>';

	// Đóng kết nối
	mysqli_close();