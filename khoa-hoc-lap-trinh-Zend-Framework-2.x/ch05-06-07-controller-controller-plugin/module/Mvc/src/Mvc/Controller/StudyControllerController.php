<?php

namespace Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class StudyControllerController extends AbstractActionController{
	
	public function indexAction()
	{
		echo '<h3 style="color:red;">' . __METHOD__ . '</h3>';
		return false;
	}
	
	public function notFoundAction()
	{
		echo '<h3 style="color:red;">' . __METHOD__ . '</h3>';
		return false;
	}
	
	// indexOne - index-one
	public function indexOneTwoAction(){
		echo '<h3 style="color:red;">' . __METHOD__ . '</h3>';
		
		$request	= $this->getRequest();
		$reponse	= $this->getResponse();
		
		echo '<pre style="color:red;">';
		print_r($reponse);
		echo '</pre>';
	}
}

