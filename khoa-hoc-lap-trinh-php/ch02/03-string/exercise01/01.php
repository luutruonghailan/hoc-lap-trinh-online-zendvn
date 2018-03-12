<?php
	$url 	= "http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";
	
	/*	URL		: 06_BienTham_TinhYeu_LyMaiTrang.wma
	 *  ID		: 06
	 *  Name	: Bien Tham
	 *  Album	: Tinh Yeu
	 *  Singer	: LyMaiTrang
	 *  Type	: wma
	 */
	
	// Cach 01
	function getInfo01($url){
		$info	= explode('/', $url);
		$result	= $info[count($info) - 1];
		return $result;
	}
	
	// Cach 02
	function getInfo02($url){
		$arrayURL	= parse_url($url);
		$info		= explode("/", $arrayURL['path']);
		return $result	= $info[count($info) - 1];
	}
	
	// Cach 03
	function getInfo03($url){
		$index 	= strripos($url, "/");
		$result = substr($url, $index+1);
		return $result;
	}
	
	getInfo03($url);