<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">


    <title>铜锣湾</title>
    <!-- Stylesheets -->
    <link href="/Public/resource/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/static/css/revolution-slider.css" rel="stylesheet">
    <link href="/Public/static/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="/Public/static/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/Public/static/images/favicon.ico" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="/Public/static/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="/Public/static/js/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="/Public/static/js/respond.js"></script><![endif]-->





</head>

<body>
<div class="page-wrapper">

    
<style>

    .scrolled{
        background: #304153 !important;
    }

    .my_center{
        text-align: center;
        font-size: 16px;
    }


    #header,#header.container,body{

        /*<?php if($pc == 'pc'){ echo 'min-width: 1280px !important;';} ?>*/

    }


    .guoqi{
        width: 25px;
        height: 17px;
        display: inline-block;
        background-image: url(/Public/img/guoqi.png);
        background-color: transparent;
        background-repeat: no-repeat;
        margin-right: 5px;
        border-radius: 3px;
        position: relative;
        top: 3px
    }

    .my_chinese{
        background-position: 0px -3px;
    }

    .my_hongkong{
        background-position: 0px -29px;
    }

    .my_english{
        background-position: 0px -291px;
    }

</style>


<header id="header" class="header navbar-fixed-top">
    <!--<div class="top" >-->
        <!--<span>欢迎来到铜锣湾比特币基金</span>-->
    <!--</div>-->

    <div class="container">
        <h1 class="logo">
            <!--<a href="index.html"><span class="text"><img src="/Public/img/logo.png"></span></a>-->
            <!--<a href="index.html"><img src="/Public/img/logo.png"></a>-->
            <img style="width: 200px;line-height: 80px;margin-top:-23px;vertical-align: middle;padding: 10px;" src="/Public/img/logo22.png">

            <!--/Public/img/logo.png-->
        </h1><!--//logo-->
        <nav class="main-nav navbar-right" role="navigation" style="background: transparent !important;">

            <div class="navbar-header">

                <!--<label for="lang"><span onclick="$(#lang).click();" style="position: absolute;right: 45px;top: 20px;" class="guoqi my_chinese"></span></label>-->
                <!--<select id="language" onchange="change()" style="background: #304153;font-size: 14px;width: 85px;border: 1px solid gray;">-->
                <!--<option value="zh-cn"><span   class="guoqi my_chinese"></span></option>-->
                <!--<option value="zh-tw">繁体中文</option>-->
                <!--<option value="en-us">English</option>-->

                <!--</select>-->
                <!--<select id="lang" >-->
                    <!--<option value="zh-cn">简体中文</option>-->
                    <!--<option value="zh-tw">繁体中文</option>-->
                    <!--<option value="en-us">English</option>-->
                <!--</select>-->
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!--//nav-toggle-->
            </div><!--//navbar-header-->
            <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav" id="ulChangeColor">
                    <li class="active nav-item"><a class="my_center" href="index.html" ><?php echo (L("_Header_index")); ?></a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle my_center" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_Financial")); ?>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" style="text-align: center;min-width: 130px;">
                            <li><a href="index.php?a=ico"><?php echo (L("_Header_ico")); ?></a></li>
                            <li><a href="index.php?a=exponential"><?php echo (L("_Header_exp")); ?></a></li>
                            <li><a href="index.php?a=arbitrage"><?php echo (L("_Header_arbitrage")); ?></a></li>

                        </ul>
                    </li><!--//dropdown-->
                    <!--<li class="nav-item"><a href="features.html">我要理财</a></li>-->
                    <li class="nav-item"><a class="my_center"  href="index.php?a=safety"><?php echo (L("_Header_safety")); ?></a></li>

                    <li class="nav-item"><a class="my_center"  href="index.php?a=download"><?php echo (L("_Header_app_download")); ?></a></li>


                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle my_center" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_customer_service")); ?>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu"  style="text-align: center;min-width: 130px;">
                            <li><a href="index.php?a=faq"><?php echo (L("_Header_help")); ?></a></li>
                            <li><a href="index.php?a=about"><?php echo (L("_Header_about_us")); ?></a></li>

                            <!--<li><a href="blog-single.html">联系我们</a></li>-->

                        </ul>
                    </li><!--//dropdown-->




                    <li class="nav-item">

                        <a class="dropdown-toggle my_center" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<span class="guoqi my_chinese"></span><?php echo ($language); ?>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu"  style="text-align: center;min-width: 160px;">
                            <li><a href="<?php echo ($action_url); ?>&l=zh-cn"><span class="guoqi my_chinese"></span>简体中文</a></li>
                            <li><a href="<?php echo ($action_url); ?>&l=zh-tw"><span class="guoqi my_hongkong"></span>繁体中文</a></li>
                            <li><a href="<?php echo ($action_url); ?>&l=en-us"><span class="guoqi my_english"></span>English&nbsp;&nbsp;&nbsp;</a></li>
                        </ul>

                        <!--<a class="my_center"  href="javascript:;">-->

                            <!---->
                            <!---->

                            <!--&lt;!&ndash;注册&ndash;&gt;-->
                            <!--<select id="language" onchange="change()" style="appearance:button;background: #304153;font-size: 14px;width: 85px;border: 1px solid gray;">-->
                                <!--<option value="zh-cn">简体中文</option>-->
                                <!--<option value="zh-tw">繁体中文</option>-->
                                <!--<option value="en-us">English</option>-->
                                <!--<i class="fa fa-angle-down"></i>-->

                            <!--</select>-->
                        <!--</a>-->

                    </li>
                    <li class="nav-item"><a class="my_center"  href="index.php?a=signin"><?php echo (L("_Login")); ?></a></li>
                    <li class="nav-item"><a class="my_center"  href="index.php?a=signup"><?php echo (L("_Register")); ?></a></li>


                    <!--<li class="nav-item nav-item-cta last"><a class="btn btn-cta btn-cta-secondary" href="signup.html">注册</a></li>-->
                </ul><!--//nav-->
            </div><!--//navabr-collapse-->
        </nav><!--//main-nav-->
    </div><!--//container-->
</header><!--//header-->
<style>
    .red{
        color: red;
    }
</style>




    <!--Page Title-->
    <section class="page-title">
        <div class="auto-container text-center">

            <!--<h4 class="small-text">We Are Awsome</h4>-->
            <h2 class="page-name">用户中心</h2>

            <!--Bread Crumb-->
            <!--<ul class="bread-crumb clearfix">-->
                <!--<li><a href="#">Home</a></li>-->
                <!--<li class="active">USER CENTER</li>-->
            <!--</ul>-->

        </div>
    </section>

    <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <!--Tabs Box-->
        <div class="auto-container">
            <div class="row clearfix">

                <!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <!--Sidebar Widget / Styled Nav-->
                        <div class="widget sidebar-widget styled-nav">
                            <nav class="nav-outer">
                                <ul>
                                    <li class="current"><a href="#">用户信息</a></li>
                                    <li><a href="#">个人设置</a></li>
                                    <li><a href="#">理财产品</a></li>
                                    <li><a href="#">指数产品</a></li>
                                    <li><a href="#">ICO产品</a></li>
                                    <li><a href="#">修改密码</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!--Sidebar Widget / Contact Widget-->
                        <div class="widget sidebar-widget contact-widget">
                            <h3>Have Questions?<br>Call Us:</h3>
                            <div class="phone-numbers">
                                (+92) 123 456 7896
                            </div>
                        </div>

                    </aside>
                </div><!--End Sidebar-->

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <!--Single Service-->
                    <section class="services-single">

                        <!--Main Image-->
                        <figure class="main-image"><img src="/Public/static/images/resource/featured-image-3.jpg" alt=""></figure>

                        <h2 class="service-title">Awsome Services</h2>
                        <!--Default Text Block-->
                        <div class="default-text-block">
                            <p>But they got diff'rent strokes. It takes diff'rent strokes - it takes diff'rent strokes to move the world. Come and listen to a story about a man named Jed a poor mountaineer barely kept his family fed. Its mission to explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before.</p>
                            <p>Can you tell me how to get how to get to Sesame Street. Sunny Days sweepin' the clouds away. On my way to where the air is sweet. Can you tell me how to get how to get to Sesame Street.</p>
                        </div>
                    </section>

                </div><!--End Content Side-->



            </div>
        </div>
    </div>


    <!--Sponsors Section-->
    <section class="sponsors-section">
        <div class="auto-container">
            <!--Sponsors SLider-->
            <ul class="sponsors-slider">
                <li><a href="#"><img src="/Public/static/images/clients/1.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/2.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/3.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/4.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/5.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/6.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/1.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/2.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/3.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/4.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/5.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/6.png" alt=""></a></li>
            </ul>
        </div>
    </section>


    <!--Main Footer-->
    <footer class="main-footer">

        <!--Footer Upper-->
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget about-widget">
                            <h2>About Sorto</h2>
                            <div class="text">
                                <p>These days are all share them with me oh baby a man is born he's a man of means then along come two they got nothing but their jeans the mate. </p>
                            </div>

                            <div class="social-links">
                                <a href="#"><span class="fa fa-facebook-f"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                <a href="#"><span class="fa fa-instagram"></span></a>
                            </div>

                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget latest-news">
                            <h2>Latest News</h2>
                            <!--News Item-->
                            <div class="news-item">
                                <a href="#" class="news-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</a>
                                <div class="update-time">JANUARY 05, 2016</div>
                            </div>
                            <!--News Item-->
                            <div class="news-item">
                                <a href="#" class="news-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</a>
                                <div class="update-time">JANUARY 02, 2016</div>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column padd-left-60">
                        <div class="footer-widget links-widget">
                            <h2>Quick Links</h2>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>

                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget gallery-widget">
                            <h2>Flickr Widget</h2>
                            <div class="clearfix">
                                <figure class="image"><a href="images/resource/footer-gallery-1.jpg" class="lightbox-image" title="Caption Here"><img src="/Public/static/images/resource/footer-gallery-1.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/footer-gallery-2.jpg" class="lightbox-image" title="Caption Here"><img src="/Public/static/images/resource/footer-gallery-2.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/footer-gallery-3.jpg" class="lightbox-image" title="Caption Here"><img src="/Public/static/images/resource/footer-gallery-3.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/footer-gallery-4.jpg" class="lightbox-image" title="Caption Here"><img src="/Public/static/images/resource/footer-gallery-4.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/footer-gallery-5.jpg" class="lightbox-image" title="Caption Here"><img src="/Public/static/images/resource/footer-gallery-5.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/footer-gallery-6.jpg" class="lightbox-image" title="Caption Here"><img src="/Public/static/images/resource/footer-gallery-6.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <!--Footer Nav-->
                    <nav class="footer-nav pull-left">
                        <ul class="clearfix">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </nav>

                    <!--Copyright-->
                    <div class="copyright pull-right">&copy; Copyrights 2016 <a href="" target="_blank">ThemeCraze</a>. All rights reserved</div>

                </div>
            </div>
        </div>

    </footer>


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon flaticon-transport-2"></span></div>


<script src="/Public/resource/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<script src="/Public/static/js/revolution.min.js"></script>
<script src="/Public/static/js/jquery.fancybox.pack.js"></script>
<script src="/Public/static/js/mixitup.js"></script>
<script src="/Public/static/js/bxslider.js"></script>
<script src="/Public/static/js/owl.js"></script>
<script src="/Public/static/js/wow.js"></script>
<script src="/Public/static/js/script.js"></script>


</body>
</html>