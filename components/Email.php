<?php
namespace tejrajs\setting\components;


use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\swiftmailer\Mailer;
use tejrajs\setting\components\CMSSetting;

class Email extends Mailer{
	public function init(){
		$this->setTransport([
			'class' => 'Swift_SmtpTransport',
			'host' => CMSSetting::getEmailSetting('email_host'),
			'username' => CMSSetting::getEmailSetting('email_username'),
			'password' => CMSSetting::getEmailSetting('email_password'),
			'port' => CMSSetting::getEmailSetting('email_port'),
			'encryption' => 'tls',
		]);
	}
		
}