<?php

/**
 * Team: Serve People
 * Coding by geruichen 1511244 and xulicheng 1511224, 20170708
 * This is the view of user page. 
 */

/* @var $this yii\web\View */
$this->registerCssFile("css/animate.css");
$this->registerCssFile("css/icomoon.css");
$this->registerCssFile("css/bootstrap.css");
$this->registerCssFile("css/style.css");
$this->registerCss("body { font-size: 16px}");

$this->registerJsFile("js/modernizr-2.6.2.min.js");
$this->registerJsFile("js/jquery.min.js");
$this->registerJsFile("js/jquery.easing.1.3.js");
$this->registerJsFile("js/bootstrap.min.js");
$this->registerJsFile("js/jquery.waypoints.min.js");
$this->registerJsFile("js/jquery.stellar.min.js");
$this->registerJsFile("js/main.js");

$this->title = '为人民服务';
?>

<div id="page">
    <div id="fh5co-aside" style="background-image: url(images/image_1.jpg)">
        <div class="overlay"></div>
        <nav role="navigation">
            <ul>
                <li><a href="index.php"><i class="icon-home"></i></a></li>
            </ul>
        </nav>
        <div class="featured">
            <span>您好</span>
            <h2>欢迎来到主页！</a></h2>
        </div>
    </div>
    <div id="fh5co-main-content">
        <div class="fh5co-post"> 
            <div class="fh5co-entry padding">
                <img src="images/project-1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                <div>
                    <span class="fh5co-post-date">|此曲只应天上有</span>
                    <h2><a href="index.php?r=music">精选音乐</a></h2>
                    <p>总有一首能够打动你</p>
                </div>
            </div>

            <div class="fh5co-entry padding">
                <img src="images/project-2.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                <div>
                    <span class="fh5co-post-date">|人间有味是清欢</span>
                    <h2><a href="index.php?r=food">花样美食</a></h2>
                    <p>吃，是人间最大的缘分</p>
                </div>
            </div>

            <div class="fh5co-entry padding">
                <img src="images/project-3.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                <div>
                    <span class="fh5co-post-date">|天下之事尽皆知</span>
                    <h2><a href="index.php?r=website">实用链接</a></h2>
                    <p>上网最实用的链接都在这里了</p>
                </div>
            </div>

            <div class="fh5co-entry padding">
                <img src="images/project-4.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                <div>
                    <span class="fh5co-post-date">|江山代有才人出</span>
                    <h2><a href="index.php?r=poem">经典诗词</a></h2>
                    <p>浩瀚五千年的中华文明</p>
                </div>
            </div>

            <div class="fh5co-entry padding">
                <img src="images/project-5.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                <div>
                    <span class="fh5co-post-date">|只缘身在此山中</span>
                    <h2><a href="index.php?r=test">趣味测试</a></h2>
                    <p>改变，从了解自己开始</p>
                </div>
            </div>

            <div class="fh5co-entry padding">
                <img src="images/project-6.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                <div>
                    <span class="fh5co-post-date">|面向对象面向君</span>
                    <h2><a href="index.php?r=language">编程语言</a></h2>
                    <p>写代码的你会喜欢的</p>
                </div>
            </div>

            <div class="fh5co-entry padding">
                <img src="images/project-7.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                <div>
                    <span class="fh5co-post-date">|山外青山楼外楼</span>
                    <h2><a href="index.php?r=city">旅游城市</a></h2>
                    <p>生命本身就是一场旅行</p>
                </div>
            </div>

            <div class="fh5co-entry padding">
                <img src="images/project-8.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                <div>
                    <span class="fh5co-post-date">|问渠哪得清如许</span>
                    <h2><a href="index.php?r=article">美文推荐</a></h2>
                    <p>想告诉你所有的美好</p>
                </div>
            </div>

            <div class="fh5co-entry padding">
                <img src="images/project-9.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                <div>
                    <span class="fh5co-post-date">|岁岁年年人不同</span>
                    <h2><a href="index.php?r=movie">电影推荐</a></h2>
                    <p>电影最大的魅力，是能显示我们未知的部分</p>
                </div>
            </div>

            <div class="fh5co-entry padding">
                <img src="images/project-10.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                <div>
                    <span class="fh5co-post-date">|一日看尽长安花</span>
                    <h2><a href="index.php?r=happy">开心一刻</a></h2>
                    <p>享受快乐是一种学习</p>
                </div>
            </div>

            
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>