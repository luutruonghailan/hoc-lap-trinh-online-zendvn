<?php
namespace Mvc\Service;

use Zend\ServiceManager\ServiceLocatorInterface;

use Zend\ServiceManager\InitializerInterface;


class MyInitalizer implements InitializerInterface {
	public function initialize($instance, ServiceLocatorInterface $serviceLocator){
		if($instance instanceof \Mvc\Service\UserService){
			//$instance->setFacebook('www.zend.vn');
		}
	}
}