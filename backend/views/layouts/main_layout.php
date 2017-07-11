<?php


/**
 * Team: DBIS,NKU
 * Coding by niepeng 016096, 20170703
 * This is the main layout of frontend web. 
 */


/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
	<link href="assets/css/bootstrap1.css" rel="stylesheet" />
	<!-- FONTAWESOME STYLES-->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<!-- CUSTOM STYLES-->
	<link href="assets/css/custom.css" rel="stylesheet" />
	<!-- GOOGLE FONTS-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
	<div id="wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="adjust-nav">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<img src="assets/img/logo.png" />

					</a>

				</div>

				<span class="logout-spn" >
					<a href="#" style="color:#fff;">LOGOUT</a>  

				</span>
			</div>
		</div>
		<!-- /. NAV TOP  -->
		<nav class="navbar-default navbar-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav" id="main-menu">



					<li class="active-link">
						<a href="index.html" ><i class="fa fa-desktop "></i>信息修改 <span class="badge">Included</span></a>
					</li>


					<li>
						<a href="ui.html"><i class="fa fa-table "></i>留言板  <span class="badge">Included</span></a>
					</li>
					<li>
						<a href="blank.html"><i class="fa fa-edit "></i>Blank Page  <span class="badge">Included</span></a>
					</li>


					<li>
						<a href="#"><i class="fa fa-qrcode "></i>My Link One</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-bar-chart-o"></i>My Link Two</a>
					</li>

					<li>
						<a href="#"><i class="fa fa-edit "></i>My Link Three </a>
					</li>
					<li>
						<a href="#"><i class="fa fa-table "></i>My Link Four</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-edit "></i>My Link Five </a>
					</li>

				</ul>
			</div>

		</nav>
		<!-- /. NAV SIDE  -->
		<div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
		<div id="page-wrapper" >
			<div id="page-inner">
				<?= $content ?>
			</div>
		</div>
	</div>

	<!-- /. WRAPPER  -->
	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
	<!-- JQUERY SCRIPTS -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!-- BOOTSTRAP SCRIPTS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- CUSTOM SCRIPTS -->
	<script src="assets/js/custom.js"></script>
</body>
</html>