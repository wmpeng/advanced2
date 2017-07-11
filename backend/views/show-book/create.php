<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShowBook */

$this->title = 'Create Show Book';
$this->params['breadcrumbs'][] = ['label' => 'Show Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
