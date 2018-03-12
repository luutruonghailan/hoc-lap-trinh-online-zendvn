<?php
namespace ZendVN\Validator;

use Zend\Validator\AbstractValidator;

class CheckCourseID extends AbstractValidator{
	const INVALID   = 'checkCourseIDInvalid';
	
	protected $messageTemplates = array(
			self::INVALID   => "Id không đúng quy định",
	);
	
	protected $messageVariables = array(
			'pattern' => array('options' => 'pattern'),
	);
	
	protected $options = array(
			'pattern'      => 0,   
	);
	
	public function __construct($options = array())
	{
		if (!is_array($options)) {
			$options     = func_get_args();
			$temp['pattern'] = array_shift($options);
	
			$options = $temp;
		}
	
		parent::__construct($options);
	}
	
	public function getPattern()
	{
		return $this->options['pattern'];
	}
	
	public function setPattern($pattern)
	{
		$this->options['pattern']	= $pattern;
		return $this;
	}
	
	public function isValid($value) {
		$pattern	= $this->getPattern();
		if (preg_match('#'.$pattern.'#', $value) == false) {
			$this->error(self::INVALID);
			return false;
		}
		
		return true;
	}


}