<?php

namespace Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ViewManagerController extends AbstractActionController
{
	// Controller -  View
    public function index01Action()
    {
    	
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
		$abc	= 'Abc';
		$def	= array(
			'name'		=> 'Zend 2.x',
			'studendt'	=> 200
		);
		return array(
			'my_variable'		=> $abc,
			'my_variable_two'	=> $def,
		);
    }
    
    // Controller -  View
    public function index02Action()
    {
    	
    	$abc	= 'Abc';
    	$def	= array(
    			'name'		=> 'Zend 2.x',
    			'studendt'	=> 200
    	);
    	// $view->setVariable('vOne', $abc);
    	
//     	$view->setVariables(array(
//     		'vOne'	=> $abc,
//     		'vTwo'	=> $def
//     	));

    	$view	= new ViewModel(array(
    		'vOne'	=> $abc,
    		'vTwo'	=> $def
    	));
    	
    	return $view;
    }
    
    // setTemplate
    public function index03Action()
    {
    	$view = new ViewModel();
    	$view->setTemplate('mvc/view-manager/index02');
    	$this->layout('layout/home');
    	return $view;
    }
    
    // Disable view - Disable layout - Change view - Change layout
    public function index04Action()
    {
    	// Disable view
		// return false;
    	
    	// Disable layout
    	$view	= new ViewModel();
    	
    	// Change view
    	$view->setTemplate('mvc/view-manager/index02');
    	$view->setTerminal(true);
    	return $view;
    	 
    	// Change layout
    	$this->layout('layout/home');
    	
    	// Disable view & layout
    	return $this->response;
    }
    
    // Nested 
    public function homeAction(){
    	$view = new ViewModel();
    	$view->setTemplate('mvc/view-manager/home');
    	
    	// Header
    	$headerView = new ViewModel(array('headContent' => 'Header của website'));
    	$headerView->setTemplate('mvc/view-manager/header');
    	
    	// Main Content
    	$mainContentView = new ViewModel();
    	$mainContentView->setTemplate('mvc/view-manager/main-content');
    	
    	// Left Content
    	$leftContentView = new ViewModel();
    	$leftContentView->setTemplate('mvc/view-manager/left-content');
    	
    	// Right Content
    	$rightContentView = new ViewModel(array('right-abc' => 'Right của website'));
    	$rightContentView->setTemplate('mvc/view-manager/right-content');
    	
    	$mainContentView->addChild($leftContentView, 'leftContentV')
    					->addChild($rightContentView, 'rightContentV');
    	
    	$view->addChild($headerView, 'headV')
    		 ->addChild($mainContentView, 'mainContentV');
    	
    	return $view;
    	
    }
    
    // Nested
    public function headerAction(){
    	 
    }
    
    // Nested
    public function mainContentAction(){
    
    }
    
    // Nested
    public function leftContentAction(){
    
    }
    
    // Nested
    public function rightContentAction(){
    
    }
    
    public function index05Action()
    {
    	echo '<h3 style="color:red;">' . __METHOD__ . '</h3>';
    	$layout	= $this->layout();
    	
    	$headerView = new ViewModel(array('headContent' => 'headContent of Layout'));
    	$headerView->setTemplate('vm/header');
    	
    	$layout->addChild($headerView, 'headerView');
    }
    
    public function index06Action()
    {
    	$view = new ViewModel(array('valueOne' => 'Zend 2'));
    	return $view;
    }
    
    
    
}
