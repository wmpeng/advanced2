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
		<?= Html::a('Update', ['update', 'id' => $modelis->stuId], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Delete', ['delete', 'id' => $modelis->stuId], [
			'class' => 'btn btn-danger',
			'data' => [
			'confirm' => 'Are you sure you want to delete this item?',
			'method' => 'post',
			],
			]) 
		?>
	</p>

	<?= DetailView::widget([
		'model' => $modelis,
		'attributes' => ['stuId','stuName:ntext',],
		])
	?>
	<?= DetailView::widget([
		'model' => $models,
		'attributes' => ['picture:ntext','motto:ntext',],
		]) 
	?>
	<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'movieName:ntext',
            'movieDirector:ntext',
            'movieType:ntext',
        ],
    ]) ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'gameName:ntext',
            'gameType:ntext',
        ],
    ]) ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'bookId',
            'bookName:ntext',
            'bookAuthor:ntext',
        ],
    ]) ?>
</div>
