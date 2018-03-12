<?php
	require_once 'Cat.class.php';
	
	$cat = new Cat();
	$cat->age = 10;
	$cat->name = 'Mimi';
	
	echo $cat->name . '<br />';
	$cat->showInfo();