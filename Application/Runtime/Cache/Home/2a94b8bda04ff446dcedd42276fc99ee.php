<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Home</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/Public/img/ico.ico">

    <!---<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>--->
    <!-- Global CSS -->
    <link rel="stylesheet" href="/Public/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/Public/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/Public/assets/plugins/flexslider/flexslider.css">
    <!--index css  server six parts-->
    <link rel="stylesheet" href="/Public/style/hover/css/component.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="/Public/assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--&lt;!&ndash;[if lt IE 9]>-->
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--<![endif]&ndash;&gt;-->

    <!--[if lt IE 9]><script src="/Public/static/js/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="/Public/static/js/respond.js"></script><![endif]-->






    <style>
        .my_center{
            text-align: center;
            font-size: 16px;
        }
        @media screen and (max-width: 375px)   {
            /*.bg-slider-wrapper2{height: 800px}*/
        }


        /*banner重写*/

        .bg-slider-wrapper2 {
            content: "";
            /*position: absolute;*/
            width: 100%;
            /*top: 0;*/
            /*left: 0;*/
            height: 980px;
            /*background: #253340 url('/Public/assets/images/background/bg-header-1.jpg') no-repeat 50% top;*/
            /*background: #253340 url('/Public/img/bb.jpg') no-repeat 50% top;*/
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

        }



        .bg-slider-wrapper {
            content: "";
            /*position: absolute;*/
            width: 100%;
            /*top: 0;*/
            /*left: 0;*/
            height: 980px;
            background: #253340 url('/Public/img/bb.jpg') no-repeat 50% top;

            /*background: #253340 url('/Public/assets/images/background/bg-header-1.jpg') no-repeat 50% top;*/
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .bg-slider-wrapper .flexslider {
            margin: 0;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border: none;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
        }
        .bg-slider-wrapper .flexslider .slide {
            display: block;
            height: 980px;
        }
        .bg-slider-wrapper .flexslider .slide.slide-1 {
            background: #253340 url('/Public/assets/images/background/bg-header-1.jpg') no-repeat 50% top;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height:980px;
        }
        .bg-slider-wrapper .flexslider .slide.slide-2 {
            background: #253340 url('/Public/assets/images/background/bg-header-2.jpg') no-repeat 50% top;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .bg-slider-wrapper .flexslider .slide.slide-3 {
            background: #253340 url('/Public/assets/images/background/bg-header-3.jpg') no-repeat 50% top;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .bg-slider-wrapper .flexslider .flex-control-nav {
            z-index: 30;
            bottom: 30px;
            position: relative;
        }
        .bg-slider-wrapper .flexslider .flex-control-nav li a {
            background: #999;
        }
        .bg-slider-wrapper .flexslider .flex-control-nav li a.flex-active {
            background: #bfbfbf;
        }



        .time_size{

        <?php if($pc=='pc'){ echo 'font-size:20px;
            height:25px;';}else{ echo 'font-size:14px;
            height:18px;';} ?>
        }
        .time_number{


        <?php if($pc=='pc'){ echo 'font-size:30px;
            height:35px;';}else{ echo 'font-size:16px;
            height:20px;';} ?>


        }
        /*a{*/
             /*text-decoration: none;*/
        /*}*/

        .notpc_center{
             <?php if($pc=='notpc'){ echo 'text-align:center;';} ?>
        }


        .padd{
            padding-left:3px;padding-right:3px;
        }


    </style>

</head>

<body class="home-page">
<!-- ******HEADER****** -->


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

    .opencolor{
        color: #ec6952 !important;
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
                    <li class="<?php if('index' == 'index'){ echo 'active';}?>  nav-item"><a class="my_center" href="index.php" ><?php echo (L("_Header_index")); ?></a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle my_center <?php if('index' == 'money'){ echo 'opencolor';}?> " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_Financial")); ?>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" style="text-align: center;min-width: 130px;">

                            <!--onmouseover="this.style.color='#ec6952'" onmouseout="this.style.color='#fff'"-->
                            <li><a class="<?php if('[open]' == 'ico'){ echo 'opencolor';}?>"  href="index.php?a=ico"><?php echo (L("_Header_ico")); ?></a></li>
                            <li><a class="<?php if('[open]' == 'exponential'){ echo 'opencolor';}?>"  href="index.php?a=exponential"><?php echo (L("_Header_exp")); ?></a></li>
                            <li><a class="<?php if('[open]' == 'arbitrage'){ echo 'opencolor';}?>"  href="index.php?a=arbitrage"><?php echo (L("_Header_arbitrage")); ?></a></li>

                        </ul>
                    </li><!--//dropdown-->
                    <!--<li class="nav-item"><a href="features.html">我要理财</a></li>-->
                    <li class="<?php if('index' == 'safety'){ echo 'active';} ?> nav-item"><a class="my_center"  href="index.php?a=safety"><?php echo (L("_Header_safety")); ?></a></li>

                    <li class="nav-item <?php if('index' == 'download'){ echo 'active';} ?>"><a class="my_center"  href="index.php?a=download"><?php echo (L("_Header_app_download")); ?></a></li>


                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle my_center <?php if('index' == 'service'){ echo 'opencolor';}?>" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_customer_service")); ?>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu"  style="text-align: center;min-width: 130px;">
                            <li><a class="<?php if('[open]' == 'faq'){ echo 'opencolor';}?>" href="index.php?a=faq"><?php echo (L("_Header_help")); ?></a></li>
                            <li><a class="<?php if('[open]' == 'about'){ echo 'opencolor';}?>" href="index.php?a=about"><?php echo (L("_Header_about_us")); ?></a></li>

                            <!--<li><a href="blog-single.html">联系我们</a></li>-->

                        </ul>
                    </li><!--//dropdown-->




                    <li class="nav-item">

                        <a class="dropdown-toggle my_center" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<span class="guoqi my_chinese"></span><?php echo ($language); ?>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu"  style="text-align: center;min-width: 160px;">
                            <li><a onmouseover="this.style.color='#ec6952'"onmouseout="this.style.color='#fff'" href="<?php echo ($action_url); ?>&l=zh-cn"><span class="guoqi my_chinese"></span>简体中文</a></li>
                            <li><a onmouseover="this.style.color='#ec6952'"onmouseout="this.style.color='#fff'" href="<?php echo ($action_url); ?>&l=zh-tw"><span class="guoqi my_hongkong"></span>繁体中文</a></li>
                            <li><a onmouseover="this.style.color='#ec6952'"onmouseout="this.style.color='#fff'" href="<?php echo ($action_url); ?>&l=en-us"><span class="guoqi my_english"></span>English&nbsp;&nbsp;&nbsp;</a></li>
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

                    <li class="nav-item"  style="<?php if($account == 'off'){ echo 'display:none;';} ?>"><a class="my_center"  href="index.php?a=account">用户中心</a></li>
                    <li class="nav-item" style="<?php if($account == 'on'){ echo 'display:none;';} ?>"><a class="my_center"  href="index.php?a=signin"><?php echo (L("_Login")); ?></a></li>
                    <li class="nav-item" style="<?php if($account == 'on'){ echo 'display:none;';} ?>"><a class="my_center"  href="index.php?a=signup"><?php echo (L("_Register")); ?></a></li>


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




<!--id="banner_can"-->
<div class="bg-slider-wrapper2" >

    <div class="bg-slider-wrapper">

        <canvas class="constellation"></canvas>


    </div>
    <section class="promo section section-on-bg">
        <div class="container text-center">
            <h2 class="title"><?php echo (L("_Index_banner_title")); ?></h2>
            <p class="intro"><?php echo (L("_Index_banner1_title1")); ?><br/><?php echo (L("_Index_banner2_title2")); ?></p>
            <p>
                <a style="display: inline-block;width: 180px;margin-top: 3px" class="btn btn-cta btn-cta-primary" target="_blank" href="/Public/file/white_paper.pdf"><?php echo (L("_Home_white_book")); ?></a>
                <a style="display: inline-block;width: 180px;margin-top: 3px" class="btn btn-cta btn-cta-primary" target="_blank" href="/Public/file/ico.pdf"><?php echo (L("_Home_ico_rules")); ?></a>

            </p>

            <table style="width: 260px;margin: 0 auto;margin-top:50px;background: transparent;height: 40px;text-align: center;">

                <tr>
                    <td  class="time_number my_day">00</td>
                    <td  class="time_number my_hour">00</td>
                    <td  class="time_number my_minite">00</td>
                    <td  class="time_number my_second">00</td>
                </tr>
                <tr>
                    <td class="time_size"><?php echo (L("_Home_day")); ?></td>
                    <td class="time_size"><?php echo (L("_Home_hour")); ?></td>
                    <td class="time_size"><?php echo (L("_Home_minute")); ?></td>
                    <td class="time_size"><?php echo (L("_Home_second")); ?></td>
                </tr>

            </table>



            <!--<button type="button" class="play-trigger btn-link " data-toggle="modal" data-target="#modal-video" ><i class="fa fa-youtube-play"></i> Watch the video</button>-->
        </div><!--//container-->
    </section><!--//promo-->

</div>



<!--<div class="bg-slider-wrapper">-->
    <!--&lt;!&ndash;<canvas class="constellation slide-1" style="width: 100%;background: url(/Public/assets/images/background/bg-header-1.jpg) no-repeat !important;background-size: 100% 100%"></canvas>&ndash;&gt;-->

    <!--<div class="flexslider bg-slider" id="banner_can">-->
        <!--<ul class="slides">-->
            <!--&lt;!&ndash;<li class="slide slide-1"   style="min-height: 620px;background: url(/Public/img/banner1.jpg) no-repeat !important;background-size: 100%"></li>&ndash;&gt;-->
            <!--<li class="slide slide-1"></li>-->
            <!--<li class="slide slide-2"></li>-->
            <!--<li class="slide slide-3"></li>-->
        <!--</ul>-->
    <!--</div>-->
<!--</div>&lt;!&ndash;//bg-slider-wrapper&ndash;&gt;-->

<!--<section class="promo section section-on-bg" >-->
    <!--<div class="container text-center">-->
        <!--<h2 class="title">铜锣湾基金</h2>-->
        <!--<p class="intro">创立一种新的跨境资产转移、支付协议和去中心化基金平台 <br /> 基于区块链技术，改变传统理财基金</p>-->
        <!--<p>-->
            <!--<a class="btn btn-cta btn-cta-primary" href="signup.html">白皮书</a>-->
            <!--<a class="btn btn-cta btn-cta-primary" href="signup.html">ICO细则</a>-->

        <!--</p>-->
        <!--<button type="button" class="play-trigger btn-link " data-toggle="modal" data-target="#modal-video" ><i class="fa fa-youtube-play"></i> Watch the video</button>-->
    <!--</div>&lt;!&ndash;//container&ndash;&gt;-->
<!--</section>&lt;!&ndash;//promo&ndash;&gt;-->

<div class="sections-wrapper">

    <!-- ******Why Section****** -->
    <section id="why" class="section why" style="padding-bottom: 0px;">
        <div class="container" style="<?php if($pc=='pc'){ echo 'margin-top: -30px;';}else{ echo 'margin-top: -110px;';} ?>">


            <!--<div class="container">-->
                <div class="services blog-list" id="services" style="text-align: center;">
                    <article class="post col-md-12 col-sm-12 col-xs-12" style="">
                        <div class="post-inner">
                            <div style="display: flex;justify-content: center;align-items: center;margin-top: 20px">
                                <div style="width: 80px;height: 3px;background: black;margin-right: 10px;margin-top: -20px;"></div>
                                <h2 class="title text-center" style="margin-bottom: 20px;<?php if($pc!='pc') echo 'font-size:20px'?>"><?php echo (L("_Header_introduction")); ?></h2>
                                <div style="width: 80px;height: 3px;background: black;margin-left: 10px;margin-top: -20px;"></div>
                            </div>

                            <p class="intro padd" style="max-width: 100%;color: #444;text-indent: 2em;text-align: justify;"><?php echo (L("_Index_Project")); ?></p>

                        </div><!--//post-inner-->
                    </article><!--//post-->
                    <article class="post col-md-4 col-sm-12 col-xs-12" style="">
                        <div class="post-inner">
                            <div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
                                <a style="text-decoration: none" class="hi-icon hi-icon-link">Link</a>
                            </div>
                            <h4 ><?php echo (L("_Index_cross")); ?></h4>
                            <p class="intro text-center padd" style="max-width: 100%;color: #444;text-indent: 2em;text-align: justify"><?php echo (L("_Index_cross_content")); ?></p>
                        </div><!--//post-inner-->
                    </article><!--//post-->
                    <article class="post col-md-4 col-sm-12 col-xs-12" style="">
                        <div class="post-inner">
                            <div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a" >
                                <a  style="text-decoration: none" class="hi-icon hi-icon-images">Images</a>
                            </div>
                            <h4><?php echo (L("_Index_otc")); ?></h4>
                            <p class="intro text-center padd" style="max-width: 100%;color: #444;text-indent: 2em;text-align: justify">
                                <?php echo (L("_Index_otc_content")); ?>
                            </p>
                        </div><!--//post-inner-->
                    </article><!--//post-->
                    <article class="post col-md-4 col-sm-12 col-xs-12" style="">
                        <div class="post-inner">
                            <div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a" >
                                <a   style="text-decoration: none" class="hi-icon hi-icon-pencil">Edit</a>
                            </div>
                            <h4><?php echo (L("_Index_ethernet")); ?></h4>
                            <p class="intro text-center padd" style="max-width: 100%;color: #444;text-indent: 2em;text-align: justify"><?php echo (L("_Index_ethernet_content")); ?>

                            </p>
                        </div><!--//post-inner-->
                    </article><!--//post-->
                    <article class="post col-md-4 col-sm-12 col-xs-12" style="">
                        <div class="post-inner">
                            <div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a" >
                                <a  style="text-decoration: none" class="hi-icon hi-icon-earth">Partners</a>
                            </div>
                            <h4><?php echo (L("_Index_payment")); ?></h4>
                            <p class="intro text-center padd" style="max-width: 100%;color: #444;text-indent: 2em;text-align: justify"><?php echo (L("_Index_payment_content")); ?>
                            </p>
                        </div><!--//post-inner-->
                    </article><!--//post-->
                    <article class="post col-md-4 col-sm-12 col-xs-12" style="">
                        <div class="post-inner">
                            <div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a" >
                                <a  style="text-decoration: none" class="hi-icon hi-icon-contract">Contact</a>
                            </div>
                            <h4><?php echo (L("_Index_exchange")); ?></h4>
                            <p class="intro text-center padd" style="max-width: 100%;color: #444;text-indent: 2em;text-align: justify"><?php echo (L("_Index_exchange_content")); ?></p>
                        </div><!--//post-inner-->
                    </article><!--//post-->
                    <article class="post col-md-4 col-sm-12 col-xs-12" style="">
                        <div class="post-inner">
                            <div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a" >
                                <a  style="text-decoration: none" class="hi-icon hi-icon-refresh">Refresh</a>
                            </div>
                            <h4><?php echo (L("_Index_freely")); ?></h4>
                            <p class="intro text-center padd" style="max-width: 100%;color: #444;text-indent: 2em;text-align: justify"><?php echo (L("_Index_freely_content")); ?>
                            </p>
                        </div><!--//post-inner-->
                    </article><!--//post-->
                    <div class="clearfix"></div>

                </div>
            <!--</div>-->




            <!--<div class="row item">-->
                <!--<div class="content col-xs-12 col-md-4">-->
                    <!--<h3 class="title">Save you time and effort</h3>-->
                    <!--<div class="desc">-->
                        <!--<p>Explain one of your product benefits here. Let users know how they can benefit using your product. It’s also a good idea to back it up with a testimonial or tweet from your users.</p>-->
                        <!--<p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>-->
                    <!--</div>-->
                    <!--<div class="quote">-->
                        <!--<div class="quote-profile">-->
                            <!--<img class="img-responsive img-circle" src="/Public/assets/images/people/profile-s-1.png" alt="" />-->
                        <!--</div>&lt;!&ndash;//profile&ndash;&gt;-->
                        <!--<div class="quote-content">-->
                            <!--<blockquote><p><a href="" target="_blank">@velocity</a> Love it! Thank you for making my life easier and saving me time! I’ll definitely recommend it to my friends. :)</p></blockquote>-->
                            <!--<p class="source">@LisaW, Bristol</p>-->
                        <!--</div>&lt;!&ndash;//quote-content&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//quote&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                <!--<figure class="figure col-md-offset-1 col-sm-offset-0 col-xs-offset-0 col-xs-12 col-md-7">-->
                    <!--<img class="img-responsive" src="/Public/assets/images/figures/figure-1.png" alt="" />-->
                    <!--<figcaption class="figure-caption">(Screenshot: Coral - App &amp; website startup kit) </figcaption>-->
                <!--</figure>-->
            <!--</div>&lt;!&ndash;//item&ndash;&gt;-->

            <!--<div class="row item">-->
                <!--<div class="content col-md-push-8 col-sm-push-0 col-xs-push-0 col-xs-12 col-md-4">-->
                    <!--<h3 class="title">Works across all devices</h3>-->
                    <!--<div class="desc">-->
                        <!--<p>Explain one of your product benefits here. Let users know how they can benefit using your product. It’s also a good idea to back it up with a testimonial or tweet from your users.</p>-->
                        <!--<p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>-->
                        <!--<p><i class="fa fa-download"></i> <a href="download.html">Download mobile versions</a></p>-->
                    <!--</div>-->

                    <!--<div class="quote">-->
                        <!--<div class="quote-profile">-->
                            <!--<img class="img-responsive img-circle" src="/Public/assets/images/people/profile-s-2.png" alt="" />-->
                        <!--</div>&lt;!&ndash;//profile&ndash;&gt;-->
                        <!--<div class="quote-content">-->
                            <!--<blockquote><p>I find the mobile app very useful when I'm on the go. Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p></blockquote>-->
                            <!--<p class="source">@JackT, San Francisco</p>-->
                        <!--</div>&lt;!&ndash;//quote-content&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//quote&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                <!--<figure class="figure col-md-pull-4 col-sm-pull-0 col-xs-pull-0 col-xs-12 col-md-7">-->
                    <!--<img class="img-responsive" src="/Public/assets/images/figures/figure-2.png" alt="" />-->
                    <!--<div class="control text-center">-->
                        <!--<button type="button" class="play-trigger" data-toggle="modal" data-target="#modal-video"><i class="fa fa-play"></i></button>-->
                    <!--</div>&lt;!&ndash;//control&ndash;&gt;-->
                <!--</figure>-->
            <!--</div>&lt;!&ndash;//item&ndash;&gt;-->

            <!--<div class="row item ">-->
                <!--<div class="content col-xs-12 col-md-4">-->
                    <!--<h3 class="title">Easy to customise</h3>-->
                    <!--<div class="desc">-->
                        <!--<p>Explain one of your product benefits here. Let users know how they can benefit using your product. It’s also a good idea to back it up with a testimonial or tweet from your users.</p>-->
                        <!--<p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>-->
                    <!--</div>-->
                    <!--<div class="quote">-->
                        <!--<div class="quote-profile">-->
                            <!--<img class="img-responsive img-circle" src="/Public/assets/images/people/profile-s-3.png" alt="" />-->
                        <!--</div>&lt;!&ndash;//profile&ndash;&gt;-->
                        <!--<div class="quote-content">-->
                            <!--<blockquote><p>Nice template! It’s practical and there is no gimmicks. Very easy to customise as well!</p></blockquote>-->
                            <!--<p class="source"><a href="#">@AlexD</a>, London</p>-->
                        <!--</div>&lt;!&ndash;//quote-content&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//quote&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                <!--<figure class="figure col-md-offset-1 col-sm-offset-0 col-xs-offset-0 col-xs-12 col-md-7">-->
                    <!--<img class="img-responsive" src="/Public/assets/images/figures/figure-3.png" alt="" />-->
                    <!--<figcaption class="figure-caption">(Screenshot: <a href="website-templates/responsive-bootstrap-theme-for-startups-tempo/?ref=3wm" target="_blank">Tempo - Bootstrap template for startups)</a> </figcaption>-->

                <!--</figure>-->
            <!--</div>&lt;!&ndash;//item&ndash;&gt;-->
            <!--<hr>-->
            <!--<div class="row item last-item">-->
                <!--&lt;!&ndash;<div class="content col-md-push-8 col-sm-push-0 col-xs-push-0 col-xs-12 col-md-4">&ndash;&gt;-->
                <!--<div class="content">-->
                    <!--<div class="col-lg-12" style="width: 100%;height: 300px;background-image:url('/Public/img/bgImg.jpg')"></div>-->
                <!--</div>&lt;!&ndash;//content&ndash;&gt;-->

            <!--</div>&lt;!&ndash;//item&ndash;&gt;-->


            <!--<div class="feature-lead text-center">-->
                <!--<h4 class="title">Want to discover all the features?</h4>-->
                <!--<p><a class="btn btn-cta btn-cta-secondary" href="features.html">Take a Tour</a></p>-->
            <!--</div>-->
        </div><!--//container-->
    </section><!--//why-->




    <section id="why" class="section why" style="padding: 0px;width: 100%;background: url('/Public/img/appdownload_bg.png');background-repeat: no-repeat;background-size: cover;">
        <div class="container" >
            <div class="row item last-item" style="padding: 30px 0;">
                <div class="content col-md-push-8 col-sm-push-0 col-xs-push-0 col-xs-12 col-md-4" style="padding-bottom: 0px;<?php  if($pc == 'pc'){ echo 'padding-top: 50px;';} ?>">
                    <h3 class="title notpc_center" style="font-weight: 900;"><?php echo (L("_Index_app_download")); ?></h3>
                    <div class="desc notpc_center" style="margin-bottom: 0px;">
                        <p class="notpc_center"><?php echo (L("_Index_app_security")); ?></p>

                        <p class="notpc_center"><?php echo (L("_Index_app_fast")); ?></p>
                        <p class="notpc_center"><?php echo (L("_Index_app_version")); ?></p>
                        <p class="notpc_center"><a style="font-weight: 900;font-size: 20px;text-decoration: none;" href="index.php?a=download"><?php echo (L("_Index_app_more")); ?></a></p>
                        <!--<p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>-->

                        <p class="notpc_center" style="display: inline-block;">
                            <p class="notpc_center" style="display: inline-block;">
                                <a class="btn btn-cta btn-cta-primary btn-ghost" style="width: 150px;background: #304153;" href="https://fir.im/hnp1?release_id=5992d710ca87a8675100079f"><i class="fa fa-apple"></i><span class="text" ><?php echo (L("_Index_ios_download")); ?></span></a><br/>
                                <a class="btn btn-cta btn-cta-primary btn-ghost" style="width: 150px;background: #304153;" href="https://fir.im/hnp1?utm_source=fir&utm_medium=qr"><i class="fa fa-android"></i><span class="text"><?php echo (L("_Index_android_download")); ?></span></a><br/>
                                <a class="btn btn-cta btn-cta-primary btn-ghost" style="width: 150px;background: #304153;" href="signup.html"><i class="fa fa-windows"></i><span class="text"><?php echo (L("_Index_pc_download")); ?></span></a>
                            </p>
                            <!--<p class=" class="download-area"">-->
                            <!--<ul class="list-unstyled download-list" style="<?php if($pc == 'notpc'){ echo 'width: 100%!important;';}?>" >-->
                            <!--<li><a class="btn btn-ghost" style="<?php if($pc == 'notpc'){ echo 'width: 100%!important;';}?>text-align: center;" href="#"><i class="fa fa-apple"></i><span class="text">苹果下载</span> </a></li>-->
                            <!--<li><a class="btn btn-ghost" style="<?php if($pc == 'notpc'){ echo 'width: 100%!important;';}?>text-align: center;" href="#"><i class="fa fa-android"></i><span class="text">安卓下载</span></a></li>-->
                            <!--<li><a class="btn btn-ghost" style="<?php if($pc == 'notpc'){ echo 'width: 100%!important;';}?>text-align: center;" href="#"><i class="fa fa-windows"></i><span class="text">电脑端下载</span></a></li>-->
                            <!--</ul>-->
                            <!--</p>-->
                            <img class="img-responsive" style="display: inline-block;width: 126px;margin:-84px 0 0 8px;" src="index.php?a=qr&level=3&size=4" alt="" />


                        </p>

                    </div>

                    <!--<div class="quote">-->
                        <!--<div class="quote-profile">-->
                            <!--<img class="img-responsive img-block" style="width: 100px;" src="http://wechat.tiny-calf.com/Public/images/wechat.png" alt="" />-->
                        <!--</div>&lt;!&ndash;//profile&ndash;&gt;-->
                        <!--&lt;!&ndash;<div class="quote-content">&ndash;&gt;-->
                            <!--&lt;!&ndash;<blockquote><p>I can connect to like-minded people lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></blockquote>&ndash;&gt;-->
                            <!--&lt;!&ndash;<p class="source">@JackT, San Francisco</p>&ndash;&gt;-->
                        <!--&lt;!&ndash;</div>&lt;!&ndash;//quote-content&ndash;&gt;&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//quote&ndash;&gt;-->


                </div><!--//content-->
                <figure class="figure col-md-pull-4 col-sm-pull-0 col-xs-pull-0 col-xs-12 col-md-7">
                    <img class="img-responsive" src="/Public/img/apppage.png" alt="" />
                </figure>
            </div><!--//item-->
        </div>
    </section>


    <div style="display: none;width: 100%;height:500px;background:url('/Public/img/appdownload_bg.png');background-size:cover;background-repeat: no-repeat;<?php if($pc!='pc')echo'height:700px'?> ">
        <div class="container text-center" style="background-repeat: round;">
            <div class="row" style="<?php if($pc=='pc')echo'display: flex;align-items: center'?>">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center" >
                    <!--<div  style="width: 585px;height: 450px;background: url('/Public/img/app2-en.png');background-repeat: round"></div>-->
                    <img src="/Public/img/apppage.png" class="img-responsive" alt="">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 text-center">
                    <div class="row" >
                        <div>
                            <p style="font-size: 60px;display: inline-block">Tcash&nbsp;</p>
                            <p style="font-size: 60px;display: inline-block;margin-top:20px;padding: 0">App</p>
                        </div>
                    </div>
                    <div class="row text-center" >
                        <div class="col-xs-11  col-lg-6   text-left" style="<?php if($pc=='pc')echo'margin-top: 50px'?>">
                            <p>安全管理：账户管理</p><p>快速交易：一键交易安全快捷</p>
                            <span>最新版本： V1.8.1(2017-5-13)</span>&nbsp
                            <!--<a style="text-decoration: none">了解更多</a><br>-->
                        </div>
                        <div class="col-lg-6"></div>
                        <div class="col-xs-11 col-sm-12 col-md-6 col-lg-6">
                            <br>
                            <div style="position:relative;left:30px;width: 190px;height: 70px;background: rgba(0,0,0,0.3);border-radius: 8px;>">&nbsp&nbsp
                                <i style="position: absolute;left: 10px" class="fa fa-android fa-4x" aria-hidden="true"></i>
                                <div style="position: absolute;right: 0;top: 0;font-weight: bold">Android&nbsp</div>
                                <div style="position: absolute;right: 0;bottom: 0;font-weight: bold">立即下载&nbsp</div>

                            </div>
                            <br>
                            <div style="position:relative;left:30px;width: 190px;height: 70px;background: rgba(0,0,0,0.3);border-radius: 8px;">&nbsp&nbsp
                                <i style="position: absolute;left: 10px" class="fa fa-apple fa-4x" aria-hidden="true"></i>
                                <div style="position: absolute;right: 0;top: 0;font-weight: bold">Iphone&nbsp</div>
                                <div style="position: absolute;right: 0;bottom: 0;font-weight: bold">立即下载&nbsp</div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ******Testimonials Section****** -->
    <!--<div style="background:#f5f5f5;width: 100%;height: 30px; "></div>-->
    <section class="section testimonials">
        <div class="container">
            <h2 class="title text-center"><?php echo (L("_Header_team_member")); ?></h2>
            <div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                    <!--<li data-target="#testimonials-carousel" data-slide-to="2"></li>-->
                </ol><!--//carousel-indicators-->
                <div class="carousel-inner">
                    <div class="item active">
                        <figure class="profile"><img style="width: 140px;height: 140px;border-radius: 100%" src="/Public/assets/images/people/shen.jpg" alt="" /></figure>
                        <div class="content">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p><?php echo (L("_Index_team_content1")); ?></p>
                            </blockquote>
                            <p class="source"><?php echo (L("_Index_team_name1")); ?><br /><span class="title">CTO</span></p>
                        </div><!--//content-->
                    </div><!--//item-->
                    <div class="item">
                        <figure class="profile"><img style="width: 140px;height: 140px;border-radius: 100%" src="/Public/assets/images/people/chang.jpg" alt="" /></figure>
                        <div class="content">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p><?php echo (L("_Index_team_content2")); ?></p>
                            </blockquote>
                            <p class="source"><?php echo (L("_Index_team_name2")); ?><br /><span class="title">COO</span></p>
                        </div><!--//content-->
                    <!--</div>&lt;!&ndash;//item&ndash;&gt;-->
                    <!--<div class="item">-->
                        <!--<figure class="profile"><img src="/Public/assets/images/people/profile-m-3.png" alt="" /></figure>-->
                        <!--<div class="content">-->
                            <!--<blockquote>-->
                                <!--<i class="fa fa-quote-left"></i>-->
                                <!--<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.</p>-->
                            <!--</blockquote>-->
                            <!--<p class="source">Tony Lee<br /><span class="title">CTO, Lorem Ipsum</span></p>-->
                        <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//item&ndash;&gt;-->
                </div><!--//carousel-inner-->

            </div><!--//carousel-->
        </div><!--//container-->
    </section><!--//testimonials-->

    <!-- ******Press Section****** -->
    <!--<section class="section press">-->
        <!--<div class="container text-center">-->
            <!--<h2 class="title">Press Coverage</h2>-->
            <!--<ul class="press-list list-inline row">-->
                <!--<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-1.png" alt="" /></a></li>-->
                <!--<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-2.png" alt="" /></a></li>-->
                <!--<li class="xs-break col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-3.png" alt="" /></a></li>-->
                <!--<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-4.png" alt="" /></a></li>-->
                <!--<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-5.png" alt="" /></a></li>-->
                <!--<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-6.png" alt="" /></a></li>-->
            <!--</ul>&lt;!&ndash;//press-list&ndash;&gt;-->
            <!--<ul class="press-list list-inline row last">-->
                <!--<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-7.png" alt="" /></a></li>-->
                <!--<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-8.png" alt="" /></a></li>-->
                <!--<li class="xs-break col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-9.png" alt="" /></a></li>-->
                <!--<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-10.png" alt="" /></a></li>-->
                <!--<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-11.png" alt="" /></a></li>-->
                <!--<li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-12.png" alt="" /></a></li>-->
            <!--</ul>&lt;!&ndash;//press-list&ndash;&gt;-->

            <!--&lt;!&ndash;<div class="press-lead text-center">&ndash;&gt;-->
                <!--&lt;!&ndash;<h3 class="title">Have press inquires?</h3>&ndash;&gt;-->
                <!--&lt;!&ndash;<p class="press-links"><a href="#">Download our press kit</a> or <a href="contact.html">Get in touch</a></p>&ndash;&gt;-->
            <!--&lt;!&ndash;</div>&ndash;&gt;-->

        <!--</div>&lt;!&ndash;//container&ndash;&gt;-->
    <!--</section>&lt;!&ndash;//press&ndash;&gt;-->

    <!-- ******CTA Section****** -->
    <section id="cta-section" class="section cta-section text-center home-cta-section" style="min-height: 370px;">
        <div class="container">
            <h2 class="title"><?php echo (L("_Index_right_join")); ?></h2>
            <p class="intro"><?php echo (L("_Index_right_join1")); ?></p>
            <p><a class="btn btn-cta btn-cta-primary" href=""  style="" target="_blank"><?php echo (L("_Index_right_join2")); ?></a></p>
        </div><!--//container-->
    </section><!--//cta-section-->

</div><!--//section-wrapper-->



<!-- ******FOOTER****** -->
<!--<footer class="footer" style="background: #253340;">-->
    <footer class="footer" style="background: #304153 !important;">
    <div class="footer-content" >
        <div class="container">
            <div class="row">
                <div class="footer-col links col-md-2 col-sm-4 col-xs-12">
                    <div class="footer-col-inner">
                        <h3 class="title"  style="text-align: center;margin: 0px;">


                            <img style="width: 180px;" src="/Public/img/logo22.png" >


                        </h3>
                        <p  style="text-align: center;padding-left: 14px;"><?php echo (L("_Footer_hours")); ?></p>
                        <!--<ul class="list-unstyled">-->
                        <!--<li><a href="#"><i class="fa fa-caret-right"></i>Tcash简介</a></li>-->
                        <!--<li><a href="#"><i class="fa fa-caret-right"></i>帮助中心</a></li>-->
                        <!--<li><a href="#"><i class="fa fa-caret-right"></i>联系我们</a></li>-->
                        <!--<li><a href="#"><i class="fa fa-caret-right"></i>Jobs</a></li>-->
                        <!--<li><a href="#"><i class="fa fa-caret-right"></i>Contact us</a></li>-->
                        <!--</ul>-->
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->



                <div class="footer-col links col-md-2 col-sm-4 col-xs-12">
                    <div class="footer-col-inner" style="text-align: center;">
                        <h3 class="title" style="font-size: 26px;"><?php echo (L("_Footer_about_us")); ?></h3>
                        <ul class="list-unstyled" style="font-size: 16px;">
                            <li><a href="#" style="text-decoration: none;"><i class="fa fa-caret-right"></i><?php echo (L("_Footer_profile")); ?></a></li>
                            <li><a href="#" style="text-decoration: none;"><i class="fa fa-caret-right"></i><?php echo (L("_Footer_app_download1")); ?>&nbsp;&nbsp;</a></li>
                            <li><a href="#" style="text-decoration: none;"><i class="fa fa-caret-right"></i><?php echo (L("_Footer_help")); ?>&nbsp;&nbsp;</a></li>

                            <!--<li><a href="#"><i class="fa fa-caret-right"></i>Jobs</a></li>-->
                            <!--<li><a href="#"><i class="fa fa-caret-right"></i>Contact us</a></li>-->
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->



                <div class="footer-col links col-md-2 col-sm-4 col-xs-6 sm-break">
                    <div class="footer-col-inner">
                        <h3 class="title" style="text-align: center;">


                            <img style="width: 110px;" src="http://wechat.tiny-calf.com/Public/images/wechat.png">

                        </h3>

                        <p style="text-align: center;font-size: 16px;"><?php echo (L("_Footer_WeChat")); ?></p>

                        <!--<ul class="list-unstyled">-->
                        <!--<li><a href="#"><i class="fa fa-caret-right"></i>Help</a></li>-->
                        <!--<li><a href="#"><i class="fa fa-caret-right"></i>Documentation</a></li>-->
                        <!--<li><a href="#"><i class="fa fa-caret-right"></i>Terms of services</a></li>-->
                        <!--<li><a href="#"><i class="fa fa-caret-right"></i>Privacy</a></li>-->
                        <!--</ul>-->
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->



                <div class="footer-col links col-md-2 col-sm-4 col-xs-6 sm-break">
                    <div class="footer-col-inner">
                        <h3 class="title" style="text-align: center;">


                            <img style="width: 110px;" src="http://wechat.tiny-calf.com/Public/images/wechat.png">

                        </h3>

                        <p style="text-align: center;font-size: 16px;"><?php echo (L("_Footer_qq")); ?></p>

                        <!--<ul class="list-unstyled">-->
                        <!--<li><a href="#"><i class="fa fa-caret-right"></i>Help</a></li>-->
                        <!--<li><a href="#"><i class="fa fa-caret-right"></i>Documentation</a></li>-->
                        <!--<li><a href="#"><i class="fa fa-caret-right"></i>Terms of services</a></li>-->
                        <!--<li><a href="#"><i class="fa fa-caret-right"></i>Privacy</a></li>-->
                        <!--</ul>-->
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->




                <div class="footer-col connect col-xs-12 col-md-4">
                    <div class="footer-col-inner" style="text-align: center;">
                        <ul class="social list-inline">
                            <!--<li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>-->
                            <li><a><img src="/Public/img/qq1.svg" onmousemove="this.src='/Public/img/qq2.svg'" onmouseout="this.src='/Public/img/qq1.svg'" alt=""></a></li>
                            <li><a><img src="/Public/img/wechat1.svg" onmousemove="this.src='/Public/img/wechat2.svg'" onmouseout="this.src='/Public/img/wechat1.svg'" alt=""></a></li>
                            <li><a><img src="/Public/img/microblog1.svg" onmousemove="this.src='/Public/img/microblog2.svg'" onmouseout="this.src='/Public/img/microblog1.svg'" alt=""></a></li>
                            <li><a><img src="/Public/img/twitter1.svg" onmousemove="this.src='/Public/img/twitter2.svg'"  onmouseout="this.src='/Public/img/twitter1.svg'" alt=""></a></li>
                            </ul>
                        <div class="form-container">
                            <!--<p class="intro">Stay up to date with the latest news and offers from Velocity</p>-->
                            <form class="signup-form navbar-form">
                                <div class="form-group" style="width: 150px;margin-right: 5px;display: inline-block;">
                                    <input  style="width: 150px;" type="text" class="form-control" placeholder="<?php echo (L("_Footer_email")); ?>">
                                </div>
                                <button style="width: 130px;display: inline-block;" type="submit" class="btn btn-cta btn-cta-primary"><?php echo (L("_Footer_submit")); ?></button>
                            </form>
                            <div class="footer-col-inner" style="font-size: 16px;padding-top:10px;">
                                <p class="tel" style="padding-bottom: 0px;margin-bottom: 5px;"><i class="fa fa-phone"></i> 0800 123 4567</p>
                                <p class="email" style="padding-top: 0px;margin-top: 0px;"><i class="fa fa-envelope-o"></i><a href="#"> enquires@ebo.com</a></p>
                            </div>
                        </div><!--//subscription-form-->
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
                <div class="clearfix"></div>
            </div><!--//row-->
            <div class="row has-divider" style="display: none;">
                <div class="footer-col download col-xs-12 col-md-6">
                    <div class="footer-col-inner">
                        <h3 class="title">Mobile apps</h3>
                        <ul class="list-unstyled download-list">
                            <li><a class="btn btn-ghost" href="#"><i class="fa fa-apple"></i><span class="text">Download for iOS</span> </a></li>
                            <li><a class="btn btn-ghost" href="#"><i class="fa fa-android"></i><span class="text">Download for Android</span></a></li>
                            <li><a class="btn btn-ghost" href="#"><i class="fa fa-windows"></i><span class="text">Windows coming soon...</span></a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//download-->
                <div class="footer-col contact col-xs-12 col-md-6">
                    <div class="footer-col-inner">
                        <h3 class="title">Contact us</h3>
                        <p class="adr clearfix">
                            <i class="fa fa-map-marker pull-left"></i>
                            <span class="adr-group pull-left">
                                    <span class="street-address">College Green</span><br>
                                    <span class="region">56 College Green Road</span><br>
                                    <span class="postal-code">BS1 XR18</span><br>
                                    <span class="country-name">UK</span>
                                </span>
                        </p>
                        <p class="tel"><i class="fa fa-phone"></i> 0800 123 4567</p>
                        <p class="email"><i class="fa fa-envelope-o"></i><a href="#"> enquires@ebo.com</a></p>
                        <a href="" class="twitter-follow-button" data-show-count="false">Follow @3rdwave_themes</a>
                    </div><!--//footer-col-inner-->
                </div><!--//contact-->
            </div>
        </div><!--//container-->
    </div><!--//footer-content-->
    <div class="bottom-bar">
        <div class="container" style="text-align: center;">
            <small class="copyright">Copyright &copy; 2017.Company 铜锣湾 All rights reserved.</small>
        </div><!--//container-->
    </div><!--//bottom-bar-->
</footer><!--//footer-->

<!-- Video Modal -->
<div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="videoModalLabel" class="modal-title sr-only">Video Tour</h4>
            </div>
            <div class="modal-body">
                <div class="video-container">
                    <iframe id="vimeo-video" src="" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div><!--//video-container-->
            </div><!--//modal-body-->
        </div><!--//modal-content-->
    </div><!--//modal-dialog-->
</div><!--//modal-->





<script src="/Public/assets/js/core.min.js"></script>
<script src="/Public/assets/js/thesaas.min.js"></script>




<!-- Javascript -->
<script type="text/javascript" src="/Public/assets/plugins/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="/Public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/assets/plugins/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="/Public/assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="/Public/assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
<script type="text/javascript" src="/Public/assets/plugins/FitVids/jquery.fitvids.js"></script>
<script type="text/javascript" src="/Public/assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/Public/assets/js/main.js"></script>


<!--<script type="text/javascript" src="/Public/static/js/canvas_line.js"></script>-->

<!-- Vimeo video API -->
<script src="/Public/assets/js/froogaloop2.min.js"></script>
<script type="text/javascript" src="/Public/assets/js/vimeo.js"></script>


<script>


    var screenheight = $(window).height();
    console.log(screenheight);
//    $(".constellation").css("height",screenheight);

    $(".bg-slider-wrapper").css("height",screenheight);
    $(".bg-slider-wrapper2").css("height",screenheight);


</script>
<script>





    function PrefixInteger(num, length) {
        return (Array(length).join('0') + num).slice(-length);
    }

    var rest = <?php echo ($rest); ?>;

    //    console.log(rest);

    $day = Math.floor(rest/(60*60*24));

    //    console.log($day);

    $hour = Math.floor((rest - $day * (60*60*24))/(60*60));

    //    console.log($hour);

    $minite = Math.floor((rest - $day * (60*60*24) - $hour * (60*60))/60);

    //    console.log($minite);

    $second = Math.floor(rest - $day * (60*60*24) - $hour * (60*60) - $minite * 60);

    //    console.log($second);

    $day = PrefixInteger($day,2);
    $hour = PrefixInteger($hour,2);
    $minite = PrefixInteger($minite,2);
    $second = PrefixInteger($second,2);

    $(".my_day").html($day);
    $(".my_hour").html($hour);
    $(".my_minite").html($minite);
    $(".my_second").html($second);

    window.setInterval(function(){

        rest--;

//        console.log(rest);

        $day = Math.floor(rest/(60*60*24));

//        console.log($day);

        $hour = Math.floor((rest - $day * (60*60*24))/(60*60));

//        console.log($hour);

        $minite = Math.floor((rest - $day * (60*60*24) - $hour * (60*60))/60);

//        console.log($minite);

        $second = Math.floor(rest - $day * (60*60*24) - $hour * (60*60) - $minite * 60);

//        console.log($second);

        $day = PrefixInteger($day,2);
        $hour = PrefixInteger($hour,2);
        $minite = PrefixInteger($minite,2);
        $second = PrefixInteger($second,2);

        $(".my_day").html($day);
        $(".my_hour").html($hour);
        $(".my_minite").html($minite);
        $(".my_second").html($second);
    },1000);


</script>




</body>
</html>