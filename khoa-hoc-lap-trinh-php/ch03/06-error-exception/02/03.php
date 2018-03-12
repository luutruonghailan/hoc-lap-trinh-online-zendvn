<?php

	$array = array(
					array('name'=>'Nguyen van a', 'age' =>30),
					array('name'=>'Nguyen van b', 'age' =>31),
					array('name'=>'Nguyen van c', 'age' =>32),
					array('name'=>'Nguyen van d', 'age' =>33),
			);
	
	foreach ($array as $value){
		echo '<pre>';
		print_r($value);
		echo '</pre>';
		die('Funtion die is called');
	}