<?php
namespace Form\Form;
use \Zend\Form\Form as Form;
use Zend\Form\Element as Element;

class StudyFour extends Form {
	
	public function __construct($name = null){
		parent::__construct();
		
		// FORM Attribute
		$this->setAttributes(array(
				'action'	=> '#',
				'method'	=> 'POST',
				'style'		=> 'margin-left: 20px',
				'name'		=> 'my-form',
		));
		$this->setInputFilter(new \Form\Form\LoginFilter());
		
		
		
		$this->add(new \Form\Form\UserFieldset());
		
		
		// Zend\Form\Element\Submit
		$this->add(array(
				'name'			=> 'my-submit',
				'type'			=> 'Submit',
				'attributes'	=> array(
						'value'			=> 'Submit'
				),
		));
	
		
	}
}