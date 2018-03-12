<?php
    namespace Multiphalcon\Vendor\Zendvn\Validator;
    use Phalcon\Mvc\Model\Validator;
    use Phalcon\Mvc\Model\ValidatorInterface;
	class Betweenvn extends Validator implements ValidatorInterface
	{
	    // value >= min, value <= max
	    public function validate(\Phalcon\Mvc\EntityInterface $model)
	    {
	           $field = $this->getOption('field');
	           $max   = $this->getOption('max');
	           $min   = $this->getOption('min');
	           $ms    = $this->getOption('message');
	           $value = $model->$field;
	           
	           $defaultM = $field." có giá trị nhập vào phải lớn hơn : ".$min." và nhỏ hơn giá trị của ".$max;
	           
	           $message = ($ms == null) ? $defaultM : $ms;
	          
	           
	           
	           if($value < $min || $value > $max)
	           {
	               $this->appendMessage($message,$field,"Betweenvn");
	               return false;
	           }
	           else 
	           {
	               return true;
	           }
	          
	           
	           
	           
	           
	    }
	}