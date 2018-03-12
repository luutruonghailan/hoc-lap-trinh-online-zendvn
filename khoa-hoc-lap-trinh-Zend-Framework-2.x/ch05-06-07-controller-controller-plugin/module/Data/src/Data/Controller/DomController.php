<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Data\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class DomController extends AbstractActionController
{
	
	public $_html	= '<!DOCTYPE html>
				<html lang="en">
					<head>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<title>PHP Show Data</title>
					<link href="css/bootstrap.min.css" rel="stylesheet">
					<link href="css/style.css" rel="stylesheet">
				</head>
			<body>
				<div class="container list-quiz">
					<h1 class="page-header">Danh sách phim</h1>
					<div id="show-film">
						<div class="row film-info">
							<div class="col-md-3">
								<div class="thumbnail">
									<img alt="Image 01" src="data/face-reader.jpg">
									<div class="caption">
										<h3>The Face Reader</h3>
										<p>2013</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<img alt="Image 01" src="data/pirate-fairy.jpg">
									<div class="caption">
										<h3>The Pirate Fairy</h3>
										<p>2014</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<img alt="Image 01" src="data/sadako.jpg">
									<div class="caption">
										<h3>Sadako</h3>
										<p>2013</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<img alt="Image 01" src="data/resident-evil-3.jpg">
									<div class="caption">
										<h3>Resident Evil 3</h3>
										<p>2007</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<p class="col-md-2 col-md-offset-5">
							<button type="button" id="btn-show" onclick="javascript:lastPostFunc();" class="btn btn-primary btn-block">Xem thêm</button>
						</p>
					</div>
				</div>
			</body>
			</html>';
	
    public function index01Action()
    {

    	$dom		= new \Zend\Dom\Query($this->_html, 'UTF-8');
    	$nameNodes	= $dom->execute('div[class="caption"] h3');
    	$imageNodes	= $dom->execute('div[class="thumbnail"] img');
    	$yearNodes	= $dom->execute('div[class="caption"] p');
    	
    	$result		= array();
    	$i			= 0;
    	foreach($nameNodes as $nameNode){
    		$result[$i]['name']	= $nameNode->nodeValue;
    		$i++;
    	}
    	
    	$i			= 0;
    	foreach($imageNodes as $imageNode){
    		$result[$i]['image']	= $imageNode->getAttribute('src');
    		$i++;
    	}
    	
    	$i			= 0;
    	foreach($yearNodes as $yearNode){
    		$result[$i]['year']	= $yearNode->nodeValue;
    		$i++;
    	}
    	
    	echo '<pre style="color:red;font-weight:bold">';
    	print_r($result);
    	echo '</pre>';
    	return false;
    }
    
    public function index02Action()
    {
    
    	$dom		= new \Zend\Dom\Query($this->_html, 'UTF-8');
    	$nodes		= $dom->execute('div[class="caption"] h3 , div[class="thumbnail"] img , div[class="caption"] p');
    	 
    	
    	// img h3 p img h3 p img h3 p img h3 p
    	
    	$result		= array();
    	$i			= 0;
    	$index		= 0;
    	
    	foreach($nodes as $node){
    		if($i == 0) $result[$index]['img']	= $node->getAttribute('src');
    		if($i == 1) $result[$index]['name']	= $node->nodeValue;
    		if($i == 2) $result[$index]['year']	= $node->nodeValue;
    		
    		if($i == 2) {
    			$i = 0;
    			$index++;
    		}else{
    			$i++;
    		}
    	}
    	
    	echo '<pre style="color:red;font-weight:bold">';
    	print_r($result);
    	echo '</pre>';
    	 
  
    	return false;
    }

    public function index03Action()
    {
    
    	$dom		= new \Zend\Dom\Query($this->_html, 'UTF-8');
    	$nameNodes	= $dom->execute('div[class="caption"] h3');
    	$imageNodes	= $dom->execute('div[class="thumbnail"] img');
    	$yearNodes	= $dom->execute('div[class="caption"] p');
    	 
    	$result		= array();
    	$totalItem	= $nameNodes->count();

    	for($i = 0; $i < $totalItem; $i++){
    		$result[$i]['name']	= $nameNodes->current()->nodeValue;
    		$result[$i]['year']	= $yearNodes->current()->nodeValue;
    		$result[$i]['image']= $imageNodes->current()->getAttribute('src');
    		$nameNodes->next();
    		$yearNodes->next();
    		$imageNodes->next();
    	}
    	
    	echo '<pre style="color:red;font-weight:bold">';
    	print_r($result);
    	echo '</pre>';
    	return false;
    }
    
    public function index04Action()
    {
    
    	$dom		= new \Zend\Dom\Query($this->_html, 'UTF-8');
    	$nameNodes	= $dom->queryXpath('//div[@class="caption"]/h3');
    	$imageNodes	= $dom->execute('//div[@class="thumbnail"]/img');
    	$yearNodes	= $dom->execute('//div[@class="caption"]/p');
    
    	$result		= array();
    	$totalItem	= $nameNodes->count();
    
    	for($i = 0; $i < $totalItem; $i++){
    		$result[$i]['name']	= $nameNodes->current()->nodeValue;
    		$result[$i]['year']	= $yearNodes->current()->nodeValue;
    		$result[$i]['image']= $imageNodes->current()->getAttribute('src');
    		$nameNodes->next();
    		$yearNodes->next();
    		$imageNodes->next();
    	}
    	 
    	echo '<pre style="color:red;font-weight:bold">';
    	print_r($result);
    	echo '</pre>';
    	return false;
    }
}



















