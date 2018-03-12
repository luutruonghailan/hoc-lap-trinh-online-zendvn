<?php
namespace ZendVN\View\Helper;
use Zend\View\Helper\AbstractHelper;

class SayHello extends AbstractHelper {
	
	public function __invoke($name){
		$escaper	= $this->getView()->plugin('escapehtml');
		
		echo '<h3 style="color:red;font-weight:bold">Hello ' .$escaper($name). '</h3>';
	}
}