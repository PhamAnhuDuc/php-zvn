<?php
	require_once 'Upload.class.php';
		// echo "<pre>";
		// print_r($_FILES);
		// echo "</pre>";
		
	 $upload = new Upload('file-upload');
			// echo "<pre>";
			// print_r($upload);
			// echo "</pre>";
			
	$upload->setFileExtension(array('zip'));
	$upload->setFileSize(102400, 5242880);
	$upload->setUploadDir('./images/');
	
	if($upload->isVail()==false){
		$upload->upload(true);
	}else{
		$upload->showError();
	}
?>