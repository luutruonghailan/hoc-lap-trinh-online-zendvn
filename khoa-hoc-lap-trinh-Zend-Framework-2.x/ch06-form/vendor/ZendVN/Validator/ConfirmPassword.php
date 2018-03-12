<?php
namespace ZendVN\Validator;

use Zend\Validator\AbstractValidator;

class ConfirmPassword extends AbstractValidator{
	const NOT_EQUAL   = 'confirmPasswordNotEqual';
	
	protected $messageTemplates = array(
			self::NOT_EQUAL   => "Password & Confirm password không bằng nhau",
	);
	
	protected $messageVariables = array(
			'confirm_password' => array('options' => 'confirm_password'),
	);
	
	protected $options = array(
			'confirm_password'      => 0,   
	);
	
	public function __construct($options = array())
	{
		if (!is_array($options)) {
			$options     = func_get_args();
			$temp['confirm_password'] = array_shift($options);
	
			$options = $temp;
		}
	
		parent::__construct($options);
	}
	
	public function getConfirmPassword()
	{
		return $this->options['confirm_password'];
	}
	
	public function setConfirmPassword($confirmPassword)
	{
		$this->options['confirm_password']	= $confirmPassword;
		return $this;
	}
	
	public function isValid($value) {
		$confirmPassword	= $this->getConfirmPassword();
		if (strcmp($confirmPassword, $value) != 0) {
			$this->error(self::NOT_EQUAL);
			return false;
		}
		
		return true;
	}


}