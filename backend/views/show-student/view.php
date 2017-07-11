<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShowStudent */

$this->title = $model->stuId;
$this->params['breadcrumbs'][] = ['label' => 'Show Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->stuId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->stuId], [
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
            'picture:ntext',
            'motto:ntext',
        ],
    ]) ?>

</div>
