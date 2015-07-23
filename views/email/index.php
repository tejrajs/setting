<?php
use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Email Setting';
$this->params['breadcrumbs'][] = ['label' => 'Setting', 'url' => ['default/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="setting-default-index">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#home">Configuration</a></li>
		<!-- <li><a data-toggle="tab" href="#menu1">Menu 1</a></li> -->
		<!-- <li><a data-toggle="tab" href="#menu2">Menu 2</a></li> -->
	</ul>

	<div class="tab-content">
		<div id="home" class="tab-pane fade in active">
			<h3>Configuration Email Setting</h3>
			<?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL,]); ?>
				<?= $form->field($model, 'host') ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'port') ?>
                <div class="form-group">
                    <?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
		</div>
		<!-- <div id="menu1" class="tab-pane fade">
			<h3>Menu 1</h3>
			<p>Some content in menu 1.</p>
		</div> -->
		<!-- <div id="menu2" class="tab-pane fade">
			<h3>Menu 2</h3>
			<p>Some content in menu 2.</p>
		</div> -->
	</div>
</div>
