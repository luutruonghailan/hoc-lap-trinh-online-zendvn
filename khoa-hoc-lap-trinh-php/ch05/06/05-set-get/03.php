<?php
	require_once 'Cat2.class.php';
	
	$cat = new Cat2();
	$cat->age = 10;
	$cat->name = 'Mimi';
	$cat->color = 'white';
	
	echo '<pre>';
	print_r($cat);
	echo '</pre>';
	
	echo $cat->name;