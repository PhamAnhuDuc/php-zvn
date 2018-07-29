<?php
class Validate{
	
	// Error array - lưu trữ phần thông báo lỗi
	private $errors	= array();
	
	// Source array -- mảng dữ liệu truyền vào để tiến hành validate nó
	private $source	= array();
	
	// Rules array  -- quy tắc đểm kiểm tra các phần tử ví dụ name : kiểm tra theo string min 5 max 20, url kiểm tra theo kiểu url
	private $rules	= array();
	
	// Result array : giá trị ok lưu vào đây
	private $result	= array();
	
	// Contrucst
	public function __construct($source){
		$this->source = $source; // gọi đến thuộc tính source - biến source ở hàm constructor
	}
	
	// Add rules  --các quy tắc kiểm tra cho 1 phần tử nào đó
	public function addRules($rules){
		//$this->rules = $rules;
		$this->rules = array_merge($rules, $this->rules ); //tránh trường hợp ghi đè - = cách nối lại 2 mảng
	}
	
	// Get error -- lưu lỗi vào mảng này
	public function getError(){
		return $this->errors;
	}
	
	// Get result
	public function getResult(){
		return $this->result;
	}
	
	// Add rule  -- xác định add cho phần tử nào - kiểu add là gì - giá trị nhỏ nhất - giá trị lớn nhất
	public function addRule($element, $type, $min = 0, $max = 0, $required = true){
		$this->rules[$element] = array('type' => $type, 'min' => $min, 'max' => $max, 'required' => $required);
		return $this;
	}

	// Run -- thực hiện quá trình validate
	public function run(){
			//dựa vào mảng rules để kiểm tra
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
	
	
	
	
	
	
	
	
}