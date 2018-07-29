<?php
class Upload { //cần xác định các phương thức và hành động
	
	// Biến lưu trữ tên tập tin
	private $_fileName;
	
	// Biến lưu trữ kích thước tập tin
	private $_fileSize;
	
	// Biến lưu trữ phần mở rộng tập tin
	private $_fileExtension;
	
	// Biến lưu trữ đường dẫn thư mục tạm
	private $_fileTmp;
	
	// Biến lưu trữ lỗi
	private $_errors;
	
	// Biến lưu trữ đường dẫn upload
	private $_uploadDir;
	
	// Phương thức khởi tạo cần lưu những cái gỉ mà form truyền vào - finame : để lưu tên của form
	public function __construct($fileName){
		$fileInfo 				= $_FILES[$fileName];
			/*echo "<pre>";
			print_r($fileInfo);   // Lấy được những thông tin này gán thuộc tính cho class upload 
			echo "</pre>";*/
			
		$this->_fileName 		= $fileInfo['name'];
		$this->_fileSize 		= $fileInfo['size'];
		$this->_fileExtension 	= $this->getFileExtension();
		$this->_fileTmp 		= $fileInfo['tmp_name'];
	}
	
	// Phương thức lấy phần mở rộng
	public function getFileExtension(){
		$ext = pathinfo($this->_fileName, PATHINFO_EXTENSION);
		return $ext;
	}

	
	// Phương thức thiết lập phần mở rộng được phép upload truyền dưới dạng arr
	public function setFileExtension($arrExtension){
		//hàm in array để kiểm tra phần tử có tồn tại ko
		if(in_array(strtolower($this->_fileExtension), $arrExtension) == false){ //kiểm tra sự tồn tại nếu file đó có trùng tên với phần mở rộng thì cho phép upload k thì thôi
			$this->_errors[] = 'Phan mo rong khong phu hop';
		}
	}
	
	// Phương thức thiết lập kích thước tối thiểu và kích thước tối đa được cho phép
	public function setFileSize($min, $max){
		if($this->_fileSize < $min || $this->_fileSize > $max){
			$this->_errors[] = 'Kich thuoc khong phu hop';
		}
	}
	
	// Phương thức thiết lập đường dẫn đến foleder upload
	public function setUploadDir($value){
		if(file_exists($value)) { //kiểm tra thư mục đã tồn tại hay chưa
			$this->_uploadDir = $value;
		}else{
			$this->_errors[] = 'Thu muc khong hop le';
		}
	}
	
	// Phương thức kiểm tra điều kiện upload của tập tin
	public function isVail(){
		$flag = false;
		if(count($this->_errors) > 0) {
			$flag = true;
		}
		return $flag;
	}
	
	// Phương thức upload tập tin
	public function upload($rename = true){
		if($rename==true){
			$fileName 	 = $this->randomString(6);
			$destination = $this->_uploadDir . $fileName;
		}else{
			$destination = $this->_uploadDir . $this->_fileName;
		}
		@move_uploaded_file($this->_fileTmp, $destination);  //đường dẫn tập tin hiện tại - đường dẫn tập tin upload
	}
	
	// Phương thức hiển thị lỗi
	public function showError(){
		echo '<pre>';
		print_r($this->_errors);
		echo '</pre>';
	}
	
	// Phương thức random
	private function randomString($length = 5){
		$arrCharacter = array_merge(range('A','Z'), range('a','z'), range(0,9));
		$arrCharacter = implode($arrCharacter, '');
		$arrCharacter = str_shuffle($arrCharacter);
	
		$result		= substr($arrCharacter, 0, $length) . '.' . $this->_fileExtension;
		return $result;
	}
}