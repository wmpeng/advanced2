<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\HappySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="happy-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'happy_id') ?>

    <?= $form->field($model, 'happy_name') ?>

    <?= $form->field($model, 'happy_content') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'sharetime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
