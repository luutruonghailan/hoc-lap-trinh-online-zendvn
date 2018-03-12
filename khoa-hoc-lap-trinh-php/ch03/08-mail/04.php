<?php
	$to			= "lthlan54@gmail.com";
	$subject	= 'Email test 5';
	$message	= '<h3 style="color:red">This is a test 5</h3>';
	
	$header		 = "From: lthlan54@gmail.com.vn \r\n";
	$header		.= "Content-type: text/html; charset=utf-8 \r\n";
	$header		.= "Cc: support.training@zend.vn \r\n";
	$header		.= "Bcc: lanluu@worldprovn.com \r\n";

	if(mail($to, $subject, $message, $header)==true){
		echo 'Success';
	}else{
		echo 'Fail';
	};