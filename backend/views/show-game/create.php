<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShowGame */

$this->title = 'Create Show Game';
$this->params['breadcrumbs'][] = ['label' => 'Show Games', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-game-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
