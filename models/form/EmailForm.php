<?php
namespace tejrajs\setting\models\form;

use Yii;
use yii\base\Model;
use tejrajs\setting\models\Setting;

class EmailForm extends Model{
	
	public $host;
	public $username;
	public $password;
	public $port;
	
	public $_model;
	
	public function init(){
		$this->host = $this->getValModel('email_host');
		$this->username = $this->getValModel('email_username');
		$this->password = $this->getValModel('email_password');
		$this->port = $this->getValModel('email_port');
	}
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
				//required
				[['host', 'username','password','port'], 'required'],
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
				'host' => 'Email Host',
				'username' => 'Email User Name',
				'password' => 'Email Password',
				'port' => 'Email Port'
		];
	}
	
	public function getValModel($name)
	{
		$_model = Setting::findOne(['category'=>'email','name'=>$name]);
		return !empty($_model)?$_model->value:null;
	}
	public function getModel($name)
	{
		$_model = Setting::findOne(['category'=>'email','name'=>$name]);
		return $_model;
	}
	/**
	 * Setting.
	 *
	 * @return true|null the saved model or null if saving fails
	 */
	public function update()
	{
		if ($this->validate()) {
			if($this->host){
				$hostModel = $this->getModel('email_host');
				$hostModel->value = $this->host;
				$hostModel->save();
			}
			if($this->username){
				$hostModel = $this->getModel('email_username');
				$hostModel->value = $this->username;
				$hostModel->save();
			}
			if($this->password){
				$hostModel = $this->getModel('email_password');
				$hostModel->value = $this->password;
				$hostModel->save();
			}
			if($this->port){
				$hostModel = $this->getModel('email_port');
				$hostModel->value = $this->port;
				$hostModel->save();
			}
		}
		return null;
	}
}