<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Food */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="food-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'food_dish')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'food_method')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'food_material')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('分享', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
