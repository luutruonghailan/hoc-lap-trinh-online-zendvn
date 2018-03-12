<?php

namespace Training\Controller;

use Zend\View\Model\ViewModel;

use Zend\Mvc\Controller\AbstractActionController;

class AutoloaderController extends AbstractActionController {
	
	public function index01Action(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
		
		$autoloader	= new \Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));
		$autoloader->registerNamespace('Database', LIBRARY_PATH . '/Database');
		$autoloader->registerPrefix('Mail', LIBRARY_PATH . '/Mail');
		
		$autoloader->register();
		
		
		$student	= new \Database\Student();
		$teacher	= new \Database\Teacher();
		$worker		= new \Database\Oracle\Worker();
		$sender		= new \Mail_Sender();
		$attach		= new \Mail_Attache();
		$sender2	= new \Mail_Abc_Sender();
		
		return false;
	}
	
	public function index02Action(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
	
		$autoloader	= new \Zend\Loader\StandardAutoloader(array(
			'autoregister_zf' 	=> true,
			'namespaces'		=> array(
				'Database'		=> LIBRARY_PATH . '/Database',
				'File\Abc'		=> LIBRARY_PATH . '/File',
			),
			'prefixes'			=> array(
				'Mail'			=> LIBRARY_PATH . '/Mail',
			),
		));

		$autoloader->register();
	
	
		$student	= new \Database\Student();
		$teacher	= new \Database\Teacher();
		$worker		= new \Database\Oracle\Worker();
		$sender		= new \Mail_Sender();
		$attach		= new \Mail_Attache();
		$sender2	= new \Mail_Abc_Sender();
		$upload		= new \File\Abc\Upload();
	
		return false;
	}
	
	public function index03Action(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
	
		/*
		$autoloader	= new \Zend\Loader\StandardAutoloader(array(
				'autoregister_zf' 	=> true,
				'namespaces'		=> array(
						'Database'		=> LIBRARY_PATH . '/Database',
						'File\Abc'		=> LIBRARY_PATH . '/File',
				),
				'prefixes'			=> array(
						'Mail'			=> LIBRARY_PATH . '/Mail',
				),
		));
	
		$autoloader->register(); */
		
		\Zend\Loader\AutoloaderFactory::factory(array(
			'Zend\Loader\StandardAutoloader' => array(
				'autoregister_zf' 	=> true,
				'namespaces'		=> array(
						'Database'		=> LIBRARY_PATH . '/Database',
						'File\Abc'		=> LIBRARY_PATH . '/File',
				),
				'prefixes'			=> array(
						'Mail'			=> LIBRARY_PATH . '/Mail',
				),
			),
		));
	
	
		$student	= new \Database\Student();
		$teacher	= new \Database\Teacher();
		$worker		= new \Database\Oracle\Worker();
		$sender		= new \Mail_Sender();
		$attach		= new \Mail_Attache();
		$sender2	= new \Mail_Abc_Sender();
		$upload		= new \File\Abc\Upload();
	
		return false;
	}

	public function index04Action(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
		
		$autoloader	= new \Zend\Loader\ClassMapAutoloader();
		$autoloader->registerAutoloadMap(LIBRARY_PATH . '/Autoload/autoload_classmap.php');
		$autoloader->register();
		
		$student	= new \Database\Student();
		$teacher	= new \Database\Teacher();
		$worker		= new \Database\Oracle\Worker();
		$sender2	= new \Mail_Abc_Sender();
		return false;
	}

	public function index05Action(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
	
		$autoloader	= new \Zend\Loader\ClassMapAutoloader(
			array(
				LIBRARY_PATH . '/Autoload/autoload_classmap.php',
				LIBRARY_PATH . '/Autoload/classmap.php',
			)
		);
		
		$autoloader->register();
	
		$student	= new \Database\Student();
		$teacher	= new \Database\Teacher();
		$worker		= new \Database\Oracle\Worker();
		$sender2	= new \Mail_Abc_Sender();
		$upload		= new \File\Abc\Upload();
		return false;
	}
	
	
	public function index06Action(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
		
		\Zend\Loader\AutoloaderFactory::factory(array(
			'Zend\Loader\ClassMapAutoloader' => array(
				LIBRARY_PATH . '/Autoload/autoload_classmap.php',
				LIBRARY_PATH . '/Autoload/classmap.php',
			),
		));
	
		$student	= new \Database\Student();
		$teacher	= new \Database\Teacher();
		$worker		= new \Database\Oracle\Worker();
		$sender2	= new \Mail_Abc_Sender();
		$upload		= new \File\Abc\Upload();
		return false;
	}
	
	public function index07Action(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
	
		\Zend\Loader\AutoloaderFactory::factory(array(
			'Zend\Loader\ClassMapAutoloader' => array(
					LIBRARY_PATH . '/Autoload/autoload_classmap.php',
					LIBRARY_PATH . '/Autoload/classmap.php',
			),
			'Zend\Loader\StandardAutoloader' => array(
					'autoregister_zf' 	=> true,
					'namespaces'		=> array(
							'Database'		=> LIBRARY_PATH . '/Database',
							'File\Abc'		=> LIBRARY_PATH . '/File',
					),
					'prefixes'			=> array(
							'Mail'			=> LIBRARY_PATH . '/Mail',
					),
			),
		));
	
		$student	= new \Database\Student();

		return false;
	}
	
}