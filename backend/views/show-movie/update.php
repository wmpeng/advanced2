<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShowMovie */

$this->title = 'Update Show Movie: ' . ' ' . $model->movieId;
$this->params['breadcrumbs'][] = ['label' => 'Show Movies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->movieId, 'url' => ['view', 'id' => $model->movieId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="show-movie-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
