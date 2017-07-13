<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\ShowGame */

$this->title = 'Update Show Game: ' . ' ' . $model->gameId;
$this->params['breadcrumbs'][] = ['label' => 'Show Games', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gameId, 'url' => ['view', 'id' => $model->gameId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="show-game-update">

	<h1><?= Html::encode($this->title) ?></h1>


	<div class="show-game-form">

		<?php $form = ActiveForm::begin(); 
		?>

		<?= $form->field($modelg, 'gameName')->textarea(['rows' => 6]) ?>
		<?= $form->field($modelg, 'gameType')->textarea(['rows' => 6]) ?>
		<?= $form->field($modelm, 'movieName')->textarea(['rows' => 6]) ?>
		<?= $form->field($modelm, 'movieDirector')->textarea(['rows' => 6]) ?>
		<?= $form->field($modelm, 'movieType')->textarea(['rows' => 6]) ?>

		<div class="form-group">
			<?= Html::submitButton($modelg->isNewRecord ? 'Create' : 'Update', ['class' => $modelg->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

		<?php ActiveForm::end(); ?>

	</div>


</div>
