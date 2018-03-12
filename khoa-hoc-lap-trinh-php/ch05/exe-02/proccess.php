<?php
	require_once 'Upload.class.php';
	$upload = new Upload('file-upload');
	
	$upload->setFileExtension(array('zip'));
	$upload->setFileSize(102400, 5242880);
	$upload->setUploadDir('./images/');
	
	if($upload->isVail()==false){
		$upload->upload(true);
	}else{
		$upload->showError();
	}
?>