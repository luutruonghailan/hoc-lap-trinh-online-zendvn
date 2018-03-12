<?php
namespace Form\Form;
use \Zend\Form\Form as Form;
use Zend\Form\Element as Element;

class StudyOne extends Form {
	
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
		
		// \Zend\Form\Element\Text
		/*
		$textbox	= new \Zend\Form\Element\Text('my-textbox');
		// $textbox->setName('my-textbox')
		$textbox->setLabel('Textbox: ')
				->setLabelAttributes(array(
						'class'		=> 'label-class',	
						'id'		=> 'label-id',	
				))
				->setAttribute('class', 'textbox-class')
				->setAttributes(array(
						'placeholder'	=> 'This is a test',
						'style'			=> 'padding: 3px 5px',
				))
				->setValue('My Textbox')
		;
		$this->add($textbox);
		*/
		
		$this->add(array(
				'name'			=> 'my-textbox',
				'type'			=> 'Text',
				'attributes'	=> array(
						'class'			=> 'textbox-class',
						'placeholder'	=> 'This is a test',
						'style'			=> 'padding: 3px 5px',
						'value'			=> 'My Textbox'
				),
				'options'		=> array(
						'label'				=> 'Textbox Zend 2: ',
						'label_attributes'	=> array(
								'class'		=> 'label-class',
								'id'		=> 'label-id',
						)
				),
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
		
		// Zend\Form\Element\Password
		$this->add(array(
				'name'			=> 'my-password',
				'type'			=> 'Password',
		));
		
		// Zend\Form\Element\Textarea
		$this->add(array(
				'name'			=> 'my-textarea',
				'type'			=> 'Textarea',
				'attributes'	=> array(
						'value'		=> 10,
 						'rows'		=> 4,
						'cols'		=> 50,
					//	'style'		=> 'resize:none',
					//	'style'		=> 'min-width:300px;max-width:300px;min-height:100px;max-height:100px;'
						
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
		
		// Zend\Form\Element\Button
		$this->add(array(
				'name'			=> 'my-button',
				'type'			=> 'Button',
				'attributes'	=> array(
						'type'		=> 'submit',
				),
				'options'	=> array(
						'label'		=> 'Submit form',
				),
		));
		
		// Zend\Form\Element\File
		$this->add(array(
				'name'			=> 'my-file',
				'type'			=> 'File',
				'attributes'	=> array(
						'multiple'	=> true
				),
		));
		
		// Zend\Form\Element\Checkbox
		$checbox	= new Element\Checkbox('my-checkbox');
		$checbox->setLabel('Checkbox')
				->setUncheckedValue('php')
				->setCheckedValue('zend')
				->setChecked(true)
		;
		$this->add($checbox);
		
// 		$this->add(array(
// 				'name'			=> 'my-checkbox',
// 				'type'			=> 'Checkbox',
// 				'attributes'	=> array(
// 						'checked'	=> false
// 				),
// 				'options'	=> array(
// 						'checked_value'		=> 'zend',
// 						'unchecked_value'	=> 'php',
// 				),
// 		));
		
// 		$multiCheckbox 	= new Element\MultiCheckbox('my-multicheckbox');
// 		$multiCheckbox->setLabel('Multi Checkbox')
// 					  ->setAttributes(array(
// 					  		'class'		=> 'abc-class',
// 					  		'id'		=> 'abc-id',
// 					  		'value'		=> array('php', 'joomla'),
// 					  ))
// 					  ->setOptions(array(
// 					  		'value_options'	=> array(
// 					  				'php'	=> 'PHP Programming',
// 					  				'zend'	=> 'Zend 2 Programming',
// 					  				'joomla'=> 'Joomla Programming',
// 					  		)
// 					  ))
// 		;
// 		$this->add($multiCheckbox);
		
// 		$this->add(array(
// 				'name'			=> 'my-multicheckbox',
// 				'type'			=> 'MultiCheckbox',
// 				'attributes'	=> array(
// 						'class'		=> 'abc-class',
// 						'value'		=> array('php', 'joomla'),
// 				),
// 				'options'	=> array(
// 						'value_options'	=> array(
// 					  				'php'	=> 'PHP Programming',
//  					  			'zend'	=> 'Zend 2 Programming',
//  					  			'joomla'=> 'Joomla Programming',
// 				  		)
// 				),
// 		));
		
		$this->add(array(
				'name'			=> 'my-multicheckbox',
				'type'			=> 'MultiCheckbox',
				'attributes'	=> array(
						'class'		=> 'abc-class',
				),
				'options'	=> array(
						'value_options'	=> array(
								array(
									'value'		=> 'php',
									'label'		=> 'PHP Programming',
									'selected'	=> false,
									'label_attributes' => array(
											'class' => 'label-PHP',
									),
									'attributes' => array(
											'class' => 'input-php',
									),
								),
								array(
									'value'		=> 'zend',
									'label'		=> 'Zend 2 Programming',
									'selected'	=> true,
								),
								array(
									'value'		=> 'joomla',
									'label'		=> 'Joomla Programming',
									'selected'	=> true,
								),
						)
				),
		));
		
		
		
		
		
	}
}