<?php
	$source = array(
						'name' 	=> 'nguyen van a',		// string - 5 - 20
						'age'	=> 25,					// int	  - 20 - 100
						'url'	=> 'www.zend.vn',		// url
						'email'	=> 'nva@gmail.com',		// email
				);
	require_once 'Validate.class.php';
	$validate = new Validate($source);
	
	// Rule
	$validate->addRule('name', 'string', 5, 20)   //kiểm tra cho 1 phần tử
			 ->addRule('age', 'int', 1, 90);
	
	// Rules
	$rules	 = array(
							'url' 	=> array('type' => 'url'),
							'email' => array('type' => 'email'),
					);
	$validate->addRules($rules);  //add 1 phần rules có nhiều phần tử
	
	echo '<pre>';
	print_r($validate);
	echo '</pre>';
?>
