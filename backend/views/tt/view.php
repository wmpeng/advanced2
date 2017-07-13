<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShowGame */

$this->title = $model->gameId;
$this->params['breadcrumbs'][] = ['label' => 'Show Games', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-game-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->gameId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->gameId], [
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
            'gameId',
            'gameName:ntext',
            'gameType:ntext',
        ],
    ]) ?>

</div>
