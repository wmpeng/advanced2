<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShowGame */

$this->title = 'Update Show Game: ' . ' ' . $model->gameId;
$this->params['breadcrumbs'][] = ['label' => 'Show Games', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gameId, 'url' => ['view', 'id' => $model->gameId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="show-game-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
