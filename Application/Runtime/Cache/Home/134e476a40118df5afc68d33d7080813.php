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
    <style>
        body{background: #f5f5f5}
        .exponDivBor{
            background: white;border-bottom: 1px solid lightgray;height: 50px;margin-left:3px;margin-right: 3px;
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
<section class="features-video section section-on-bg" style="height: 500px;">
    <div class="container text-center">
        <h2 class="title">套利基金</h2>
        <div class="video-container" style="color: white">
        <!--<iframe src="/player.vimeo.com/video/90299717?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
            为了使投资者获得最大收益回报，Tcahs享受到货币基金本身的收益之外还享受了市场价格的差额收益 ，为投资者获得最大收益回报。
        </div><!--//video-container-->
    </div><!--//container-->
</section><!--//feature-video-->
<div class="sections-wrapper" style="background: #f5f5f5">

    <!-- ******Why Section****** -->
    <section id="why" class="section why" style="padding-bottom: 0px;margin-top: 60px;">

        <div class="container" style="<?php if($pc=='pc'){ echo 'margin-top: -30px;';}else{ echo 'margin-top: -110px;';} ?>">
            <!--<div class="container">-->
            <div class="services" id="services" style="text-align: center;">
                <div class="col-md-6  ser-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                    <h4 >指数基金【一期】敬请期待</h4>
                    <div>
                        <div class="row exponDivBor" style="background: white;border-bottom: 1px solid lightgray;height: 50px;border-top:5px solid deepskyblue ">
                            <div col-lg-12>
                                发行日期：2017-09-01
                            </div>
                        </div>
                        <div class="row exponDivBor">
                            <div col-lg-12>
                                固定收益率：3.650
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                年化收益率：3.65%
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                预计收益率：200%
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                收益率变化：每日
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                到期付息还本T+0赎回
                            </div>
                        </div>
                        <div class="row exponDivBor" style="height: 150px">
                            <div col-lg-12>
                                <input type="button" value="立即投资">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-6  ser-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                    <h4 >指数基金【一期】敬请期待</h4>
                    <div>
                        <div class="row exponDivBor" style="background: white;border-bottom: 1px solid lightgray;height: 50px;border-top:5px solid deepskyblue ">
                            <div col-lg-12>
                                发行日期：2017-09-01
                            </div>
                        </div>
                        <div class="row exponDivBor">
                            <div col-lg-12>
                                固定收益率：3.650
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                年化收益率：3.65%
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                预计收益率：200%
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                收益率变化：每日
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                到期付息还本T+0赎回
                            </div>
                        </div>
                        <div class="row exponDivBor" style="height: 150px">
                            <div col-lg-12>
                                <input type="button" value="立即投资">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-6  ser-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                    <h4 >指数基金【一期】敬请期待</h4>
                    <div>
                        <div class="row exponDivBor" style="background: white;border-bottom: 1px solid lightgray;height: 50px;border-top:5px solid deepskyblue ">
                            <div col-lg-12>
                                发行日期：2017-09-01
                            </div>
                        </div>
                        <div class="row exponDivBor">
                            <div col-lg-12>
                                固定收益率：3.650
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                年化收益率：3.65%
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                预计收益率：200%
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                收益率变化：每日
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                到期付息还本T+0赎回
                            </div>
                        </div>
                        <div class="row exponDivBor" style="height: 150px">
                            <div col-lg-12>
                                <input type="button" value="立即投资">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-6  ser-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                    <h4 >指数基金【一期】敬请期待</h4>
                    <div>
                        <div class="row exponDivBor" style="background: white;border-bottom: 1px solid lightgray;height: 50px;border-top:5px solid deepskyblue ">
                            <div col-lg-12>
                                发行日期：2017-09-01
                            </div>
                        </div>
                        <div class="row exponDivBor">
                            <div col-lg-12>
                                固定收益率：3.650
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                年化收益率：3.65%
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                预计收益率：200%
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                收益率变化：每日
                            </div>
                        </div>
                        <div class="row exponDivBor" >
                            <div col-lg-12>
                                到期付息还本T+0赎回
                            </div>
                        </div>
                        <div class="row exponDivBor" style="height: 150px">
                            <div col-lg-12>
                                <input type="button" value="立即投资">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="clearfix"></div>

            </div>
        </div><!--//container-->
    </section><!--//why-->

    <!-- ******Testimonials Section****** -->
    <!--<div style="background:#f5f5f5;width: 100%;height: 30px; "></div>-->
</div><!--//section-wrapper-->
<!--<div class="features-tabbed section blog container">-->
    <!--<div class="row">-->
        <!--<div id="blog-mansonry" class="blog-list">-->
            <!--<article class="post col-md-4 col-sm-6 col-xs-12">-->
                <!--<div class="post-inner">-->
                    <!--<figure class="post-thumb">-->
                        <!--<a href="blog-single.html"><img class="img-responsive" src="/Public/assets/images/blog/post-1-thumb.jpg" alt="" /></a>-->
                    <!--</figure>&lt;!&ndash;//post-thumb&ndash;&gt;-->
                    <!--<div class="content">-->
                        <!--<h3 class="post-title"><a href="blog-single.html">Ideas are easy, execution is hard</a></h3>-->
                        <!--<div class="post-entry">-->
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis mattis erat, dictum facilisis magna posuere ac. Curabitur consectetur magna mauris, et aliquam lectus ornare nec.</p>-->
                            <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                        <!--</div>-->
                        <!--<div class="meta">-->
                            <!--<ul class="meta-list list-inline">-->
                                <!--<li class="post-time post_date date updated">16th Oct, 2014</li>-->
                                <!--<li class="post-author"> by <a href="#">James Lee</a></li>-->
                                <!--<li class="post-comments-link">-->
                                    <!--<a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>8</a>-->
                                <!--</li>-->
                            <!--</ul>&lt;!&ndash;//meta-list&ndash;&gt;-->
                        <!--</div>&lt;!&ndash;meta&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//post-inner&ndash;&gt;-->
            <!--</article>&lt;!&ndash;//post&ndash;&gt;-->

            <!--<article class="post col-md-4 col-sm-6 col-xs-12">-->
                <!--<div class="post-inner">-->
                    <!--<figure class="post-thumb">-->
                        <!--<a href="blog-single.html"><img class="img-responsive" src="/Public/assets/images/blog/post-2-thumb.jpg" alt="" /></a>-->
                    <!--</figure>&lt;!&ndash;//post-thumb&ndash;&gt;-->
                    <!--<div class="content">-->
                        <!--<h3 class="post-title"><a href="blog-single.html">Done is better than perfect</a></h3>-->
                        <!--<div class="post-entry">-->
                            <!--<p>Aenean interdum ligula sed sollicitudin scelerisque. Morbi sed purus erat. Quisque adipiscing, dolor vitae porttitor egestas, orci elit feugiat libero, id pellentesque libero nulla quis tortor. Nulla sodales erat eu aliquam sollicitudin. Proin hendrerit porta lorem, ultricies blandit tortor mollis ut. Suspendisse potenti.</p>-->
                            <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                        <!--</div>-->
                        <!--<div class="meta">-->
                            <!--<ul class="meta-list list-inline">-->
                                <!--<li class="post-time post_date date updated">23rd Sep, 2014</li>-->
                                <!--<li class="post-author"> by <a href="#">James Lee</a></li>-->
                                <!--<li class="post-comments-link">-->
                                    <!--<a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>3</a>-->
                                <!--</li>-->
                            <!--</ul>&lt;!&ndash;//meta-list&ndash;&gt;-->
                        <!--</div>&lt;!&ndash;meta&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//post-inner&ndash;&gt;-->
            <!--</article>&lt;!&ndash;//post&ndash;&gt;-->

            <!--<article class="post col-md-4 col-sm-6 col-xs-12">-->
                <!--<div class="post-inner">-->
                    <!--<figure class="post-thumb">-->
                        <!--<a href="blog-single.html"><img class="img-responsive" src="/Public/assets/images/blog/post-3-thumb.jpg" alt="" /></a>-->
                    <!--</figure>&lt;!&ndash;//post-thumb&ndash;&gt;-->
                    <!--<div class="content">-->
                        <!--<h3 class="post-title"><a href="blog-single.html">The value of an idea lies in the using of it</a></h3>-->
                        <!--<div class="post-entry">-->
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis mattis erat, dictum facilisis magna posuere ac. Curabitur consectetur magna mauris, et aliquam lectus ornare nec. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris quis tellus magna.</p>-->
                            <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                        <!--</div>-->
                        <!--<div class="meta">-->
                            <!--<ul class="meta-list list-inline">-->
                                <!--<li class="post-time post_date date updated">18th Aug, 2014</li>-->
                                <!--<li class="post-author"> by <a href="#">Jeremy Green</a></li>-->
                                <!--<li class="post-comments-link">-->
                                    <!--<a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>2</a>-->
                                <!--</li>-->
                            <!--</ul>&lt;!&ndash;//meta-list&ndash;&gt;-->
                        <!--</div>&lt;!&ndash;meta&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//post-inner&ndash;&gt;-->
            <!--</article>&lt;!&ndash;//post&ndash;&gt;-->

            <!--<article class="post col-md-4 col-sm-6 col-xs-12">-->
                <!--<div class="post-inner">-->
                    <!--<figure class="post-thumb">-->
                        <!--<a href="blog-single.html"><img class="img-responsive" src="/Public/assets/images/blog/post-4-thumb.jpg" alt="" /></a>-->
                    <!--</figure>&lt;!&ndash;//post-thumb&ndash;&gt;-->
                    <!--<div class="content">-->
                        <!--<h3 class="post-title"><a href="blog-single.html">Good design is good business</a></h3>-->
                        <!--<div class="post-entry">-->
                            <!--<p>Praesent congue eros at vestibulum luctus. Integer faucibus eros ac mauris aliquam vehicula. Nulla vel purus quis libero viverra aliquet. Praesent consequat varius augue, et euismod lorem hendrerit ac. Duis eget lacus nisi. Sed sed erat velit.</p>-->
                            <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                        <!--</div>-->
                        <!--<div class="meta">-->
                            <!--<ul class="meta-list list-inline">-->
                                <!--<li class="post-time post_date date updated">12th April, 2014</li>-->
                                <!--<li class="post-author"> by <a href="#">James Lee</a></li>-->
                                <!--<li class="post-comments-link">-->
                                    <!--<a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>4</a>-->
                                <!--</li>-->
                            <!--</ul>&lt;!&ndash;//meta-list&ndash;&gt;-->
                        <!--</div>&lt;!&ndash;meta&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//post-inner&ndash;&gt;-->
            <!--</article>&lt;!&ndash;//post&ndash;&gt;-->

            <!--<article class="post col-md-4 col-sm-6 col-xs-12">-->
                <!--<div class="post-inner">-->
                    <!--<figure class="post-thumb">-->
                        <!--<a href="blog-single.html"><img class="img-responsive" src="/Public/assets/images/blog/post-5-thumb.jpg" alt="" /></a>-->
                    <!--</figure>&lt;!&ndash;//post-thumb&ndash;&gt;-->
                    <!--<div class="content">-->
                        <!--<h3 class="post-title"><a href="blog-single.html">Hackathon brainstorming</a></h3>-->
                        <!--<div class="post-entry">-->
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis mattis erat, dictum facilisis magna posuere ac. Curabitur consectetur magna mauris, et aliquam lectus ornare nec. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris quis tellus magna.</p>-->
                            <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                        <!--</div>-->
                        <!--<div class="meta">-->
                            <!--<ul class="meta-list list-inline">-->
                                <!--<li class="post-time post_date date updated">3th April, 2014</li>-->
                                <!--<li class="post-author"> by <a href="#">James Lee</a></li>-->
                                <!--<li class="post-comments-link">-->
                                    <!--<a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>1</a>-->
                                <!--</li>-->
                            <!--</ul>&lt;!&ndash;//meta-list&ndash;&gt;-->
                        <!--</div>&lt;!&ndash;meta&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//post-inner&ndash;&gt;-->
            <!--</article>&lt;!&ndash;//post&ndash;&gt;-->

            <!--<article class="post col-md-4 col-sm-6 col-xs-12">-->
                <!--<div class="post-inner">-->
                    <!--<figure class="post-thumb">-->
                        <!--<a href="blog-single.html"><img class="img-responsive" src="/Public/assets/images/blog/post-6-thumb.jpg" alt="" /></a>-->
                    <!--</figure>&lt;!&ndash;//post-thumb&ndash;&gt;-->
                    <!--<div class="content">-->
                        <!--<h3 class="post-title"><a href="blog-single.html">You can do big things with a small team</a></h3>-->
                        <!--<div class="post-entry">-->
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis mattis erat, dictum facilisis magna posuere ac. Curabitur consectetur magna mauris, et aliquam lectus ornare nec. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris quis tellus magna.</p>-->
                            <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                        <!--</div>-->
                        <!--<div class="meta">-->
                            <!--<ul class="meta-list list-inline">-->
                                <!--<li class="post-time post_date date updated">3th April, 2014</li>-->
                                <!--<li class="post-author"> by <a href="#">James Lee</a></li>-->
                                <!--<li class="post-comments-link">-->
                                    <!--<a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>5</a>-->
                                <!--</li>-->
                            <!--</ul>&lt;!&ndash;//meta-list&ndash;&gt;-->
                        <!--</div>&lt;!&ndash;meta&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//post-inner&ndash;&gt;-->
            <!--</article>&lt;!&ndash;//post&ndash;&gt;-->

            <!--<article class="post col-md-4 col-sm-6 col-xs-12">-->
                <!--<div class="post-inner">-->
                    <!--<figure class="post-thumb">-->
                        <!--<a href="blog-single.html"><img class="img-responsive" src="/Public/assets/images/blog/post-7-thumb.jpg" alt="" /></a>-->
                    <!--</figure>&lt;!&ndash;//post-thumb&ndash;&gt;-->
                    <!--<div class="content">-->
                        <!--<h3 class="post-title"><a href="blog-single.html">Nothing works better than just improving your product.</a></h3>-->
                        <!--<div class="post-entry">-->
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis mattis erat, dictum facilisis magna posuere ac. Curabitur consectetur magna mauris, et aliquam lectus ornare nec. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris quis tellus magna.</p>-->
                            <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                        <!--</div>-->
                        <!--<div class="meta">-->
                            <!--<ul class="meta-list list-inline">-->
                                <!--<li class="post-time post_date date updated">3th April, 2014</li>-->
                                <!--<li class="post-author"> by <a href="#">Alex Morgan</a></li>-->
                                <!--<li class="post-comments-link">-->
                                    <!--<a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>1</a>-->
                                <!--</li>-->
                            <!--</ul>&lt;!&ndash;//meta-list&ndash;&gt;-->
                        <!--</div>&lt;!&ndash;meta&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//post-inner&ndash;&gt;-->
            <!--</article>&lt;!&ndash;//post&ndash;&gt;-->

            <!--<article class="post col-md-4 col-sm-6 col-xs-12">-->
                <!--<div class="post-inner">-->
                    <!--<figure class="post-thumb">-->
                        <!--<a href="blog-single.html"><img class="img-responsive" src="/Public/assets/images/blog/post-8-thumb.jpg" alt="" /></a>-->
                    <!--</figure>&lt;!&ndash;//post-thumb&ndash;&gt;-->
                    <!--<div class="content">-->
                        <!--<h3 class="post-title"><a href="blog-single.html">Don't try to be original, just try to be good</a></h3>-->
                        <!--<div class="post-entry">-->
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis mattis erat, dictum facilisis magna posuere ac. Curabitur consectetur magna mauris, et aliquam lectus ornare nec. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris quis tellus magna.</p>-->
                            <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                        <!--</div>-->
                        <!--<div class="meta">-->
                            <!--<ul class="meta-list list-inline">-->
                                <!--<li class="post-time post_date date updated">3th April, 2014</li>-->
                                <!--<li class="post-author"> by <a href="#">James Lee</a></li>-->
                                <!--<li class="post-comments-link">-->
                                    <!--<a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>28</a>-->
                                <!--</li>-->
                            <!--</ul>&lt;!&ndash;//meta-list&ndash;&gt;-->
                        <!--</div>&lt;!&ndash;meta&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//post-inner&ndash;&gt;-->
            <!--</article>&lt;!&ndash;//post&ndash;&gt;-->

            <!--<article class="post col-md-4 col-sm-6 col-xs-12">-->
                <!--<div class="post-inner">-->
                    <!--<figure class="post-thumb">-->
                        <!--<a href="blog-single.html"><img class="img-responsive" src="/Public/assets/images/blog/post-9-thumb.jpg" alt="" /></a>-->
                    <!--</figure>&lt;!&ndash;//post-thumb&ndash;&gt;-->
                    <!--<div class="content">-->
                        <!--<h3 class="post-title"><a href="blog-single.html">It's not about ideas. It's about making ideas happen</a></h3>-->
                        <!--<div class="post-entry">-->
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis mattis erat, dictum facilisis magna posuere ac. Curabitur consectetur magna mauris, et aliquam lectus ornare nec. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris quis tellus magna.</p>-->
                            <!--<a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>-->
                        <!--</div>-->
                        <!--<div class="meta">-->
                            <!--<ul class="meta-list list-inline">-->
                                <!--<li class="post-time post_date date updated">3th April, 2014</li>-->
                                <!--<li class="post-author"> by <a href="#">Jo Bailey</a></li>-->
                                <!--<li class="post-comments-link">-->
                                    <!--<a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>110</a>-->
                                <!--</li>-->
                            <!--</ul>&lt;!&ndash;//meta-list&ndash;&gt;-->
                        <!--</div>&lt;!&ndash;meta&ndash;&gt;-->
                    <!--</div>&lt;!&ndash;//content&ndash;&gt;-->
                <!--</div>&lt;!&ndash;//post-inner&ndash;&gt;-->
            <!--</article>&lt;!&ndash;//post&ndash;&gt;-->

        <!--</div>&lt;!&ndash;//blog-list&ndash;&gt;-->
    <!--</div>&lt;!&ndash;//row&ndash;&gt;-->
    <!--<div class="pagination-container text-center">-->
        <!--<ul class="pagination">-->
            <!--<li class="disabled"><a href="#">&laquo;</a></li>-->
            <!--<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>-->
            <!--<li><a href="#">2</a></li>-->
            <!--<li><a href="#">3</a></li>-->
            <!--<li><a href="#">4</a></li>-->
            <!--<li><a href="#">5</a></li>-->
            <!--<li><a href="#">&raquo;</a></li>-->
        <!--</ul>&lt;!&ndash;//pagination&ndash;&gt;-->
    <!--</div>&lt;!&ndash;//pagination-container&ndash;&gt;-->
<!--</div>&lt;!&ndash;//blog&ndash;&gt;-->




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