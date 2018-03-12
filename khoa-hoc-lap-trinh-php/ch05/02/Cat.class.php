<?php

class Cat{
	
	// Properties
	public $name;
	public $color;
	public $age;
	
	// Methods
	public function getName(){
		return $this->name;
	}
	
	public function getColor(){
		return $this->color;
	}
	
	public function getAge(){
		return $this->age;
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
	}
}













