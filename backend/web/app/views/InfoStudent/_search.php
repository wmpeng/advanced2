<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InfoStudentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="info-student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'stuId') ?>

    <?= $form->field($model, 'stuName') ?>

    <?= $form->field($model, 'stuGender') ?>

    <?= $form->field($model, 'stuGrade') ?>

    <?= $form->field($model, 'teamId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
