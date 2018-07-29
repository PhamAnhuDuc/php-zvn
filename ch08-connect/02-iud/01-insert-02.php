<?php
	$connect = @mysqli_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	
	// INSERT - cần xác định câu lệnh insert - xác định dB nào và TB nào
	mysqli_select_db($connect,'manage_user'); //lựa chọn database

		//dữ liệu nhận từ người dùng : hay từ 1 form sẽ có dạng như sau: và truyền dữ liệu vào câu insert 
	$arrData = array('name'=>'Member 12345555555555555', 'status' => 0, 'ordering' => 9);
	
	//hàm tạo ra câu insert SQL để tránh nhầm lẫn
	function createInsertSQL($data){
		$cols='';
		$vals='';
		$newQuery = array();
		if(!empty($data)){
			foreach($data as $key=> $value){
				$cols .= ", `$key`";
				$vals .= ", '$value'";
			}
		}
		$newQuery['cols'] = substr($cols, 2); //cắt chuỗi để bỏ đi dấu phẩy ở phía trước lấy từu vị trí thứ 2 trở về sau
		$newQuery['vals'] = substr($vals, 2);
		return $newQuery;
	}
	
	
	
	$newQuery = createInsertSQL($arrData);
	
	$query = "INSERT INTO `group`(".$newQuery['cols'].") VALUES (".$newQuery['vals'].")";

	
	$result = mysqli_query( $connect,$query); //thực hiện câu lệnh


    //kiểm tra xem phần insert thành công hay chưa
	if($result){ //nếu = true
		echo $total = mysqli_affected_rows($connect); //trả về số dòng đã insert hoặc delete hoặc update
	}else{
		echo mysqli_error();
	}

	mysqli_close($connect);