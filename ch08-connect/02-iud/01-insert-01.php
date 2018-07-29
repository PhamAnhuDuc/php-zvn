<?php
	$connect = @mysqli_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	
	// INSERT - cần xác định câu lệnh insert - xác định dB nào và TB nào
	mysqli_select_db($connect,'manage_user'); //lựa chọn database

	echo $query = "INSERT INTO `group`(`name`, `status`, `ordering`) VALUES 
					                  ('Member', '1', '10'),('Member 1', '1', '10')";
	$result = mysqli_query($connect,$query); //thực hiện câu lệnh


    //kiểm tra xem phần insert thành công hay chưa
	if($result){ //nếu = true
		echo $total = mysqli_affected_rows($connect); //trả về số dòng đã insert hoặc delete hoặc update
	}else{
		echo mysqli_error($connect);
	}


	mysqli_close($connect);