<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Movie */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'movie_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movie_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movie_country')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('分享', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
