<?php
	require_once 'Cat.class.php';
	
	$cat = new Cat();
	$cat->age = 10;
	$cat->name = 'Mimi';
	$cat->color = 'white';
	
	//echo $cat->name . '<br />';
	echo $cat->color . '<br />';
	$cat->showInfo();