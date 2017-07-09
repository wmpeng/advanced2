<?php

/**
 * Team: Serve People
 * Coding by dengyongheng 1511243, 20170708
 * This is the view of poem page. 
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PoemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '经典诗词';
$this->registerCss("
    body {
        background:url(view_img/poem.jpg);
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }
");
?>
<div class="poem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_user', [
        'model' => $model,
    ]) ?>

</div>
<div class="poem-index">

    <ol>
        <?php for ($i=0; $i<count($dataProvider); $i++) { ?> 
        <li>
            <div>
                <p><?= $dataProvider[$i]['username'] ?> 在 <?= $dataProvider[$i]['sharetime'] ?> 分享： </p>
                <table width=80% cellspacing=5 cellpadding=5 border=5 bodercolor=#ffaa00 style="text-align:center" class="table table-striped">
                    <tr>
                        <td>诗词时代</td>
                        <td><?= $dataProvider[$i]['poem_era'] ?></td>
                    </tr>
                    <tr>
                        <td>诗词作者</td>
                        <td><?= $dataProvider[$i]['poem_poet'] ?></td>
                    </tr>
                    <tr>
                        <td>诗词内容</td>
                        <td><?= $dataProvider[$i]['poem_content'] ?></td>
                    </tr>
                </table>
            </div>
        </li>
        <?php } ?>
    </ol>
</div>
</div>
