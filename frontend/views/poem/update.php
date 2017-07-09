<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Poem */

$this->title = 'Update Poem: ' . $model->poem_id;
$this->params['breadcrumbs'][] = ['label' => 'Poems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->poem_id, 'url' => ['view', 'id' => $model->poem_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="poem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
