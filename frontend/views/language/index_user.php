<?php

/**
 * Team: Serve People
 * Coding by geruichen 1511244, 20170708
 * This is the view of language page. 
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LanguageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '编程语言';
$this->registerCss("
    body {
        background:url(view_img/language.jpg);
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }
");
?>
<div class="language-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_user', [
        'model' => $model,
    ]) ?>

</div>
<div class="language-index">
    <ol>
        <?php for ($i=0; $i<count($dataProvider); $i++) { ?> 
        <li>
            <div>
                <p><?= $dataProvider[$i]['username'] ?> 在 <?= $dataProvider[$i]['sharetime'] ?> 分享： </p>
                <table width=80% cellspacing=5 cellpadding=5 border=5 bodercolor=#ffaa00 style="text-align:center" class="table table-striped">
                    <tr>
                        <td>编程语言名称</td>
                        <td><?= $dataProvider[$i]['language_name'] ?></td>
                    </tr>
                    <tr>
                        <td>编程语言优点</td>
                        <td><?= $dataProvider[$i]['language_advantage'] ?></td>
                    </tr>
                </table>
            </div>
        </li>
        <?php } ?>
    </ol>
</div>
</div>
