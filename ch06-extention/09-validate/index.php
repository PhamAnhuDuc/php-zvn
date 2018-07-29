<!--Xây dựng các vấn đề cần thực hiện-->

<?php
	// Giả sử thu được mảng này từ phía người sử dụng -> công việc kiểm tra mảng này người dùng nhập vào có đúng yêu cầu ko :D
	$source = array(
						'name' 	=> 'nguyen van a',		// string - 5 - 20
						'age'	=> 25,					// int	  - 20 - 100
						'url'	=> 'www.zend.vn',		// url
						'email'	=> 'nva@gmail.com',		// email
				);
	require_once 'Validate.class.php';
	$validate = new Validate($source);  //tạo ra 1 đối tượng thì cần truyền vào dữ liệu nào muốn kiểm tra -> contrustor phải truyền vào $source
	
	// Rules
	$rules	 = array(
					 'name' => array('type' => 'string', 'min' => 10, 'max' => 50),
					 'age' 	=> array('type' => 'numeric', 'min' => 1, 'max' => 90),
				);
	$validate->addRules($rules); //gán nó vào = cách gọi method của nó ra
	
	echo '<pre>';
	print_r($validate);
	echo '</pre>';
?>
