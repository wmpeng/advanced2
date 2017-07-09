<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PoemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Poems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poem-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Poem', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'poem_id',
            'poem_era',
            'poem_poet',
            'poem_content:ntext',
            'username',
            // 'sharetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
