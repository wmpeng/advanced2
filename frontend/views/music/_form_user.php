<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Music */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="music-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'music_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'music_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'music_player')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('分享', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
