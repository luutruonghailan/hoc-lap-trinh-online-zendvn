

<?php 
	session_start();
	$_SESSION['file'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
						<html>
						<head>
						<meta http-equiv="Content-Type" content="text/html; charset=${encoding}">
						<title>Insert title here</title>
						</head>
						<body>
							<h1>This is a file</h1>
						</body>
						</html>
						<?php
							
							function checkNumber($number){
								return ($number % 2 == 0) ? "So chan" : "So le";
							}
						?>' ;
	
	eval('?>' . $_SESSION['file']);
	echo checkNumber(3);
?>