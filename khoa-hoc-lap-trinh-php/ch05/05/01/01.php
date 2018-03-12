<?php

class Sample{
	
	public $a 		= 'A';
	private $b 		= 'B';
	protected $c 	= 'C';
	
	public function showInfo(){
		echo '<br />TRUY CAP TRONG LOP';
		echo '<br />public $a: ' . $this->a;
		echo '<br />private $b: ' . $this->b;
		echo '<br />protected $c: ' . $this->c;
	}
}

class Sample2 extends Sample{
	public function showInfo(){
		echo '<br />TRUY CAP TRONG LOP CON';
		echo '<br />public $a: ' . $this->a;
		echo '<br />private $b: ' . $this->b;
		echo '<br />protected $c: ' . $this->c;
	}
}

$sample = new Sample();
$sample2 = new Sample2();

// echo '<br />TRUY CAP NGOAI LOP';
// echo '<br />public $a: ' . $sample->a;
// echo '<br />private $b: ' . $sample->b;
// echo '<br />protected $c: ' . $sample->c;

echo '<hr />';
$sample2->showInfo();