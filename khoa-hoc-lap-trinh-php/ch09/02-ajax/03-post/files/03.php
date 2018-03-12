<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$message = array();
	if(empty($username)){
		$message['username'] = 'Username không được rỗng';
	}else if($username != 'hailan'){
		$message['username'] = 'Username không tồn tại';
	}
	
	if(empty($password)){
		$message['password'] = 'Password không được rỗng';
	}else if($password != '123456'){
		$message['password'] = 'Password không đúng';
	}
	
	$status = 'error';
	if(count($message) == 0) $status = 'success';
	
	$reponse = array(
						'status' => $status,
						'message'=> $message
				);
	echo $jsonString = json_encode($reponse);
?>