<?php
class Sample{
	const money 	= 1000;
	public $money	= 'This is a test <br/>';
	
	public function showInfo(){
		echo '<h2>C1: ' . Sample::money . '</h2>';
		echo '<h2>C2: ' . self::money . '</h2>';
		echo '<h2>C3: ' . $this::money . '</h2>';
	}
}

$sample = new Sample();
echo $sample->money;		// 
echo Sample::money;
echo $sample->showInfo();