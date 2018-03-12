<?php

namespace Mvc\Service;

use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class MyAbstractFactory implements AbstractFactoryInterface{
	
	public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName){
		if(class_exists('Mvc\Service\\'.$requestedName.'Service')){
			return true;
		}
		return false;
	}
	
	public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName){
		$className	= '\Mvc\Service\\'.$requestedName.'Service';
		if(class_exists($className)){
			return new $className();
		}
		
		
	}
}