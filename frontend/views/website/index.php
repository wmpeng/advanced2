<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WebsiteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Websites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="website-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Website', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'website_id',
            'website_address',
            'website_type',
            'username',
            'sharetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
