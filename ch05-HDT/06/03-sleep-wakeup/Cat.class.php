<?php

class Cat{
	
	// Properties
	public $name;
	public $color;
	public $age;
	public $weight;
	
	public function __construct($name = 'Doremon', $age = 10, $color = 'blue', $weight = '2kg'){
		$this->name		= $name;
		$this->color	= $color;
		$this->age		= $age;
		$this->weight	= $weight;
	}

	public function __sleep(){  //hàm này có chức năng thiết lập các giá trị thuộc tính muốn chuyển thành chuỗi đặc biệt
		return array('name', 'age');	 // trả về 1 mảng name , color
	}
	
	public function __wakeup(){ //thiết lập lại giá trị mặc định của chuỗi mà chúng ta chuyển thành đối tượng
		$this->name		= 'Doremon';
		$this->color	= 'blue';
		$this->age		= 10;
		$this->weight	= '5 kg';
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function getColor(){
		return $this->color;
	}
	
	public function getAge(){
		return $this->age;
	}
	
	public function getWeight(){
		return $this->weight;
	}
	
	public function setName($value){
		$this->name = $value;
	}
	
	public function setColor($value){
		$this->color = $value;
	}
	
	public function setAge($value){
		$this->age = $value;
	}
	
	public function showInfo(){
		echo '<br />Name: ' . $this->getName();
		echo '<br />Age: ' . $this->getAge();
		echo '<br />Color: ' . $this->getColor();
		echo '<br />Weight: ' . $this->getWeight();
	}
}













