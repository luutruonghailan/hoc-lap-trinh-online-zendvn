<?php

	function __autoload($clasName){
		$path = '/class/';
		require_once $path . "{$clasName}.class.php";
	}
	
	$cat = new Cat('Mimi');
	$cat->showInfo();
	
	$lion = new Lion('Lion A');
	$lion->showInfo();