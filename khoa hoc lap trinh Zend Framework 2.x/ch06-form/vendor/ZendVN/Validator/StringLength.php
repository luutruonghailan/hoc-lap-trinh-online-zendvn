<?php
namespace ZendVN\Validator;

class StringLength extends \Zend\Validator\StringLength {
	protected $messageTemplates = array(
			self::INVALID   => 'Dữ liệu \'%value%\' không phù hợp',
			self::TOO_SHORT => 'Chiều dài của chuỗi \'%value%\' phải lớn hơn %min% ký tự',
			self::TOO_LONG  => 'Chiều dài của chuỗi \'%value%\' phải nhỏ hơn %max% ký tự',
	);
}