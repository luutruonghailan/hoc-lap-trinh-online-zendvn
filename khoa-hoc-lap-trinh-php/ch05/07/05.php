<?php
abstract class Laptop{
	abstract protected  function keyboard(array $color);
	
	public function ram(){
	
	}
	
	public function chipset(){
	
	}
}

class Acer extends Laptop{
 	public  function keyboard(array $color){
 		for($i = 0; $i < count($color); $i++) $strColor .= $color[$i] . ', ';
 		return $strColor;
 	}
}

$acer = new Acer();
echo $acer->keyboard(array('red', 'green', 'blue'));