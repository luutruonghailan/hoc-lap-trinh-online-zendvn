<?php
namespace ZendVN\File;

class Upload extends \Zend\File\Transfer\Adapter\Http{
	
	public function uploadFile($fileInput, $uploadDirectory, $options = null, $prefix = 'zendvn_'){
		if($options == null) {
			$this->setDestination($uploadDirectory,$fileInput);
			$fileName	= pathinfo($this->getFileName($fileInput), PATHINFO_BASENAME);
			
			
    		$this->receive($fileInput);
		}
		
		if($options['task'] == 'rename') {
			$fileExtension	= pathinfo($this->getFileName($fileInput), PATHINFO_EXTENSION);
			$fileName		= $prefix . $this->randomString(8) . '.' . $fileExtension;
			
			$this->addFilter('Rename',array(
					'target'	=> $uploadDirectory . $fileName,
					'overwrite'	=> true,
			), $fileInput);
			
			$this->receive($fileInput);
		}
		
		
		
		return $fileName;
	}
	
	private function randomString($length = 5){
	
		$arrCharacter = array_merge(range('a','z'), range('A','Z'), range(0,9));
		$arrCharacter = implode($arrCharacter, '');
		$arrCharacter = str_shuffle($arrCharacter);
	
		$result		= substr($arrCharacter, 0, $length);
		return $result;
	}
}