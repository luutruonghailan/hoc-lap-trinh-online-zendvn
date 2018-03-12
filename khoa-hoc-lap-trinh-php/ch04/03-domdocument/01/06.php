<?php
	$book = array(
					'id' 		=> 11,
					'author'	=> 'ZendVN',
					'title'		=> 'Lập trình PHP',
					'pages'		=> 500,
					'weight' 	=> array(
										'attributes' => array('units'=>'gram','tag' => 'php'),
										'data'		 => array('us' => 1.3, 'eu' => 2.3, 'vn' => 0.2)
									),
					'shipping'	=> array(
										'data'		=> array('us' => 1.3, 'eu' => 2.3, 'vn' => 0.2)
									)
			);

	$xml = new DOMDocument('1.0', 'UTF-8');
	
	$root = $xml->createElement('book');
	$xml->appendChild($root);
	
	foreach($book as $key => $value){
		if(is_array($value)){
			if(is_array($value['data'])){
				$node = $xml->createElement($key);
				foreach($value['data'] as $keyD => $valueD){
					$nodeChild = $xml->createElement($keyD,$valueD);
					$node->appendChild($nodeChild);
				}
			}else{
				$node = $xml->createElement($key, $value['data']);
			}
			if(array_key_exists(attributes, $value)){
				foreach($value['attributes'] as $keyA => $valueA){
					$attr = $xml->createAttribute($keyA);
					$attr->value = $valueA;
					$node->appendChild($attr);
				}
			}
		}else{
			$node = $xml->createElement($key, $value);	
		}
		
		$root->appendChild($node);
		
	}
	
	$xml->formatOutput = true;
	$xml->save('../files/mybooks-06.xml') or die('Error');
