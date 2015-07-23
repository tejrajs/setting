<?php

namespace tejrajs\setting\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use tejrajs\setting\models\form\EmailForm;

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
    	$model = new EmailForm();
        return $this->render('index',[
        		'model' => $model
        ]);
    }
    public function actionSendEmail()
    {
    	$send = Yii::$app->mail->compose()
		     ->setFrom('tej.raj@bentraytech.com')
		     ->setTo('helloteju96@gmail.com')
		     ->setSubject('Email sent from Yii2-Swiftmailer')
		     ->send();
    	if($send){ echo 'Send';}else{ echo 'Failed';}
    }
    public function actionSaveEmail()
    {
    	$model = new EmailForm();
    	if ($model->load(Yii::$app->request->post()) && $model->update()) {
    		return $this->redirect(['default/index']);
    	}     
    }
}
