<?php
	$username = $_POST['username']; //lấy ra từ form gửi sang
	$password = $_POST['password']; //lấy ra từ form gửi sang
	
	$message = array();
	if(empty($username)){  //người dùng chưa nhập gì cả thì hiện ra thông báo lỗi -> gắn thông báo vào 1 biến
		$message['username'] = 'Username không được rỗng';
	}else if($username != 'hailan'){
		$message['username'] = 'Username không tồn tại';
	}
	
	if(empty($password)){
		$message['password'] = 'Password không được rỗng';
	}else if($password != '123456'){
		$message['password'] = 'Password không đúng';
	}
	
	$status = 'error';
	if(count($message) == 0) $status = 'success';
	
	//mảng trả về gồm 2 phần tử 
	$reponse = array(
						'status' => $status,
						'message'=> $message
				);
	echo $jsonString = json_encode($reponse); //trả nó về thì cần chuyển nó về trạng thái json
?>