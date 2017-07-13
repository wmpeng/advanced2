<?php


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'teamshow';
?>
<head>
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap	-->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Theme style	-->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="fh5co-wrap" style="background-image: url(images/hero_4.jpg);">
		<div class="fh5co-section">
			<div class="container">
				<div class="row"  table-layout: fixed>
					<div class="col-md-4 fh5co-staff" >
						<img src="../../files/图片/wmp.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3><?=$msgList[1]['stuName']?></h3>
						<h4>学号：<?=$msgList[1]['stuId']?></h4>
						<p>性别：<?=$msgList[1]['stuGender']?>
			
			<br/>年级：<?=$msgList[1]['stuGrade']?>
						<br/>队伍：<?=$msgList[1]['teamName']?></p>
						<a href="../../files/personshow/wmp/index.html" target="_blanket"">个人主页<a>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="../../files/图片/wwh.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3><?=$msgList[2]['stuName']?></h3>
						<h4>学号：<?=$msgList[2]['stuId']?></h4>
						<p>性别：<?=$msgList[2]['stuGender']?>
						<br/>年级：<?=$msgList[2]['stuGrade']?>
						<br/>队伍：<?=$msgList[2]['teamName']?></p>
						<a href="../../files/personshow/wwh/index.html" target="_blanket">个人主页<a>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="../../files/图片/wzc.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3><?=$msgList[3]['stuName']?></h3>
						<h4>学号：<?=$msgList[3]['stuId']?></h4>
						<p>性别：<?=$msgList[3]['stuGender']?>
						<br/>年级：<?=$msgList[3]['stuGrade']?>
						<br/>队伍：<?=$msgList[3]['teamName']?></p>
						<a href="../../files/personshow/wzc/index.html" target="_blanket"">个人主页<a>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="../../files/图片/gf.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3><?=$msgList[0]['stuName']?></h3>
						<h4>学号：<?=$msgList[0]['stuId']?></h4>
						<p>性别：<?=$msgList[0]['stuGender']?>
						<br/>年级：<?=$msgList[0]['stuGrade']?>
						<br/>队伍：<?=$msgList[0]['teamName']?></p>
						<a href="../../files/personshow/gf/index.html" target="_blanket"">个人主页<a>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
					
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>