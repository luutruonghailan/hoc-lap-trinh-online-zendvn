<?php

namespace Form\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FormFilterController extends AbstractActionController
{
	
    public function index01Action(){
    	$myForm	= new \Form\Form\Login();
    	
    	if($this->getRequest()->isPost()){
    		
    		$paramsPost	= $this->params()->fromPost();
    		$data		= $this->getRequest()->getPost();
    		
    		$myForm->setData($data);
    		if($myForm->isValid()){
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}else{
    			echo '<h3 style="color:red;">NO VALID</h3>';
    		}
    	}
    	
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }

    public function index02Action(){
    	$myForm	= new \Form\Form\StudyFour();
    	 
    	if($this->getRequest()->isPost()){
    
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    		if($myForm->isValid()){
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}else{
    			echo '<h3 style="color:red;">NO VALID</h3>';
    		}
    	}
    	 
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }
    
    public function index03Action(){
    	$myForm	= new \Form\Form\Register();
    
    	if($this->getRequest()->isPost()){
    
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    		if($myForm->isValid()){
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}else{
    			echo '<h3 style="color:red;">NO VALID</h3>';
    		}
    	}
    
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }
    
    public function index04Action(){
    	$myForm	= new \Form\Form\StudyFour();
    
    	if($this->getRequest()->isPost()){
    
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    		if($myForm->isValid()){
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}else{
    			echo '<h3 style="color:red;">NO VALID</h3>';
    		}
    	}
    
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }
    
    public function index05Action(){
    }
    
    public function exerciseOneAction(){
    	// $myForm	= new \Form\Form\Login();
    	// $myForm->setInputFilter(new \Form\Form\LoginFilter());
    
    	$myForm			= $this->serviceLocator->get('FormElementManager')->get('loginForm');
    	
    	if($this->getRequest()->isPost()){
    
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    		
    		if($myForm->isValid()){
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}else{
    		}
    	}
    
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }
    
    public function exerciseTwoAction(){
    	$myForm	= new \Form\Form\Login();
    
    	if($this->getRequest()->isPost()){
    
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    
    		if($myForm->isValid()){
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}else{
    			
    		}
    	}
    
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }
    
    public function exerciseThreeAction(){
    	$myForm	= new \Form\Form\Login();
    
    	if($this->getRequest()->isPost()){
    
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    
    		if($myForm->isValid()){
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}else{
    		}
    	}
    
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }

    public function ajax01Action(){
    	
    }
    
    public function loadContentAction(){
    	$view				= new ViewModel();
    	$data				= null;
    	$isXmlHttpRequest	= false;
    	
    	if($this->getRequest()->isXmlHttpRequest() == true){
    		$isXmlHttpRequest	= true;
    		
    		$arrData	= array(
    				'php'		=> 'PHP đã và đang trở thành một ngôn ngữ lập trình phổ biến trong các ứng dụng web ngày nay. Với các ưu điểm như miễn phí, dễ đọc, thao tác tốt với các hệ quản trị cơ sở dữ liệu, cộng đồng sử dụng rộng rãi, thư viện phong phú ',
    				'zend'		=> 'Zend Framework là một thư viện các lớp được xây dựng trên nền tảng ngôn ngữ PHP, theo hướng OOP và được công ty Zend phát triển. Zend Framework được định hướng theo mô hình MVC và là một PHP framework ra đời khá trễ, chính vì vậy ZF đã thừa hưởng những tinh hoa của các framework khác và tránh khỏi những sai lầm của các framework trước đã mắc phải trong quá trình phát triển',
    				'jquery'	=> 'Nếu nói đến lập trình web, chúng ta nghĩ ngay đến một ngôn ngữ lập trình không thể thiếu trong một website đó là Javascript. Javascript giúp chúng ta thực hiện nhưng thao tác, hiệu ứng mà các ngôn ngữ lập web như PHP, ASP, JSP… khó mà thực hiện được.',
    		);
    		 
    		$data	= $arrData[$this->params()->fromQuery('type', 'php')];
    		
    	}
    	$view->setVariables(array(
    			'isXmlHttpRequest'		=> $isXmlHttpRequest,
    			'data'					=> $data
    	));
    	$view->setTerminal(true);
    	return $view;
    }

    public function ajax02Action(){
    	$myForm	= new \Form\Form\Course();
    	 
    	if($this->getRequest()->isPost()){
    		 
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    		 
    		if($myForm->isValid()){
    		}else{
    			echo '<pre style="color:red;">';
    			print_r($myForm->getData());
    			echo '</pre>';
    		}
    	}
    	 
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }
    
    public function loadCourseAction(){
    	$view				= new ViewModel();
    	$data				= null;
    	$isXmlHttpRequest	= false;
    	 
    	if($this->getRequest()->isXmlHttpRequest() == true){
    		$isXmlHttpRequest	= true;
    
    		// XỬ LÝ VÀ TRẢ VỀ DATA
    		$arrData	= array(
    				array('id' => 1, 'name' => 'Lập trình PHP'		, 'type' => 'web'),
    				array('id' => 2, 'name' => 'Lập trình jQuery'	, 'type' => 'web'),
    				array('id' => 3, 'name' => 'Lập trình ZF 2'		, 'type' => 'web'),
    				array('id' => 4, 'name' => 'Lập trình Android'	, 'type' => 'mobile'),
    				array('id' => 5, 'name' => 'Lập trình IOS'		, 'type' => 'mobile'),
    				array('id' => 6, 'name' => 'Thiết kế web vớiPhotoshop'		, 'type' => 'design'),
    		);
    		
    		$courseType	= $this->params()->fromQuery('type');
    		
    		foreach($arrData as $key => $value){
    			if($value['type'] == $courseType) $data[]	= $value;
    		}
    
    	}
    	$view->setVariables(array(
    			'isXmlHttpRequest'		=> $isXmlHttpRequest,
    			'data'					=> $data
    	));
    	$view->setTerminal(true);
    	return $view;
    }
    
    public function ajax03Action(){
    	$myForm			= $this->serviceLocator->get('FormElementManager')->get('loginForm');
    	     
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }
    
    public function validateAction(){
    	$myForm			= $this->serviceLocator->get('FormElementManager')->get('loginForm');
    	if($this->getRequest()->isPost()){
    
    		$data		= $this->getRequest()->getPost();
    		$myForm->setData($data);
    
    		if($myForm->isValid()){
    			// LƯU VÀO DATABASE
    			$result['status']	= 'success';
    		}else{
    			$result['status']	= 'error';
    			$result['messages']['email']	= 'Email: ' . current($myForm->getMessages('my-email'));
    			$result['messages']['password']	= 'Password: ' . current($myForm->getMessages('my-password'));
    		}
    	}
    	
    	echo \Zend\Json\Json::encode($result);
    	return $this->getResponse();
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
