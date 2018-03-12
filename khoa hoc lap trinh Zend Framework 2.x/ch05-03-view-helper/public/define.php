<?php
	//	Đường dẫn đến thư mục chứa thư mục hiện thời
	chdir(dirname(__DIR__));
	
	// Định nghĩa môi trường thực thi của ứng dụng
	define('APPLICATION_ENV',
					(getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV')
												: 'production'));	// development
	
	
	// Định nghĩa hằng số lưu đường dẫn thư mục ứng dụng
	define('APPLICATION_PATH', realpath(dirname(__DIR__)));
	
	// Định nghĩa hằng số lưu đường dẫn thư mục chứa thư viên ZF2
	define('LIBRARY_PATH', APPLICATION_PATH . '/vendor');
	
	// Định nghĩa hằng số lưu đường dẫn thư mục chứa thư viên HTMLPurifier
	define('HTMLPURIFIER_PREFIX', APPLICATION_PATH . '/vendor');
	
	// Định nghĩa hằng số lưu đường dẫn thư mục PUBLIC
	define('PUBLIC_PATH', APPLICATION_PATH . '/public');
	
	define('APPLICATION_URL', '/zendskeleton');
	define('PUBLIC_URL', APPLICATION_URL . '/public');