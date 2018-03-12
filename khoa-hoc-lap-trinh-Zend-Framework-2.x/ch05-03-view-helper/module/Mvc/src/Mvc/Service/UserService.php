<?php
namespace Mvc\Service;
use Mvc\Service\FacebookService;
use Mvc\Service\MailService;

class UserService {
	protected $facebook;
	protected $mail;
	
	public function __construct(FacebookService $fbService, MailService $mailService){
		$this->facebook	= $fbService;
		$this->mail		= $mailService;
	}
	
}