<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InfoTeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Info Teams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-team-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Info Team', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'teamId',
            'teamName:ntext',
            'memberNum',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
