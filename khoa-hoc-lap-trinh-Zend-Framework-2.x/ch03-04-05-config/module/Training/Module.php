<?php

namespace Training;

use Zend\ModuleManager\ModuleEvent;

use Zend\ModuleManager\ModuleManager;

class Module {
	
	/*
	public function onBootstrap(){
		
	} */
	
	public function init(ModuleManager $moduleManager){
		$event	= $moduleManager->getEventManager();
		$event->attach(ModuleEvent::EVENT_MERGE_CONFIG, array($this, 'onMergeConfig'));
	}
	
	public function onMergeConfig(ModuleEvent $event){
		$configListener	= $event->getConfigListener();
		$config			= $configListener->getMergedConfig(false);
		
		echo '<pre style="color:red;font-weight:bold">';
		print_r($config['controllers']);
		echo '</pre>';
	}
	
	
	public function getConfig(){
		/*
		$reader			= new \Zend\Config\Reader\Ini();
		$reader->setNestSeparator('.');
		$configArray	= $reader->fromFile(__DIR__ . '/config/module.config.ini');
		
		$configArray['view_manager']['template_path_stack'][]	= __DIR__ . '/view';
		
		
		$reader			= new \Zend\Config\Reader\Ini();
		$reader->setNestSeparator('.');
		
		$configRouter	= $reader->fromFile(__DIR__ . '/config/ini/router.ini');
		$configCV		= include __DIR__ . '/config/ini/controller-view.php';
		$configArray	= array_merge($configRouter, $configCV);
		*/
		
		$reader			= new \Zend\Config\Reader\XML();
		$configArray	= $reader->fromFile(__DIR__ . '/config/module.config.xml');
		
		$configArray['view_manager']['template_path_stack'][]	= __DIR__ . '/view';
		
		foreach($configArray['controllers']['invokables'] as $key => $value){
			$newKey	= preg_replace('#Controller$#', '', $value);
			$configArray['controllers']['invokables'][$newKey]	= $value;
			unset($configArray['controllers']['invokables'][$key]);
		}
		

		//return $configArray;
		
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

	
	
	public function getControllerConfig(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
	}
	
	public function getServiceConfig(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
	}
	
	
	
	
	
	
	
}