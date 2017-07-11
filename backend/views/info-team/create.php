<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\InfoTeam */

$this->title = 'Create Info Team';
$this->params['breadcrumbs'][] = ['label' => 'Info Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-team-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
