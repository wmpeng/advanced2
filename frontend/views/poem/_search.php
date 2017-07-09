<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PoemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="poem-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'poem_id') ?>

    <?= $form->field($model, 'poem_era') ?>

    <?= $form->field($model, 'poem_poet') ?>

    <?= $form->field($model, 'poem_content') ?>

    <?= $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'sharetime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
