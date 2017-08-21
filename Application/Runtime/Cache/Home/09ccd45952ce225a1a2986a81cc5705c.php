<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>关于我们-Tcash铜锣湾基金</title>
    <meta name="keywords" content="关于我们_什么是Tcash_铜锣湾基金" />
    <meta name="description" content="铜锣湾基金关于我们为您提供什么是Tcash以及客服微信、客服QQ、客服电话、官方邮箱等帮助."/>
    <!-- Meta -->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <!---<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>--->
    <!-- Global CSS -->
    <link rel="stylesheet" href="/Public/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/Public/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/Public/assets/plugins/flexslider/flexslider.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="/Public/assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .changeColor:hover{
            color: #f06060;
        }
        .iconPadding{
            margin-top: 20px;
        }
    </style>

</head>

<body class="features-page">
<!-- ******HEADER****** -->

<style>

    html,body,div,p,a{
        font-family: "微软雅黑" !important;
    }

    .scrolled{
        background: #304153 !important;
        /*background: #888 !important;*/

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
    @media (max-width: 992px){
       .header {background: #304158}
    }
</style>


<header id="header" class="header navbar-fixed-top" style="<?php if($pc!='pc'){echo 'background:rgba(0,0,0,0)';}?>">
    <!--<div class="top" >-->
        <!--<span>欢迎来到铜锣湾比特币基金</span>-->
    <!--</div>-->

    <div class="container">
        <h1 class="logo">
            <!--<a href="index.html"><span class="text"><img src="/Public/img/logo.png"></span></a>-->
            <!--<a href="index.html"><img src="/Public/img/logo.png"></a>-->
            <img style="width: 200px;line-height: 70px;margin-top:0px;vertical-align: middle;padding: 10px;" src="/Public/images/logo.png">

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
                    <li class="<?php if('service' == 'index'){ echo 'active';}?>  nav-item"><a class="my_center" href="index.php" >&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_index")); ?></a></li>
                    <!--<li class="nav-item dropdown">-->
                        <!--<a class="dropdown-toggle my_center <?php if('service' == 'money'){ echo 'opencolor';}?> " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_Financial")); ?>&nbsp;<i class="fa fa-angle-down"></i></a>-->
                        <!--<ul class="dropdown-menu" style="text-align: center;min-width: 130px;">-->

                            <!--&lt;!&ndash;onmouseover="this.style.color='#ec6952'" onmouseout="this.style.color='#fff'"&ndash;&gt;-->
                            <!--<li><a class="<?php if('about' == 'ico'){ echo 'opencolor';}?>"  href="index.php?a=ico"><?php echo (L("_Header_ico")); ?></a></li>-->
                            <!--<li><a class="<?php if('about' == 'exponential'){ echo 'opencolor';}?>"  href="index.php?a=exponential"><?php echo (L("_Header_exp")); ?></a></li>-->
                            <!--<li><a class="<?php if('about' == 'arbitrage'){ echo 'opencolor';}?>"  href="index.php?a=arbitrage"><?php echo (L("_Header_arbitrage")); ?></a></li>-->

                        <!--</ul>-->
                    <!--</li>&lt;!&ndash;//dropdown&ndash;&gt;-->
                    <!--<li class="nav-item"><a href="features.html">我要理财</a></li>-->
                    <!--<li class="<?php if('service' == 'safety'){ echo 'active';} ?> nav-item"><a class="my_center"  href="index.php?a=safety"><?php echo (L("_Header_safety")); ?></a></li>-->

                    <li class="nav-item <?php if('service' == 'download'){ echo 'active';} ?>"><a class="my_center"  href="index.php?a=download">&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_app_download")); ?></a></li>


                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle my_center <?php if('service' == 'service'){ echo 'opencolor';}?>" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_customer_service")); ?>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu"  style="text-align: center;min-width: 130px;">
                            <li><a class="<?php if('about' == 'faq'){ echo 'opencolor';}?>" href="index.php?a=faq"><?php echo (L("_Header_help")); ?></a></li>
                            <li><a class="<?php if('about' == 'about'){ echo 'opencolor';}?>" href="index.php?a=about"><?php echo (L("_Header_about_us")); ?></a></li>

                            <!--<li><a href="blog-single.html">联系我们</a></li>-->

                        </ul>
                    </li><!--//dropdown-->

                    <li class="nav-item dropdown" style="<?php if($account == 'off'){ echo 'display:none;';} ?>">
                        <a class="dropdown-toggle my_center " data-toggle="dropdown" data-hover="dropdown" data-delay="0" style="cursor:pointer;" data-close-others="false" onclick="window.location.href='index.php?a=account';" >&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['account']['phone']; ?>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu"  style="text-align: center;min-width: 130px;">
                            <li><a class="" href="index.php?a=account"><?php echo (L("_user_1")); ?></a></li>
                            <li><a class="" href="index.php?a=logout"><?php echo (L("_sign_out")); ?></a></li>

                            <!--<li><a href="blog-single.html">联系我们</a></li>-->

                        </ul>
                    </li><!--//dropdown-->
                    <!--<li class="nav-item dropdown"  style="<?php if($account == 'off'){ echo 'display:none;';} ?>">-->
                        <!--<a class="dropdown-toggle my_center"  href="index.php?a=account"><?php echo (L("_user_center")); ?></a>-->
                        <!--<ul class="dropdown-menu"  style="text-align: center;min-width: 130px;">-->
                            <!--<li><a class="<?php if('about' == 'faq'){ echo 'opencolor';}?>" href="index.php?a=faq"><?php echo (L("_Header_help")); ?></a></li>-->
                            <!--<li><a class="<?php if('about' == 'about'){ echo 'opencolor';}?>" href="index.php?a=about"><?php echo (L("_Header_about_us")); ?></a></li>-->

                            <!--&lt;!&ndash;<li><a href="blog-single.html">联系我们</a></li>&ndash;&gt;-->

                        <!--</ul>-->
                    <!--</li>-->


                    <li class="nav-item dropdown">

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

                    <li class="nav-item" style="<?php if($account == 'on'){ echo 'display:none;';} ?>"><a class="my_center"  href="index.php?a=signin"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?php echo (L("_Login")); ?></a></li>
                    <li class="nav-item" style="<?php if($account == 'on'){ echo 'display:none;';} ?>"><a class="my_center"  href="index.php?a=signup"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;<?php echo (L("_Register")); ?></a></li>
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



<!--<div class="headline-bg">-->
<!--</div>&lt;!&ndash;//headline-bg&ndash;&gt;-->

<!-- ******Video Section****** section-on-bg-->
<section class="features-video section " style="background:url('/Public/images/about.jpg') no-repeat;background-size:100% 100%;height: 500px;">
    <div class="container text-center">
        <h2 class="title"><?php echo (L("_about_number")); ?></h2>
        <div class="" style="color:#fff;width: 100%">
            <!--<iframe src="/player.vimeo.com/video/90299717?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
            <?php echo (L("_about_number_1")); ?>
        </div><!--//video-container-->
        <!--<div class="video-container">-->
        <!--<iframe src="/player.vimeo.com/video/90299717?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
        <!--</div>&lt;!&ndash;//video-container&ndash;&gt;-->
    </div><!--//container-->
</section><!--//feature-video-->

<div class="features-tabbed section blog container" >

    <div class="features-tabbed section blog container" style="padding:0px 0px 20px; margin-top: -40px;<?php if($pc=='pc') echo 'margin-top:0px'?>">
        <div class="row" style="margin-top: -20px;">
            <div id="blog-mansonry" class="blog-list">
                <article class="post col-md-12 col-sm-12 col-xs-12" style="">
                    <div class="post-inner">
                        <h3 class="post-title my_title" style="text-align: center;padding-top: 5px;"><?php echo (L("_about_number_2")); ?></h3>

                        <div class="content" style="padding-top: 5px; text-indent:35px;">
                            <div class="post-entry">
                                <p class="indent"  ><?php echo (L("_about_number_3")); ?></p>
                                <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                            </div>
                            <!--<div class="meta">-->
                            <!--<ul class="meta-list list-inline">-->
                            <!--<li class="post-time post_date date updated">16th Oct, 2014</li>-->
                            <!--<li class="post-author"> by <a href="#">James Lee</a></li>-->
                            <!--<li class="post-comments-link">-->
                            <!--<a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>8</a>-->
                            <!--</li>-->
                            <!--</ul>&lt;!&ndash;//meta-list&ndash;&gt;-->
                            <!--</div>&lt;!&ndash;meta&ndash;&gt;-->
                        </div><!--//content-->
                    </div><!--//post-inner-->
                </article><!--//post-->
            </div><!--//blog-list-->
        </div><!--//row-->

    </div><!--//blog-->
    <div class="features-tabbed section blog container" style="padding:0px 0px 0px;">
        <div class="row" style="margin: 0px;">
            <div id="blog-mansonry" class="blog-list">
                <article class="post col-md-3 col-sm-12 col-xs-12" style="">
                    <div class="post-inner">
                        <div class=" text-center iconPadding">
                            <i class="fa fa-qq fa-3x changeColor" aria-hidden="true"></i>
                            <div class="content">
                                <div class="post-entry">
                                    <h3 class="post-title my_title DivDis" style=""><?php echo (L("_about_number_4")); ?></h3>
                                    <p class="indent DivDis">3283719599</p>
                                    <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                                </div>
                            </div><!--//content-->
                        </div><!--//post-inner-->
                    </div><!--//post-inner-->
                </article><!--//post-->
                <article class="post col-md-3 col-sm-12 col-xs-12" style="">
                    <div class="post-inner">
                        <div class=" text-center iconPadding">
                            <i class="fa fa-weixin fa-3x changeColor" aria-hidden="true"></i>
                            <div class="content ">
                                <div class="post-entry">
                                    <h3 class="post-title my_title DivDis" style=""><?php echo (L("_about_number_5")); ?></h3>
                                    <p class="indent DivDis">wxid_cflijac0spv212</p>
                                    <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                                </div>
                            </div><!--//content-->
                        </div><!--//post-inner-->
                    </div><!--//post-inner-->
                </article><!--//post-->
                <article class="post col-md-3 col-sm-12 col-xs-12" style="">
                    <div class="post-inner">
                        <div class=" text-center iconPadding">
                            <i class="fa fa-phone fa-3x changeColor" aria-hidden="true"></i>
                            <div class="content" >
                                <div class="post-entry">
                                    <h3 class="post-title my_title DivDis" style=""><?php echo (L("_about_number_6")); ?></h3>
                                    <p class="indent DivDis">17695540023</p>
                                    <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                                </div>
                            </div><!--//content-->
                        </div><!--//post-inner-->
                    </div><!--//post-inner-->
                </article><!--//post-->
                <article class="post col-md-3 col-sm-12 col-xs-12" style="">
                    <div class="post-inner">
                        <div class=" text-center iconPadding">
                            <i class="fa fa-envelope-o fa-3x changeColor" aria-hidden="true"></i>
                            <div class="content" >
                                <div class="post-entry">
                                    <h3 class="post-title my_title DivDis" style=""><?php echo (L("_about_number_7")); ?></h3>
                                    <p class="indent DivDis">3283719599@qq.com</p>
                                    <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                                </div>
                            </div><!--//content-->
                        </div><!--//post-inner-->
                    </div><!--//post-inner-->
                </article><!--//post-->
            </div><!--//blog-list-->
        </div><!--//row-->

    </div><!--//blog-->

    <!--<div class="features-tabbed section blog container" style="padding:0px 0px 10px;margin-top:100px;">-->
        <!--<div class="row features-tabbed " style="margin: 0px;">-->
            <!--<div id="blog-mansonry " class="blog-list">-->
                <!--&lt;!&ndash;关于我们4板块开始&ndash;&gt;-->

                <!--<article class="post col-md-3 col-sm-6 col-xs-12" style="">-->

                <!--</article>&lt;!&ndash;//post&ndash;&gt;-->
                <!--<article class="post col-md-3 col-sm-6 col-xs-12" style="">-->
                    <!--<div class=" text-center">-->
                        <!--<i class="fa fa-phone fa-3x changeColor" aria-hidden="true"></i>-->
                        <!--<div class="content" style="margin: 0 auto;width: 260px">-->
                            <!--<div class="post-entry">-->
                                <!--<h3 class="post-title my_title DivDis" style="">客服电话</h3>-->
                                <!--<p class="indent DivDis">12121212</p>-->
                                <!--&lt;!&ndash;<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>&ndash;&gt;-->
                            <!--</div>-->
                        <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//post-inner&ndash;&gt;-->
                <!--</article>&lt;!&ndash;//post&ndash;&gt;-->

                <!--<article class="post col-md-3 col-sm-6 col-xs-12" style="">-->
                    <!--<div class=" text-center">-->
                        <!--<span>-->
                        <!--&lt;!&ndash;<span style="width: 100px;height: 100px;display: inline-block;border: 5px solid gray;border-radius: 100%;text-align: center;line-height: 100px">&ndash;&gt;-->
                            <!--<i class="fa fa-envelope-o fa-3x changeColor" aria-hidden="true"></i>-->
                        <!--</span>-->

                        <!--<div class="content" style="margin: 0 auto;width: 260px">-->
                            <!--<div class="post-entry">-->
                                <!--<h3 class="post-title my_title DivDis" style="">客服邮箱</h3>-->
                                <!--<p class="indent DivDis">12121212</p>-->
                                <!--&lt;!&ndash;<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>&ndash;&gt;-->
                            <!--</div>-->
                        <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//post-inner&ndash;&gt;-->
                <!--</article>&lt;!&ndash;//post&ndash;&gt;-->
                <!--&lt;!&ndash;关于我们4板块结束&ndash;&gt;-->

                <!--&lt;!&ndash;<article class="post col-md-4 col-sm-6 col-xs-12">&ndash;&gt;-->
                <!--&lt;!&ndash;<div class="post-inner">&ndash;&gt;-->
                <!--&lt;!&ndash;&lt;!&ndash;<figure class="post-thumb">&ndash;&gt;&ndash;&gt;-->
                <!--&lt;!&ndash;&lt;!&ndash;<a href="blog-single.html"><img class="img-responsive" src="/Public/assets/images/blog/post-2-thumb.jpg" alt="" /></a>&ndash;&gt;&ndash;&gt;-->
                <!--&lt;!&ndash;&lt;!&ndash;</figure>&lt;!&ndash;//post-thumb&ndash;&gt;&ndash;&gt;&ndash;&gt;-->
                <!--&lt;!&ndash;<div class="content" style="text-align: center;background: transparent;">&ndash;&gt;-->
                <!--&lt;!&ndash;<h3 class="post-title my_title" style="padding: 4px 0;font-size: 30px !important;">起投金额</h3>&ndash;&gt;-->
                <!--&lt;!&ndash;<div class="post-entry">&ndash;&gt;-->
                <!--&lt;!&ndash;<p style="padding: 10px 0 20px;font-size: 20px;"><span style="font-size: 30px;color: red;font-weight: 900;">￥</span><span style="color: red;font-weight: 900;font-size: 25px;">10000元</span></p>&ndash;&gt;-->
                <!--&lt;!&ndash;&lt;!&ndash;<a class="read-more" href="blog-single.html">购买 <i class="fa fa-long-arrow-right"></i></a>&ndash;&gt;&ndash;&gt;-->

                <!--&lt;!&ndash;<button id="invest" type="button" data-dismiss="modal" aria-hidden="true" class="btn btn-cta btn-cta-primary" style="margin-bottom: 25px;font-size: 20px;text-align: center;">立即投资</button>&ndash;&gt;-->

                <!--&lt;!&ndash;<p style="color: red;"><img src="/Public/img/danger.png"/> 数字货币投资存在一定的风险，请适量控制您的资金</p>&ndash;&gt;-->
                <!--&lt;!&ndash;</div>&ndash;&gt;-->
                <!--&lt;!&ndash;&lt;!&ndash;<div class="meta">&ndash;&gt;&ndash;&gt;-->
                <!--&lt;!&ndash;&lt;!&ndash;<ul class="meta-list list-inline">&ndash;&gt;&ndash;&gt;-->
                <!--&lt;!&ndash;&lt;!&ndash;<li class="post-time post_date date updated">23rd Sep, 2014</li>&ndash;&gt;&ndash;&gt;-->
                <!--&lt;!&ndash;&lt;!&ndash;<li class="post-author"> by <a href="#">James Lee</a></li>&ndash;&gt;&ndash;&gt;-->
                <!--&lt;!&ndash;&lt;!&ndash;<li class="post-comments-link">&ndash;&gt;&ndash;&gt;-->
                <!--&lt;!&ndash;&lt;!&ndash;<a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>3</a>&ndash;&gt;&ndash;&gt;-->
                <!--&lt;!&ndash;&lt;!&ndash;</li>&ndash;&gt;&ndash;&gt;-->
                <!--&lt;!&ndash;&lt;!&ndash;</ul>&lt;!&ndash;//meta-list&ndash;&gt;&ndash;&gt;&ndash;&gt;-->
                <!--&lt;!&ndash;&lt;!&ndash;</div>&lt;!&ndash;meta&ndash;&gt;&ndash;&gt;&ndash;&gt;-->
                <!--&lt;!&ndash;</div>&lt;!&ndash;//content&ndash;&gt;&ndash;&gt;-->
                <!--&lt;!&ndash;</div>&lt;!&ndash;//post-inner&ndash;&gt;&ndash;&gt;-->
                <!--&lt;!&ndash;</article>&lt;!&ndash;//post&ndash;&gt;&ndash;&gt;-->
            <!--</div>&lt;!&ndash;//blog-list&ndash;&gt;-->
        <!--</div>&lt;!&ndash;//row&ndash;&gt;-->

    <!--</div>&lt;!&ndash;//blog&ndash;&gt;-->
        <!---->

        <!--关于我们<br/>-->
        <!--支持okcoin,huobi,chbtc,btcc之间BTC和LTC对冲搬砖<br/>-->
        <!--支持chbtc和yunbi之间ETH对冲搬砖<br/>-->
        <!--支持国外主流平台Bitfinex、Bitstamp、BTC-E等之间的对冲套利<br/>-->
    <!--</p>-->
</div><!--//blog-->

<!-- ******FOOTER****** -->
<!-- ******FOOTER****** -->
<!--<footer class="footer" style="background: #253340;">-->
    <footer class="footer" style="background: #304153 !important;">
    <div class="footer-content" >
        <div class="container">
            <div class="row">
                <div class="footer-col links col-md-2 col-sm-4 col-xs-12">
                    <div class="footer-col-inner">
                        <h3 class="title"  style="text-align: center;margin: 20px;">


                            <a href="index.php"><img style="width: 160px;"  src="/Public/images/logo.png" ></a>


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
                            <li><a href="/index.php?a=about" style="text-decoration: none;"><i class="fa fa-caret-right"></i><?php echo (L("_Footer_profile")); ?></a></li>
                            <li><a href="/index.php?a=download" style="text-decoration: none;"><i class="fa fa-caret-right"></i><?php echo (L("_Footer_app_download1")); ?>&nbsp;&nbsp;</a></li>
                            <li><a href="/index.php?a=faq" style="text-decoration: none;"><i class="fa fa-caret-right"></i><?php echo (L("_Footer_help")); ?>&nbsp;&nbsp;</a></li>

                            <!--<li><a href="#"><i class="fa fa-caret-right"></i>Jobs</a></li>-->
                            <!--<li><a href="#"><i class="fa fa-caret-right"></i>Contact us</a></li>-->
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->



                <div class="footer-col links col-md-2 col-sm-4 col-xs-6 sm-break">
                    <div class="footer-col-inner">
                        <h3 class="title" style="text-align: center;">


                            <img style="width: 110px;" src="/Public/images/wechat.png">

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


                            <img style="width: 110px;" src="/Public/images/qq.png">

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
                            <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3283719599&site=qq&menu=yes"><img src="/Public/img/qq1.svg" onmousemove="this.src='/Public/img/qq2.svg'" onmouseout="this.src='/Public/img/qq1.svg'" alt=""></a></li>
                            <li><a><img src="/Public/img/wechat1.svg" onmousemove="this.src='/Public/img/wechat2.svg'" onmouseout="this.src='/Public/img/wechat1.svg'" alt=""></a></li>
                            <li><a><img src="/Public/img/microblog1.svg" onmousemove="this.src='/Public/img/microblog2.svg'" onmouseout="this.src='/Public/img/microblog1.svg'" alt=""></a></li>
                            <li><a><img src="/Public/img/twitter1.svg" onmousemove="this.src='/Public/img/twitter2.svg'"  onmouseout="this.src='/Public/img/twitter1.svg'" alt=""></a></li>
                            </ul>
                        <div class="form-container">
                            <!--<p class="intro">Stay up to date with the latest news and offers from Velocity</p>-->
                            <form class="login-form navbar-form">
                                <div class="form-group" style="width: 150px;margin-right: 5px;display: inline-block;">
                                    <input  style="width: 150px;" type="text" class="form-control" placeholder="<?php echo (L("_Footer_email")); ?>">
                                </div>
                                <button style="width: 130px;display: inline-block;" type="submit" class="btn btn-cta btn-cta-primary"><?php echo (L("_Footer_submit")); ?></button>
                            </form>
                            <div class="footer-col-inner" style="font-size: 16px;padding-top:10px;">
                                <p class="tel" style="padding-bottom: 0px;margin-bottom: 5px;"><i class="fa fa-phone"></i> 17695540023</p>
                                <p class="email" style="padding-top: 0px;margin-top: 0px;"><i class="fa fa-envelope-o"></i><a style="text-decoration: none;"> 3283719599@qq.com</a></p>
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



<!-- Javascript -->
<script type="text/javascript" src="/Public/assets/plugins/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="/Public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/assets/plugins/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="/Public/assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="/Public/assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
<script type="text/javascript" src="/Public/assets/plugins/FitVids/jquery.fitvids.js"></script>
<script type="text/javascript" src="/Public/assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/Public/assets/js/main.js"></script>


</body>
</html>