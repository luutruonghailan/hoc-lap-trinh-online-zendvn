<?php
	require_once 'library/class.phpmailer.php';
	
	$mail = new PHPMailer();
	
	// Thiết lập thông tin người gửi và email người gửi
	$mail->SetFrom('zendvn@gmail.com', 'ZendVN Group');
	
	// Thiết lập thông tin người nhận và email người nhận
	$mail->AddAddress('lthlan54@gmail.com', 'Hai Lan');
	$mail->AddAddress('support.training@zend.vn');
	
	// Thiết lập tiêu đề
	$mail->Subject = "PHP Mailer";
	
	// Thiết lập charset
	$mail->CharSet = 'utf-8';
	
	// Thiết lập nội dung
	$mail->Body = "Khóa học lập trình web với PHP - ZendVN";
	
	if($mail->Send() == false){
		echo 'Error: ' . $mail->ErrorInfo;
	} else{
		echo 'Success';
	}