<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShowGame */

$this->title = $modelit->teamId;
$this->params['breadcrumbs'][] = ['label' => 'Show Team', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Update', ['update', 'id' => $modelit->teamId], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Delete', ['delete', 'id' => $modelit->teamId], [
			'class' => 'btn btn-danger',
			'data' => [
			'confirm' => 'Are you sure you want to delete this item?',
			'method' => 'post',
			],
			]) 
		?>
	</p>

	<?= DetailView::widget([
		'model' => $modelit,
		'attributes' => ['teamId','teamName:ntext','memberNum',],
		])
	?>
	<?= DetailView::widget([
		'model' => $modelt,
		'attributes' => ['picture:ntext','slogan:ntext',],
		]) 
	?>
</div>
