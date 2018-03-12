<?php
namespace Mvc\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class MyPlugin extends AbstractPlugin {
	
	public function __invoke($params = null)
	
	{
		if($params != null )
			echo '<h3 style="color:red;">' . $params . '</h3>';
		else
			return $this;
	}
	
	public function showInfo()
	
	{
		echo '<h3 style="color:red;">' . __METHOD__ . '</h3>';
	}
}