<?php

namespace ZendVN\Form\View\Helper;

use Zend\Form\ElementInterface;

use Zend\Form\View\Helper\AbstractHelper;


class FormVideo extends AbstractHelper
{
    protected $validTagAttributes = array(
        'width'		=> 800,
        'height'	=> 600,
        'type'		=> 'video/mp4',
        'src'		=> true,
    );


    public function __invoke(ElementInterface $element = null)
    {
        if (!$element) {
            return $this;
        }

        return $this->render($element);
    }

    public function render(ElementInterface $element)
    {
    	 
    	$attributes	= $element->getAttributes();
    	
    	echo $this->createAttributesString($attributes);
    	
    }

    
}
