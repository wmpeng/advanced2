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

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sharetime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
