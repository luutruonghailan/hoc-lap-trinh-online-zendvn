<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class RouterController extends AbstractActionController
{
	public function showRouteInfo(){
		// Router info
		$routeMatch	= $this->getEvent()->getRouteMatch();
		$routeName	= $routeMatch->getMatchedRouteName();
		$params		= $routeMatch->getParams();

		echo '<h3 style="color:red;">' . $routeName . '</h3>';
		echo '<pre style="color:red;">';
		print_r($params);
		echo '</pre>';
	}
	
    public function indexAction()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->showRouteInfo();
    	return false;
    }
    
    public function addAction()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->showRouteInfo();
    	return false;
    }
    
    public function editAction()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->showRouteInfo();
    	return false;
    }
    
    public function contactAction()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->showRouteInfo();
    	return false;
    }
    
    public function loginAction()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->showRouteInfo();
    	return false;
    }
    
    public function courseAction()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->showRouteInfo();
    	$name	= $this->params()->fromRoute('name');
    	$id		= $this->params()->fromRoute('id');
    	$ext	= $this->params()->fromRoute('extension123','php');
    	
    	echo '<h3 style="color:red;font-weight:bold">' . $name . '</h3>';
    	echo '<h3 style="color:red;font-weight:bold">' . $id . '</h3>';
    	echo '<h3 style="color:red;font-weight:bold">' . $ext . '</h3>';
    	
    	$router	= $this->getEvent()->getRouter();
    	echo $url	= $router->assemble(array(
			'name'		=> 'lap-trinh-php',
			'id'		=> '123456',
			'extension'	=> 'html',
		), array('name' => 'regexRoute'));
  
    }
    
    public function accountAction()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->showRouteInfo();
    	return false;
    }
}
