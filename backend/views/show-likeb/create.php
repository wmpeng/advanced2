<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShowLikeb */

$this->title = 'Create Show Likeb';
$this->params['breadcrumbs'][] = ['label' => 'Show Likebs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-likeb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
