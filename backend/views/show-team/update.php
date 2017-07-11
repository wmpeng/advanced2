<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShowTeam */

$this->title = 'Update Show Team: ' . ' ' . $model->teamId;
$this->params['breadcrumbs'][] = ['label' => 'Show Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->teamId, 'url' => ['view', 'id' => $model->teamId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="show-team-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
