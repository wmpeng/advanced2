<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MsgMessage */

$this->title = 'Create Msg Message';
$this->params['breadcrumbs'][] = ['label' => 'Msg Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="msg-message-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
