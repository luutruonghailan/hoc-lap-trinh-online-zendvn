<?php
namespace ZendVN\View\Helper;
use Zend\View\Helper\AbstractHelper;

class JoinKeyValue extends AbstractHelper {
	
	public function __invoke($input){
		$arrTemp	= array_map(function($val1, $val2){
			return sprintf('%s="%s" ', $val1, $val2);
		}, array_keys($input), $input);
		
		return implode(' ', $arrTemp);
	}
}