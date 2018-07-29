<?php
	require_once 'library/class.phpmailer.php';
	
	$mail = new PHPMailer();
	
	// Gọi đến lớp SMTP
	$mail->IsSMTP();
	
	$mail->SMTPDebug	= 1; 	// Hiển thị thông báo trong quá trình kết nối SMTP
								// 1 = Hiển thị message + error
								// 2 = Hiển thị message
	
	$mail->SMTPAuth		= true;
	$mail->SMTPSecure	= 'ssl';
	$mail->Host			= 'smtp.gmail.com';
	$mail->Port			= 465;
	$mail->Username		= 'php.zendvn@gmail.com';	// php.zendvn@gmail.com zendvnphp89
	$mail->Password		= 'zendvnphp89';
	
	// Thiết lập thông tin người gửi và email người gửi
	$mail->SetFrom('php.zendvn@gmail.com', 'PHP online - ZendVN - 03');
	
	// Thiết lập thông tin người nhận và email người nhận
	$mail->AddAddress('lthlan54@gmail.com', 'Hai Lan');
	
	// Thiết lập email reply
	$mail->AddReplyTo('lanluu@worldprovn.com');
	
	// Đính kèm tập tin
	$mail->AddAttachment('Lighthouse.zip');
	
	// Thiết lập tiêu đề
	$mail->Subject = "PHP Mailer - 02";
	
	// Thiết lập charset
	$mail->CharSet = 'utf-8';
	
	// Thiết lập nội dung
	$body		= "Khóa học lập trình web với <b>PHP - ZendVN</b>";
	
	//$mail->Body = $body;
	$mail->MsgHTML($body);
	
	if($mail->Send() == false){
		echo 'Error: ' . $mail->ErrorInfo;
	} else{
		echo 'Success';
	}