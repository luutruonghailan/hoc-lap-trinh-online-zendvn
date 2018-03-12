<?php

	include 'define.php';
	include LIBRARY_PATH . '/Zend/Loader/AutoloaderFactory.php';
	
	Zend\Loader\AutoloaderFactory::factory(array(
		'Zend\Loader\StandardAutoloader' => array(
			'autoregister_zf' => true,
			'namespaces'	  => array(
				'ZendVN'	  => LIBRARY_PATH . '/ZendVN'
			)
		)
	));
	
	
	if (!class_exists('Zend\Loader\AutoloaderFactory')) {
		throw new RuntimeException('Unable to load ZF2. Run `php composer.phar install` or define a ZF2_PATH environment variable.');
	}
	
	Zend\Mvc\Application::init(require 'config/application.config.php')->run();

