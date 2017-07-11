<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShowMovie */

$this->title = $model->movieId;
$this->params['breadcrumbs'][] = ['label' => 'Show Movies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-movie-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->movieId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->movieId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'movieId',
            'movieName:ntext',
            'movieDirector:ntext',
            'movieType:ntext',
        ],
    ]) ?>

</div>
