<?php
class PhanSo {
	
	// Thuộc tính
	public $_tuso;
	public $_mauso;
	
	// Hàm xây dựng
	public function __construct($tuso, $mauso){
		$this->_tuso	= $tuso;
		$this->_mauso	= $mauso;
	}
	
	// Hiển thị phân số
	public function showPS(){
		echo 'Phan So: ' . $this->_tuso . '/' . $this->_mauso . '<br />';
	}
	
	// Rút gọn phân số
	public function rutGon(){
		$ucln = $this->UCLN($this->_tuso, $this->_mauso);
		$this->_tuso 	= $this->_tuso / $ucln;
		$this->_mauso 	= $this->_mauso / $ucln;
	}
	
	// Tổng 2 phân số x/y + a/b = (x*b + a*y)/(y*b)
	public function tongPS($phanSo){
		$this->_tuso 	= $this->_tuso * $phanSo->_mauso + $phanSo->_tuso * $this->_mauso;
		$this->_mauso 	= $this->_mauso * $phanSo->_mauso;
		$this->rutGon();
	}
	// Hiệu 2 phân số
	public function hieuPS($phanSo){
		$this->_tuso 	= $this->_tuso * $phanSo->_mauso - $phanSo->_tuso * $this->_mauso;
		$this->_mauso 	= $this->_mauso * $phanSo->_mauso;
		$this->rutGon();
	}
	
	// Tích 2 phân số
	public function tichPS($phanSo){
		$this->_tuso 	= $this->_tuso * $phanSo->_tuso;
		$this->_mauso 	= $this->_mauso * $phanSo->_mauso;
		$this->rutGon();
	}
	
	// Thương 2 phân số
	public function thuongPS($phanSo){
		$this->_tuso 	= $this->_tuso * $phanSo->_mauso;
		$this->_mauso 	= $this->_mauso * $phanSo->_tuso;
		$this->rutGon();
	}
	// Thương 2 phân số
	
	// Tìm UCLN
	private function UCLN($a, $b){
		$min = min(array($a, $b));
		while($min > 0){
			if($a % $min == 0 && $b % $min == 0) return $min;
			$min--;
		}
		
	}
	
}
	