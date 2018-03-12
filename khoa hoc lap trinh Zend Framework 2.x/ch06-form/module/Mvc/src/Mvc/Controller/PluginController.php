<?php

namespace Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class PluginController extends AbstractActionController
{
    public function index01Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	
    	return false;
    }
    
    // Zend\Mvc\Controller\Plugin\Forward
    public function forwardAction()
    {
    	echo '<h3 style="color:red;">' . __METHOD__ . ' - start</h3>';
    	$this->forward()->dispatch('Mvc\Controller\Plugin',  array(
    		'action'	=> 'detail',
    		'course'	=> array(
    			'name'		=> 'Zend 2',
    			'student'	=> 100
    		)
    	));
    	echo '<h3 style="color:red;">' . __METHOD__ . ' - end</h3>';
    	 
    }
    
    // Zend\Mvc\Controller\Plugin\Forward
    public function detailAction()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$course	= $this->params('course');
    	echo '<pre style="color:red;">';
    	print_r($course);
    	echo '</pre>';
    }

    // Zend\Mvc\Controller\Plugin\Params
    public function paramsAction()
    {
    	
//     	$params	= new \Zend\Mvc\Controller\Plugin\Params();
//     	$params->fromQuery()
    	 
    	// $this->params()->fromPost()
    	echo '<h3 style="color:red;font-weight:bold">$this->params()->fromPost()</h3>';
    	$paramsPost	= $this->params()->fromPost();
    	echo $email		= $this->params()->fromPost('emails', 'lthlan54@gmail.com');
    	echo '<pre style="color:red;">';
    	print_r($paramsPost);
    	echo '</pre>';
    	
    	// $this->params()->fromQuery()
    	echo '<h3 style="color:red;font-weight:bold">$this->params()->fromQuery()</h3>';
    	$paramsQuery	= $this->params()->fromQuery();
    	echo $email		= $this->params()->fromQuery('emails', 'lthlan54@gmail.com');
    	echo '<pre style="color:red;">';
    	print_r($paramsQuery);
    	echo '</pre>';
    	
    	// $this->params()->fromRoute()
    	echo '<h3 style="color:red;font-weight:bold">$this->params()->fromRoute()</h3>';
    	$paramsRoute	= $this->params()->fromRoute();
    	echo $email		= $this->params()->fromRoute('emails', 'lthlan54@gmail.com');
    	echo '<pre style="color:red;">';
    	print_r($paramsRoute);
    	echo '</pre>';
    	
    	// $this->params()->fromHeader()
    	echo '<h3 style="color:red;font-weight:bold">$this->params()->fromHeader()</h3>';
    	$paramsHeader	= $this->params()->fromHeader();
    	echo $email		= $this->params()->fromHeader('emails', 'lthlan54@gmail.com');
    	echo '<pre style="color:red;">';
    	print_r($paramsHeader);
    	echo '</pre>';
    	
    	// $this->params()->fromFiles()
    	echo '<h3 style="color:red;font-weight:bold">$this->params()->fromFiles()</h3>';
    	$paramsFile	= $this->params()->fromFiles();
    	echo '<pre style="color:red;">';
    	print_r($paramsFile);
    	echo '</pre>';
    	
    	
    	$params = $this->params('controller');
    	echo '<pre style="color:red;">';
    	print_r($params);
    	echo '</pre>';
    }

    // Zend\Mvc\Controller\Plugin\Redirect
    public function redirectAction()
    {
    	echo '<h3 style="color:red;">' . __METHOD__ . '</h3>';
    	$this->redirect()->toRoute('regexRoute', array(
    			'name' 				=> 'lap-trinh-php',
				'id' 				=> '101',
				'extension' 		=> 'php',
    	)); 
    	return false;
    }
    
    // Zend\Mvc\Controller\Plugin\URL
    public function urlAction()
    {
    	$params= array(
    			'name' 			=> 'lap-trinh-ios',
    			'id' 			=> 989,
    			'extension' 	=> 'php'
    	);
    	
     	$router = $this->getEvent()->getRouter();
     	echo $url    = $router->assemble($params, array('name' => 'regexRoute'));
    	
    	//echo $url = $this->url()->fromRoute('regexRoute', $params);
    	return false;
    }
    
    // Zend\Mvc\Controller\Plugin\FlashMessenger
    public function flashMessenger01Action()   {
    	echo '<h3 style="color:red;">' . __METHOD__ . '</h3>';
    
    	$flashMessenger	= $this->flashMessenger();
    	$flashMessenger->addSuccessMessage('SuccessMessage 01');
    	$flashMessenger->addSuccessMessage('SuccessMessage 02');
    	
    	if($flashMessenger->hasSuccessMessages() == true){
	    	$successMessage	= $flashMessenger->getSuccessMessages();
    	}else{
    		echo '<h3 style="color:red;">No message</h3>';
    	}	 
    	
    	echo '<pre style="color:red;">';
    	print_r($successMessage);
    	echo '</pre>';
    	return false;
    }
    
    // Zend\Mvc\Controller\Plugin\FlashMessenger
    public function flashMessenger02Action(){
    
    	$flashMessenger = $this->flashMessenger();
    	$flashMessenger->addInfoMessage('InfoMessage 1');
    	$flashMessenger->addInfoMessage('InfoMessage 2');
    	$flashMessenger->addErrorMessage('ErrorMessage 1');
    
    	$infoMessages	= $flashMessenger->getInfoMessages();
    	$errorMessages	= $flashMessenger->getErrorMessages();
    
    	//$flashMessenger->clearMessagesFromNamespace('info');
    	//$flashMessenger->clearMessagesFromContainer();
    
    	echo '<pre style="color:red;">';
    	print_r($infoMessages);
    	echo '</pre>';
    	
    	echo '<pre style="color:red;">';
    	print_r($errorMessages);
    	echo '</pre>';
    	
    //	$flashMessenger->clearMessagesFromNamespace('error');
    	$flashMessenger->clearMessagesFromContainer();
    	
    	$infoMessages	= $flashMessenger->getInfoMessages();
    	$errorMessages	= $flashMessenger->getErrorMessages();
    	
    	
    	echo '<pre style="color:red;">';
    	print_r($infoMessages);
    	echo '</pre>';
    	
    	echo '<pre style="color:red;">';
    	print_r($errorMessages);
    	echo '</pre>';
    	
    	return false;
    
    }
       
    // Zend\Mvc\Controller\Plugin\FlashMessenger
    public function flashMessenger03Action(){
    	$flashMessenger=  $this->flashMessenger();
    
    	$namespace= $flashMessenger->getNamespace();
    	
    	// Namespace'zendvn'
     	$flashMessenger->setNamespace('zendvn');
     	$flashMessenger->addMessage('Zend framework 2.x 1');
    	if($flashMessenger->hasMessages()){
    		$messages = $flashMessenger->getMessages();
    	}else{
    		echo '<h3 style="color:red;">No message</h3>';
    	}
    	
    	echo '<pre style="color:red;">';
    	print_r($flashMessenger->getMessages());
    	echo '</pre>';
    	
    	// Namespace 'abc'
    	$flashMessenger->setNamespace('abc');
    	$flashMessenger->addMessage('joomla');
    	if($flashMessenger->hasMessages()){
    		$messages = $flashMessenger->getMessages();
    	}else{
    		echo '<h3 style="color:red;">No message</h3>';
    	}
    	$flashMessenger->clearMessagesFromNamespace('abc');
    	
    	echo '<pre style="color:red;">';
    	print_r($flashMessenger->getMessages());
    	echo '</pre>';
    	
    	
    
    	return false;
    }
    
    // Zend\Mvc\Controller\Plugin\FlashMessenger
    public function flashMessenger04Action(){
    	$this->flashMessenger()->addSuccessMessage('Bạn đã đăng nhập thành công! - One');
    	$this->flashMessenger()->addSuccessMessage('Bạn đã đăng nhập thành công! - Two');
    	$this->flashMessenger()->addSuccessMessage('Bạn đã đăng nhập thành công! - Three');
    	return $this->redirect()->toRoute('literalRoute');
    }
    
    // Zend\Mvc\Controller\Plugin\FlashMessenger
    public function successAction(){
    	$flashMessenger = $this->flashMessenger();
    
    	if ($flashMessenger->hasSuccessMessages()) {
    		$result['messages'] = $flashMessenger->getSuccessMessages();
    	}
    	return $result;
    }
    
  	public function myPluginAction(){
  		echo '<h3 style="color:red;">' . __METHOD__ . '</h3>';
  		$this->myPluginAbc()->showInfo();
  		return false;
  	}
    
    
    
    
    
    
    
    
    
    
}
