<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InfoStudent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="info-student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stuName')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stuGender')->textInput() ?>

    <?= $form->field($model, 'stuGrade')->textInput() ?>

    <?= $form->field($model, 'teamId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
