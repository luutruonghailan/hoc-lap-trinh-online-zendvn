<?php
class Cat2 {
	
	private $info;
	
	public function __construct($name = 'Doremon', $age = 2){
		$this->name = $name;
		$this->age = $age;
	}
	
	public function __set($name, $value){
		return $this->info[$name] = $value;
	}
	
	public function __get($name){
		return $this->info[$name] ;
	}
	
	public function showInfo(){
		echo 'Name: ' . $this->name;
		echo '<br />Age: ' . $this->age;
	}
}