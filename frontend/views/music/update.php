<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Music */

$this->title = 'Update Music: ' . $model->music_id;
$this->params['breadcrumbs'][] = ['label' => 'Musics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->music_id, 'url' => ['view', 'id' => $model->music_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="music-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
