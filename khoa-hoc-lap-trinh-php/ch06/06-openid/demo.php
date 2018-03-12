<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
	session_start();
	
	require_once 'openid.php';
	
	$openid = new LightOpenID('localhost');
	
	if(!$openid->mode){
		if($_SESSION['user']['login']==false){
			$openid->identity = 'https://www.google.com/accounts/o8/id';
			$openid->required = array('namePerson/friendly', 'contact/email', 'pref/language' , 'namePerson/first', 'namePerson/last');
			echo '<a href="'.$openid->authUrl().'">Login with Google</a>';
		}else{
			echo '<pre>';
			print_r($_SESSION);
			echo '</pre>';
		}
	} else if ($openid->mode == "cancel"){
		echo 'Thất bại';
	} else{
		if($openid->validate()==true){
			$data = $openid->getAttributes();
			$_SESSION['user']['login'] 	= true;
			$_SESSION['user']['data'] 	= $data;
			echo '<pre>';
			print_r($_SESSION);
			echo '</pre>';
		}
	}
		