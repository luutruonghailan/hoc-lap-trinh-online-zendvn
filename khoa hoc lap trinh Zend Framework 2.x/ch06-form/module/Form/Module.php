<?php

namespace Form;

use Zend\Filter\StaticFilter;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
	public function getFormElementConfig(){
		return array(
				'factories'	=> array(
						'loginForm'	=> function($sm){
								$myForm	= new \Form\Form\Login();
								$myForm->setInputFilter(new \Form\Form\LoginFilter());
								return $myForm;
						}
				),
		);	
	}
	
    public function onBootstrap(MvcEvent $e)
    {
    	$filterPlugin	= StaticFilter::getPluginManager();
    	$filterPlugin->setInvokableClass('CreateURLFriendly', '\ZendVN\Filter\CreateURLFriendly');
    	$filterPlugin->setInvokableClass('RemoveCircumflex', '\ZendVN\Filter\RemoveCircumflex');
    	$filterPlugin->setInvokableClass('Purifier', '\ZendVN\Filter\Purifier');
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
