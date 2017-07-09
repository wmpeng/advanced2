<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Language */

$this->title = 'Update Language: ' . $model->language_id;
$this->params['breadcrumbs'][] = ['label' => 'Languages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->language_id, 'url' => ['view', 'id' => $model->language_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="language-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
