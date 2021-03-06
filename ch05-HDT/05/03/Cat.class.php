<?php

class Cat{
	
	// Properties
	public $name;
	public $color;
	public $age;
	public $weight;
	public $maxSpeed = '20km/h';
	
	public function __construct($name = 'Doremon', $age = 10, $color = 'blue', $weight = '2kg'){
		$this->name		= $name;
		$this->color	= $color;
		$this->age		= $age;
		$this->weight	= $weight;
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
		echo '<br />Max speed - self: ' . $this->maxSpeed;  //trỏ trực tiếp đến thuộc tính chứ k phải method
		//echo '<br />Max speed - Cat: ' . Cat::$maxSpeed;  // truy cập thông qua tên của class
	}
}













