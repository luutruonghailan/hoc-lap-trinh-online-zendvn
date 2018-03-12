<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Login</title>
</head>
<body>
	<div id="wrapper">
    	<div class="title">LOGIN</div>
        <div id="form">   
        <?php
        	session_start();
        	if($_COOKIE['fullName']!= null){
				echo '<h3>Xin chào: '.$_COOKIE['fullName'].'</h3>';
				echo '<a href="logout.php">Đăng xuất</a>';
			}else{
        ?>
			<form action="process.php" method="post" name="add-form">
				<div class="row">
					<p>Username</p>
					<input type="text" name="username" />
				</div>
				
				<div class="row">
					<p>Password</p>
					<input type="password" name="password" />
				</div>
				
				<div class="row">
					<input type="submit" value="Đăng nhập" name="submit">
				</div>
			</form>    
		<?php
			} 
		?>
        </div>
        
    </div>
</body>
</html>
