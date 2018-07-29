<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Process</title>
</head>
<body>
	<div id="wrapper">
    	<div class="title">PROCESS</div>
        <div id="form">   
			<?php
				require_once 'functions.php';
				require_once 'class/Database.class.php';
				
				session_start();
				if(@$_SESSION['flagPermission']==true){
					if($_SESSION['timeout'] + 3600 > time()){
						echo '<h3>Xin chào: '.$_SESSION['userInfo']['fullname'].'</h3>';
						echo '<a href="logout.php">Đăng xuất</a>';
					}else{
						session_unset();
						header('location: login.php');
					}
					
				}else{ //thực hiện lưu vào session => kiểm tra nó khác rỗng hay hay ko
					if(!checkEmpty($_POST['username']) && !checkEmpty($_POST['password'])){
						$username 	= $_POST['username'];
						$password 	= md5($_POST['password']); //mã hóa thành md5
						
						//ket noi den co so du lieu
						$params		= array(
								'server' 	=> 'localhost',
								'username'	=> 'root',
								'password'	=> '',
								'database'	=> 'manage_user',
								'table'		=> 'user',
						);
						$database = new Database($params); 
							// echo "<pre>";
							// print_r($database);
							// echo "</pre>";

								//lấy các giá trị id , user name . firts name ,last name, address , birthday (nói chung là lấy tất cả các trường trong bảng user)
						$query[] 	= "SELECT `id`, CONCAT(`firstname`, ' ', `lastname`) AS fullname,`username`, `email`, `birthday`, `address`";
						$query[] 	= "FROM `user`";  //lấy từ bảng user 
						$query[] 	= "WHERE `username` = '" . $username. "'"; //điều kiện = $user name ở phía trên và nghĩa là user name truyền vào đó
						$query[] 	= "AND `password` = '" . $password. "'"; //pass = pass ở form gửi sang
						
						$query		= implode(" ", $query);
							//echo($query); //echo ra nó xong coppy nó đưa vào phần sql xem có bị báo lỗi cú pháp ko
						$database->query($query);//thực hiện query
						$userInfo = $database->fetchRow($query);//trả về thông tin của user thì in nó ra xem thế nào hóa ra là 1 mảng
							// echo "<pre>";
							// print_r($userInfo); //lay ra duoc thong tin cua user
							// echo "</pre>";
							// die();
						if(!empty($userInfo)){ //DB sẽ trả về dòng dữ liệu (là arr) nếu nó khác rỗng nghĩa là có dữ liệu trả về còn nếu k thì cho nó về file login
							$_SESSION['userInfo'] 		= $userInfo;
							$_SESSION['flagPermission'] = true;
							$_SESSION['timeout'] 		= time();
								echo "<pre>";
								print_r($_SESSION);
								echo "</pre>";
								
							die();
							echo '<h3>Xin chào: '.$_SESSION['userInfo']['fullname'].'</h3>';
							echo '<a href="logout.php">Đăng xuất</a>';
						}else{
							header('location: login.php'); //chuyen den file login
						}
					}else{
						header('location: login.php');
					}
				}
			?>
        </div>
        
    </div>
</body>
</html>
