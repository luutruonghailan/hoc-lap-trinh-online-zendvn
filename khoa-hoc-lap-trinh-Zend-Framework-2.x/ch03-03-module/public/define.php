<?php
	//	Đường dẫn đến thư mục chứa thư mục hiện thời
	chdir(dirname(__DIR__));
	
	//Hằng số lưu đường dẫn thư mục ứng dụng
	define('APPLICATION_PATH', realpath(dirname(__DIR__)));
	
	//Hằng số lưu đường dẫn thư mục chứa thư viên ZF2
	define('LIBRARY_PATH', APPLICATION_PATH . '/vendor');