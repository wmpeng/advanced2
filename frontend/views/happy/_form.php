<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Happy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="happy-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'happy_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'happy_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sharetime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
