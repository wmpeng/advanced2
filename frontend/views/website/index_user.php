<?php

/**
 * Team: Serve People
 * Coding by maqianli 1511195, 20170708
 * This is the view of wedsite page. 
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WebsiteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '实用网站';
$this->registerCss("
    body {
        background:url(view_img/website.jpg);
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }
");
?>
<div class="website-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_user', [
        'model' => $model,
    ]) ?>

</div>
<div class="website-index">

    <ol>
        <?php for ($i=0; $i<count($dataProvider); $i++) { ?> 
        <li>
            <div>
                <p><?= $dataProvider[$i]['username'] ?> 在 <?= $dataProvider[$i]['sharetime'] ?> 分享： </p>
                <table width=80% cellspacing=5 cellpadding=5 border=5 bodercolor=#ffaa00 style="text-align:center" class="table table-striped">
                    <tr>
                        <td>实用链接网址</td>
                        <td><a href="http://<?= $dataProvider[$i]['website_address'] ?>"><?= $dataProvider[$i]['website_address'] ?></a></td>
                    </tr>
                    <tr>
                        <td>实用链接类型</td>
                        <td><?= $dataProvider[$i]['website_type'] ?></td>
                    </tr>
                </table>
            </div>
        </li>
        <?php } ?>
    </ol>
</div>
</div>
