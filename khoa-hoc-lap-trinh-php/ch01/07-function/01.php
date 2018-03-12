<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content">
	<?php
		function createBox(){
			echo '<div style="width: 200px; height: 50px;">';
			echo '<p>Box A <span>(200x50)</span></p>';
			echo '</div>';
		}
		
		createBox();
		createBox();
	?>
		
			
		
		
	</div>
</body>
</html>