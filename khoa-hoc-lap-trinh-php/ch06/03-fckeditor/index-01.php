<?php
	// 01. Nhúng tập tin fckeditor.php
	include("fckeditor/fckeditor.php") ;
	
	// 02. Khai báo đường dẫn fckeditor
	echo $sBasePath		= pathinfo($_SERVER['PHP_SELF'], PATHINFO_DIRNAME) . '/fckeditor/';
	
	// 03. Khởi tạo đối tượng FCK 
	$oFCKeditor = new FCKeditor('FCKeditor1') ;
	
	// 04. Thiết lập đường dẫn cho thuộc tính BasePath
	$oFCKeditor->BasePath	= $sBasePath ;
	
	// Thiết lập thuộc tính
// 	$oFCKeditor->Width		= '500';
// 	$oFCKeditor->Height		= '500';
// 	$oFCKeditor->Value		= '<p>This is some <strong>sample text</strong>. You are using <a href="http://www.fckeditor.net/">FCKeditor</a>.</p>' ;
// 	$oFCKeditor->ToolbarSet	= 'MyToolbar';
// 	$oFCKeditor->Config['AutoDetectLanguage']	= false;
// 	$oFCKeditor->Config['DefaultLanguage']		= 'vi';
	
	// 05. Tạo FCK
	$oFCKeditor->Create() ;