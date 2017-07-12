<?php
/**
 * Team:wwwg NKU
 * Coding by wangwenhao 1511214, 20170712
 * This is the main controller
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use datepicker\DatePicker; 

/* @var $this yii\web\View */
/* @var $model frontend\models\MsgMessage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="msg-message-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'msgTime')->textInput() ?> --> 
    <?php echo $showtime=date("Y-m-d H:i:s");?>
    
    <?= $form->field($model, 'msgText')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'msgWriter')->textarea(['rows' => 1]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
