<?php
	header("Content-type: text/xml");
	$books	= array(
				array(
					'id'		=> 11,
					'title' 	=> 'Lập trình PHP',
					'author' 	=> 'ZendVN',
					'pages' 	=> 500,
					'weight' 	=> array(400, 'gram'),
					'price' 	=> array('real' => 35.50, 'saleoff' => 35.50),
					'shipping' 	=> array('us' => 1.3, 'eu' => 2.3, 'vn' => 1)
				),
			
				array(
						'id'		=> 22,
						'title' 	=> 'Lập trình Joomla',
						'author' 	=> 'ZendVN',
						'pages' 	=> 300,
						'weight' 	=> array(250, 'gram'),
						'price' 	=> array('real' => 75.50, 'saleoff' => 25.00),
						'shipping' 	=> array('us' => 2.3, 'eu' => 3.3, 'vn' => 1)
				),
				
				array(
						'id'		=> 33,
						'title' 	=> 'Lập trình Zend',
						'author' 	=> 'ZendVN',
						'pages' 	=> 500,
						'weight' 	=> array(1200, 'gram'),
						'price' 	=> array('real' => 55.50, 'saleoff' => 45.00),
						'shipping' 	=> array('us' => 1.3, 'eu' => 2.3, 'vn' => 0.5)
				)
			);
	
	$xml  = '<?xml version="1.0" encoding="UTF-8"?>';
	$xml .= '<book_shop>';
	foreach($books as $value){
		$xml .= '<book id="'.$value['id'].'">
					<title>'.$value['title'].'</title>
					<author>'.$value['author'].'</author>
					<pages>'.$value['pages'].'</pages>
					<weight units="'.$value['weight'][1].'">'.$value['weight'][0].'</weight>
					<price>
						<real>'.$value['price']['real'].'</real>
						<saleoff>'.$value['price']['saleoff'].'</saleoff>
					</price>
					<shipping>
						<US>'.$value['shipping']['us'].'</US>
						<EU>'.$value['shipping']['eu'].'</EU>
						<VN>'.$value['shipping']['vn'].'</VN>
					</shipping>
				</book>';
	}
	$xml .= '</book_shop>';
	
	echo $xml;
	
	
	
	
	
	
	
	
	
	
	
	
	