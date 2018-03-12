<?php
namespace ZendVN\Filter;

use Zend\Filter\FilterInterface;

class Purifier implements FilterInterface {
	
	protected $_instance;
	
	public function __construct($arrConfig = array()){
		$config				= \HTMLPurifier_Config::createDefault();
		if(!empty($arrConfig)){
			foreach($arrConfig as $value){
				$config->set($value[0], $value[1]);
			}
		}
		
		$this->_instance	= new \HTMLPurifier_HTMLPurifier($config);
	}
	
	public function filter($value){
		return $this->_instance->purify($value);
	}
}