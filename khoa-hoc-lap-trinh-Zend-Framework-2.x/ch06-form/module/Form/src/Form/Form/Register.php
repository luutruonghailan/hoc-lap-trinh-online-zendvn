<?php
namespace Form\Form;
use \Zend\Form\Form as Form;
use Zend\Form\Element as Element;

class Register extends Form {
	
	public function __construct($name = null){
		parent::__construct();
		
		// FORM Attribute
		$this->setAttributes(array(
				'action'	=> 'check-login.html',
				'method'	=> 'GET',
				'class'		=> 'form-horizontal',
				'role'		=> 'form',
				'name'		=> 'login-form'
		));
		
		$this->add(new \Form\Form\UserFieldset());
		
		// Name on Card 
		$this->add(array(
				'name'			=> 'card-holder-name',
				'type'			=> 'Text',
				'attributes'	=> array(
						'class'			=> 'form-control',
						'id'			=> 'card-holder-name',
						'placeholder'	=> 'Card Holder\'s Name',
				),
				'options'		=> array(
						'label'				=> 'Name on Card',
						'label_attributes'	=> array(
								'for'		=> 'card-holder-name',
								'class'		=> 'col-sm-3 control-label',
						)
				),
		));
		
		// Card Number
		$this->add(array(
				'name'			=> 'card-number',
				'type'			=> 'Text',
				'attributes'	=> array(
						'class'			=> 'form-control',
						'id'			=> 'card-number',
						'placeholder'	=> 'Debit/Credit Card Number',
				),
				'options'		=> array(
						'label'				=> 'Card Number',
						'label_attributes'	=> array(
								'for'		=> 'card-number',
								'class'		=> 'col-sm-3 control-label',
						)
				),
		));
		
		// Month class="form-control col-sm-2"
		$this->add(array(
				'name'			=> 'expiry-month',
				'type'			=> 'Select',
				'options'		=> array(
						'empty_option'	=> 'Month',
						'value_options'	=> array(
								'01'	=> 'Jan (01)',
								'02'	=> 'Feb (02)',
								'03'	=> 'Mar (03)',
						),
						'label'	=> 'Expiration Date',
						'label_attributes'	=> array(
								'for'		=> 'expiry-month',
								'class'		=> 'col-sm-3 control-label',
						),
				),
				'attributes'	=> array(
						'class'			=> 'form-control col-sm-2',
				),
		));
		
		// Year
		$this->add(array(
				'name'			=> 'expiry-year',
				'type'			=> 'Select',
				'options'		=> array(
						'empty_option'	=> 'Year',
						'value_options'	=> array(
								'13'	=> '2013',
								'14'	=> '2014',
								'15'	=> '2015',
						)
				),
				'attributes'	=> array(
						'class'			=> 'form-control col-sm-2',
				),
		));
		
		// Security Code
		$this->add(array(
				'name'			=> 'cvv',
				'type'			=> 'Text',
				'attributes'	=> array(
						'class'			=> 'form-control',
						'id'			=> 'cvv',
						'placeholder'	=> 'Security Code',
				),
				'options'		=> array(
						'label'				=> 'Card CVV',
						'label_attributes'	=> array(
								'for'		=> 'cvv',
								'class'		=> 'col-sm-3 control-label',
						)
				),
		));
		
		// Pay Now
		$this->add(array(
				'name'			=> 'pay-now',
				'type'			=> 'Button',
				'attributes'	=> array(
						'class'			=> 'btn btn-success',
				),
				'options'		=> array(
						'label'				=> 'Pay Now',
				),
		));
		
	}
}