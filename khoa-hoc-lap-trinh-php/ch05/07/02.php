<?php
abstract class Laptop{
	public function keyboar(){
		return 'ban phim phai co it nhat 40 phim';
	}
	
	public function ram(){
	
	}
	
	public function chipset(){
	
	}
}

class Acer extends Laptop{
	public function keyboar(){
		return 'ban phim phai co it nhat 50 phim';
	}
}


$acer = new Acer();
echo $acer->keyboar();