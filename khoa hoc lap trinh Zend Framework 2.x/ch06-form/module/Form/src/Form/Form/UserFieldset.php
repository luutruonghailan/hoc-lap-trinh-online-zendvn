<?php
namespace Form\Form;

use Zend\InputFilter\InputFilterProviderInterface;

use Zend\Form\Fieldset;

class UserFieldset extends Fieldset implements InputFilterProviderInterface{
	
	public function __construct(){
		parent::__construct('user');
		
		// Password
		$this->add(array(
				'name'			=> 'my-password',
				'type'			=> 'Password',
				'options'		=> array(
						'label'				=> 'Password: ',
				),
		));
		
		// Email
		$this->add(array(
				'name'			=> 'my-email',
				'type'			=> 'Text',
				'options'		=> array(
						'label'				=> 'Email: ',
				),
		));
		
	}
	
	public function getInputFilterSpecification(){
		return array(
				'my-password'	=> array(
						'filters'	=> array(
								array( 'name' 	=> 'StringToLower' ),
								array( 'name' 	=> 'StringTrim' ),
						),
						'validators'	=> array(
								array(
										'name'		=> 'StringLength',
										'options'	=> array(
												'min'	=> 3,
												'max'	=> 5,
												'messages'	=> array(
														\Zend\Validator\StringLength::TOO_SHORT => 'Chiều dài của chuỗi lớn hơn %min% ký tự'
												)
										),
										'break_chain_on_failure'	=> true
								),
								array(
										'name'		=> 'ZendVN\Validator\CheckCourseID',
										'options'	=> array(
												'pattern'	=> '[0-9]{4}',
										),
										'break_chain_on_failure'	=> true
								),
						)
				),
				
		);
	}
	
}