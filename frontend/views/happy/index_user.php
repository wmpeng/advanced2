<?php

/**
 * Team: Serve People
 * Coding by geruichen 1511244, 20170708
 * This is the view of happy page. 
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HappySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '开心一刻';
$this->registerCss("
    body {
        background:url(view_img/test.jpg);
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }
");
?>
<div class="happy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_user', [
        'model' => $model,
    ]) ?>

</div>
<div class="happy-index">
    <ol>
        <?php for ($i=0; $i<count($dataProvider); $i++) { ?> 
        <li>
            <div>
                <p><?= $dataProvider[$i]['username'] ?> 在 <?= $dataProvider[$i]['sharetime'] ?> 分享： </p>
                <table width=80% cellspacing=5 cellpadding=5 border=5 bodercolor=#ffaa00 style="text-align:center" class="table table-striped">
                    <tr>
                        <td>开心一刻名字</td>
                        <td><?= $dataProvider[$i]['happy_name'] ?></td>
                    </tr>
                    <tr>
                        <td>开心一刻内容</td>
                        <td><?= $dataProvider[$i]['happy_content'] ?></td>
                    </tr>
                </table>
            </div>
        </li>
        <?php } ?>
    </ol>
</div>
</div>
