<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InfoTeam */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="info-team-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teamName')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'memberNum')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
