<?php
use yii\helpers\Html;
use kartik\form\ActiveForm;
?>

<h3>Configuration Email Setting</h3>
<hr>
<?php $form = ActiveForm::begin([
	'type' => ActiveForm::TYPE_HORIZONTAL,
	'action' => ['default/save-email']
]); ?>
	<?= $form->field($model, 'host') ?>
    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'port') ?>
    <div class="form-group">
    	<?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>
<?php ActiveForm::end(); ?>