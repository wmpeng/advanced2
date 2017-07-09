<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HappySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Happies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="happy-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Happy', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'happy_id',
            'happy_name',
            'happy_content:ntext',
            'username',
            'sharetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
