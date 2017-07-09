<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Test', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'test_id',
            'test_type',
            'test_content:ntext',
            'username',
            'sharetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
