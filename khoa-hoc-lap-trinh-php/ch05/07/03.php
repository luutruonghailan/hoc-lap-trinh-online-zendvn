<?php
abstract class Laptop{
	abstract public function keyboard();
	
	public function ram(){
	
	}
	
	public function chipset(){
	
	}
}

class Acer extends Laptop{
 	public function keyboard(){
 		return 'ban phim phai co it nhat 50 phim';
 	}
}

$acer = new Acer();
echo $acer->keyboar();