<?php

namespace Form\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ValidatorController extends AbstractActionController
{
	
	// Zend\Validator\Between
	// Yêu cầu dữ liệu kiểu number và nằm trong một khoảng nào đó
    public function index01Action()
    {
    	// Case 01	
    	$validator	= new \Zend\Validator\Between(2,5, false);
    	
    	// Case 02
    	$validator	= new \Zend\Validator\Between(array(
    			'min'		=> 2,
    			'max'		=> 5,
    			'inclusive'	=> false,
    	));
    	
    	// Case 03
    	$validator	= new \Zend\Validator\Between();
    	$validator->setMin(2);
    	$validator->setMax(5);
    	$validator->setInclusive(true);
    	
    	$value		= 6;		// not Ok
    	$value		= 3;		// Ok
    	$value		= 'as';		// not Ok
    	$value		= '3';		// Ok
    	$value		= 'a3a';	// not Ok
    	$value		= 5;		// Ok
    	
    	if(!$validator->isValid($value)){
    		$message	= $validator->getMessages();
    		echo current($message);
    		echo '<pre style="color:red;">';
    		print_r($message);
    		echo '</pre>';
    	}
    	
    	return false;
    }

    // Zend\Validator\Date
    // Kiểm tra sự hợp lệ của ngày tháng năm theo định dạng được quy định
    public function index02Action(){
    
    	// Case 1
    	$validator 	= new \Zend\Validator\Date();	// const FORMAT_DEFAULT = 'Y-m-d';
    	$value		= '1989-02-23';					// Ok
    	$value		= '1989.02.23';					// Not Ok
    
    	// Case 2
    	$validator 	= new \Zend\Validator\Date(array(
    			'format'	=> 'Y.m.d',
    	));
    	
    	// Case 3
    	$validator 	= new \Zend\Validator\Date('Y.m.d');
     	$value		= '1989-02-23';		// Not Ok
     	$value		= '1989.02.23';		// Ok
     	$value		= '1989.13.2';		// Not Ok
     	$value		= '1989.02.30';		// Not Ok
     	$value		= '1989.02.29';		// Not Ok
     	$value		= '1989.02.28';		// Ok
     	$value		= '1989.2.28';		// Ok
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }
    
    // Zend\Validator\Digits
    // Yêu cầu dữ liệu thuộc kiểu số tự nhiên
    public function index03Action(){
    	$validator 	= new \Zend\Validator\Digits ();
    
    	$value = '1989'; // Ok
     	$value = 1989; 	// Ok
     	$value = 0; 	// Ok
     	$value = 2.3; 	// Not Ok
     	$value = -2; 	// Not Ok
     	$value = -2.3; // Not Ok
     	$value = '2a'; 	// Not Ok
    
    	if (! $validator->isValid ( $value )) {
    		$messages = $validator->getMessages ();
    		echo current ( $messages );
    	}
    
    	return false;
    }
    
    // Zend\Validator\EmailAddress
    // Yêu cầu dữ liệu là một địa chỉ email
    public function index04Action() {
    	$validator = new \Zend\Validator\EmailAddress ();
    
    	$value		= 'lthlan54@gmail.com';	// Ok
    	$value		= 'lthlan54gmail.com';	// Not Ok
    	$value		= 'lthlan54@gmail';		// Not Ok
    
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }

    // Zend\Validator\File\Extension();
    // Kiểm tra phần mở rộng của tập tin
    public function index05Action(){
    
    	$validator 	= new \Zend\Validator\File\Extension('php,exe');
     	$validator 	= new \Zend\Validator\File\Extension(array('php', 'exe'));
     	$validator 	= new \Zend\Validator\File\Extension(array('php', 'exe', 'swf'));
     	$validator 	= new \Zend\Validator\File\Extension(array('php', 'exe', 'SWF'));
//     	// Không phân biệt chữ hoa chữ thường
     	$validator 	= new \Zend\Validator\File\Extension(array('php', 'exe', 'SWF'), false);		// Chính xác phần mở rộng
    
    	$value		= PUBLIC_PATH . '/files/ch05-oop-08.swf';
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }
    
    // Zend\Validator\File\Exists();
    // Kiểm tra sự tồn tại của tập tin
    public function index06Action(){
    
    	$validator 	= new \Zend\Validator\File\Exists();
    
    	$value		= PUBLIC_PATH . '/files/ch05-oodfadsp-08.swf';
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }
	
    // Zend\Validator\File\Size();
    // Kiểm tra kích thước của tập tin
    public function index07Action(){
    
    	$validator = new \Zend\Validator\File\Size(array(
    			'min' => '10kB', 'max' => '1MB'
    	));
    
    
    	$value		= PUBLIC_PATH . '/files/ch05-oop-08.swf';
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }
    
    // Zend\Validator\File\WordCount();
    // Kiểm tra số từ trong một tập tin
    public function index08Action(){
    
    	$validator = new \Zend\Validator\File\WordCount(array(
    			'min' => 2, 'max' => 6
    	));
    
    	$value		= PUBLIC_PATH . '/files/data.txt';
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }

    // Zend\Validator\File\IsImage
    // D:\xampp\htdocs\zendskeleton\public\files
    // ;extension=php_fileinfo.dll
    public function index09Action(){
    
    	$validator 	= new \Zend\Validator\File\IsImage();
    
    	$value		= PUBLIC_PATH . '/files/ch05-oop-08.swf';		// No
    	$value		= PUBLIC_PATH . '/files/Koala.zip';				// Yes
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }
	
    // Zend\Validator\File\ImageSize
    public function index10Action(){
    
    	$validator 	= new \Zend\Validator\File\ImageSize(array(
    			'minWidth' => 100, 'minHeight' => 100,
    			'maxWidth' => 300, 'maxHeight' => 480,
    	));
    
    	$value		= PUBLIC_PATH . '/files/Koala.jpg';	// w 150 h 112
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }

    // Zend\Validator\File\IsCompressed
    public function index11Action(){
    
    	$validator 	= new \Zend\Validator\File\IsCompressed();
    	$value		= PUBLIC_PATH . '/files/ch05-oop-08.swf';		// No
    	$value		= PUBLIC_PATH . '/files/Koala.zip';				// Yes
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }
	
    // Zend\Validator\GreaterThan
    public function index12Action(){
    
    	$validator 	= new \Zend\Validator\GreaterThan(array(
    			'min' 		=> 50,
    			'inclusive' => true
    	));
    	$value		= 50;
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }

    // Zend\Validator\LessThan
    public function index13Action(){
    
    	$validator 	= new \Zend\Validator\LessThan(array(
    			'max' 		=> 50,
    			'inclusive' => false
    	));
    	$value		= 51;
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }

    // Zend\Validator\InArray
    public function index14Action(){
    
    	$validator 	= new \Zend\Validator\InArray(array(
    			'haystack'	=> array('zend', 'joomla', 'jquery'),
    	));
    
    	$validator 	= new \Zend\Validator\InArray(array(
    			'haystack' => array(
    					'firstDimension' 	=> array('zend2', 'zend1', 'joomla'),
    					'secondDimension'	=> array('php', 'jquery')
    			),
    			'recursive' => true
    	));
    
    	$value		= 'zend';
     	$value		= 'zend2';
      	$value		= 'php';
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }

    // Zend\Validator\NotEmpty
    public function index15Action(){
    
    	$validator 	= new \Zend\Validator\NotEmpty();
    
    	$value		= '';
     	$value		= array();
     	$value		= null;
     	$value		= '       ';
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }

    // Zend\Validator\Regex
    public function index16Action(){
    	$pattern	= '#Zend#';
    	$validator 	= new \Zend\Validator\Regex($pattern);
    	$value		= 'zend';
    	$value		= 'Zend';
    
    	$pattern	= '#Zend#imsU';
    	$validator 	= new \Zend\Validator\Regex($pattern);
    	$value		= 'zEnd';
    
//     	// lap-trinh-php.html
//     	// lap-trinh-zend-2.php
    
    	$pattern	= '#^[a-zA-Z0-9-_]+\.(html|php)$#imsU';
    
    	$validator 	= new \Zend\Validator\Regex($pattern);
    	$value		= 'lap-trinh-php.html';
    	$value		= 'lap-trinh-zend-2.php';
    	$value		= 'lap-trinh-zend-2.phtml';
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }

    // Zend\Validator\StringLength
    public function index17Action(){
    	$validator 	= new \Zend\Validator\StringLength(array(
    			'max' => 9,
    			'min' => 5
    	));
    	
    	$value		= 'zEnd';
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }
	
    // Thay đổi câu thông báo lỗi
    public function index18Action(){
    	$value		= 'zend zend zend zend';
    	
    	$validator 	= new \Zend\Validator\StringLength(7,9);
    	$validator->setMessages(array(
    			\Zend\Validator\StringLength::INVALID	=> 'Dữ liệu \'%value%\' không phù hợp',
    			\Zend\Validator\StringLength::TOO_SHORT => 'Chiều dài của chuỗi \'%value%\' phải lớn hơn %min% ký tự',
    			\Zend\Validator\StringLength::TOO_LONG 	=> 'Chiều dài của chuỗi \'%value%\' phải nhỏ hơn %max% ký tự',
    	)); 
    	
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }
	
    // Thay đổi câu thông báo lỗi
    public function index19Action(){
    	$value		= 'zend zend zend zend';
    	 
    	$validator 	= new \ZendVN\Validator\StringLength(7,9);
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }

    // Thực hiện nhiều validate cùng mọt lúc
    public function index20Action(){
 		$value	= 'lthlan54gmail.com';

 		$validator	= new \Zend\Validator\ValidatorChain();
 		$validator->attach(new \Zend\Validator\EmailAddress(), true)
 				  ->attach(new \Zend\Validator\StringLength(30,40));
 		
 		if (!$validator->isValid($value)) {
 			$messages	= $validator->getMessages();
 			echo current($messages);
 			echo '<pre style="color:red;">';
 			print_r($messages);
 			echo '</pre>';
 		}
 		
 		return false;
    }
    
    // Thực hiện nhiều validate cùng mọt lúc
    public function index21Action(){

    	// Username
    	// Không được rỗng
    	// Chiều dài từ 5 đến 8 ký tự
    	// Bắt đầu bằng ký tự Z và kết thúc bằng 1 giá trị số
    	
    	if($this->request->isPost()){
    		$username	= $this->params()->fromPost('username');
    		$validator	= new \Zend\Validator\ValidatorChain();
    		
    		$validator->attach(new \Zend\Validator\NotEmpty(), true)
    				  ->attach(new \Zend\Validator\StringLength(5,8), true)
    				  ->attach(new \Zend\Validator\Regex('#^Z[a-zA-Z0-9-_]{3,6}[0-9]{1}$#'));
    		
    		if (!$validator->isValid($username)) {
    			$messages	= $validator->getMessages();
    			echo '<pre style="color:red;">';
    			print_r($messages);
    			echo '</pre>';
    		}
    	}
    }
    
    // Thực hiện nhiều validate cùng mọt lúc
    public function index22Action(){
//    		$validator 	= new \ZendVN\Validator\CheckCourseID('[A-Z]{3}-[0-9]{2}');
//    		$validator 	= new \ZendVN\Validator\CheckCourseID(array(
//    				'pattern' => '[A-Z]{3}-[0-9]{2}'
//    		));
    	
    	$validator 	= new \ZendVN\Validator\CheckCourseID();
    	$validator->setPattern('[A-Za-z]{3}-[0-9]{2}');
    	$value		= 'ACe-01';
    
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    
    	return false;
    }
    
    public function index23Action(){
    	if($this->request->isPost()){
    		$password	= $this->params()->fromPost('password');
			$confirmPassword	= $this->params()->fromPost('confirm_password');

    		
    	}
    	$validator 	= new \ZendVN\Validator\ConfirmPassword();
    	$validator->setConfirmPassword($confirmPassword);
    	$value		= $password;
    	
    	if (!$validator->isValid($value)) {
    		$messages	= $validator->getMessages();
    		echo current($messages);
    	}
    	
    }
    
    
    
    
    
    
    
    
    
    
}
