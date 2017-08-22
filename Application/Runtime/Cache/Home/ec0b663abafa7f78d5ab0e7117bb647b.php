<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
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
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="/Public/assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <link href="/Public/resource/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/resource/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <!--<link href="/Public/resource/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
    <link href="/Public/resource/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <!--<link href="/Public/resource/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />-->
    <link href="/Public/resource/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!--&lt;!&ndash; BEGIN THEME LAYOUT STYLES &ndash;&gt;-->
    <!--<link href="/Public/resource/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />-->
    <!--<link href="/Public/resource/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />-->
    <!--<link href="/Public/resource/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />-->
    <!--&lt;!&ndash; END THEME LAYOUT STYLES &ndash;&gt;-->

    <style>
        .icoTitle{
            padding: 15px;
        }
        .icoP{
            padding: 5px;
        }

        .my_title{
            font-weight: 900;
            font-size: 25px!important;
            color: #000;
        }
        .indent{
            text-indent:2em;
        }
        body{
            font-family: 'Roboto', arial, sans-serif;
        }
        p{
            text-indent:2em;    /*每个P段落，首行空出两个空格，即缩进两个字符*/
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
            <img style="width: 200px;line-height: 70px;margin-top:0px;vertical-align: middle;padding: 10px;" alt="铜锣湾基金" src="/Public/images/logo.png">

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
                    <li class="<?php if('money' == 'index'){ echo 'active';}?>  nav-item"><a class="my_center" href="index.php" >&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_index")); ?></a></li>
                    <!--<li class="nav-item dropdown">-->
                        <!--<a class="dropdown-toggle my_center <?php if('money' == 'money'){ echo 'opencolor';}?> " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_Financial")); ?>&nbsp;<i class="fa fa-angle-down"></i></a>-->
                        <!--<ul class="dropdown-menu" style="text-align: center;min-width: 130px;">-->

                            <!--&lt;!&ndash;onmouseover="this.style.color='#ec6952'" onmouseout="this.style.color='#fff'"&ndash;&gt;-->
                            <!--<li><a class="<?php if('ico' == 'ico'){ echo 'opencolor';}?>"  href="index.php?a=ico"><?php echo (L("_Header_ico")); ?></a></li>-->
                            <!--<li><a class="<?php if('ico' == 'exponential'){ echo 'opencolor';}?>"  href="index.php?a=exponential"><?php echo (L("_Header_exp")); ?></a></li>-->
                            <!--<li><a class="<?php if('ico' == 'arbitrage'){ echo 'opencolor';}?>"  href="index.php?a=arbitrage"><?php echo (L("_Header_arbitrage")); ?></a></li>-->

                        <!--</ul>-->
                    <!--</li>&lt;!&ndash;//dropdown&ndash;&gt;-->
                    <!--<li class="nav-item"><a href="features.html">我要理财</a></li>-->
                    <!--<li class="<?php if('money' == 'safety'){ echo 'active';} ?> nav-item"><a class="my_center"  href="index.php?a=safety"><?php echo (L("_Header_safety")); ?></a></li>-->

                    <li class="nav-item <?php if('money' == 'download'){ echo 'active';} ?>"><a class="my_center"  href="index.php?a=download">&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_app_download")); ?></a></li>


                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle my_center <?php if('money' == 'service'){ echo 'opencolor';}?>" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_customer_service")); ?>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu"  style="text-align: center;min-width: 130px;">
                            <li><a class="<?php if('ico' == 'faq'){ echo 'opencolor';}?>" href="index.php?a=faq"><?php echo (L("_Header_help")); ?></a></li>
                            <li><a class="<?php if('ico' == 'about'){ echo 'opencolor';}?>" href="index.php?a=about"><?php echo (L("_Header_about_us")); ?></a></li>

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
                            <!--<li><a class="<?php if('ico' == 'faq'){ echo 'opencolor';}?>" href="index.php?a=faq"><?php echo (L("_Header_help")); ?></a></li>-->
                            <!--<li><a class="<?php if('ico' == 'about'){ echo 'opencolor';}?>" href="index.php?a=about"><?php echo (L("_Header_about_us")); ?></a></li>-->

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



<div class="headline-bg">
</div><!--//headline-bg-->

<!-- ******Video Section****** -->
<section class="features-video section section-on-bg" style="<?php if($pc == 'pc'){ echo 'height: 550px;';}else{ echo 'height: 460px;';} ?>">
    <div class="container text-center">
        <h2 class="title"><?php echo (L("_Header_ico")); ?></h2>
        <div class="" style="color:#fff;width: 100%">
            <!--<iframe src="/player.vimeo.com/video/90299717?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
            <?php echo (L("_ICO_banner")); ?>
        </div><!--//video-container-->
    </div><!--//container-->
</section><!--//feature-video-->

<!-- ******Features Section****** -->






<div class="features-tabbed section blog container" style="padding:0px 0px 10px;">
    <div class="row" style="margin: 0px;">
        <div id="blog-mansonry" class="blog-list">
            <article class="post col-md-8 col-sm-6 col-xs-12" style="">
                <div class="post-inner">
                    <!--<figure class="post-thumb">-->
                    <!--<a href="blog-single.html"><img class="img-responsive" src="/Public/assets/images/blog/post-1-thumb.jpg" alt="" /></a>-->
                    <!--</figure>&lt;!&ndash;//post-thumb&ndash;&gt;-->
                    <div class="content">
                        <h3 class="post-title my_title"><?php echo (L("_ICO_revenue")); ?></h3>
                        <div class="post-entry">
                            <p class="indent"><?php echo (L("_ICO_revenue_content")); ?></p>
                            <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                        </div>

                        <h3 class="post-title my_title"><?php echo (L("_ICO_run")); ?></h3>
                        <div class="post-entry">
                            <p class="indent"><?php echo (L("_ICO_run_content")); ?></p>
                            <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                        </div>

                        <h3 class="post-title my_title"><?php echo (L("_ICO_introduce")); ?></h3>
                        <div class="post-entry">
                            <p class="indent"><?php echo (L("_ICO_introduce_content")); ?></p>
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

            <article class="post col-md-4 col-sm-6 col-xs-12">
                <div class="post-inner">
                    <!--<figure class="post-thumb">-->
                    <!--<a href="blog-single.html"><img class="img-responsive" src="/Public/assets/images/blog/post-2-thumb.jpg" alt="" /></a>-->
                    <!--</figure>&lt;!&ndash;//post-thumb&ndash;&gt;-->
                    <div class="content" style="text-align: center;background: transparent;">
                        <h3 class="post-title my_title" style="padding: 4px 0;font-size: 30px !important;"><?php echo (L("_ICO_money")); ?></h3>
                        <div class="post-entry">
                            <p style="padding: 10px 0 20px;font-size: 20px;"><span style="font-size: 30px;color: red;font-weight: 900;"><?php echo (L("_ICO_money_1")); ?></span><span style="color: red;font-weight: 900;font-size: 25px;"><?php echo (L("_ICO_money_2")); ?></span></p>
                            <!--<a class="read-more" href="blog-single.html">购买 <i class="fa fa-long-arrow-right"></i></a>-->

                            <button id="invest" type="button" data-dismiss="modal" aria-hidden="true" class="btn btn-cta btn-cta-primary" style="margin-bottom: 25px;font-size: 20px;text-align: center;"><?php echo (L("_ICO_money_3")); ?></button>

                            <p style="color: red;"><img src="/Public/img/danger.png"/><?php echo (L("_ICO_money_4")); ?></p>
                        </div>
                        <!--<div class="meta">-->
                        <!--<ul class="meta-list list-inline">-->
                        <!--<li class="post-time post_date date updated">23rd Sep, 2014</li>-->
                        <!--<li class="post-author"> by <a href="#">James Lee</a></li>-->
                        <!--<li class="post-comments-link">-->
                        <!--<a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>3</a>-->
                        <!--</li>-->
                        <!--</ul>&lt;!&ndash;//meta-list&ndash;&gt;-->
                        <!--</div>&lt;!&ndash;meta&ndash;&gt;-->
                    </div><!--//content-->
                </div><!--//post-inner-->
            </article><!--//post-->




        </div><!--//blog-list-->
    </div><!--//row-->

</div><!--//blog-->

<div class="features-tabbed section blog container" style="padding:0px 0px 20px;">
    <div class="row" style="margin: 0px;">
        <div id="blog-mansonry" class="blog-list">
            <article class="post col-md-12 col-sm-6 col-xs-12" style="">
                <div class="post-inner">
                    <h3 class="post-title my_title" style="text-align: center;padding-top: 5px;"><?php echo (L("_ICO_Disclaimer")); ?></h3>

                    <div class="content" style="padding-top: 5px;">
                        <div class="post-entry">
                            <p class="indent"><?php echo (L("_ICO_Disclaimer_content")); ?></p>
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



<!-- ******Steps Section****** -->
<section class=" section" style="display: none;background:#f5f5f5">
    <div class="container" style="margin-top: 200px">

        <h2 class=" text-center icoTitle"> <i class="fa fa-usd fa-lg" aria-hidden="true"></i></i>&nbsp产品收益</h2>
        <div class="row text-center">
            本团队参投项目ETH历史收益超过300倍。
            <!--<div class="step text-center col-xs-12 col-sm-4">-->
            <!--<h3 class="title"><span class="number">1</span><br /><span class="text">Sign up</span></h3>-->
            <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>-->
            <!--</div>&lt;!&ndash;//step&ndash;&gt;-->
            <!--<div class="step text-center col-xs-12 col-sm-4">-->
            <!--<h3 class="title"><span class="number">2</span><br /><span class="text">Choose your lorem ipsum</span></h3>-->
            <!--<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>-->
            <!--</div>&lt;!&ndash;//step&ndash;&gt;-->
            <!--<div class="step text-center col-xs-12 col-sm-4">-->
            <!--<h3 class="title"><span class="number">3</span><br /><span class="text">Start building ipsum</span></h3>-->
            <!--<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet.</p>-->
            <!--</div>&lt;!&ndash;//step&ndash;&gt;-->
        </div><!--//row-->

        <!--<div class="text-center"><a class="btn btn-cta btn-cta-primary" href="signup.html">Get Started - It's Free</a></div>-->

    </div><!--//container-->
</section><!--//steps-->
<section class=" section" style="display: none;background:#f5f5f5">
    <div class="container">
        <h2 class=" text-center icoTitle"><i class="fa fa-empire" aria-hidden="true" fa-1x></i>&nbsp产品运作</h2>
        <div class="row text-center">
            <p class="icoP">每月15日24:00进入封闭投资期，周期365天，T+0赎回</p>
            <!--<div class="step text-center col-xs-12 col-sm-4">-->
            <!--<h3 class="title"><span class="number">1</span><br /><span class="text">Sign up</span></h3>-->
            <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>-->
            <!--</div>&lt;!&ndash;//step&ndash;&gt;-->
            <!--<div class="step text-center col-xs-12 col-sm-4">-->
            <!--<h3 class="title"><span class="number">2</span><br /><span class="text">Choose your lorem ipsum</span></h3>-->
            <!--<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>-->
            <!--</div>&lt;!&ndash;//step&ndash;&gt;-->
            <!--<div class="step text-center col-xs-12 col-sm-4">-->
            <!--<h3 class="title"><span class="number">3</span><br /><span class="text">Start building ipsum</span></h3>-->
            <!--<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet.</p>-->
            <!--</div>&lt;!&ndash;//step&ndash;&gt;-->
        </div><!--//row-->

        <!--<div class="text-center"><a class="btn btn-cta btn-cta-primary" href="signup.html">Get Started - It's Free</a></div>-->

    </div><!--//container-->
</section><!--//steps-->
<section class=" section" style="display: none;background:#f5f5f5">
    <div class="container">
        <h2 class=" text-center icoTitle"><i class="fa fa-wpforms fa-1g" aria-hidden="true"></i>&nbsp产品介绍</h2>
        <div class="row text-center">
            <p class="icoP">在ICO火热的当下，铜锣湾基金推出ICO基金，为我们的客户赢取高风险市场的最大收益。我们提供专业技术团队，专业操盘人员，
                对市场现有ICO产品进行早鸟轮投资。以做到收益最大化，本团队投资项目ETH历史收益超过300倍。</p>
            <!--<div class="step text-center col-xs-12 col-sm-4">-->
            <!--<h3 class="title"><span class="number">1</span><br /><span class="text">Sign up</span></h3>-->
            <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>-->
            <!--</div>&lt;!&ndash;//step&ndash;&gt;-->
            <!--<div class="step text-center col-xs-12 col-sm-4">-->
            <!--<h3 class="title"><span class="number">2</span><br /><span class="text">Choose your lorem ipsum</span></h3>-->
            <!--<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>-->
            <!--</div>&lt;!&ndash;//step&ndash;&gt;-->
            <!--<div class="step text-center col-xs-12 col-sm-4">-->
            <!--<h3 class="title"><span class="number">3</span><br /><span class="text">Start building ipsum</span></h3>-->
            <!--<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet.</p>-->
            <!--</div>&lt;!&ndash;//step&ndash;&gt;-->
        </div><!--//row-->

        <!--<div class="text-center"><a class="btn btn-cta btn-cta-primary" href="signup.html">Get Started - It's Free</a></div>-->

    </div><!--//container-->
</section><!--//steps-->
<section class=" section" style="display: none;">
    <div class="container">
        <!--<h2 class="title text-center">3 Simple Steps to Get you started with Velocity</h2>-->
        <div class="row text-center">
            <!--<div class="step text-center col-xs-12 col-sm-4">-->
            <!--<h3 class="title"><span class="number">1</span><br /><span class="text">Sign up</span></h3>-->
            <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>-->
            <!--</div>&lt;!&ndash;//step&ndash;&gt;-->
            <!--<div class="step text-center col-xs-12 col-sm-4">-->
            <!--<h3 class="title"><span class="number">2</span><br /><span class="text">Choose your lorem ipsum</span></h3>-->
            <!--<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>-->
            <!--</div>&lt;!&ndash;//step&ndash;&gt;-->
            <!--<div class="step text-center col-xs-12 col-sm-4">-->
            <!--<h3 class="title"><span class="number">3</span><br /><span class="text">Start building ipsum</span></h3>-->
            <!--<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet.</p>-->
            <!--</div>&lt;!&ndash;//step&ndash;&gt;-->
            <!--<div class="col-lg-6 text-center" style="width: 500px;height: 300px;background: rgba(0,0,0,0.1);margin: 0 auto">-->
            <!--<p class="icoP">起投资金</p>-->
            <!--<p class="icoP">10000元</p>-->
            <!--<div class="text-center"><a class="btn btn-cta btn-cta-primary" href="signup.html">购买</a></div>-->
            <!--</div>-->


        </div><!--//row-->
    </div><!--//container-->
    <section id="cta-section" class="section cta-section text-center home-cta-section" style="min-height: 370px;width: 100%">
        <div class="container">
            <h2 class="icoTitle">起投资金</h2>
            <p style="font-weight: bold;font-size: 20px">10000元</p>
            <p><a class="btn btn-cta btn-cta-primary" href="" target="_blank">购买</a></p>
        </div><!--//container-->
    </section><!--//cta-section-->
</section><!--//steps-->

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


                            <a href="index.php"><img style="width: 160px;"  src="/Public/images/logo.png"  alt="铜锣湾基金"></a>


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


                            <img style="width: 110px;" src="/Public/images/wechat.png" alt="铜锣湾基金微信">

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


                            <img style="width: 110px;" src="/Public/images/qq.png" alt="铜锣湾基金QQ">

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



<!--模态框开始-->
<div class="row">
    <div  class="modal fade draggable-modal"  id="modal" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog" style="padding: 5px;padding-top:15px ">
            <div class="modal-content">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active">
                        <a href="#home" data-toggle="tab">
                            <?php echo (L("_pop_up_1")); ?>
                        </a>
                    </li>
                    <li>
                        <a href="#ios" data-toggle="tab">
                            <?php echo (L("_pop_up_2")); ?>
                        </a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content" style="padding: 10px">
                    <div class="tab-pane fade in active" id="home" style="padding: 30px;height: 200px;overflow: auto;border: 2px solid gray;border-radius: 10px">
                        <div>
                            <p><?php echo (L("_pop_up_3")); ?></p>
                            <p><?php echo (L("_pop_up_4")); ?></p>
                            <p><?php echo (L("_pop_up_5")); ?></p>
                            <p><?php echo (L("_pop_up_6")); ?></p>
                            <p><?php echo (L("_pop_up_7")); ?></p>
                            <p><?php echo (L("_pop_up_8")); ?></p>
                            <p><?php echo (L("_pop_up_9")); ?></p>
                            <p><?php echo (L("_pop_up_10")); ?></p>
                            <p><?php echo (L("_pop_up_11")); ?></p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ios" style="padding: 30px;height: 200px;overflow: auto;border: 2px solid gray;border-radius: 10px">
                        <p> 甲方（投资人）：</p>
                        <p>  乙方（操作人）：陆家嘴比特币基金</p>
                        <p>  工作日：  国家法定工作日</p>
                        <p>  甲方熟知数字货币市场中的风险，为实现资产的保值、增值，为更好地在数字货币市场上发展，本着“资源共享、诚实信用、互惠互利、共同发展”的原则，委托乙方进行资产管理，乙方以人才和信息优势为依托，接受甲方的委托，在此基础上双方达成合作意向如下：</p>
                        <p>  第一条、账户管理</p>
                        <p>  甲方以自己的名义在乙方的意零（上海）金融信息服务有限公司开设资产管理账户，授权乙方订单支付资产（大写：壹、贰、叁、肆、伍、陆、柒、捌、玖、拾、佰、仟、万）进行资产管理。</p>
                        <p>  第二条、委托期限</p>
                        <p>   委托期限由甲方购买产品的期限为准，自购买日起至周期结束为止。在委托期间甲方有权在委托结束前十天内登入一次交易账户并查看市值情况，（具体时间：从甲方在乙方开设专门账户并将资产交付给乙方管理之日起算起。）在委托期结束后，若所投资的资产按时收回全额资金，则甲方可获得的预期年化收益率为相应产品的预期年化收益率。测算收益不等于实际收益，投资需谨慎。</p>
                        <p>   第三条、授权范围</p>
                        <p>   甲方授权乙方进行投资，具体交易品种与买卖时机由乙方决定。</p>
                        <p>  第四条、甲方的权利和义务</p>
                        <p>   1．	甲方有权按照本协议规定获得相应的投资收益；</p>
                        <p>   2．甲方保证委托资产的足额按时到位；</p>
                        <p>   3．在本协议有效期内，甲方不得在授权期间自行登入或动用其委托乙方管理的账户及资产，若没有在指定查看日内登入交易账户导致账户在交易过程中造成的亏损或严重亏损甲方将自行承担；</p>
                        <p>   4．甲方不得擅自将相关委托资产私自留存或另立账户存储；</p>
                        <p>   5．甲方有权向乙方垂询投资情况；</p>
                        <p>   第五条、乙方的权利和义务</p>
                        <p>    1．乙方有权依据本协议的有关规定对甲方的资产进行合理管理并有权在授权范围内自主决定最佳投资组合以及买卖时机；</p>
                        <p>   2．乙方应依据本协议的规定，本着诚实信用、谨慎尽职原则，对甲方的资产进行管理；</p>
                        <p>   3．乙方不得在未通知甲方或未取得甲方同意的情况下，为自己的经济利益动用甲方资产；</p>
                        <p>   4．乙方保证委托资产的安全性，不得从事有损于甲方利益的活动；</p>
                        <p>   5．乙方有义务于合同生效70至75天内向甲方汇报甲方帐户市值情况。</p>
                        <p>   6．乙方有权拒绝甲方的操作建议和投资方向；</p>
                        <p>   7．乙方尽自己最大的能力管理甲方的资产风险，因市场存在诸多不确定因素若最终出现亏损或严重亏损由甲方自愿承担，而乙方不承担最终投资亏损的任何责任；</p>
                        <p>    第六条、资产委托期限内，甲乙双方均无权单方对本协议中有关的资金账户进行撤销指定交易、转托管或转出资金等资产转移行为。</p>
                        <p>    第七条、甲方委托乙方操作的资金在协议期内甲方不能提取，以保证协议的实施。乙方全权负责甲方资金的操作，甲方在协议期内不能干预乙方操作。</p>
                        <p>   第八条、甲方如需要了解帐户市值应事先书面通知乙方，乙方在收到其通知后应当提供书面的市值状况。</p>
                        <p>   第九条、保密义务</p>
                        <p>   1．甲方对乙方提供的投资研发资料和详细居住地址，乙方具有保密义务；</p>
                        <p>   2．未经乙方同意，甲方不得将乙方提供的投资对象、交易记录、研发资料向第三方泄露；</p>
                        <p>   3．乙方对甲方的资金、交易记录、委托理财的操作情况有保密义务。</p>
                        <p>   第十条、结算方式</p>
                        <p>    1．在购买ico产品时，乙方以甲方初始到账总资金的6%作为基金运营费的方式收取（并收取盈利部分的30%作为奖金）。在甲方购买陆家嘴比特币一号（指数基金产品）时，乙方以甲方初始到账总资金的5%作为基金运营费的方式收取，（并收取盈利部分的20%作为奖金，乙方应尽自己所能，发挥受托资产的最大效益） 。在购买套利基金产品时，预期年化收益率内的所有年化收益都归将给甲方，乙方无权和甲方收益分成。</p>
                        <p>   2．委托期终止后甲方委托乙方进行资金清算的年化收益率预期不低于30% ，若委托终止后未能达到预期年化收益率，则乙方将5%管理费退还给甲方。</p>
                        <p>    指数基金管理费计算方法：管理费=初始到账总资金×5%</p>
                        <p>   ICO基金管理费计算方法：管理费=初始到账总资金×6%</p>
                        <p>   收益计算方法：预期期末收益＝投资本金×预期年化收益率×实际存续天数/365</p>
                        <p>   第十一条、附属条款</p>
                        <p>   1．甲方在委托期限内不得减少委托投资款；</p>
                        <p>   2．甲方在委托期限内要追加委托投资款的，应提前三日通知乙方；</p>
                        <p>    3．在委托期即将结束前15个工作日甲乙双方应相互协商是否续约；</p>
                        <p>   第十二条、争议的解决</p>
                        <p>   经过协商并同意，甲乙双方认真阅读、仔细理解、本协议内容，故由甲乙双方制定并自愿签署。</p>
                        <p>   本协议适用中华人民共和国有关法律，受中华人民共和国法律管辖，本协议各方当事人对本协议有关条款的解释或履行发生争议时，应通过友好协商方式予以解决。如果协商未达成书面协议，则任何一方当事人均有权向有管辖权的人民法院提起诉讼。</p>
                        <p>   第十三条、协议的解释</p>
                        <p>   本协议各条款的标题仅为方便而设，不影响标题所属条款的意思。</p>
                        <p>   第十四条、生效条件</p>
                        <p>   本协议自各方的法定代表或其授权代理人在本协议签字之日起生效。 本协议一式两份，具有相同的法律效力，甲乙双方各一份。</p>
                        <p>   第十六条、提示</p>
                        <p>  乙方已提醒甲方注意对协议各印就条款作全面、准确的理解，并应甲方的要求作了相应的条款说明。签约双方对本协议的含义认识一致。
                        </p>
                    </div>
                </div>
                <div class="text-center">

                    <label> <input type="checkbox"> 我已阅读并同意<?php if($pc!='pc') echo'<br>'?>《投资风险提示书》、《资产委托协议书》</label>
                </div>
                <!--<div class="modal-header">-->
                <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                <!--&lt;!&ndash;<h4 class="modal-title">提示</h4>&ndash;&gt;-->
                <!--<span>资产风险提示书</span>-->
                <!--<span>资产委托协议</span>-->
                <!--</div>-->
                <!--<div class="modal-body"> 确定要删除该用户吗？ </div>-->
                <!--<div class="modal-footer">-->
                <!--<button type="button" class="btn dark btn-outline" data-dismiss="modal">取消</button>-->
                <!--<button type="button" id="delete_confirm" class="btn green">确定</button>-->
                <!--</div>-->
                <br>

                <br>
                <div class="panel panel-default text-center" style="margin: 0 15px;margin-top: -30px;border: 0px !important;">
                    <div class="panel-heading">
                        <span style="font-size: 20px">生成订单 </span></div>
                    <div class="panel-body" style="padding: 0;margin:0px;">
                        <div class="table-responsive" style="padding-bottom: 0px;">
                            <table class="table table-striped text-center" style="margin-bottom: 0px;collapse: collapse;">
                                <tr class="success">
                                    <td>产品名称</td>
                                    <td>比特币套利基金新月</td>
                                </tr>
                                <tr class="warning">
                                    <td>产品周期</td>
                                    <td>30</td>
                                </tr>
                                <tr class="danger">
                                    <td>年化回报率</td>
                                    <td>8.0</td>
                                </tr>
                                <tr class="info">
                                    <td>起投金额</td>
                                    <td>1000元</td>
                                </tr>
                                <tr class="success">
                                    <td colspan="2">
                                        <!--<button type="button" class="btn btn-info"style="border-radius: 0" disabled>购买金额</button>-->
                                        <input class="form-control" type="text" style="margin-top:1px;border-radius: 0px;width: 82px;height: 36px;font-weight:900;background:rgba(0,0,0,0.1);display: inline-block" disabled value="购买金额">
                                        <input class="form-control" placeholder="输入金额" style="margin-top:1px;border-radius: 0px;width: 82px;height: 36px;background:rgba(0,0,0,0.1);display: inline-block" type="text"><span>元</span>
                                    </td>
                                    <!--<td style="text-align: right"><span style="display: inline-block;"><button type="button" class="btn btn-info"style="border-radius: 0">购买金额</button></span></td>-->
                                    <!--<td style="text-align: left"><input class="form-control" placeholder="购买金额" style="border-radius: 0px;width: 82px;height: 32px;background:rgba(0,0,0,0.1);display: inline-block" type="text"><span>元</span></td>-->
                                </tr>
                                <tr >
                                    <td colspan="2"><button style="margin-left:-15px;margin-right:5px;" class="btn btn-success">生成订单</button><button style="margin-left: 0px" class="btn btn-warning" data-dismiss="modal">取消订单</button></td>

                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!--&lt;!&ndash; /.modal-content &ndash;&gt;-->
            </div>
            <!-- /.modal-dialog -->
        </div>

    </div>

    <!--模态框结束-->


    <!-- Javascript -->
    <script type="text/javascript" src="/Public/assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="/Public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Public/assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="/Public/assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="/Public/assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="/Public/assets/plugins/FitVids/jquery.fitvids.js"></script>
    <script type="text/javascript" src="/Public/assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/Public/assets/js/main.js"></script>




    <!--[if lt IE 9]>
    <script src="/Public/resource/global/plugins/respond.min.js"></script>
    <script src="/Public/resource/global/plugins/excanvas.min.js"></script>
    <script src="/Public/resource/global/plugins/ie8.fix.min.js"></script>
    <![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <!--<script src="/Public/resource/global/plugins/jquery.min.js" type="text/javascript"></script>-->
    <!--<script src="/Public/resource/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>-->


    <script src="/Public/resource/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>

    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="/Public/resource/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->

    <script src="/Public/resource/pages/scripts/ui-modals.min.js" type="text/javascript"></script>


    <script>


        $("#invest").click(function () {

            $("#modal").modal("show");

        })


    </script>


</body>
</html>