<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InfoStudent */

$this->title = 'Update Info Student: ' . ' ' . $model->stuId;
$this->params['breadcrumbs'][] = ['label' => 'Info Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stuId, 'url' => ['view', 'id' => $model->stuId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="info-student-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
