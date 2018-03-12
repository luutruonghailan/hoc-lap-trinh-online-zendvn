<?php
abstract class Laptop{
	public function keyboar(){
		
	}
}

class Acer extends Laptop{
	
}

$acer = new Acer();
echo '<pre>';
print_r($acer);
echo '</pre>';