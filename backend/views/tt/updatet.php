<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\ShowGame */

// $this->title = 'Update Show Game: ' . ' ' . $model->gameId;
// $this->params['breadcrumbs'][] = ['label' => 'Show Games', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->gameId, 'url' => ['view', 'id' => $model->gameId]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="team-update">

	<h1><?= Html::encode($this->title) ?></h1>


	<div class="team-form">

		<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($modelit, 'teamName')->textarea(['rows' => 1]) ?>
		<?= $form->field($modelt, 'picture')->textarea(['rows' => 1]) ?>
		<?= $form->field($modelt, 'slogan')->textarea(['rows' => 6]) ?>

		<div class="form-group">
			<?= Html::submitButton($modelit->isNewRecord ? 'Create' : 'Update', ['class' => $modelit->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

		<?php ActiveForm::end(); ?>

	</div>


</div>
