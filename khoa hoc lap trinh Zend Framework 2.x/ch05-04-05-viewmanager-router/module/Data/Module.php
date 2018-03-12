<?php

namespace Data;

use Zend\Filter\StaticFilter;
use Zend\Mvc\MvcEvent;
use Zend\Mvc\ModuleRouteListener;

class Module
{
	public function onBootstrap(MvcEvent $e)
	{
		$eventManager        = $e->getApplication()->getEventManager();
		$moduleRouteListener = new ModuleRouteListener();
		$moduleRouteListener->attach($eventManager);
		
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
