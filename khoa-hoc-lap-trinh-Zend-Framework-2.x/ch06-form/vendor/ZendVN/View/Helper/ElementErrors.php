<?php
namespace ZendVN\View\Helper;

use Zend\Form\ElementInterface;
use Zend\Form\View\Helper\FormElementErrors;

class ElementErrors extends FormElementErrors {
	
	public function __invoke($elementArray = null)
    {
    	if(empty($elementArray)) return '';
    	
    	$result	= null;
    	foreach($elementArray as $key => $element){
    		$messages	= $element->getMessages();
    		if(empty($messages)) continue;
    		$result	.= sprintf('<p><b>%s:</b> %s</p>', ucfirst($key),  current($messages)) ;
    	}
    	
    	if($result == null) return '';
       	return sprintf('<div class="alert alert-danger" role="alert">%s</div>', $result);
    }
}