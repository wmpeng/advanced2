<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShowGame */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(); ?>

<table border="0">
	<!-- student info -->
	<tr>
		<td><?= $form->field($modelis, 'stuName')->textarea(['rows' => 1]) ?></td>
		<td><?= $form->field($modelis, 'stuGender')->textInput() ?></td>
		<td><?= $form->field($modelis, 'stuGrade')->textInput() ?></td>
		<td><?= $form->field($modelis, 'teamId')->textInput() ?></td>
	</tr>
	<!-- student show -->
	<tr>
		<td><?= $form->field($models, 'picture')->textarea(['rows' => 1]) ?></td>
		<td><?= $form->field($models, 'motto')->textarea(['rows' => 1]) ?></td>
	</tr>
	<!-- book -->
	<tr>
		<td><?= $form->field($modelb, 'bookName')->textarea(['rows' => 1]) ?></td>
		<td><?= $form->field($modelb, 'bookAuthor')->textarea(['rows' => 1]) ?></td>
	</tr>
	<!-- game -->
	<tr>
		<td><?= $form->field($modelg, 'gameName')->textarea(['rows' => 1]) ?></td>
		<td><?= $form->field($modelg, 'gameType')->textarea(['rows' => 1]) ?></td>
	</tr>
	<!-- movie -->
	<tr>
		<td><?= $form->field($modelm, 'movieName')->textarea(['rows' => 1]) ?></td>
		<td><?= $form->field($modelm, 'movieDirector')->textarea(['rows' => 1]) ?></td>
		<td><?= $form->field($modelm, 'movieType')->textarea(['rows' => 1]) ?></td>
	</tr>
</table>
<div class="form-group">
	<?= Html::submitButton($modelis->isNewRecord ? 'Create' : 'Update', ['class' => $modelis->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>