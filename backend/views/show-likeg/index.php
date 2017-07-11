<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShowLikegSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Show Likegs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-likeg-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Show Likeg', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'stuId',
            'gameId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
