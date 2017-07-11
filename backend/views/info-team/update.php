<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InfoTeam */

$this->title = 'Update Info Team: ' . ' ' . $model->teamId;
$this->params['breadcrumbs'][] = ['label' => 'Info Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->teamId, 'url' => ['view', 'id' => $model->teamId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="info-team-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
