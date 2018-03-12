<?php

namespace Training\Controller;

use Zend\Config\Processor\Filter;

use Zend\View\Model\ViewModel;
use Zend\Config\Config as ZCConfig;
use Zend\Config\Processor\Token as ZCPToken;


use Zend\Mvc\Controller\AbstractActionController;

class ConfigController extends AbstractActionController {
	
	public function indexAction(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
		
		$configArray	= array(
								'website'	=> '<h3>www.zend.vn</h3>',
								'account'	=> array(
									'email'		=> 'zend2@zend.vn',
									'password'	=> '123456',
									'title'		=> 'Zend Config',
									'content'	=> 'Training Zend Config',
									'port'		=> 465
								)
							);
		
		// 01 ============ 01 Convert mảng config thành 1 đối tượng config
		// $config		= new \Zend\Config\Config($configArray, true);
		// echo '<br />' . $config->website;
		
		
		// 02 ============ Convert file config thành 1 đối tượng config ============
		// $config		= new \Zend\Config\Config(include __DIR__ . '/../../../config/module.config.php');
		
		// 03 ============ Zend\Config\Processor\ thực hiện một số hành động trên đối tượng Zend\Config\Config
		
		// Zend\Config\Processor\Constant
				/*
				define('MYCONST', 'This is a constant');
				
				$config			= new \Zend\Config\Config(array('const' => 'MYCONST'), true);
				$processor		= new \Zend\Config\Processor\Constant();
				
				$processor->process($config);		
				*/
		
		// Zend\Config\Processor\Filter
		
				/*
				$config			= new \Zend\Config\Config($configArray, true);
				$filter			= new \Zend\Filter\StringToUpper();
				$processor		= new \Zend\Config\Processor\Filter($filter);
				
				$processor->process($config);
				*/
		
		// Zend\Config\Processor\Queue
		// FIFO logic (First In, First Out)
				
				/*
				$config			= new \Zend\Config\Config($configArray, true);
				
				$filterUpper	= new \Zend\Filter\StringToUpper();
				$filterStripTags= new \Zend\Filter\StripTags();
				
				$processorUpper		= new \Zend\Config\Processor\Filter($filterUpper);
				$processorStripTags	= new \Zend\Config\Processor\Filter($filterStripTags);
				
				$queue				= new \Zend\Config\Processor\Queue();
				$queue->insert($processorUpper);
				$queue->insert($processorStripTags);
				
				$queue->process($config);
				*/
		
		// Zend\Config\Processor\Token
		
		$config			= new ZCConfig(array('token' => 'Token value: TOKEN'), true);
		$processor		= new ZCPToken();
		
		$processor->addToken('TO', 'Hello 1243');
		$processor->process($config);
		
		echo '<pre style="color:red;font-weight:bold">';
		print_r($config);
		echo '</pre>';
		return false;
	}

	public function index2Action(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
		
		/*
		$reader	= new \Zend\Config\Reader\Ini();
		$reader->setNestSeparator('-');
		$data	= $reader->fromFile(__DIR__ . '/../../../config/ini/module.config.ini');
		*/
		
		$config	= new \Zend\Config\Config(array(), true);
		$config->production					= array();
		$config->production->website		= 'www.zend.vn';
		$config->production->account		= array();
		$config->production->account->email	= 'zend2@zend.vn';
		$config->production->account->port	= 465;
		
		$writer	= new \Zend\Config\Writer\Ini();
		$writer->setNestSeparator('-');
		$writer->toFile(__DIR__ . '/../../../config/ini/config.ini', $config);
		//return false;
	}
		
	public function index3Action(){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
	
		/*
		$reader	= new \Zend\Config\Reader\Xml();
		$data	= $reader->fromFile(__DIR__ . '/../../../config/xml/config.xml');
		*/
		
		
		$config	= new \Zend\Config\Config(array(), true);
		$config->production					= array();
		$config->production->website		= 'www.zend.vn';
		$config->production->account		= array();
		$config->production->account->email	= 'zend2@zend.vn';
		$config->production->account->port	= 465;
	
		$writer	= new \Zend\Config\Writer\Xml();
		$writer->toFile(__DIR__ . '/../../../config/xml/config2.xml', $config);
		
		
		return false;
	}

}