<?php
class User {
	
	// Properties
	private $name;
	private $pass;
	private $fullName;
	
	
	public function __construct(){
		$this->name 	= 'John';
		$this->pass 	= '123456';
		$this->fullName = 'John Smith';
	}
	
	public function __destruct(){
		$_SESSION['userA'] = serialize($this);
	}
}