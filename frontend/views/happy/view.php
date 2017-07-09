<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Happy */

$this->title = $model->happy_id;
$this->params['breadcrumbs'][] = ['label' => 'Happies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="happy-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->happy_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->happy_id], [
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
            'happy_id',
            'happy_name',
            'happy_content:ntext',
            'username',
            'sharetime',
        ],
    ]) ?>

</div>
