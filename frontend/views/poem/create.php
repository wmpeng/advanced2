<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Poem */

$this->title = 'Create Poem';
$this->params['breadcrumbs'][] = ['label' => 'Poems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
