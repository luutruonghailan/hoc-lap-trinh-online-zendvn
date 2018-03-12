<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Mvc\Controller;

use Zend\EventManager\SharedEventManager;
use Zend\EventManager\EventInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\EventManager\EventManager;

class EventController extends AbstractActionController
{
    public function index01Action()
    {
    	
		$eventManager	= new \Zend\EventManager\EventManager();

		// EventOne
		$eventManager->attach('eventOne', function(){
			echo '<h3 style="color:red;font-weight:bold">eventOne - Do 1</h3>';
		});
		// $eventManager->trigger('eventOne');
		
		// EventTwo
		$eventManager->attach('eventTwo', function(){
			echo '<h3 style="color:red;font-weight:bold">eventTwo - Do 1</h3>';
		});
		// $eventManager->trigger('eventTwo');
    	
		// THÊM CÔNG VIỆC CHO EVENT ONE 
		$eventManager->attach('eventOne',function(){
			echo '<h3 style="color:red;font-weight:bold">eventOne - Do 2</h3>';
		});
		
		// THÊM CÔNG VIỆC CHO EVENT TWO VÀ EVENT ONE
		// eventOne		eventOne - Do 1		eventOne - Do 2
		// eventTwo		eventTwo - Do 1
		
		$eventManager->attach(array('eventOne', 'eventTwo'),function(){
			echo '<h3 style="color:red;font-weight:bold">eventOne & eventTwo - Doing</h3>';
		});
			
		// $eventManager->trigger('eventOne');		// eventOne - Do 1		eventOne - Do 2		eventOne & eventTwo - Doing
		// $eventManager->trigger('eventTwo');		// eventTwo - Do 1		eventOne & eventTwo - Doing
		
		// THÊM CÔNG VIỆC CHO TẤT CẢ CÁC EVENT
		// eventOne		eventOne - Do 1		eventOne - Do 2		eventOne & eventTwo - Doing
		// eventTwo		eventTwo - Do 1		eventOne & eventTwo - Doing
		
		$eventManager->attach('eventThree',function(){
			echo '<h3 style="color:red;font-weight:bold">eventThree - Doing</h3>';
		});
		//$eventManager->trigger('eventThree');
		
		$eventManager->attach('*',function(){
			echo '<h3 style="color:red;font-weight:bold">Doing</h3>';
		});
		
		$eventManager->trigger('eventOne');
		
		
    	return $this->response;
    }

	public function index02Action(){
		$eventManager	= new EventManager();
		
		// Case 01 $callback	Anonymous function
		$eventManager->attach('eventOne', function(){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 01</h3>';
		});

		// Case 02
		$listener01	= function(){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 02</h3>';
		};
		$eventManager->attach('eventOne', $listener01);
		
		// Case 03
		// $eventManager->attach('eventOne', 'ZendVN\Event\Functions::funcOne');
		$eventManager->attach('eventOne', array('ZendVN\Event\Functions','funcOne'));
		
		// Case 04
		$eventManager->attach('eventOne', array('ZendVN\Event\Functions', 'funcTwo'));
		
		$eventManager->trigger('eventOne');

		return $this->response;
	}

	// Priority
	public function index03Action(){
		$eventManager	= new EventManager();
	
		$eventManager->attach('eventOne', function(){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 01</h3>';
		}, -1000);
		

		$eventManager->attach('eventOne', function(){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 02</h3>';
		}, 0);
		
		$eventManager->attach('eventOne', array('ZendVN\Event\Functions', 'funcOne'));
		$eventManager->attach('eventOne', array('ZendVN\Event\Functions', 'funcTwo'), 1000);
		
		$eventManager->trigger('eventOne');
		
		return $this->response;
	}
	
	// EventInterface $e
	public function index04Action(){
		$eventManager	= new EventManager();
	
		$eventManager->attach('eventOne', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 01</h3>';
		});
		
		$listener01	= function(EventInterface $e){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 02</h3>';
			echo '<br />Event Name:' . $name	= $e->getName();
			echo '<br />Params:'. $params	= $e->getParams();
			echo '<br />Params course:'. $course	= $e->getParam('course_abc', 'def');
			echo '<br />Target:'. $target	= $e->getTarget();
			
			
			$e->setParam('course', 'zend framework 2');
			echo '<pre style="color:red;font-weight:bold">';
			print_r($e->getParams());
			echo '</pre>';
		};
			
		$eventManager->attach('eventOne', $listener01);
		
		$params	= array('course' => 'zf2', 'time' => '90h');
		$eventManager->trigger('eventOne', this, $params);
		
		return $this->response;
	}

	// Lấy danh sách các event getEvents()
	public function index05Action(){
		$eventManagerOne	= new EventManager();
		$eventManagerTwo	= new EventManager();
	
		$eventManagerOne->attach('eventOne', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventManagerOne - eventOne - 01</h3>';
		});
	
		$eventManagerOne->attach('eventTwo', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventManagerOne - eventTwo - 01</h3>';
		});
		
		$eventManagerOne->attach('eventTwo', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventManagerOne - eventTwo - 02</h3>';
		});
		
		$eventManagerTwo->attach('eventOne', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventManagerTwo - eventOne - 01</h3>';
		});
			
		$eventManagerTwo->attach('eventTwo', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventManagerTwo - eventTwo - 01</h3>';
		});
			
		$eventManagerTwo->attach('eventTwo', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventManagerTwo - eventTwo - 02</h3>';
		});
		
		$eventManagerTwo->attach('eventThree', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventManagerTwo - eventTwo - 02</h3>';
		});
		
		$eventManagerTwo->trigger('eventTwo');
		
		// Get event
		$eventListOne	= $eventManagerOne->getEvents();
		echo '<pre style="color:red;font-weight:bold">';
		print_r($eventListOne);
		echo '</pre>';
		
		$eventListTwo	= $eventManagerTwo->getEvents();
		echo '<pre style="color:red;font-weight:bold">';
		print_r($eventListTwo);
		echo '</pre>';

		return $this->response;
	}

	// clearListeners xóa listener của một event nào đó
	public function index06Action(){
		$eventManager	= new EventManager();
	
		$eventManager->attach('eventOne', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 01</h3>';
		});
		
		$eventManager->attach('eventOne', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 02</h3>';
		});
		
		$eventManager->attach('eventThree', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventThree - 01</h3>';
		});
	
		$eventManager->clearListeners('eventOne');
		$eventManager->trigger('eventOne');
	
		return $this->response;
	}
	
	// stopPropagation dừng thực hiện sự kiện
	public function index07Action(){
		$eventManager	= new EventManager();
	
		$eventManager->attach('eventOne', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 01</h3>';
			$e->stopPropagation(false);
		}, 2);
	
		$eventManager->attach('eventOne', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 02</h3>';
		},1000);
	
		$eventManager->attach('eventOne', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 03</h3>';
		},1);
		
		$eventManager->trigger('eventOne');

		return $this->response;
	}

	// detach
	public function index08Action(){
		$eventManager	= new EventManager();
	
		$listener01 = $eventManager->attach('eventOne', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 01</h3>';
		});
	
		$listener02 = $eventManager->attach('eventOne', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 02</h3>';
		});
	
		$listener03 = $eventManager->attach('eventOne', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 03</h3>';
		});
		
		$listener04 = $eventManager->attach(array('eventTwo','eventOne'), function($e){
			echo '<h3 style="color:red;font-weight:bold">eventTwo - 01</h3>';
		});
	
// 		$eventManager->detach($listener01);
		$eventManager->detach($listener03);
		$eventManager->trigger('eventOne');
	
		return $this->response;
	}

	// getIdentifiers setIdentifiers
	public function index09Action(){
		$eventManager	= new EventManager();
	
		$eventManager->attach('eventOne', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 01</h3>';
		});
	
		$eventManager->setIdentifiers(array('emOne','emTwo'));
		$ids = $eventManager->getIdentifiers();
		echo '<pre style="color:red;font-weight:bold">';
		print_r($ids);
		echo '</pre>';
		$eventManager->trigger('eventOne');
	
		return $this->response;
	}
	
	// SharedEventManager
	public function index10Action(){
		$eventManagerOne	= new EventManager();
	
		$eventManagerOne->attach('eventOne', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 01</h3>';
		});
		
		$eventManagerOne->attach('eventTwo', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventTwo - 01</h3>';
		});
		
		$eventManagerOne->attach('eventTwo', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventTwo - 02</h3>';
		});
			
		//$eventManagerOne->trigger('eventOne');
		//$eventManagerOne->trigger('eventTwo');
	
		$eventManagerTwo	= new EventManager();
		$eventManagerTwo->trigger('eventOne');
		$eventManagerTwo->trigger('eventTwo');
		
		return $this->response;
	}
	
	// SharedEventManager
	public function index11Action(){
		$shareEventManager	= new SharedEventManager();
		$shareEventManager->attach('shareEm1', 'eventOne', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventOne - 01</h3>';
		});
		$shareEventManager->attach('shareEm1', 'eventTwo', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventTwo - 01</h3>';
		});
		$shareEventManager->attach('shareEm2', 'eventThree', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventThree - 01</h3>';
		});
		
		$shareEventManager->attach(array('shareEm3','shareEm4'), 'eventNew', function($e){
			echo '<h3 style="color:red;font-weight:bold">eventNew</h3>';
		});

		$eventManager	= new EventManager(array('shareEm1','shareEm2','shareEm3'));
		//$eventManager->setSharedManager($shareEventManager);
		$eventManager->trigger('eventOne');
		$eventManager->trigger('eventTwo');
		$eventManager->trigger('eventThree');
		$eventManager->trigger('eventNew');
		
		echo '<hr />';
		$eventManagerTwo	= new EventManager(array('shareEm4','shareEm1'));
		//$eventManagerTwo->setSharedManager($shareEventManager);
		$eventManagerTwo->trigger('eventOne');
		$eventManagerTwo->trigger('eventNew');

		return $this->response;
	}
	
	// Create Class EventManager
	public function index12Action(){
		
		$fooObj	= new \ZendVN\Event\Foo();
		
		$fooObj->getEventManager()->attach('showInfo', function($e){
			echo '<h3 style="color:red;font-weight:bold">Event showInfo - Do 01</h3>';
			$params	= $e->getParams();
			echo '<pre style="color:red;font-weight:bold">';
			print_r($params);
			echo '</pre>';
		});
		
		$fooObj->getEventManager()->attach('showInfo', function($e){
			echo '<h3 style="color:red;font-weight:bold">Event showInfo - Do 02</h3>';
			$params	= $e->getParams();
			echo '<pre style="color:red;font-weight:bold">';
			print_r($params);
			echo '</pre>';
		});
		
		$fooObj->showInfo('john smith', '23/02/1989');
		
		return $this->response;
	}
	
	public function index13Action(){
		$fooObj	= new \ZendVN\Event\Foo();
		
		$fooObj->showInfo('john smith', '23/02/1989');

		return $this->response;
	}
	
	public function index14Action(){
		$fooObj	= new \ZendVN\Event\Foo();
		
		$fooObj->showInfo('john smith', '23/02/1989');
 
		return $this->response;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	



}
