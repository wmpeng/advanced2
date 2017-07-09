<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MovieSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'movie_id') ?>

    <?= $form->field($model, 'movie_name') ?>

    <?= $form->field($model, 'movie_type') ?>

    <?= $form->field($model, 'movie_country') ?>

    <?= $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'sharetime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
