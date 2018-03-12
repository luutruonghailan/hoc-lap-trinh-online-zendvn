<?php
	
	
	
	session_start();
	$_SESSION['function'] = '<?php
								function checkNumber($number){
									return ($number % 2 == 0) ? "So chan" : "So le";
								} 
							?>';
	
	eval('?>' . $_SESSION['function']);
	
	echo checkNumber(2);