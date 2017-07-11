<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShowLikeb */

$this->title = 'Update Show Likeb: ' . ' ' . $model->stuId;
$this->params['breadcrumbs'][] = ['label' => 'Show Likebs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stuId, 'url' => ['view', 'stuId' => $model->stuId, 'bookId' => $model->bookId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="show-likeb-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
