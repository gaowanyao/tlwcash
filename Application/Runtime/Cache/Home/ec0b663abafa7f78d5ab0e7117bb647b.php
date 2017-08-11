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

    </style>
</head>

<body class="features-page">
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
                <ul class="nav navbar-nav">
                    <li class="active nav-item"><a class="my_center" href="index.html" ><?php echo (L("_Header_index")); ?></a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle my_center" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_Financial")); ?>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" style="text-align: center;min-width: 130px;">
                            <li><a href="index.php?a=ico">ICO基金</a></li>
                            <li><a href="index.php?a=exponential">指数基金</a></li>
                            <li><a href="index.php?a=arbitrage">套利基金</a></li>

                        </ul>
                    </li><!--//dropdown-->
                    <!--<li class="nav-item"><a href="features.html">我要理财</a></li>-->
                    <li class="nav-item"><a class="my_center"  href="index.php?a=safety"><?php echo (L("_Header_safety")); ?></a></li>

                    <li class="nav-item"><a class="my_center"  href="index.php?a=download"><?php echo (L("_Header_app_download")); ?></a></li>


                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle my_center" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_customer_service")); ?>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu"  style="text-align: center;min-width: 130px;">
                            <li><a href="index.php?a=faq">帮助中心</a></li>
                            <li><a href="index.php?a=about">关于我们</a></li>

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



<div class="headline-bg">
</div><!--//headline-bg-->

<!-- ******Video Section****** -->
<section class="features-video section section-on-bg" style="<?php if($pc == 'pc'){ echo 'height: 550px;';}else{ echo 'height: 460px;';} ?>">
    <div class="container text-center">
        <h2 class="title">ICO 基金</h2>
        <div class="" style="color:#fff;width: 100%">
            <!--<iframe src="/player.vimeo.com/video/90299717?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
            为了使投资者获得最大收益回报，对现有ICO产品进行考察，选定部分ICO产品进行早鸟轮投资，为投资 者获得最大收益回报。
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
                        <h3 class="post-title my_title">产品收益</h3>
                        <div class="post-entry">
                            <p class="indent">本团队参投项目ETH历史收益超过300倍</p>
                            <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                        </div>

                        <h3 class="post-title my_title">产品运作</h3>
                        <div class="post-entry">
                            <p class="indent">每月15日24:00进入封闭投资期，周期365天，T+0赎回</p>
                            <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                        </div>

                        <h3 class="post-title my_title">产品介绍</h3>
                        <div class="post-entry">
                            <p class="indent">在ICO火热的当下，陆家嘴比特币基金公司推出ICO基金，为我们 的客户赢取高风险市场的最大收益。我们提供专业技术团队，专 业操盘人员，对市场现有ICO产品进行筛选考察，最后选定部分 ICO产品进行早鸟轮投资。以做到收益最大化，本团队参投项目ETH历史收益超过300倍</p>
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
                        <h3 class="post-title my_title" style="padding: 4px 0;font-size: 30px !important;">起投金额</h3>
                        <div class="post-entry">
                            <p style="padding: 10px 0 20px;font-size: 20px;"><span style="font-size: 30px;color: red;font-weight: 900;">￥</span><span style="color: red;font-weight: 900;font-size: 25px;">10000元</span></p>
                            <!--<a class="read-more" href="blog-single.html">购买 <i class="fa fa-long-arrow-right"></i></a>-->

                            <button id="invest" type="button" data-dismiss="modal" aria-hidden="true" class="btn btn-cta btn-cta-primary" style="margin-bottom: 25px;font-size: 20px;text-align: center;">立即投资</button>

                            <p style="color: red;"><img src="/Public/img/danger.png"/> 数字货币投资存在一定的风险，请适量控制您的资金</p>
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
                    <h3 class="post-title my_title" style="text-align: center;padding-top: 5px;">免责声明</h3>

                    <div class="content" style="padding-top: 5px;">
                        <div class="post-entry">
                            <p class="indent">请投资者充分阅读相关ICO项目白皮书，并理解其区块链技术，评估好风险。另数字资产作为全球的虚拟数字货币，交易存在极高风险，一天24小时都在交易，没有涨跌限制，价格容易因为庄家、全球政府的政策影响而大幅波动，我们强烈建议您在自身能承受的风险范围内，进行参与投资，另外有相关用户有意向并明确了解Tcash的风险，投资者一旦参与投资即表示了解并接受该项目风险，并愿意个⼈为此承担⼀切相应结果或后果。</p>
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
                        <h3 class="title"  style="text-align: center;margin: 0px;">


                            <img style="width: 180px;" src="/Public/img/logo22.png" >


                        </h3>
                        <p  style="text-align: center;padding-left: 14px;">工作时间：早09--晚18</p>
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
                        <h3 class="title" style="font-size: 26px;">关于我们</h3>
                        <ul class="list-unstyled" style="font-size: 16px;">
                            <li><a href="#" style="text-decoration: none;"><i class="fa fa-caret-right"></i>Tcash简介</a></li>
                            <li><a href="#" style="text-decoration: none;"><i class="fa fa-caret-right"></i>APP下载&nbsp;&nbsp;</a></li>
                            <li><a href="#" style="text-decoration: none;"><i class="fa fa-caret-right"></i>帮助中心&nbsp;&nbsp;</a></li>

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

                        <p style="text-align: center;font-size: 16px;">官方微信群</p>

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

                        <p style="text-align: center;font-size: 16px;">官方QQ群</p>

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
                            <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="row-end"><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                        <div class="form-container">
                            <!--<p class="intro">Stay up to date with the latest news and offers from Velocity</p>-->
                            <form class="signup-form navbar-form">
                                <div class="form-group" style="width: 150px;margin-right: 5px;display: inline-block;">
                                    <input  style="width: 150px;" type="text" class="form-control" placeholder="请输入您的Email">
                                </div>
                                <button style="width: 130px;display: inline-block;" type="submit" class="btn btn-cta btn-cta-primary">提交</button>
                            </form>
                            <div class="footer-col-inner" style="font-size: 16px;padding-top:10px;">
                                <p class="tel" style="padding-bottom: 0px;margin-bottom: 5px;"><i class="fa fa-phone"></i> 0800 123 4567</p>
                                <p class="email" style="padding-top: 0px;margin-top: 0px;"><i class="fa fa-envelope-o"></i><a href="#"> enquires@website.com</a></p>
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
                        <p class="tel"><i class="fa fa-phone"></i>0800 123 4567</p>
                        <p class="email"><i class="fa fa-envelope-o"></i><a href="#">enquires@website.com</a></p>
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






<div class="modal fade draggable-modal" id="modal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog" style="padding-top:200px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <!--<h4 class="modal-title">提示</h4>-->
                <span>资产风险提示书</span>
                <span>资产委托协议</span>
            </div>
            <div class="modal-body"> 确定要删除该用户吗？ </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">取消</button>
                <button type="button" id="delete_confirm" class="btn green">确定</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>




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