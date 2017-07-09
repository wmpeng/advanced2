<?php

/**
 * Team: Serve People
 * Coding by xulicheng 1511224, 20170708
 * This is the view of food page. 
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FoodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '花样美食';
$this->registerCss("
    body {
        background:url(view_img/food.jpg);
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }
");
?>
<div class="food-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_user', [
        'model' => $model,
    ]) ?>

</div>
<div class="food-index">

    <ol>
        <?php for ($i=0; $i<count($dataProvider); $i++) { ?> 
        <li>
            <div>
                <p><?= $dataProvider[$i]['username'] ?> 在 <?= $dataProvider[$i]['sharetime'] ?> 分享： </p>
                <table width=80% cellspacing=5 cellpadding=5 border=5 bodercolor=#ffaa00 style="text-align:center" class="table table-striped">
                    <tr>
                        <td>美食菜名</td>
                        <td><?= $dataProvider[$i]['food_dish'] ?></td>
                    </tr>
                    <tr>
                        <td>美食做法</td>
                        <td><?= $dataProvider[$i]['food_method'] ?></td>
                    </tr>
                    <tr>
                        <td>美食食材</td>
                        <td><?= $dataProvider[$i]['food_material'] ?></td>
                    </tr>
                </table>
            </div>
        </li>
        <?php } ?>
    </ol>
</div>
</div>
