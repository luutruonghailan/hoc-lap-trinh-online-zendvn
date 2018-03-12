<?php
	$to			= "lthlan54@gmail.com";
	$subject	= 'Email test';
	$message	= 'This is a test';
	$header		= "From: lthlan54@gmail.com.vn";

	if(mail($to, $subject, $message, $header)==true){
		echo 'Success';
	}else{
		echo 'Fail';
	};