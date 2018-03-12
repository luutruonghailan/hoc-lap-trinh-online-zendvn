<?php
	function callback($buffer){
		return str_replace("PHP", "Zend", $buffer);
	}
	
	ob_start("callback");
?>

<html>
	<body>
		<h1>PHP is easy</h1>
	</body>
</html>
<?php
	ob_end_flush(); 
?>