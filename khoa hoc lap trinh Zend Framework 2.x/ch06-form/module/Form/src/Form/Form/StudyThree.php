<?php
namespace Form\Form;
use \Zend\Form\Form as Form;
use Zend\Form\Element as Element;

class StudyThree extends Form {
	
	public function __construct($name = null){
		parent::__construct();
		
		// FORM Attribute
		$this->setName('my-form');
		$this->setAttribute('action', '#');
		$this->setAttribute('method', 'POST');
		$this->setAttributes(array(
				'class'		=> 'my-form-class',
				'id'		=> 'my-form-id',
				'enctype'	=> 'multipart/form-data',
				'style'		=> 'margin-left: 20px',
				'novalidate'=> false,
		));
		
		// Zend\Form\Element\Number
		$this->add(array(
				'name'			=> 'my-number',
				'type'			=> 'Number',
				'attributes'	=> array(
						'value'		=> 10,
						'min'		=> 0,
						'max'		=> 20,
				),
		));
		
		// Zend\Form\Element\Color
		$this->add(array(
				'name'			=> 'my-color',
				'type'			=> 'Color',
		));
		
		// Zend\Form\Element\Date
		$this->add(array(
				'name'			=> 'my-date',
				'type'			=> 'Date',
				'options'		=> array(
						'label'	=> 'Date'
				),
				'attributes'	=> array(
						'min'		=> '2000-01-01',
						'max'		=> '2010-01-01',
				),
		));
		
		// Zend\Form\Element\Range
		$this->add(array(
				'name'			=> 'my-range',
				'type'			=> 'Range',
				'options'		=> array(
						'label'	=> 'Range: '
				),
				'attributes'	=> array(
						'min'		=> '1',
						'max'		=> '5',
				),
		));
		
		// Zend\Form\Element\Email
		$this->add(array(
				'name'			=> 'my-email',
				'type'			=> 'Email',
				'options'		=> array(
						'label'	=> 'Email'
				),
		));
		
		// Zend\Form\Element\Submit
		$this->add(array(
				'name'			=> 'my-submit',
				'type'			=> 'Submit',
				'attributes'	=> array(
						'value'			=> 'Submit form'
				),
		));
	
		
	}
}