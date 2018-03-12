<?php

require_once 'Cat.class.php';

class Lion extends Cat{
	
	public $height = '1m2';
	
	public function getHeight(){
		return $this->height;
	}
	
	public function showInfo(){
		echo '<br />Name: ' . $this->getName();
		echo '<br />Age: ' . $this->getAge();
		echo '<br />Color: ' . $this->getColor();
		echo '<br />Weight: ' . $this->getWeight();
		
		echo '<br />Height: ' . $this->getHeight();
		
	}
}













