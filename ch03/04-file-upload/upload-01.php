<?php
	require_once 'functions.php';


	$fileUpload = $_FILES['file-upload'];
	
	$fileName 	= randomString($fileUpload['name'], 7); //tránh trường hợp tên đè trùng lên nhau lên cần đổi tên cho file
											//k ghi rõ ntn mà thường ghi vào tập tin cấu hình
	$flagSize 		= checkSize($fileUpload['size'], 100 * 1024, 5 * 1024 * 1024);
	$flagExtension 	= checkExtension($fileUpload['name'], array('jpg','png','mp3','zip'));  //hàm check file có đuôi mở rộng cho phép
	
	//khi thỏa mãn size và extension thf mới thực hiện upload
	if($flagSize == true && $flagExtension==true){
		@move_uploaded_file($fileUpload['tmp_name'], './files/' . $fileName); //hàm upload file
							//tên file được lưu ở thư mục tmp ,  // đường dẫn tên thư mục lúc sau
	}