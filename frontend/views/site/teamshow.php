<?php


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'teamshow';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<head>
</head>
<body>
	<div class="col-md-4 fh5co-staff" >
		<img src="../../data/pic/wmp.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
		<h3><?=$msgList[1]['stuName']?>
			
		</h3>
		<h4>学号：<?=$msgList[1]['stuId']?>
			
		</h4>
		<p>性别：<?=$msgList[1]['stuGender']?>
			<br/>年级：<?=$msgList[1]['stuGrade']?>
			<br/>队伍：<?=$msgList[1]['teamName']?>
		</p>
		<a href="index.php?r=site/wmpindex" target="_blanket"">个人主页
		</a>
	</div>
	<div class="col-md-4 fh5co-staff">
		<img src="../../data/pic/wwh.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
		<h3><?=$msgList[2]['stuName']?></h3>
		<h4>学号：<?=$msgList[2]['stuId']?></h4>
		<p>性别：<?=$msgList[2]['stuGender']?>
			<br/>年级：<?=$msgList[2]['stuGrade']?>
			<br/>队伍：<?=$msgList[2]['teamName']?>
		</p>
		<a href="index.php?r=site/wwhindex" target="_blanket">个人主页
		</a>>
	</div>
	<div class="col-md-4 fh5co-staff">
		<img src="../../data/pic/wzc.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
		<h3><?=$msgList[3]['stuName']?>

		</h3>
		<h4>学号：<?=$msgList[3]['stuId']?>

		</h4>
		<p>性别：<?=$msgList[3]['stuGender']?>
			<br/>年级：<?=$msgList[3]['stuGrade']?>
			<br/>队伍：<?=$msgList[3]['teamName']?>
		</p>
		<a href="index.php?r=site/wzcindex" target="_blanket"">个人主页
		</a>
	</div>
	<div class="col-md-4 fh5co-staff">
		<img src="../../data/pic/gf.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
		<h3><?=$msgList[0]['stuName']?>

		</h3>
		<h4>学号：<?=$msgList[0]['stuId']?>

		</h4>
		<p>性别：<?=$msgList[0]['stuGender']?>
			<br/>年级：<?=$msgList[0]['stuGrade']?>
			<br/>队伍：<?=$msgList[0]['teamName']?>
		</p>
		<a href="index.php?r=site/gfindex" target="_blanket"">个人主页
		</a>
	</div>
</body>
</html>