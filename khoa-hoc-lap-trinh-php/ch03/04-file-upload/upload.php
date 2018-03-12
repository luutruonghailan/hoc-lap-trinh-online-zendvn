<?php
	
	function randomString($length = 5){
	
		$arrCharacter = array_merge(range('A','Z'), range('a','z'), range(0,9));
		$arrCharacter = implode($arrCharacter, '');
		$arrCharacter = str_shuffle($arrCharacter);
	
		$result		= substr($arrCharacter, 0, $length);
		return $result;
	}

	$fileUpload = $_FILES['file-upload'];
	
	if($fileUpload['name'] != null){
		$filename		= $fileUpload['tmp_name'];
		$random			= randomString(6);
		$destination	= './files/' . $random . $fileUpload['name'];
		//move_uploaded_file($filename, $destination);
		if(copy($filename, $destination)){
			echo 'Success';
		};
	}