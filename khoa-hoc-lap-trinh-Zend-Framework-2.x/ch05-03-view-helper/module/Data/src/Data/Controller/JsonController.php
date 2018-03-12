<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Data\Controller;

use Zend\View\Helper\ViewModel;

use Zend\Mvc\Controller\AbstractActionController;

class JsonController extends AbstractActionController
{
    public function index01Action()
    {
    	$input	= array(
    			'invokables'	=> array(
    					'Data\Controller\Index'			=> 'Data\Controller\IndexController',
    					'Data\Controller\Filter'		=> 'Data\Controller\FilterController',
    					'Data\Controller\Serializer'	=> 'Data\Controller\SerializerController',
    			));
    	
    	echo $strJson	= \Zend\Json\Json::encode($input);
    	
    	echo \Zend\Json\Json::prettyPrint($strJson, array("indent" => "\n"));
    	
    	$output	= \Zend\Json\Json::decode($strJson, \Zend\Json\Json::TYPE_OBJECT);
    	
    	echo '<pre style="color:red;font-weight:bold">';
    	print_r($output);
    	echo '</pre>';
    	
    	return $this->response;
    }
    
    public function index02Action()
    {
    	$viewModel	= new \Zend\View\Model\ViewModel();
    	$viewModel->setTerminal(true);
    	return $viewModel;
    }
}
