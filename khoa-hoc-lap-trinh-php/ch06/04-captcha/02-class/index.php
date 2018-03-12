<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>PHP Captcha</title>
</head>
<body>
	<div id="wrapper">
    	<div class="title">PHP Captcha</div>
        <div id="form">   
			<form action="process.php" method="post" name="add-form">
				<div class="row">
					<p>Code</p>
					<input type="text" name="captcha_code" />
					<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
				</div>
				
				<div class="row">
					<img src="securimage/securimage_show.php" id="captcha"/>
				</div>
				
				<div class="row">
					<input type="submit" value="Submit" name="submit">
					
				</div>			
			</form>    
        </div>
        
    </div>
</body>
</html>
