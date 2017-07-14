
<!DOCTYPE html>
<?php

/**
*1511172 顾飞code.
*/

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- Metas Page details-->
	<title>Personal Homepage</title>
	<meta name="description" content="OnePage Resume Portfolio">
	<meta name="author" content="">
	<!-- Mobile Specific Metas-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--main style-->
	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
	<!--google font style-->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
	<!--font-family: 'Metrophobic', serif;-->
	<link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,600,400italic,600italic' rel='stylesheet' type='text/css'> 
	<!--font-family: 'Open Sans', sans-serif;-->
	<!-- font icon css style-->
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body onLoad="load()" onUnload="GUnload()">
	<!-- Preloader -->
	<div id="preloader">
		<div id="status">
		</div>
	</div>
	<!--wrapper start-->
	<div class="wrapper noGap" id="wrapper">

		<!--Header start -->
		<header>
			<!--menu start-->
			<div class="menu">
				<a href="#" class="nav-icon" id="nav-show"><i class="fa fa-bars"></i></a>
				<div class="navbar-wrapper">
					<div class="container">
						<div class="navwrapper">
							<div class="navbar navbar-inverse navbar-static-top">
								<div class="container">
									<!--<div class="logo">logo</div> -->
									<div class="navArea"><a href="#" class="closeMenu"><i class="fa fa-times"></i></a>
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
											<!-- <a class="navbar-brand" href="#">Menu</a>-->
										</div>
										<div class="navbar-collapse collapse">
											<ul class="nav navbar-nav">
												<li class="menuItem active"><a href="#wrapper">Home</a></li>
												<li class="menuItem"><a href="#aboutus">About Me</a></li>
												<li class="menuItem"><a href="#skillset">Skills</a></li>
												<li class="menuItem"><a href="#experience">Experience</a></li>
												<li class="menuItem"><a href="#education">Education</a></li>
												<li class="menuItem"><a href="#ourwork">Portfolio</a></li>
												<li class="menuItem"><a href="#contact">Contact</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Navbar -->
					</div>
				</div>
			</div>
			<!--menu end--> 

			<!--banner start-->
			<div class="banner row" id="banner">
				<div class="bannerText">
					<h1>I'm 王明鹏</h1>
					<h3>Welcome to my personal homepage</h3>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd slides-container" style="height:100%"> 
					<!--background slide show start-->
					<div class="slide"> 
						<img src="images/header-image/image01.png" alt="image01">
					</div>
					<div class="slide"> 
						<img src="images/header-image/image02.jpg" alt="image01">
					</div>
					<!--background slide show end--> 
				</div>
			</div>
			<!--banner end--> 

		</header>
		<!--Header end -->

		<!--about us start-->
		<section class="aboutus" id="aboutus">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading">
							<h2>About me</h2>
							<h3>A small introduction about my self</h3>
						</div>
					</div> 
				</div> 
				<div class="row">
					<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right media"><img src="../../data/pic/wmp.jpg" alt="">
					</div>
					<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left media">
						<h5>姓名：<?=$msgList[0]['stuName']?><br></h5>
						<h4>学号：<?=$msgList[0]['stuId']?><br></h4>
						<h4>性别：<?=$msgList[0]['stuGender']?><br></h4>
						<h4>年级：<?=$msgList[0]['stuGrade']?><br></h4>
					</div>

				</div> 
			</div>
		</section>
		<!--about us end--> 
		<!--BOOK start -->

		<section id="skillset" class="skillset">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading">
							<h2>BOOK</h2>
							<h3>Books are great power -- Lenin </h3>
						</div>
					</div>
					<div class="col-md-12">

						<h4>书名：<?=$msgListB[0]['bookName']?><br></h4>
						<h4>作者：<?=$msgListB[0]['bookAuthor']?><br></h4>


					</div>
				</div>
			</div>
		</section>
		<!--BOOK end -->
		<!--MOVIES start -->
		<section id="skillset" class="skillset">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading">
							<h2>MOVIE</h2>
							<h3>It is impossible to love and to be wise--Francis Bacon </h3>
						</div>
					</div>
					<div class="col-md-12">
						<h4>影名：<?=$msgListM[0]['movieName']?><br></h4>
						<h4>导演：<?=$msgListM[0]['movieDirector']?><br></h4>
						<h4>类别：<?=$msgListM[0]['movieType']?><br></h4>
					</div>
				</div>
			</div>
		</section>
		<!--MOVIES end -->
		<!--GAME start -->
		<section id="skillset" class="skillset">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading">
							<h2>GAME</h2>
							<h3>It is impossible to love and to be wise--Francis Bacon </h3>
						</div>
					</div>
					<div class="col-md-12">
						<h4>游戏名：<?=$msgListG[0]['gameName']?><br></h4>
						<h4>类别：<?=$msgListG[0]['gameType']?><br></h4>

					</div>
				</div>
			</div>
		</section>
		<!--GAMES end -->

		<!--Work Experties start -->
		<section id="experience" class="myexperties">
			<div class="container">
				<div class="heading">
					<h2>Experience</h2>
					<h3>My previous associations</h3>
				</div>
				<div class="row media">
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						September,2015<br>Till Date
					</div>
					<div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
						<h4>天津市南开大学</h4>
					</div>
				</div>
			</div>

		</section>
		<!--Work Experties end -->
		<!--wrapper end--> 

		<!--modernizr js--> 
		<script type="text/javascript" src="js/modernizr.custom.26633.js"></script> 
		<!--jquary min js--> 
		<script type="text/javascript" src="js/jquery.min.js"></script> 
		<script src="js/bootstrap.min.js"></script> 

		<!--for placeholder jquery--> 
		<script type="text/javascript" src="js/jquery.placeholder.js"></script> 

		<!--for header jquery--> 
		<script type="text/javascript" src="js/stickUp.js"></script> 
		<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			jQuery(function($) {
				$(document).ready( function() {
        //enabling stickUp on the '.navbar-wrapper' class
        $('.navbar-wrapper').stickUp({
        	parts: {
        		0: 'banner',
        		1: 'aboutus',
        		2: 'skillset',
        		3: 'experience',
        		4: 'education',
        		5: 'ourwork',
        		6: 'contact'
        	},
        	itemClass: 'menuItem',
        	itemHover: 'active',
        	topMargin: 'auto'
        });
    });
			});
		</script>
		<script>
			$('#banner').superslides({
				animation: 'fade',
				play: 5000
			});
		</script>

		<!--for portfolio jquery--> 
		<script src="js/jquery.isotope.js" type="text/javascript"></script> 
		<link type="text/css" rel="stylesheet" id="theme" href="css/jquery-ui-1.8.16.custom.css">
		<link type="text/css" rel="stylesheet" href="css/lightbox.min.css">
		<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script> 
		<script type="text/javascript" src="js/jquery.ui.rlightbox.js"></script> 

		<!--contact form js--> 
		<script type="text/javascript" src="js/jquery.contact.js"></script> 


		<script src="js/jquery.easing.js"></script> 
		<script src="js/jquery.mousewheel.js"></script> 
		<script defer src="js/slideroption.js"></script> 

		<!--for theme custom jquery--> 
		<script src="js/custom.js"></script>
	</div>
</body>
</html>