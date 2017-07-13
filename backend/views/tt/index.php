<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShowMovieSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Show Movies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-movie-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Show Movie', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'movieId',
			'movieName:ntext',
			'movieDirector:ntext',
			'movieType:ntext',

			['class' => 'yii\grid\ActionColumn'],
		],
	]);
	?>

</div>
