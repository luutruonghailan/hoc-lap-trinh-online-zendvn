<?php

namespace Form\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HtmlFiveController extends AbstractActionController
{
    public function index01Action()
    {
    	if($this->getRequest()->isPost()){
    		$paramsPost	= $this->params()->fromPost();
    		
    		echo '<pre style="color:red;">';
    		print_r($paramsPost);
    		echo '</pre>';
    	}
    }
    
    public function index02Action()
    {
    	if($this->getRequest()->isPost()){
    		$paramsPost	= $this->params()->fromPost();
    		
    		echo '<pre style="color:red;">';
    		print_r($paramsPost);
    		echo '</pre>';
    	}
    }
    
    public function index03Action()
    {
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
    }
}
