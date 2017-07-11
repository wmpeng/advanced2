<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShowLikeb */

$this->title = $model->stuId;
$this->params['breadcrumbs'][] = ['label' => 'Show Likebs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-likeb-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'stuId' => $model->stuId, 'bookId' => $model->bookId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'stuId' => $model->stuId, 'bookId' => $model->bookId], [
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
            'bookId',
        ],
    ]) ?>

</div>
