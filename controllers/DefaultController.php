<?php

namespace tejrajs\setting\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;

class DefaultController extends Controller
{
	public function behaviors()
	{
		return [
				'verbs' => [
						'class' => VerbFilter::className(),
						'actions' => [
								'logout' => ['post'],
						],
				],
		];
	}
    public function actionIndex()
    {
    	
        return $this->render('index');
    }
    public function actionEmail()
    {
    	$send = Yii::$app->mail->compose()
		     ->setFrom('tej.raj@bentraytech.com')
		     ->setTo('helloteju96@gmail.com')
		     ->setSubject('Email sent from Yii2-Swiftmailer')
		     ->send();
    	if($send){ echo 'Send';}else{ echo 'Failed';}
    }
}
