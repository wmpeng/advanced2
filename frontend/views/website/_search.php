<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\WebsiteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="website-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'website_id') ?>

    <?= $form->field($model, 'website_address') ?>

    <?= $form->field($model, 'website_type') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'sharetime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
