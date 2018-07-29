<?php

require_once 'Cat.class.php';

class Lion extends Cat{ //thực hiện kế thừa
	
	public $height = '1m2';
	
	public function getHeight(){ 
		return $this->height;
	}
	
	public function showInfo(){  //hình thức nạp chồng định nghĩa lại hàm này 
		echo '<br />Name: ' . $this->getName();
		echo '<br />Age: ' . $this->getAge();
		echo '<br />Color: ' . $this->getColor();
		echo '<br />Weight: ' . $this->getWeight();
		echo '<br />Height: ' . $this->getHeight(); 
	}
}













