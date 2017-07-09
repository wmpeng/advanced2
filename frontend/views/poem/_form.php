<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Poem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="poem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'poem_era')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'poem_poet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'poem_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sharetime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
