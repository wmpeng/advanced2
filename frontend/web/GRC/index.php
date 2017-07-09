<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>葛芮辰</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- stylesheet css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo-gray.css">
</head>
<body data-spy="scroll" data-target=".navbar-collapse">

<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-wordpress">
       <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- header section -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<img src="images/tm-easy-profile.jpg" class="img-responsive img-circle tm-border" alt="templatemo easy profile">
				<hr>
				<h1 class="tm-title bold shadow">你好，我是葛芮辰</h1>
				<h1 class="white bold shadow">欢迎来到我的主页</h1>
			</div>
		</div>
	</div>
</header>

<!-- about and skills section -->
<section class="container">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="about">
				<h3 class="accent">关于我</h3>
				<h2>基本信息</h2>
				<?php
                $con = mysql_connect("localhost","root","");
                if (!$con)
                  {
                    die('Could not connect: ' . mysql_error());
                  }
                mysql_query("set character set 'utf8'", $con);//读库 
                mysql_query("set names 'utf8'", $con);//写库 
                mysql_select_db("serve_people", $con);
                $result=mysql_query("select * from sp_personal_info where number ='1511244'");
                mysql_close($con);
                $row = mysql_fetch_array($result)
              ?>
              <p>
              学号：<?php echo $row["number"]; ?><br>
              学校：<?php echo $row["school"]; ?><br>
              专业：<?php echo $row["major"]; ?><br>
              个性签名：<?php echo $row["sign"]; ?></p>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="skills">
				<h2 class="white">别人形容我</h2>
				<strong>踏实靠谱</strong>
				<span class="pull-right">75%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" 
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
					</div>
				<strong>丢三落四</strong>
				<span class="pull-right">85%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" 
                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
					</div>
				<strong>长的好看</strong>
				<span class="pull-right">99%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" 
                        aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%;"></div>
					</div>
			</div>
		</div>
	</div>
</section>

<!-- education and languages -->
<section class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="education">
				<h2 class="white">家乡介绍</h2>
					<div class="education-content">
							<div class="education-school">
								<h5>我的家乡：吉林省白山市抚松县松江河镇</h5><span></span>
								<h5>位于中国满族发祥地长白山脚下</h5>
							</div>
							<div class="education-school">
								<h5>被誉为“长白山下第一镇”（虽然是自封的）</h5><span></span>
							</div>
							<div class="education-school">
								<h5>座落在吉林省东南部</h5><span></span>
								<h5>人参之乡，蓝莓之乡</h5>
							</div>
							<div class="education-school">
								<h5>是避暑、修疗、度假和观光的旅游胜地</h5><span></span>
								<h5>欢迎来玩</h5>
							</div>
					</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="languages">
				<h2>爱好</h2>
					<ul>
						<li>阅读</li>
						<li>下棋</li>
						<li>音乐</li>
						<li>跑步</li>
					</ul>
			</div>
		</div>
	</div>
</section>

<!-- contact and experience -->
<section class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<div class="Contact">
				<h2>联系我</h2>
					<p><i class="fa fa-map-marker"></i>地址：天津市 南开大学 津南校区</p>
					<p><i class="fa fa-phone"></i>电话：15222587732</p>
					<p><i class="fa fa-envelope"></i>邮箱：15222587732@163.com</p>
					<p><i class="fa fa-globe"></i>微信：geruichen_</p>
			</div>
		</div>
		<div class="col-md-8 col-sm-12">
			<div class="experience">
				<h2 class="white">学长辛苦了！</h2>
					<div class="experience-content">
						<h5></h5><span></span>
						<h5>学长看了这么多份作业一定累了，下面讲个笑话放松一下</h5>
						<p class="education-description">课堂上，老师让把“小鸟在树上叫。”这句话改成拟人句。小朋友们改的基本都是“小鸟在树上唱歌”、“小鸟在树上歌颂”这些之类的。而小明造的拟人句是：“小鸟在树上大声叫到：我是人啊！我是人啊！”……</p>
						<p class="education-description">
						从小到大一直举得最好笑的一个笑话。</p>
					</div>
			</div>
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<li><a href="/serve_people/frontend/web/index.php">谢谢观看！</a></li>
			</div>
		</div>
	</div>
</footer>

<!-- javascript js -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>