<?php
	$data = array(
					'name' => 'nguyen van a',
					'age'  => 123,
					'email'=> 'nvagmail.com'
				);
	
	$filters = array(
					'name' => array(
									'filter' => FILTER_CALLBACK,  //gọi lại 1 hàm
									'options'=> 'ucwords'  //chuyển chữ cái đầu tiên của mỗi từ thành chữ in hoa
								),
					'age' => array(
									'filter' => FILTER_VALIDATE_INT,
									'options'=> array('min_range' => 1, 'max_range' => 1000)  //nằm trong khoảng từ 1 đến 100
					),
					'email' => array(
							'filter' => FILTER_VALIDATE_EMAIL
					),
				);
	
	//hàm cho phép lọc cùng lúc nhiều giá trị
	
	$result = filter_var_array($data, $filters);

	echo '<pre>';
	print_r($result);
	echo '</pre>';