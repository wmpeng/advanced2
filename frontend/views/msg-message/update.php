<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\MsgMessage */

$this->title = 'Update Msg Message: ' . ' ' . $model->msgId;
$this->params['breadcrumbs'][] = ['label' => 'Msg Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->msgId, 'url' => ['view', 'id' => $model->msgId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="msg-message-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
