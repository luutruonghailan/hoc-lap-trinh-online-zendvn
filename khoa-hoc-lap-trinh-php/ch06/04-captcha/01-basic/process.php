<?php
	session_start();

	if($_POST['captcha'] == $_SESSION['code']) {
		echo 'Success';
	}else{
		echo 'Fail';
	}