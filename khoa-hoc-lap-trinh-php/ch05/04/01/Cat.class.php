<?php

class Cat{
	
	// Properties
	public $name;
	public $color;
	public $age;
	public $weight;
	
	// Methods
	
	// __construct()
	/*
	public function __construct(){
		echo __METHOD__;
		$this->name		= 'Kitty';
		$this->color	= 'brown';
		$this->age		= 2;
	}
	*/
	
	/*
	public function __construct($name = 'Doremon', $age = 10, $color = 'blue'){
		$this->name		= $name;
		$this->color	= $color;
		$this->age		= $age;
	}
	*/
	
	public function __construct($arrInfo){
		$this->name		= $arrInfo['name'];
		$this->color	= $arrInfo['color'];
		$this->age		= $arrInfo['age'];
		$this->weight	= $arrInfo['weight'];
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function getColor(){
		return $this->color;
	}
	
	public function getAge(){
		return $this->age;
	}
	
	public function getWeight(){
		return $this->weight;
	}
	
	public function setName($value){
		$this->name = $value;
	}
	
	public function setColor($value){
		$this->color = $value;
	}
	
	public function setAge($value){
		$this->age = $value;
	}
	
	public function showInfo(){
		echo '<br />Name: ' . $this->getName();
		echo '<br />Age: ' . $this->getAge();
		echo '<br />Color: ' . $this->getColor();
		echo '<br />Weight: ' . $this->getWeight();
	}
}













