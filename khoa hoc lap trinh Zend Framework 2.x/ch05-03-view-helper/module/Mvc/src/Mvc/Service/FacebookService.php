<?php
namespace Mvc\Service;

class FacebookService {
	protected $connect;
	
	public function __construct($connect = 'http://www.facebook.com/login'){
		$this->connect	= $connect;
	}
}