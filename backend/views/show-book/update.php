<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShowBook */

$this->title = 'Update Show Book: ' . ' ' . $model->bookId;
$this->params['breadcrumbs'][] = ['label' => 'Show Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bookId, 'url' => ['view', 'id' => $model->bookId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="show-book-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
