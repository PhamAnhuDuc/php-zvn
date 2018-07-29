<?php
class Validate{
	
	// Error array
	private $errors	= array();
	
	// Source array
	private $source	= array();
	
	// Rules array
	private $rules	= array();
	
	// Result array
	private $result	= array();
	
	// Contrucst - loại bỏ phần tử submit
	public function __construct($source){
		if(array_key_exists('submit', $source)){ //kiểm tra trong mảng source có phần tử submit ko
			unset($source['submit']); // nếu có thì xóa nó đi
		}
		$this->source = $source;

	}
	
	// Add rules
	public function addRules($rules){
		$this->rules = array_merge($rules, $this->rules );
	}
	
	// Get error
	public function getError(){
		return $this->errors;
	}
	
	// Get result : in ra kết quả
	public function getResult(){
		return $this->result;
	}
	
	// Add rule // tên thành phần muốn kiểm tra -kiểu dữ liệu - độ dài tối thiểu - độ dài tối đa
	public function addRule($element, $type, $min = 0, $max = 0, $required = true){
		$this->rules[$element] = array('type' => $type, 'min' => $min, 'max' => $max, 'required' => $required);
		return $this;
	}
	
	// Run
	public function run(){
		foreach($this->rules as $element => $value){
			if($value['required'] == true && trim($this->source[$element])==null){
				$this->errors[$element] = 'is not empty';
			}else{
				switch ($value['type']) {
					case 'int':
						$this->validateInt($element, $value['min'], $value['max']);
						break;
					case 'string':
						$this->validateString($element, $value['min'], $value['max']);
						break;
					case 'url':
						$this->validateUrl($element);
						break;
					case 'email':
						$this->validateEmail($element);
						break;
					case 'status':
						$this->validateStatus($element);
						break;
				}
			}
			if(!array_key_exists($element, $this->errors)) {
				$this->result[$element] = $this->source[$element];
			}
		}
		$eleNotValidate = array_diff_key($this->source, $this->errors);
		$this->result	= array_merge($this->result, $eleNotValidate);
		
	}
	
	// Validate Integer
	private function validateInt($element, $min = 0, $max = 0){
		if(!filter_var($this->source[$element], FILTER_VALIDATE_INT, array("options"=>array("min_range"=>$min,"max_range"=>$max)))){
			$this->errors[$element] = "'" . $this->source[$element] . "' is an invalid number";
		}
	}
	
	// Validate String
	private function validateString($element, $min = 0, $max = 0){
		$length = strlen($this->source[$element]);
		if($length < $min) {
			$this->errors[$element] = "'" . $this->source[$element] . "' is too short";
		}elseif($length > $max){
			$this->errors[$element] = "'" . $this->source[$element] . "' is too long";
		}elseif(!is_string($this->source[$element])){
			$this->errors[$element] = "'" . $this->source[$element] . "' is an invalid string";
		}
	}
	
	// Validate URL
	private function validateURL($element){
		if(!filter_var($this->source[$element], FILTER_VALIDATE_URL)){
			$this->errors[$element] = "'" . $this->source[$element] . "' is an invalid url";
		}
	}
	
	// Validate Email
	private function validateEmail($element){
		if(!filter_var($this->source[$element], FILTER_VALIDATE_EMAIL)){
			$this->errors[$element] = "'" . $this->source[$element] . "' is an invalid email";
		}
	}
	//hiển thị các lỗi đó ra
	public function showErrors(){
		$xhtml = '';
		if(!empty($this->errors)){
			$xhtml .= '<ul class="error">';
			foreach($this->errors as $key => $value){
				$xhtml .= '<li><b>'. ucfirst($key) .':</b> '.$value.' </li>';
			}
			$xhtml .=  '</ul>';
		}
		return $xhtml;
	}
	
	//phương thức kiểm tra xem có lỗi hay ko : thực hiện đếm errors 
	public function isValid(){
	 	if(count($this->errors)>0) return false; //có lỗi thì trả về false
	 	return true;	
	}
	
	// Validate Status
	private function validateStatus($element){ //hợp lệ khi hoặc là 0 hoặc là 1
		if($this->source[$element] < 0 || $this->source[$element] > 1){
			$this->errors[$element] = "Select status";
		}
	}
	
	
	
	
}