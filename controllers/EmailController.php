<?php

namespace tejrajs\setting\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use tejrajs\setting\models\form\EmailForm;

class EmailController extends Controller
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
    	
    	if ($model->load(Yii::$app->request->post()) && $model->update()) {
    		return $this->redirect(['index']);
    	} else {
    		return $this->render('index',[
        		'model' => $model
        		
        	]);
    	}
        
    }
}
