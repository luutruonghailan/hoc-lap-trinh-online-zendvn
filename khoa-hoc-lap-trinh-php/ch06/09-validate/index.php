<?php
	$source = array(
						'name' 	=> 'nguyen van a',		// string - 5 - 20
						'age'	=> 25,					// int	  - 20 - 100
						'url'	=> 'www.zend.vn',		// url
						'email'	=> 'nva@gmail.com',		// email
				);
	require_once 'Validate.class.php';
	$validate = new Validate($source);
	
	// Rules
	$rules	 = array(
					 'name' => array('type' => 'string', 'min' => 10, 'max' => 50),
					 'age' 	=> array('type' => 'numeric', 'min' => 1, 'max' => 90),
				);
	$validate->addRules($rules);
	
	echo '<pre>';
	print_r($validate);
	echo '</pre>';
?>
