<?php
	require_once 'library/class.phpmailer.php';
	
	$mail = new PHPMailer();
	
	// Gọi đến lớp SMTP
	$mail->IsSMTP();
	
	$mail->SMTPDebug	= 1; 	// Hiển thị thông báo trong quá trình kết nối SMTP
								// 1 = Hiển thị message + error
								// 2 = Hiển thị message
	
	$mail->SMTPAuth		= true;
	$mail->Host			= 'mail.training.zendvn.com';
	$mail->Port			= 25;
	$mail->Username		= 'hailan89@training.zendvn.com';
	$mail->Password		= 'HaiLan89';
	
	
	// Thiết lập thông tin người gửi và email người gửi
	$mail->SetFrom('hailan89@training.zendvn.com', 'HaiLan');
	
	// Thiết lập thông tin người nhận và email người nhận
	$mail->AddAddress('lthlan54@gmail.com', 'Hai Lan');
	
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