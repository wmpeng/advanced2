<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>邓永恒</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
<link rel="icon" href="images/profile.jpg" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">

</head>

<body>


<div id="home">
<!-- Slider Starts -->
<div class="banner">
          <img src="images/back.jpg" alt="banner" class="img-responsive">
          <div class="caption">
            <div class="caption-wrapper">
              <div class="caption-info">              
              <img src="images/profile.jpg" class="img-circle profile">
              <h1 class="animated bounceInUp">邓永恒ヾ(*Ő౪Ő*)!!</h1>
              <p class="animated bounceInLeft"><a href="/serve_people/frontend/web/index.php">为人民服务</a> </p>
            </div>
          </div>
</div>
<!-- #Slider Ends -->
</div>

<div id="testimonials" class="container spacer ">
	<h2 class="text-center  wowload fadeInUp">欢迎勾搭 ԅ(￣‿￣ԅ) </h2>
  <div class="clearfix">    
    <div class="col-sm-6 col-sm-offset-3">


    <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight" data-ride="carousel">
    <div class="carousel-inner">  
      <div class="item active animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/1.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <?php
        $con = mysql_connect("localhost","root","");
        if (!$con)
          {
            die('Could not connect: ' . mysql_error());
          }
        mysql_query("set character set 'utf8'", $con);//读库 
        mysql_query("set names 'utf8'", $con);//写库 
        mysql_select_db("serve_people", $con);
        $result=mysql_query("select * from sp_personal_info where number ='1511243'");
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
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/2.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p>擅长Ai、Fw、Ps等软件的安装与卸载，精通CSS、JavaScript、PHP、C、C++、java、Python等单词的拼写，熟悉windows、Max、Android、IOS等系统的开关机</p>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft  col-xs-2"><img alt="portfolio" src="images/team/3.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p>手机：18222478946<br>
      QQ：3293925097<br>
      微信：dyh18222478946<br>
      邮箱：3293925097@qq.com<br></p>
      </div>
      </div>
  </div>

   <!-- Indicators -->
   	<ol class="carousel-indicators">
    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
  	</ol>
  	<!-- Indicators -->
  </div>
    </div>
  </div>

</div>

<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>



<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>




<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>