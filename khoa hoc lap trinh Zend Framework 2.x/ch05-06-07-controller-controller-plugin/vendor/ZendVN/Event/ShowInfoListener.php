<?php

namespace ZendVN\Event;

use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;

class ShowInfoListener implements ListenerAggregateInterface{
	
	protected $listeners	= array();
	
	public function attach(EventManagerInterface $events){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
		$shareEventManager	= $events->getSharedManager();
		$this->listeners[] 	= $shareEventManager->attach('ZendVN\Event\Foo','showInfo', array($this, 'funcDoOne'));
		$this->listeners[] 	= $shareEventManager->attach('ZendVN\Event\Foo','showInfo', array($this, 'funcDoTwo'));
	}
	
	public function detach(EventManagerInterface $events){
		if(!empty($this->listeners)){
			foreach($this->listeners as $index => $listener){
				if($events->detach($listener)) unset($this->listeners[$index]);
			}
		}
	}
	
	public function funcDoOne($e){
		echo '<h3 style="color:red;font-weight:bold">Event showInfo - Do 01</h3>';
	}
	
	public function funcDoTwo($e){
		echo '<h3 style="color:red;font-weight:bold">Event showInfo - Do 02</h3>';
	}
}