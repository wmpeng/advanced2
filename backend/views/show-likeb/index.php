<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShowLikebSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Show Likebs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-likeb-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Show Likeb', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'stuId',
            'bookId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
