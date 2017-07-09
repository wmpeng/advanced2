<?php

/**
 * Team: Serve People
 * Coding by xulicheng 1511224, 20170708
 * This is the view of city page. 
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '旅游城市';
$this->registerCss("
    body {
        background:url(view_img/city.jpg);
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }
");
?>
<div class="city-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_user', [
        'model' => $model,
    ]) ?>

</div>
<div class="city-index">

    <ol>
        <?php for ($i=0; $i<count($dataProvider); $i++) { ?> 
        <li>
            <div>
                <p><?= $dataProvider[$i]['username'] ?> 在 <?= $dataProvider[$i]['sharetime'] ?> 分享： </p>
                <table width=80% cellspacing=5 cellpadding=5 border=5 bodercolor=#ffaa00 style="text-align:center" class="table table-striped">
                    <tr>
                        <td>城市名字</td>
                        <td><?= $dataProvider[$i]['city_name'] ?></td>
                    </tr>
                    <tr>
                        <td>城市省份</td>
                        <td><?= $dataProvider[$i]['city_province'] ?></td>
                    </tr>
                    <tr>
                        <td>著名景点</td>
                        <td><?= $dataProvider[$i]['city_scenery'] ?></td>
                    </tr>
                </table>
            </div>
        </li>
        <?php } ?>
    </ol>
</div>
</div>
