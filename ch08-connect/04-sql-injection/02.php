<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 
	$connect = @mysqli_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	mysqli_select_db($connect,'manage_user'); //lựa chọn database
	
	mysqli_query($connect, "SET NAMES 'utf8'");
	mysqli_query($connect, "SET CHARACTER SET 'utf8'");
	
	$id = $_GET['id']; //nhận từ url
	
	if(is_numeric($id)){ //vì biết id là kiểu số nguyên thì cần check kiểu dữ liệu cẩn thận
		$query	= "SELECT * FROM `group` WHERE `id` = '$id'";
	
		$result = @mysqli_query($connect,$query);
		while($row = mysqli_fetch_assoc($result)){
			echo '<pre>';
			print_r($row);
			echo '</pre>';
		}
	}
	mysqli_close($connect);
?>            


	
	
	
	
	
	