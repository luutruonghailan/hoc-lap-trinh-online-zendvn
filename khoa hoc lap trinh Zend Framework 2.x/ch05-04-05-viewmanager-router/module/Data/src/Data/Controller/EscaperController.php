<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Data\Controller;

use Zend\View\Model\ViewModel;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Escaper\Escaper as Escaper;


class EscaperController extends AbstractActionController
{
    public function index01Action()
    {
    	 $input	= '<script>alert(12)</script>';
    	// $output		= htmlentities($input);
    	echo $output		= htmlspecialchars($input);
    	return $this->response;
    }
    
    public function index02Action()
    {
    	$input	= '<script>alert(12)</script>';
    	$escaper	= new \Zend\Escaper\Escaper('utf-8');
    	echo $output	= $escaper->escapeHtml($input);
    	return $this->response;
    }
    
    public function index03Action()
    {
    	$input = <<<INPUT
' onmouseover='alert(/ZF2!/);
INPUT;
    	//$output		= htmlentities($input);
    	$output		= htmlspecialchars($input);
    	
    	echo "<span title='$output'>ZendVN</span>";
    	return $this->response;
    }
    
    public function index04Action()
    {
    	$input = <<<INPUT
' onmouseover='alert(/ZF2!/);
INPUT;
    	$escaper	= new Escaper('utf-8');
    	$output		= $escaper->escapeHtmlAttr($input);
    	 
    	echo "<span title='$output'>ZendVN</span>";
    	return $this->response;
    }

	public function index05Action(){
		$viewmModel	= new ViewModel();
		$viewmModel->setTerminal(true);
		return $viewmModel;
	}
	
	public function index06Action(){
		$viewmModel	= new ViewModel();
		$viewmModel->setTerminal(true);
		return $viewmModel;
	}
	
	public function index07Action(){
		$viewmModel	= new ViewModel();
		$viewmModel->setTerminal(true);
		return $viewmModel;
	}
}










