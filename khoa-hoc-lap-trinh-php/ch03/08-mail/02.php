<?php
	$to			= "lthlan54@gmail.com, support.training@zend.vn";
	$subject	= 'Email test 2';
	$message	= 'This is a test 2';
	$header		= "From: lthlan54@gmail.com.vn";

	if(mail($to, $subject, $message, $header)==true){
		echo 'Success';
	}else{
		echo 'Fail';
	};