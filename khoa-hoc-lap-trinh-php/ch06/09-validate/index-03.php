<?php
	$source = array(
						'name' 	=> 'nguyen van a',		// string - 5 - 20
						'age'	=> 'd',					// int	  - 20 - 100
						'url'	=> 'http://www.zend.vn',		// url
						'email'	=> 'nvagmail.com',		// email
				);
	require_once 'Validate.class.php';
	$validate = new Validate($source);
	
	// Rule
	$validate->addRule('name', 'string', 5, 100)
			 ->addRule('age', 'int', 1, 90)
			 ->addRule('url', 'url')
			 ->addRule('email', 'email');
	
	// Run
	$validate->run();
	
	// Get error
	$error 	= $validate->getError();
	$result = $validate->getResult();
?>
