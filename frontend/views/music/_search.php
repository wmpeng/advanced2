<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MusicSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="music-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'music_id') ?>

    <?= $form->field($model, 'music_name') ?>

    <?= $form->field($model, 'music_type') ?>

    <?= $form->field($model, 'music_player') ?>

    <?= $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'sharetime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
