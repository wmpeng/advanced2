<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Food */

$this->title = 'Update Food: ' . $model->food_id;
$this->params['breadcrumbs'][] = ['label' => 'Foods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->food_id, 'url' => ['view', 'id' => $model->food_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="food-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
