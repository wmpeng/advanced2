<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\InfoStudent */

$this->title = 'Create Info Student';
$this->params['breadcrumbs'][] = ['label' => 'Info Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-student-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
