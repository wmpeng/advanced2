<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Food */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="food-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'food_method')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'food_dish')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'food_material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sharetime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
