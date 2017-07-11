<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShowLikeg */

$this->title = $model->stuId;
$this->params['breadcrumbs'][] = ['label' => 'Show Likegs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-likeg-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'stuId' => $model->stuId, 'gameId' => $model->gameId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'stuId' => $model->stuId, 'gameId' => $model->gameId], [
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
            'stuId',
            'gameId',
        ],
    ]) ?>

</div>