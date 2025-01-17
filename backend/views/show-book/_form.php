<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShowBook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="show-book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bookName')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'bookAuthor')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
