<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $model frontend\models\Message */

$this->title = '留言墙';
$this->registerCss("
    body {
        background:url(view_img/message.jpg);
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }
");
?>
<div class="message-index" >

    <h3><?= Html::encode($this->title) ?></h3>

    <ol>
        <?php for ($i=0; $i<count($dataProvider); $i++) { ?> 
            <li>
                <div>
                    <p><?= $dataProvider[$i]['username'] ?> 在 <?= $dataProvider[$i]['sharetime'] ?> 留言道： </p>
                    <p style="font-size:20px; text-align:center"><?= $dataProvider[$i]['message_content'] ?></p>
                    </div>
            </li>
        <?php } ?>
    </ol>

</div>
