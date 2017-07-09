<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Poem */

$this->title = $model->poem_id;
$this->params['breadcrumbs'][] = ['label' => 'Poems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poem-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->poem_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->poem_id], [
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
            'poem_id',
            'poem_era',
            'poem_poet',
            'poem_content:ntext',
            'username',
            'sharetime',
        ],
    ]) ?>

</div>
