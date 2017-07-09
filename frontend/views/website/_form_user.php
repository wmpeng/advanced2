<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Website */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="website-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'website_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website_type')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('分享', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
