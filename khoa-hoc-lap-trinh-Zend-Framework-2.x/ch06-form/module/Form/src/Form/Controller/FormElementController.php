<?php

namespace Form\Controller;

use Zend\Stdlib\ArrayObject;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FormElementController extends AbstractActionController
{
	
    public function index01Action(){
    	if($this->getRequest()->isPost()){
    		$paramsPost	= $this->params()->fromPost();
    		$paramsFile	= $this->params()->fromFiles();
    		echo '<pre style="color:red;">';
    		print_r($paramsPost);
    		echo '</pre>';
    		echo '<pre style="color:red;">';
    		print_r($paramsFile);
    		echo '</pre>';
    		
    	}
    	return new ViewModel(array(
    		'form'	=> new \Form\Form\StudyOne()		
    	));
    }
    
    public function index02Action(){
    	if($this->getRequest()->isPost()){
    		$paramsPost	= $this->params()->fromPost();
    		$paramsFile	= $this->params()->fromFiles();
    		echo '<pre style="color:red;">';
    		print_r($paramsPost);
    		echo '</pre>';
    		echo '<pre style="color:red;">';
    		print_r($paramsFile);
    		echo '</pre>';
    
    	}
    	return new ViewModel(array(
    			'form'	=> new \Form\Form\StudyTwo()
    	));
    }
    
    public function index03Action(){
    	if($this->getRequest()->isPost()){
    		$paramsPost	= $this->params()->fromPost();
    		echo '<pre style="color:red;">';
    		print_r($paramsPost);
    		echo '</pre>';
    	}
    	return new ViewModel(array(
    			'form'	=> new \Form\Form\StudyThree()
    	));
    }
    
    public function index04Action(){
    	if($this->getRequest()->isPost()){
    		$paramsPost	= $this->params()->fromPost();
    		$paramsFile	= $this->params()->fromFiles();
    		echo '<pre style="color:red;">';
    		print_r($paramsPost);
    		echo '</pre>';
    		echo '<pre style="color:red;">';
    		print_r($paramsFile);
    		echo '</pre>';
    
    	}
    	return new ViewModel(array(
    			'myForm'	=> new \Form\Form\StudyOne()
    	));
    }
    
    public function index05Action(){
    	if($this->getRequest()->isPost()){
    		$paramsPost	= $this->params()->fromPost();
    		$paramsFile	= $this->params()->fromFiles();
    		echo '<pre style="color:red;">';
    		print_r($paramsPost);
    		echo '</pre>';
    		echo '<pre style="color:red;">';
    		print_r($paramsFile);
    		echo '</pre>';
    
    	}
    	return new ViewModel(array(
    			'myForm'	=> new \Form\Form\StudyOne()
    	));
    }
    
    public function index06Action(){
    	if($this->getRequest()->isPost()){
    		$paramsPost	= $this->params()->fromPost();
    		echo '<pre style="color:red;">';
    		print_r($paramsPost);
    		echo '</pre>';
    	}
    	return new ViewModel(array(
    			'myForm'	=> new \Form\Form\StudyOne()
    	));
    }
    
    public function exerciseOneAction(){
    	return new ViewModel(array(
    			'myForm'	=> new \Form\Form\Login()
    	));
    }

    public function exerciseTwoAction(){
    	$myForm	= new \Form\Form\Register();
    	
    	
    	$object	= new ArrayObject(array(
				'card-holder-name'	=> 'John Smith',    			
				'card-number'		=> '313-123-468',    			
				'expiry-month'		=> 3,    			
				'expiry-year'		=> 14,    			
    	));
    	$myForm->bind($object);
    	
    	
    	
    	
    	
    	
    	return new ViewModel(array(
    			'myForm'	=> $myForm
    	));
    }
}
