<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShowGame */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(); ?>


<?= $form->field($modelit, 'teamName')->textarea(['rows' => 1]) ?>
<?= $form->field($modelt, 'picture')->textarea(['rows' => 1]) ?>
<?= $form->field($modelt, 'slogan')->textarea(['rows' => 6]) ?>
<div class="form-group">
	<?= Html::submitButton($modelit->isNewRecord ? 'Create' : 'Update', ['class' => $modelit->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>