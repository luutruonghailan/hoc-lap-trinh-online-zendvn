<?php
namespace Form\Form;
use \Zend\Form\Form as Form;
use Zend\Form\Element as Element;

class Login extends Form {
	
	public function __construct($name = null){
		parent::__construct();
		
		// FORM Attribute
		$this->setAttributes(array(
				'action'	=> '',
				'method'	=> 'POST',
				'class'		=> 'form-horizontal',
				'role'		=> 'form',
				'name'		=> 'login-form',
				'id'		=> 'login-form',
		));
		//$this->setInputFilter(new \Form\Form\LoginFilter());
		
		// Email
		$this->add(array(
				'name'			=> 'my-email',
				'type'			=> 'Text',
				'attributes'	=> array(
						'class'			=> 'form-control',
						'id'			=> 'inputEmail3',
						'placeholder'	=> 'Email',
				),
				'options'		=> array(
						'label'				=> 'Email',
						'label_attributes'	=> array(
								'for'		=> 'inputEmail3',
								'class'		=> 'col-sm-3 control-label',
						)
				),
		));
		
		// Password
		$this->add(array(
				'name'			=> 'my-password',
				'type'			=> 'Password',
				'attributes'	=> array(
						'class'			=> 'form-control',
						'id'			=> 'inputPassword3',
						'placeholder'	=> 'Password',
				),
				'options'		=> array(
						'label'				=> 'Password',
						'label_attributes'	=> array(
								'for'		=> 'inputPassword3',
								'class'		=> 'col-sm-3 control-label',
						)
				),
		));
		
		
		// Checkbox
		$this->add(array(
				'name'			=> 'my-checkbox',
				'type'			=> 'Checkbox',
				'attributes'	=> array(
						'checked' 	=> false,
				),
				'options'		=> array(
						'label'				=> 'Remember me',
						'label_attributes'	=> array(
								'for'		=> 'my-checkbox',
						),
						'use_hidden_element'=>	true,
						'checked_value' 	=> 	1,
						'unchecked_value' 	=>  0
				),
		));

		$this->add(array(
				'name'			=> 'my-button-submit',
				'type'			=> 'Button',
				'attributes'	=> array(
						'type'			=> 'submit',
						'class'			=> 'btn btn-success btn-sm',
				),
				'options'		=> array(
						'label'				=> 'Sign in',
				),
		));
		
		// Button Reset
		$this->add(array(
				'name'			=> 'my-button-reset',
				'type'			=> 'Button',
				'attributes'	=> array(
						'type'			=> 'reset',
						'class'			=> 'btn btn-default btn-sm',
				),
				'options'		=> array(
						'label'				=> 'Reset',
				),
		));
	}
}