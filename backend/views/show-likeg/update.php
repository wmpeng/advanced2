<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShowLikeg */

$this->title = 'Update Show Likeg: ' . ' ' . $model->stuId;
$this->params['breadcrumbs'][] = ['label' => 'Show Likegs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stuId, 'url' => ['view', 'stuId' => $model->stuId, 'gameId' => $model->gameId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="show-likeg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
