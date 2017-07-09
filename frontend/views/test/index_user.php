<?php

/**
 * Team: Serve People
 * Coding by maqianli 1511195, 20170708
 * This is the view of test page. 
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '趣味测试';
$this->registerCss("
    body {
        background:url(view_img/test.jpg);
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }
");
?>
<div class="test-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_user', [
        'model' => $model,
    ]) ?>

</div>
<div class="test-index">

    <ol>
        <?php for ($i=0; $i<count($dataProvider); $i++) { ?> 
        <li>
            <div>
                <p><?= $dataProvider[$i]['username'] ?> 在 <?= $dataProvider[$i]['sharetime'] ?> 分享： </p>
                <table width=80% cellspacing=5 cellpadding=5 border=5 bodercolor=#ffaa00 style="text-align:center" class="table table-striped">
                    <tr>
                        <td>测试类型</td>
                        <td><?= $dataProvider[$i]['test_type'] ?></td>
                    </tr>
                    <tr>
                        <td>测试内容</td>
                        <td><?= $dataProvider[$i]['test_content'] ?></td>
                    </tr>
                </table>
            </div>
        </li>
        <?php } ?>
    </ol>
</div>
</div>
