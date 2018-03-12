<?php
namespace Form\Form;
use \Zend\Form\Form as Form;
use Zend\Form\Element as Element;

class Course extends Form {
	
	public function __construct($name = null){
		parent::__construct();
		
		// FORM Attribute
		$this->setAttributes(array(
				'action'	=> '',
				'method'	=> 'POST',
				'name'		=> 'login-form'
		));
		
		// COURSE TYPE
		$this->add(array(
				'name'			=> 'my-type',
				'type'			=> 'Select',
				'attributes'	=> array(
						'style'		=> 'padding: 4px 8px; width: 300px;',
						'id'		=> 'my-type',
						'value'		=> 'mobile'
				),
				'options'		=> array(
						'label'				=> 'Chọn lĩnh vực',
						'empty_option' 	=> 'Please choose your course type',
						'value_options'	=> array(
								'web'		=> 'Lập trình website',
								'mobile'	=> 'Lập trình di động',
								'design'	=> 'Thiết kế',
						)
				),
		));
		
		// COURSE
		$this->add(array(
				'name'			=> 'my-course',
				'type'			=> 'Select',
				'attributes'	=> array(
						'style'		=> 'padding: 4px 8px; width: 300px;',
						'id'		=> 'my-course',
				),
				'options'		=> array(
						'label'				=> 'Chọn khóa học',
						'value_options'	=> array()
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
	
	}
}