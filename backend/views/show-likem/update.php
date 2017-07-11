<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShowLikem */

$this->title = 'Update Show Likem: ' . ' ' . $model->stuId;
$this->params['breadcrumbs'][] = ['label' => 'Show Likems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stuId, 'url' => ['view', 'stuId' => $model->stuId, 'movieId' => $model->movieId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="show-likem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
