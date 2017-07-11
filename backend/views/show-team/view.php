<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShowTeam */

$this->title = $model->teamId;
$this->params['breadcrumbs'][] = ['label' => 'Show Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-team-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->teamId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->teamId], [
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
            'teamId',
            'picture:ntext',
            'slogan:ntext',
        ],
    ]) ?>

</div>
