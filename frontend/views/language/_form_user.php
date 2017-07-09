<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Language */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="language-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'language_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'language_advantage')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('分享', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
