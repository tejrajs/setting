<?php
namespace tejrajs\setting\components;


use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use tejrajs\setting\models\Setting;

class CMSSetting extends Component{
	public function init() {
		
	}
	public static function getAllEmailSetting() {
		$EmailConfig = Setting::findAll(['category'=>'email']);
		return $EmailConfig;
	}
	public static function getEmailSetting($name){
		$EmailConfig = Setting::findOne(['category'=>'email','name'=>$name]);
		return $EmailConfig->value;
	}
}