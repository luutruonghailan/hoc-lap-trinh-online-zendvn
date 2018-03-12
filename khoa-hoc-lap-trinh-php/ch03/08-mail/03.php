<?php
	$to			= "lthlan54@gmail.com, support.training@zend.vn";
	$subject	= 'Email test 4';
	$message	= '<h3 style="color:red">This is a test 4</h3>';
	
	$header		 = "From: lthlan54@gmail.com.vn \r\n";
	$header		.= "Content-type: text/html; charset=utf-8 \r\n";

	if(mail($to, $subject, $message, $header)==true){
		echo 'Success';
	}else{
		echo 'Fail';
	};