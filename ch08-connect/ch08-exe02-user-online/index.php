<?php
	// require_once 'connect.php';
	require_once 'class/Database.class.php';
	$params		= array(
								'server' 	=> 'localhost',
								'username'	=> 'root',
								'password'	=> '',
								'database'	=> 'manage_user',
								'table'		=> 'user',
						);
	$database = new Database($params);
			// echo "<pre>";
			// print_r($_SERVER); //có nhiều thông tin
			// echo "</pre>";
	$ip 	= $_SERVER['REMOTE_ADDR']; //lấy được địa chỉ ip
	$url	= $_SERVER['PHP_SELF'];  // lấy được url
	
	// Tìm kiếm userInfo trong online
		//$query = "SELECT ad FROM online WHERE `ip` = '".$ip."'";
	$query[] = "SELECT `id`";
	$query[] = "FROM `online`";
	$query[] = "WHERE `ip` = '" . $ip . "'"; //ip = ip truyền vào
	$query[] = "AND `url` = '" . $url . "'"; //url = url truyền vào
		// echo "<pre>";
		// print_r($query);
		// echo "</pre>";
		
	$query	= implode(" ", $query);
		echo($query);
	echo $flagExist = $database->exist($query); //kiểm tra xem có tồn tại hay k => ra 1 nghĩa là có
	// // INSERT _ UPDATE
	$arrData = array('ip' => $ip, 'url' => $url, 'time' => time()); //mảng dữ liệu
	if($flagExist){ //nếu như có thì thực hiện chức năng update
		// update
		$where = array(
						array('ip', $ip, 'and'),
						array('url', $url)
				);
		$database->update($arrData, $where);
	}else{ //chưa có thì thực hiện chức năng insert
		// insert
		$database->insert($arrData);
	}
	
	// DELETE: time + 10*60 < time() ;; xóa dòng dữ liệu có time k phù hợp với thời gian quy định
	$time = time(); //thời gian hiện tại
	$query = "DELETE FROM `online` WHERE `time` + 20*60 < $time";
	$database->query($query);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>User online</title>
</head>
<body>
	<div id="wrapper">
    	<div class="title">User online</div>
        <div id="form">
        <?php echo __FILE__;?>
        </div>       
    </div>
</body>
</html>
