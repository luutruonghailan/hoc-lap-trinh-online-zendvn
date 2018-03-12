<?php
	
	ob_start();
	
	echo $abc = '<html>
				<body>
					<h1>PHP is easy</h1>
				</body>
			</html>';
	$data = ob_get_contents();
?>


<?php
	ob_end_flush(); 
	echo $data;
?>