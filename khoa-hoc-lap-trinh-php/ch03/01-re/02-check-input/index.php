<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Register Form</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<?php
	require_once 'functions.php';
	
	if(!empty($_POST)){
		$error	= array();
		
		// email
		$email	= $_POST['email'];
		if(trim($email)==''){
			$error['email'] = '<p>Giá trị không được rỗng</p>';
		}else {
			if(checkInput($email, 'email')==false){
				$error['email'] = '<p>Giá trị này không hợp lệ</p>';
				$email			= '';
			}
		}
		
		// Username
		
		$username	= $_POST['name'];
		if(trim($username)==''){
			$error['name'] = '<p>Giá trị không được rỗng</p>';
		}else {
			if(checkInput($username, 'username')==false){
				$error['name'] 	= '<p>Giá trị này không hợp lệ</p>';
				$username		= '';
			}
		}
		
		// Passworld
		$password	= $_POST['password'];
		if(trim($password)==''){
			$error['password'] = '<p>Giá trị không được rỗng</p>';
		}else {
			if(checkInput($password, 'password')==false){
				$error['password'] 	= '<p>Giá trị này không hợp lệ</p>';
				$password				= '';
			}
		}
		
		// Website
		$website	= $_POST['website'];
		if(trim($website)==''){
			$error['website'] = '<p>Giá trị không được rỗng</p>';
		}else {
			if(checkInput($website, 'website')==false){
				$error['website'] 	= '<p>Giá trị này không hợp lệ</p>';
				$website				= '';
			}
		}
	}
	
	$strEmail		= createInput('input', 'Email', '<input type="text" name="email" value="'.$email.'"/>', $error['email']);
	$strUsername	= createInput('input', 'Username', '<input type="text" name="name" value="'.$username.'"/>', $error['name']);
	$strPassword	= createInput('input', 'Password', '<input type="password" name="password" value="'.$password.'"/>', $error['password']);
	$strWebsite		= createInput('input nobottomborder', 'Website', '<input type="text" name="website" value="'.$website.'"/>', $error['website']);
?>
	<div class="wrapper">
		<form class="form1" action="#" method="post">
			<div class="formtitle">Login to your account</div>
			<?php
				echo $strEmail . $strUsername . $strPassword . $strWebsite; 
			?>
			<div class="buttons">
				<input class="orangebutton" type="submit" value="Login" />
			</div>
		</form>
	</div>
</body>
</html>