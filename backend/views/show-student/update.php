<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShowStudent */

$this->title = 'Update Show Student: ' . ' ' . $model->stuId;
$this->params['breadcrumbs'][] = ['label' => 'Show Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stuId, 'url' => ['view', 'id' => $model->stuId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="show-student-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
