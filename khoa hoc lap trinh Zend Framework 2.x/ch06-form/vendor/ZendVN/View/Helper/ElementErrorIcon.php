<?php
namespace ZendVN\View\Helper;

use Zend\Form\ElementInterface;
use Zend\Form\View\Helper\FormElementErrors;

class ElementErrorIcon extends FormElementErrors {
	
	public function __invoke(ElementInterface $element = null)
    {
    	$messages	= $element->getMessages();
    	if(empty($messages)) return '';
    	
    	return sprintf('<span class="glyphicon glyphicon-warning-sign form-control-feedback"
								data-toggle="tooltip" title="%s" ></span>',current($messages));
    }
}