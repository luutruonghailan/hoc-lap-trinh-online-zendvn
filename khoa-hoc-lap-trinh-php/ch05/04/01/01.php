<?php

require_once 'Lion.class.php';

$arrInfo = array('name' => 'Lion A', 'color' => 'blue', 'age' => 3, 'weight' => '30 kg');
$lionA = new Lion($arrInfo);


echo '<pre>';
print_r($lionA);
echo '</pre>';

echo $lionA->showInfo();