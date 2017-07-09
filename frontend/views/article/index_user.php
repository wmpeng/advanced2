<?php

/**
 * Team: Serve People
 * Coding by xulicheng 1511224, 20170708
 * This is the view of article page. 
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '美文推荐';
$this->registerCss("
    body {
        background:url(view_img/article.jpg);
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }
");
?>
<div class="Article-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_user', [
        'model' => $model,
    ]) ?>

</div>
<div class="Article-index">

    <ol>
        <?php for ($i=0; $i<count($dataProvider); $i++) { ?> 
        <li>
            <div>
                <p><?= $dataProvider[$i]['username'] ?> 在 <?= $dataProvider[$i]['sharetime'] ?> 分享： </p>
                <table width=80% cellspacing=5 cellpadding=5 border=5 bodercolor=#ffaa00 style="text-align:center" class="table table-striped">
                    <tr>
                        <td>文章话题</td>
                        <td><?= $dataProvider[$i]['article_topic'] ?></td>
                    </tr>
                    <tr>
                        <td>文章作者</td>
                        <td><?= $dataProvider[$i]['article_writer'] ?></td>
                    </tr>
                    <tr>
                        <td>文章内容</td>
                        <td><?= $dataProvider[$i]['article_content'] ?></td>
                    </tr>
                </table>
            </div>
        </li>
        <?php } ?>
    </ol>
</div>
