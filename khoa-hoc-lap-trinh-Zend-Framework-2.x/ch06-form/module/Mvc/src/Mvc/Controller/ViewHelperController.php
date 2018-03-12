<?php

namespace Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ViewHelperController extends AbstractActionController
{
	// Change layout
    public function index01Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->layout('layout/layout');
    }
    
    // Zend\View\Helper\BasePath
    public function index02Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->layout('layout/layout');
    }
    
    // Zend\View\Helper\Cycle
    public function index03Action()
    {
    	$arrayCourse = array(
    		array('name' => 'PHP', 'students' => 500),
    		array('name' => 'Zend', 'students' => 200),
    		array('name' => 'Joomla', 'students' => 300),
    		array('name' => 'jQuery', 'students' => 300),
    	);
    	
    	$viewModel	= new ViewModel(
    		array(
    			'courses'	=> $arrayCourse,
    			'website'	=> 'www.zend.vn'
    		)
    	);
    	
    	return $viewModel;
    }
    
    // Zend\View\Helper\DocType 
    // Zend\View\Helper\Escape
    public function index04Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->layout('layout/layout');
    }
    
    // Zend\View\Helper\Gravatar
    public function index05Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->layout('layout/layout');
    }
    
    // Zend\View\Helper\HeadTitle
    public function index06Action()
    {
    	// $render	= $this->getServiceLocator()->get('Zend\View\Renderer\PhpRenderer');
    	// $render->headTitle('Controller');
    	
    	
    	$this->layout('layout/layout');
    }
    
    // Zend\View\Helper\HeadMeta
    public function index07Action()
    {
    	$render		= $this->getServiceLocator()->get('Zend\View\Renderer\PhpRenderer');
    	$headMeta	= $render->headMeta();
    	
    	// HTTP EQUIV
    	
    	// Thêm Http quiv ở vị trí cuối
    	$headMeta->appendHttpEquiv('REFRESH', '600');
    	
    	// Thêm Http quiv ở vị trí đầu tiên
    	$headMeta->prependHttpEquiv('Content-Type', 'text/html; charset=iso-8859-1');
    	 
    	// Chỉnh sửa Http quiv ở vị trí offset
    	$headMeta->offsetSetHttpEquiv(1, 'cache-control', 'no-cache');
    	
    	// Chỉnh sửa Http quiv có key nào đó
    	$headMeta->setHttpEquiv('REFRESH', '500');
    	
    	// HTTP NAME
    	$headMeta->appendName('description', 'Cập nhật tin tức mới và nóng nhất về Đời sống Xã hội, Kinh tế,');
    	$headMeta->prependName('keywords', 'Zing, Zing News, Tin tức, Báo điện tử, Việt Nam, Hà Nội, Hồ Chí Minh, Đà Nẵng, Đời sống,');
    	$headMeta->offsetSetName(1, 'viewport', 'width=device-width, initial-scale=1.0');
    	$headMeta->setName('keywords', 'ZendVn');
    	
    	// Set Charset
    	$headMeta->setCharset('Utf-8');
    	
    	// Xóa tất cả các thẻ meta
    	$headMeta->getContainer()->exchangeArray(array());
    	
    	$this->layout('layout/layout');
    	
    }
    
    // Zend\View\Helper\HeadLink
    public function index08Action()
    {
    	$render		= $this->getServiceLocator()->get('Zend\View\Renderer\PhpRenderer');
    	$headLink	= $render->headLink();
    	 
    	$headLink->appendStylesheet(PUBLIC_URL . '/css/style.css' , 'screen');
    	$headLink->appendStylesheet(PUBLIC_URL . '/css/bootstrap.css' , 'screen', 'lte IE6');
    	 
    	$headLink->getContainer()->exchangeArray(array());
    	
    	$this->layout('layout/layout');
    	 
    }
    
    // Zend\View\Helper\HeadScript
    public function index09Action()
    {
    	$viewhelpermanager 	= $this->getServiceLocator()->get('viewhelpermanager');
    	$headScript			= $viewhelpermanager->get('headScript');
    	
    	$renderer   = $this->getServiceLocator()->get('Zend\View\Renderer\PhpRenderer');
		$headScript = $renderer->headScript();

		$headScript->appendFile(PUBLIC_URL . '/js/jquery.min.js', 'text/javascript');
		$headScript->appendFile(PUBLIC_URL . '/js/bootstrap.js', 'text/javascript', array('conditional' => 'lt IE 7'));
 		$headScript->offsetSetFile(0, PUBLIC_URL . '/js/bootstrap.min.js', 'text/javascript');
    	
    
    	$headScript->getContainer()->exchangeArray(array());
    	 
    	$this->layout('layout/layout');
    
    }
    
    // Zend\View\Helper\InlineScript
    public function index10Action()
    {
    	   
    	$viewhelpermanager 	= $this->getServiceLocator()->get('viewhelpermanager');
    	$script 			= $viewhelpermanager->get('inlineScript');
    	$headScript			= $viewhelpermanager->get('headScript');
    	
    	$headScript->appendFile(PUBLIC_URL . '/js/jquery.min.js', 'text/javascript');
    	$script->appendScript(
    			'$(document).ready(function() { alert("Hello"); });',
    			'text/javascript',
    			array('noescape' => true)
    	); // Disable CDATA comments
    	   
    	
    	$this->layout('layout/layout');
    
    }
    
    // Zend\View\Helper\HtmlList
    public function index11Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->layout('layout/layout');
    }
    
    // Zend\View\Helper\HtmlFlash
    public function index12Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->layout('layout/layout');
    }
    
    // Zend\View\Helper\Json
    public function index13Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->layout('layout/layout');
    }
    
    // Zend\View\Helper\Partial
    public function index14Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->layout('layout/layout');
    }
    
    // Zend\View\Helper\Partial
    public function index15Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->layout('layout/layout');
    }
    
    // Zend\View\Helper\Partial
    public function index16Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->layout('layout/layout');
    }
    
    // Zend\View\Helper\PartialLoop
    public function index17Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->layout('layout/layout');
    }
    
    // Zend\View\Helper\Placeholder
    public function index18Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->layout('layout/layout');
    }

    // Currency Date Number
    public function index19Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	$this->layout('layout/layout');
    }

     // Zend\View\Helper\ServerURL
    public function index20Action()
    {
    	$serverUrl	= new \Zend\View\Helper\ServerUrl();
    	
    	// Methods getHost(), getPort(), getScheme()
    	echo '<h3 style="color:red;font-weight:bold">getHost()</h3>';
    	echo $serverUrl->getHost();
    	
    	// Methods getHost(), getPort(), getScheme()
    	echo '<h3 style="color:red;font-weight:bold">getPort()</h3>';
    	echo $serverUrl->getPort();
    	
    	// Methods getHost(), getPort(), getScheme()
    	echo '<h3 style="color:red;font-weight:bold">getScheme()</h3>';
    	echo $serverUrl->getScheme();
    	
    	$this->layout('layout/layout');
    }
    
    public function index21Action()
    {
    	
    	$this->layout('layout/layout');
    }







}
