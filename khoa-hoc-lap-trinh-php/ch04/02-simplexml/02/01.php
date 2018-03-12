<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$strXml = '<book id="22">
					<title>Lập trình Joomla</title>
					<author>ZendVN</author>
					<pages>300</pages>
					<weight units="gram">250</weight>
					<price>
						<real>75.50</real>
						<saleoff>25.00</saleoff>
					</price>
					<shipping>
						<US>2.3</US>
						<EU>3.3</EU>
						<VN>1</VN>
					</shipping>
				</book>';
	
	echo gettype($strXml);
	
	$xml = simplexml_load_string($strXml);
	
	echo '<pre>';
	print_r($xml);
	echo '</pre>';
	
	echo gettype($xml);
	
	
	
	
	
	
	
	