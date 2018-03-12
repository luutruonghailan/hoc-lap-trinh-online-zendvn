<?php
namespace Form\Form;
use \Zend\Form\Form as Form;
use Zend\Form\Element as Element;

class StudyTwo extends Form {
	
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
		));
		
		// Zend\Form\Element\Hidden
		$this->add(array(
				'name'			=> 'my-hidden',
				'type'			=> 'Hidden',
				'attributes'	=> array(
						'value'			=> '123456'
				),
		));
		
		// Zend\Form\Element\Radio
// 		$radio	= new Element\Radio('my-radio');
// 		$radio->setLabel('Language ?')
// 			  ->setValueOptions(array(
// 				'en'	=> 'English',
// 				'vi'	=> 'Vietnam',
// 				'ge'	=> 'Germany',
// 			  ))
// 			  ->setValue('vi')
// 		;
// 		$this->add($radio);
		
		$this->add(array(
				'name'			=> 'my-radio',
				'type'			=> 'Radio',
				'attributes'	=> array(
						'value'			=> 'ge'
				),
				'options'	=> array(
						'value_options'			=> array(
								'en'	=> 'English',
								'vi'	=> 'Vietnam',
								'ge'	=> 'Germany',
						  )
				),
		));
		
		// Zend\Form\Element\Select
// 		$select	= new Element\Select('my-select');
// 		$select->setLabel('List course')
// 			   ->setOptions(array(
// 			   		'empty_option' => 'Please choose your course',
// 			   	))
// 			   	->setValueOptions(array(
// 			   			'web' => array(
// 			   					'label'		=> 'Web',
// 			   					'options'	=> array(	
// 			   							'php'		=> 'PHP',
// 			   							'zend'		=> 'Zend 2',
// 			   							'jquery'	=> 'jQuery',
// 			   					)
// 			   			),	
// 			   			'mobile' => array(
// 			   					'label'		=> 'Mobile',
// 			   					'options'	=> array(
// 			   							'android'	=> 'Android',
// 			   							'ios'		=> 'IOS',
// 			   					)
// 			   			)
// 			   	))
// 			   	//->setValue('android')
// 		;
// 		$this->add($select);
		
		$this->add(array(
				'name'			=> 'my-select',
				'type'			=> 'Select',
				'options'	=> array(
						'label'			=> 'List course',
						'value'			=> 'Submit form',
						'empty_option' 	=> 'Please choose your course',
						'value_options'	=> array(
								'web'	=> array(
			   							'label'		=> 'Web',
					   					'options'	=> array(	
					   							'php'		=> 'PHP',
					   							'zend'		=> 'Zend 2',
					   							'jquery'	=> 'jQuery',
					   					)
			   					),	
			   					'mobile' => array(
			   							'label'		=> 'Mobile',
			   							'options'	=> array(
			   									'android'	=> 'Android',
			   									'ios'		=> 'IOS',
			   							)
			   					)
			   			),
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