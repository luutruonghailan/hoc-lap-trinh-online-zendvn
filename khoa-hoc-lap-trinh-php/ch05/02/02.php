<?php

class Cat{
	
	// Properties
	public $name	= 'Kitty';
	private $color	= 'yellow';
	protected $age	= 1;
}

$catA = new Cat();

echo '<br />Name: ' . $catA->name;
echo '<br />Color: ' . $catA->color;
echo '<br />Age: ' . $catA->age;