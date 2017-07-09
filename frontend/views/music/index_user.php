<?php

/**
 * Team: Serve People
 * Coding by dengyongheng 1511243, 20170708
 * This is the view of music page. 
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MusicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '精选音乐';
$this->registerCss("
    body {
        background:url(view_img/music.jpg);
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }
");
?>
<div class="music-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_user', [
        'model' => $model,
    ]) ?>

</div>
<div class="music-index">

    <ol>
        <?php for ($i=0; $i<count($dataProvider); $i++) { ?> 
        <li>
            <div>
                <p><?= $dataProvider[$i]['username'] ?> 在 <?= $dataProvider[$i]['sharetime'] ?> 分享： </p>
                <table width=80% cellspacing=5 cellpadding=5 border=5 bodercolor=#ffaa00 style="text-align:center" class="table table-striped">
                    <tr>
                        <td>音乐名字</td>
                        <td><?= $dataProvider[$i]['music_name'] ?></td>
                    </tr>
                    <tr>
                        <td>音乐类型</td>
                        <td><?= $dataProvider[$i]['music_type'] ?></td>
                    </tr>
                    <tr>
                        <td>音乐作者</td>
                        <td><?= $dataProvider[$i]['music_player'] ?></td>
                    </tr>
                </table>
            </div>
        </li>
        <?php } ?>
    </ol>

</div>
</div>
