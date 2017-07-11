<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShowStudent */

$this->title = 'Create Show Student';
$this->params['breadcrumbs'][] = ['label' => 'Show Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-student-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
