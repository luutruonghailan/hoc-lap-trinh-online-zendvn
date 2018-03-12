<?php
namespace Form\Form;

use Zend\InputFilter\InputFilter;

class LoginFilter extends InputFilter {
	
	public function __construct(){
		
		// EMAIL
		$this->add(array(
				'name'		=> 'my-email',
				'required'	=> true,
				'filters'	=> array(
						array( 'name' 	=> 'StringToUpper' ),
						array( 'name' 	=> 'StringTrim' ),
						array( 'name' 	=> 'ZendVN\Filter\RemoveCircumflex' ),
						array( 
								'name' 		=> 'PregReplace',
								'options'	=> array(
										'pattern'     => '#[0-9]#',
										'replacement' => 'X',
								)
						),
				),
				'validators'	=> array(
						array(
								'name'		=> 'NotEmpty',
								'options'	=> array(
										'messages'	=> array(
												\Zend\Validator\NotEmpty::IS_EMPTY => 'Dữ liệu không được rỗng!'
										)
								),
								'break_chain_on_failure'	=> true
						),
						array(
								'name'		=> 'StringLength',
								'options'	=> array(
										'min'	=> 3,
										'max'	=> 20,
										'messages'	=> array(
												\Zend\Validator\StringLength::TOO_SHORT => 'Chiều dài của chuỗi lớn hơn %min% ký tự'
										)
								),
								'break_chain_on_failure'	=> true
						),
						array(
								'name'		=> 'EmailAddress',
						),
				)
		));
		
		// PASSWORD
		$this->add(array(
				'name'		=> 'my-password',
				'filters'	=> array(
						array( 'name' 	=> 'StringToLower' ),
						array( 'name' 	=> 'StringTrim' ),
				),
				'required'	=> true,
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
										'pattern'	=> '^[a-z0-9]{4}$',
								),
								'break_chain_on_failure'	=> true
						),
				)
		));
	}
}