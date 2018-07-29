<?php
class User {
	
	// Properties
	private $name;
	private $pass;
	private $fullName;
	
	
	public function __construct(){
		
		$this->name 	= 'John';
		$this->pass 	= '123456';
		$this->fullName = 'John Smith';
	}
	
	//được tạo tự động và được thực thi ở cuối trang đối tượng được tạo ra
	public function __destruct(){
		$_SESSION['userA'] = serialize($this);
	}
}