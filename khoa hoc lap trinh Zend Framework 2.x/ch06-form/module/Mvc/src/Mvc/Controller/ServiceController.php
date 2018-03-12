<?php

namespace Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class ServiceController extends AbstractActionController
{
    public function index01Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	
    	$userService1	= new \Mvc\Service\UserService('john', 'peter');
    	$userService2	= new \Mvc\Service\UserService();
    	
    	echo '<pre style="color:red;font-weight:bold">';
    	print_r($userService1);
    	echo '</pre>';
    	
    	echo '<pre style="color:red;font-weight:bold">';
    	print_r($userService2);
    	echo '</pre>';
    	
    	return $this->response;
    }
    
    public function index02Action()
    {
		$serviceManager		= $this->getServiceLocator();	// ServiceLocatorInterface
		$userService		= $serviceManager->get('UserService');
		$facebookService	= $serviceManager->get('FacebookService');

		echo '<pre style="color:red;font-weight:bold">';
		print_r($facebookService);
		echo '</pre>';

    	return $this->response;
    }
    
    public function index03Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	return $this->response;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}
