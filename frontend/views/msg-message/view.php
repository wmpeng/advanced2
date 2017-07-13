<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\MsgMessage */

$this->title = $model->msgId;
$this->params['breadcrumbs'][] = ['label' => 'Msg Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="msg-message-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->msgId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->msgId], [
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
            'msgId',
            'msgTime',
            'msgText:ntext',
            'msgWriter:ntext',
        ],
    ]) ?>

</div>
