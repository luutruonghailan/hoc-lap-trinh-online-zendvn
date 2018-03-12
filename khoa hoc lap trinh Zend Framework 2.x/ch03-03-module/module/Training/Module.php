<?php

namespace Training;

class Module {
	
	/*
	public function onBootstrap(){
		
	} */
	
	public function getConfig(){
		return include __DIR__ . '/config/module.config.php';
	}
	
	// Tự động load các controller và model của Module thông qua ModuleManager
	public function getAutoloaderConfig(){
		return array(
			'Zend\Loader\StandardAutoloader' => array(
					'namespaces' => array(
							__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
					),
			),
		);
	}
}