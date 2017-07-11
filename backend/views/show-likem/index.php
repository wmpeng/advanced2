<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShowLikemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Show Likems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-likem-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Show Likem', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'stuId',
            'movieId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
