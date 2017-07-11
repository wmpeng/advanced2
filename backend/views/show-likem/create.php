<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShowLikem */

$this->title = 'Create Show Likem';
$this->params['breadcrumbs'][] = ['label' => 'Show Likems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-likem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
