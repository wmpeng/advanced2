<?php

/**
 * Team: Serve People
 * Coding by geruichen 1511244 and xulicheng 1511224, 20170708
 * This is the view of index page. 
 */

/* @var $this yii\web\View */

$this->title = '为人民服务';

$this->registerCssFile("font-awesome-4.6.3/css/font-awesome.min.css");
$this->registerCssFile("css/bootstrap.min.css");
$this->registerCssFile("css/hero-slider-style.css");
$this->registerCssFile("css/audio.css");
$this->registerCssFile("css/magnific-popup.css");
$this->registerCssFile("css/templatemo-style.css");

$this->registerJsFile("js/jquery-1.11.3.min.js");
$this->registerJsFile("js/tether.min.js");
$this->registerJsFile("js/bootstrap.min.js");
$this->registerJsFile("js/hero-slider-main.js");
$this->registerJsFile("js/jquery.magnific-popup.min.js");
$this->registerJs("
    function adjustHeightOfPage(pageNo) {
               
        // Get the page height
        var totalPageHeight = 15 + $('.cd-slider-nav').height()
                                + $(\".cd-hero-slider li:nth-of-type(\" + pageNo + \") .js-tm-page-content\").height() + 160
                                + $('.tm-footer').height();

        // Adjust layout based on page height and window height
        if(totalPageHeight > $(window).height()) 
        {
            $('.cd-hero-slider').addClass('small-screen');
            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css(\"min-height\", totalPageHeight + \"px\");
        }
        else 
        {
            $('.cd-hero-slider').removeClass('small-screen');
            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css(\"min-height\", \"100%\");
        }

    }

    /*
        Everything is loaded including images.
    */
    $(window).load(function(){

        adjustHeightOfPage(1); // Adjust page height

        /* Gallery pop up
        -----------------------------------------*/
        $('.tm-img-gallery').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery:{enabled:true}                
        });

        /* Collapse menu after click 
        -----------------------------------------*/
        $('#tmNavbar a').click(function(){
            $('#tmNavbar').collapse('hide');

            adjustHeightOfPage($(this).data(\"no\")); // Adjust page height       
        });

        /* Browser resized 
        -----------------------------------------*/
        $( window ).resize(function() {
            var currentPageNo = $(\".cd-hero-slider li.selected .js-tm-page-content\").data(\"page-no\");
            adjustHeightOfPage( currentPageNo );
        });

        // Remove preloader
        // https://ihatetomatoes.net/create-custom-preloading-screen/
        $('body').addClass('loaded');
                
    });
    
    $(function(){
        //播放完毕
        $('#mp3Btn').on('ended', function() {
            console.log(\"音频已播放完成\");
            $('.btn-audio').css({'background':'url(img/voice_start.png) no-repeat center bottom','background-size':'cover'});
        })
        //播放器控制
        var audio = document.getElementById('mp3Btn');
        audio.volume = .3;
        $('.btn-audio').css({'background':'url(img/voice_stop.png) no-repeat center bottom','background-size':'cover'});
        audio.play();
        $('.btn-audio').click(function() {
            event.stopPropagation();//防止冒泡
            if(audio.paused){ //如果当前是暂停状态
                $('.btn-audio').css({'background':'url(img/voice_stop.png) no-repeat center bottom','background-size':'cover'});
                audio.play(); //播放
                return;
            }else{//当前是播放状态
                $('.btn-audio').css({'background':'url(img/voice_start.png) no-repeat center bottom','background-size':'cover'});
                audio.pause(); //暂停
            }
        });
    })"
);
?>
<div class="site-index">

    <!-- Content -->
        <div class="cd-hero">

            <!-- Navigation -->        
            <div class="cd-slider-nav">
                <nav class="navbar">

                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                        &#9776;
                    </button>
                    <div class="collapse navbar-toggleable-sm text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item active selected">
                                <a class="nav-link" href="#0" data-no="1">团队简介 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0" data-no="2">成员</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0" data-no="3">相册</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0" data-no="4">口号与队歌</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0" data-no="5">联系我们</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div> 
            
            <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>

            <ul class="cd-hero-slider">  <!-- autoplay -->
                <li class="selected">
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-1" data-page-no="1">
                            
                            <div class="row">
                            
                                <div class="col-xs-12">
                                    <i class="fa fa-4x fa-camera tm-icon"></i>
                                    <h2 class="tm-site-name">简介</h2>
                                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-1-col">
                                        <p class="tm-text">我们的队名是”为人民服务“，我们的宗旨是为人民服务。</p>
                                        <p class="tm-text">我们的团队是由四个具有创新意识、有着相同专业知识背景、有着共同的目标————完成英俊潇洒一表人才博学多闻才华出众的乜鹏学长和温延龙学长教的互联网数据库的大作业，的朝气蓬勃的年轻人组成的一个不可分割的整体。</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div> <!-- .cd-full-width -->
                </li>

                <li>
                    <div class="cd-full-width">

                        <div class="container-fluid js-tm-page-content" data-page-no="2">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="tm-2-col-container">
                            
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox">
                                            <h2 class="tm-text-title"><a href="XLC">徐礼承</a></h2>
                                            <p class="tm-text">签名：我们都是阴沟里的虫子，但总得有人仰望星空。</p>
											<h2 class="tm-text-title"><a href="MQL">马千里</a></h2>
                                            <p class="tm-text">签名：千里神马都是浮云。</p>
                                        </div>

                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox">
                                            <h2 class="tm-text-title"><a href="GRC">葛芮辰</a></h2>
                                            <p class="tm-text">签名：愿烟火人间，安得太平美满。</p>
											<h2 class="tm-text-title"><a href="DYH">邓永恒</a></h2>
                                            <p class="tm-text">签名：今天的死皮赖脸，为了明天的尊严。</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                                                
                    </div> <!-- .cd-full-width -->

                </li>
                
                <!-- Page 3 -->
                <li>
                    
                    <div class="cd-full-width">

                        <div class="container-fluid js-tm-page-content" data-page-no="3">
                            
                            <div class="row tm-img-gallery">
                                <div class="col-xs-8 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                                    <a href="img/tm-img-01.jpg">
                                        <img src="img/tm-img-01.jpg" alt="Image" class="img-fluid tm-img">
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                                    <a href="img/tm-img-02.jpg">
                                        <img src="img/tm-img-02.jpg" alt="Image" class="img-fluid tm-img">
                                    </a>
                                </div>
								<div class="col-xs-8 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                                    <a href="img/tm-img-03.jpg">
                                        <img src="img/tm-img-03.jpg" alt="Image" class="img-fluid tm-img">
                                    </a>
                                </div>
								<div class="col-xs-8 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                                    <a href="img/tm-img-04.jpg">
                                        <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-img">
                                    </a>
                                </div>
								<div class="col-xs-8 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                                    <a href="img/tm-img-01.jpg">
                                        <img src="img/tm-img-01-tn.jpg" alt="Image" class="img-fluid tm-img">
                                    </a>
                                </div>
								<div class="col-xs-8 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                                    <a href="img/tm-img-01.jpg">
                                        <img src="img/tm-img-01-tn.jpg" alt="Image" class="img-fluid tm-img">
                                    </a>
                                </div>
								<div class="col-xs-8 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                                    <a href="img/tm-img-01.jpg">
                                        <img src="img/tm-img-01-tn.jpg" alt="Image" class="img-fluid tm-img">
                                    </a>
                                </div>
								<div class="col-xs-8 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                                    <a href="img/tm-img-01.jpg">
                                        <img src="img/tm-img-01-tn.jpg" alt="Image" class="img-fluid tm-img">
                                    </a>
                                </div>
                                
                            </div>

                        </div>
                                                    
                    </div>
                    
                </li>

                <li>  <!-- class="cd-bg-video" -->
				    <div class="cd-full-width">
						<div class="js-tm-page-content" data-page-no="4">
							<div class="btn-audio" >
								<audio id="mp3Btn"><source src="audio/jiebanren.mp3" type="audio/mpeg" /></audio>
							</div>
							<div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-1-col">
							<p class="tm-text">我们的口号是：为着理想，勇敢前进，我们是共产主义接班人。</p>
							</div>
					  
							
						</div>  
                    </div>					

                </li>

                <li>
                    <div class="cd-full-width">

                        <div class="container-fluid js-tm-page-content" data-page-no="5">
                            
                            <div class="tm-contact-page">
                                
                                <div class="row">

                                    <div class="col-xs-12">
                                        
                                        <h2 class="tm-section-title">联系我们</h2>
                                        <p class="tm-text tm-font-w-400 m-b-3">欢迎随时交流~提出您宝贵的建议和意见！</p>      

                                    </div>

                                </div>

                                <!-- contact form -->
                                <div class="row">
                                    <form action="advice.php" method="post" class="tm-contact-form">
                                    
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                            <div class="form-group">
                                                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="您的名字"  required/>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="您的邮箱"  required/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="contact_subject" name="contact_tel" class="form-control" placeholder="您的电话"  required/>
                                            </div>    
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                            <div class="form-group">
                                                <textarea id="contact_message" name="contact_message" class="form-control" rows="5" placeholder="您的建议" required></textarea>
                                            </div>    
                                        </div>

                                        <div class="col-xs-12">
                                            <button type="submit" class="pull-xs-right tm-submit-btn">提交</button>
                                        </div>
                                    </form>  
                                </div>

                            </div>    

                        </div>
                        
                    </div> <!-- .cd-full-width -->
                </li>
            </ul> <!-- .cd-hero-slider -->
            
           
                    
        </div> <!-- .cd-hero --> 
</div>
