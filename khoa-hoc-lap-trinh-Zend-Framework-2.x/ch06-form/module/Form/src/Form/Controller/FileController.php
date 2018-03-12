<?php

namespace Form\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FileController extends AbstractActionController
{
	
	// Upload 1 tập tin
    public function index01Action(){
    	
    	if($this->getRequest()->isPost()){
    		$upload	= new \Zend\File\Transfer\Adapter\Http();
    		
    		$fileInfo	= $upload->getFileInfo();
    		$fileSize	= $upload->getFileSize();
    		$fileName	= $upload->getFileName();
    		
    		$upload->setDestination(FILES_PATH . '/upload');
    		$upload->receive();
    	}
    }
    
    // Upload nhiều tập tin
    public function index02Action(){
    	 
    	if($this->getRequest()->isPost()){
    		$upload	= new \Zend\File\Transfer\Adapter\Http();
    
    		$fileInfo	= $upload->getFileInfo('my_picture');
    		$fileSize	= $upload->getFileSize('my_picture');
    		$fileName	= $upload->getFileName('my_picture');
    
    		$upload->setDestination(FILES_PATH . '/upload/image', 'my_picture');
    		$upload->setDestination(FILES_PATH . '/upload/zip', 'my_zip');
    		
    		$upload->receive('my_picture');
    		$upload->receive('my_zip');
    		
    	}
    }
    
    // Kiểm tra điều kiện Upload nhiều tập tin
    public function index03Action(){
    
    	if($this->getRequest()->isPost()){
    		$upload	= new \Zend\File\Transfer\Adapter\Http();
    
    		$upload->setDestination(FILES_PATH . '/upload/image', 'my_picture');
    		$upload->setDestination(FILES_PATH . '/upload/zip', 'my_zip');
    		
    		$upload->addValidator('Extension', true, array('png',
					'jpg' 
			), 'my_picture' );
			$upload->addValidator ( 'Size', false, array (
					'min' => '100kb',
					'max' => '6mb' 
			), 'my_zip' );
			
			$fileName = $upload->getFileName ();

    		
    		foreach($fileName as $key => $value){
    			if($upload->isValid($key)){
    				if($upload->isValid($key)){
    					$upload->receive($key);
    				}else{
    					$messages	= $upload->getMessages();
    					echo '<pre style="color:red;">';
    					print_r($messages);
    					echo '</pre>';
    				}    	
    			}
    		}
    	}
    }

    // Filter
    public function index04Action(){
    
    	if($this->getRequest()->isPost()){
    		$upload	= new \Zend\File\Transfer\Adapter\Http();
    
    		$upload->addFilter('Rename',array(
    				'target'	=> FILES_PATH . '/upload/image/myfile.jpg',
    				'overwrite'	=> true,
    				'randomize'	=> true,
    		), 'my_picture');
    		
    		
    		$upload->receive('my_picture');
    	}
    }
	
    // Class Upload
    public function index05Action(){
    	if($this->getRequest()->isPost()){
    		$upload = new \ZendVN\File\Upload();
    		
    		$upload->addValidator('Extension', true, array('png','jpg'), 'my_picture' );
    		$upload->addValidator ( 'Size', false, array ('min' => '100kb','max' => '6mb'), 'my_picture' );
    		
    		if($upload->isValid('my_picture')){
    			echo $upload->uploadFile('my_picture', FILES_PATH . '/upload/image/', array('task' => 'rename'), 'zend2_');
    		}else{
    			$messages	= $upload->getMessages();
    			echo '<pre style="color:red;">';
    			print_r($messages);
    			echo '</pre>';
    		}
    		
    	}
    }

    // Class Upload
    public function index06Action(){
    	if($this->getRequest()->isPost()){
    		$upload = new \ZendVN\File\Upload();
    
    		$upload->addValidator('Extension', true, array('png','jpg'), 'my_picture' );
    		$upload->addValidator ( 'Size', false, array ('min' => '100kb','max' => '6mb'), 'my_zip' );
    
    		$fileName = $upload->getFileName();

    		
    		foreach($fileName as $key => $value){
    			if($upload->isValid($key)){
    				if($upload->isValid($key)){
    					$upload->uploadFile($key, FILES_PATH . '/upload/', array('task' => 'rename'), 'abc123_');
    				}else{
    					$messages	= $upload->getMessages();
    					echo '<pre style="color:red;">';
    					print_r($messages);
    					echo '</pre>';
    				}    	
    			}
    		}
    
    	}
    }
}
