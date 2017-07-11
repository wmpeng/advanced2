<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InfoStudent */

$this->title = $model->stuId;
$this->params['breadcrumbs'][] = ['label' => 'Info Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-student-view">

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
            'stuName:ntext',
            'stuGender',
            'stuGrade',
            'teamId',
        ],
    ]) ?>

</div>
