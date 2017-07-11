<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InfoStudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Info Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Info Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'stuId',
            'stuName:ntext',
            'stuGender',
            'stuGrade',
            'teamId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
