<?php
class Upload {
	
	// Biến lưu trữ tên tập tin
	private $_fileName;
	
	// Biến lưu trữ kích thước tập tin
	private $_fileSize;
	
	// Biến lưu trữ phần mở rộng tập tin
	private $_fileExtension;
	
	// Biến lưu trữ đường dẫn thư mục tạm
	private $_fileTmp;
	
	// Biến lưu trữ lỗi
	private $_errors;
	
	// Biến lưu trữ đường dẫn uploa
	private $_uploadDir;
	
	// Phương thức khởi tạo
	public function __construct($fileName){
		$fileInfo 				= $_FILES[$fileName];
		$this->_fileName 		= $fileInfo['name'];
		$this->_fileSize 		= $fileInfo['size'];
		$this->_fileExtension 	= $this->getFileExtension();
		$this->_fileTmp 		= $fileInfo['tmp_name'];
	}
	
	// Phương thức lấy phần mở rộng
	public function getFileExtension(){
		$ext = pathinfo($this->_fileName, PATHINFO_EXTENSION);
		return $ext;
	}
	
	// Phương thức thiết lập phần mở rộng
	public function setFileExtension($arrExtension){
		if(in_array(strtolower($this->_fileExtension), $arrExtension) == false){
			$this->_errors[] = 'Phan mo rong khong phu hop';
		}
	}
	
	// Phương thức thiết lập kích thước tối thiểu và kích thước tối đa được cho phép
	public function setFileSize($min, $max){
		if($this->_fileSize < $min || $this->_fileSize > $max){
			$this->_errors[] = 'Kich thuoc khong phu hop';
		}
	}
	
	// Phương thức thiết lập đường dẫn đến foleder upload
	public function setUploadDir($value){
		if(file_exists($value)) {
			$this->_uploadDir = $value;
		}else{
			$this->_errors[] = 'Thu muc khong hop le';
		}
	}
	
	// Phương thức kiểm tra điều kiện upload của tập tin
	public function isVail(){
		$flag = false;
		if(count($this->_errors) > 0) {
			$flag = true;
		}
		return $flag;
	}
	
	// Phương thức upload tập tin
	public function upload($rename = true){
		if($rename==true){
			$fileName 	 = $this->randomString(6);
			$destination = $this->_uploadDir . $fileName;
		}else{
			$destination = $this->_uploadDir . $this->_fileName;
		}
		@move_uploaded_file($this->_fileTmp, $destination);
	}
	
	// Phương thức hiển thị lỗi
	public function showError(){
		echo '<pre>';
		print_r($this->_errors);
		echo '</pre>';
	}
	
	// Phương thức random
	private function randomString($length = 5){
	
		$arrCharacter = array_merge(range('A','Z'), range('a','z'), range(0,9));
		$arrCharacter = implode($arrCharacter, '');
		$arrCharacter = str_shuffle($arrCharacter);
	
		$result		= substr($arrCharacter, 0, $length) . '.' . $this->_fileExtension;
		return $result;
	}
}