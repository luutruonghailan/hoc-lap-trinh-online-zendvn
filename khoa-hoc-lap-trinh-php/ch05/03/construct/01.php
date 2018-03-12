<?php

	require_once 'Cat.class.php';
	
	$arrCatA = array(
						'name'		=>'Mimi',
						'age'		=> 2,
						'color'		=> 'blue',
						'weight'	=> '1 kg',
				);
	$catA = new Cat($arrCatA);

	
	$catA->showInfo();













