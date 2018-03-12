<?php

class Cat{
	
	// Properties
	var $name	= 'Kitty';
	var $color	= 'yellow';
	var $age	= 1;
}

$catA = new Cat();

echo '<br />Name: ' . $catA->name;
echo '<br />Color: ' . $catA->color;
echo '<br />Age: ' . $catA->age;