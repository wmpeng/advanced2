<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\FoodSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="food-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'food_id') ?>

    <?= $form->field($model, 'food_method') ?>

    <?= $form->field($model, 'food_dish') ?>

    <?= $form->field($model, 'food_material') ?>

    <?= $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'sharetime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
