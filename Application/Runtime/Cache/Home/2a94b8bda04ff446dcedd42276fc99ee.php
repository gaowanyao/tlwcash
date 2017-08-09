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



    </style>

</head>

<body class="home-page">
<!-- ******HEADER****** -->
<header id="header" class="header navbar-fixed-top">
    <div class="container">
        <h1 class="logo">
            <!--<a href="index.html"><span class="text"><img src="/Public/img/logo.png"></span></a>-->
            <!--<a href="index.html"><img src="/Public/img/logo.png"></a>-->
            <img style="width: 150px;line-height: 80px;vertical-align: middle;padding: 10px;" src="/Public/img/logo.png">

            <!--/Public/img/logo.png-->
        </h1><!--//logo-->
        <nav class="main-nav navbar-right" role="navigation" style="background: transparent !important;">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!--//nav-toggle-->
            </div><!--//navbar-header-->
            <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active nav-item"><a class="my_center" href="index.html" >首页</a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle my_center" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;我要理财 <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" style="text-align: center;min-width: 100px;">
                            <li><a href="download.html">ICO基金</a></li>
                            <li><a href="blog.html">指数基金</a></li>
                            <li><a href="blog-single.html">套利基金</a></li>

                        </ul>
                    </li><!--//dropdown-->
                    <!--<li class="nav-item"><a href="features.html">我要理财</a></li>-->
                    <li class="nav-item"><a class="my_center"  href="pricing.html">资金管理</a></li>
                    <li class="nav-item"><a class="my_center"  href="pricing.html">安全保障</a></li>


                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle my_center" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;客户服务 <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu"  style="text-align: center;min-width: 100px;">
                            <li><a href="download.html">关于我们</a></li>
                            <li><a href="blog.html">帮助中心</a></li>
                            <li><a href="blog-single.html">联系我们</a></li>

                        </ul>
                    </li><!--//dropdown-->



                    <li class="nav-item"><a class="my_center"  href="login.html">登录</a></li>
                    <li class="nav-item"><a class="my_center"  href="login.html">注册</a></li>
                    <!--<li class="nav-item nav-item-cta last"><a class="btn btn-cta btn-cta-secondary" href="signup.html">注册</a></li>-->
                </ul><!--//nav-->
            </div><!--//navabr-collapse-->
        </nav><!--//main-nav-->
    </div><!--//container-->
</header><!--//header-->

<!--id="banner_can"-->
<div class="bg-slider-wrapper2" >

    <div class="bg-slider-wrapper">

        <canvas class="constellation" ></canvas>


    </div>
    <section class="promo section section-on-bg" >
        <div class="container text-center">
            <h2 class="title">铜锣湾基金</h2>
            <p class="intro">创立一种新的跨境资产转移、支付协议和去中心化基金平台 <br /> 基于区块链技术，改变传统理财基金</p>
            <p>
                <a class="btn btn-cta btn-cta-primary" href="signup.html">白皮书</a>
                <a class="btn btn-cta btn-cta-primary" href="signup.html">ICO细则</a>

            </p>

            <table style="width: 260px;margin: 0 auto;margin-top:10px;background: transparent;height: 40px;text-align: center;">

                <tr>
                    <td  class="time_number my_day">00</td>
                    <td  class="time_number my_hour">00</td>
                    <td  class="time_number my_minite">00</td>
                    <td  class="time_number my_second">00</td>
                </tr>
                <tr>
                    <td class="time_size">天</td>
                    <td class="time_size">时</td>
                    <td class="time_size">分</td>
                    <td class="time_size">秒</td>
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
    <section id="why" class="section why">
        <div class="container">
            <h2 class="title text-center">项目介绍</h2>
            <p class="intro text-center" style="max-width: 100%;">铜锣湾基金（英文名：Tcash）是基于成熟、开源的区块链技术。可以与法币或者其他数字货币进行正常的全球跨境支付、跨境无风险套利、与交易所融资融币、场外OTC等商业交易,也可以用于日常消费使用。运营团队确保流通中的Tcash始终有超过其价值的数字资产作为储备金与之对应，达到维持Tcash价格稳定的目标。</p>


            <div class="container">
                <div class="services" id="services">
                    <div class="ser-top wthree-3 wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                        <h3>Our Services </h3>
                        <p>Sharetribe's built-in payment system allows your merchants to accept both PayPal system allows your of major credit cards.</p>
                    </div>
                    <div class="col-md-4 ser-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                        <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                        <h4>Retina Display</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin  vestibulum velit.Lorem ipsum ultricies.</p>
                    </div>
                    <div class="col-md-4 ser-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                        <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                        <h4>SEO Optimized</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum Lorem ipsum velit.</p>
                    </div>
                    <div class="col-md-4 ser-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                        <span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span>
                        <h4>Animation Effects</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies Lorem ipsum dolor sit amet.</p>
                    </div>


                    <div class="col-md-4 ser-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                        <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                        <h4>Clean Modern Code</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit sit amet.</p>
                    </div>
                    <div class="col-md-4 ser-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                        <h4>Google Fonts</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit Lorem ipsum.</p>
                    </div>
                    <div class="col-md-4 ser-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                        <h4>Fully Responsive</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit dolor sit amet.</p>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>




            <div class="row item">
                <div class="content col-xs-12 col-md-4">
                    <h3 class="title">Save you time and effort</h3>
                    <div class="desc">
                        <p>Explain one of your product benefits here. Let users know how they can benefit using your product. It’s also a good idea to back it up with a testimonial or tweet from your users.</p>
                        <p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>
                    </div>
                    <div class="quote">
                        <div class="quote-profile">
                            <img class="img-responsive img-circle" src="/Public/assets/images/people/profile-s-1.png" alt="" />
                        </div><!--//profile-->
                        <div class="quote-content">
                            <blockquote><p><a href="" target="_blank">@velocity</a> Love it! Thank you for making my life easier and saving me time! I’ll definitely recommend it to my friends. :)</p></blockquote>
                            <p class="source">@LisaW, Bristol</p>
                        </div><!--//quote-content-->
                    </div><!--//quote-->
                </div><!--//content-->
                <figure class="figure col-md-offset-1 col-sm-offset-0 col-xs-offset-0 col-xs-12 col-md-7">
                    <img class="img-responsive" src="/Public/assets/images/figures/figure-1.png" alt="" />
                    <figcaption class="figure-caption">(Screenshot: Coral - App &amp; website startup kit) </figcaption>
                </figure>
            </div><!--//item-->

            <div class="row item">
                <div class="content col-md-push-8 col-sm-push-0 col-xs-push-0 col-xs-12 col-md-4">
                    <h3 class="title">Works across all devices</h3>
                    <div class="desc">
                        <p>Explain one of your product benefits here. Let users know how they can benefit using your product. It’s also a good idea to back it up with a testimonial or tweet from your users.</p>
                        <p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>
                        <p><i class="fa fa-download"></i> <a href="download.html">Download mobile versions</a></p>
                    </div>

                    <div class="quote">
                        <div class="quote-profile">
                            <img class="img-responsive img-circle" src="/Public/assets/images/people/profile-s-2.png" alt="" />
                        </div><!--//profile-->
                        <div class="quote-content">
                            <blockquote><p>I find the mobile app very useful when I'm on the go. Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p></blockquote>
                            <p class="source">@JackT, San Francisco</p>
                        </div><!--//quote-content-->
                    </div><!--//quote-->
                </div><!--//content-->
                <figure class="figure col-md-pull-4 col-sm-pull-0 col-xs-pull-0 col-xs-12 col-md-7">
                    <img class="img-responsive" src="/Public/assets/images/figures/figure-2.png" alt="" />
                    <div class="control text-center">
                        <button type="button" class="play-trigger" data-toggle="modal" data-target="#modal-video"><i class="fa fa-play"></i></button>
                    </div><!--//control-->
                </figure>
            </div><!--//item-->

            <div class="row item ">
                <div class="content col-xs-12 col-md-4">
                    <h3 class="title">Easy to customise</h3>
                    <div class="desc">
                        <p>Explain one of your product benefits here. Let users know how they can benefit using your product. It’s also a good idea to back it up with a testimonial or tweet from your users.</p>
                        <p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>
                    </div>
                    <div class="quote">
                        <div class="quote-profile">
                            <img class="img-responsive img-circle" src="/Public/assets/images/people/profile-s-3.png" alt="" />
                        </div><!--//profile-->
                        <div class="quote-content">
                            <blockquote><p>Nice template! It’s practical and there is no gimmicks. Very easy to customise as well!</p></blockquote>
                            <p class="source"><a href="#">@AlexD</a>, London</p>
                        </div><!--//quote-content-->
                    </div><!--//quote-->
                </div><!--//content-->
                <figure class="figure col-md-offset-1 col-sm-offset-0 col-xs-offset-0 col-xs-12 col-md-7">
                    <img class="img-responsive" src="/Public/assets/images/figures/figure-3.png" alt="" />
                    <figcaption class="figure-caption">(Screenshot: <a href="website-templates/responsive-bootstrap-theme-for-startups-tempo/?ref=3wm" target="_blank">Tempo - Bootstrap template for startups)</a> </figcaption>

                </figure>
            </div><!--//item-->

            <div class="row item last-item">
                <div class="content col-md-push-8 col-sm-push-0 col-xs-push-0 col-xs-12 col-md-4">
                    <h3 class="title">Connect your users</h3>
                    <div class="desc">
                        <p>Explain one of your product benefits here. Let users know how they can benefit using your product. It’s also a good idea to back it up with a testimonial or tweet from your users.</p>
                        <p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>

                    </div>

                    <div class="quote">
                        <div class="quote-profile">
                            <img class="img-responsive img-circle" src="/Public/assets/images/people/profile-s-4.png" alt="" />
                        </div><!--//profile-->
                        <div class="quote-content">
                            <blockquote><p>I can connect to like-minded people lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></blockquote>
                            <p class="source">@JackT, San Francisco</p>
                        </div><!--//quote-content-->
                    </div><!--//quote-->
                </div><!--//content-->
                <figure class="figure col-md-pull-4 col-sm-pull-0 col-xs-pull-0 col-xs-12 col-md-7">
                    <img class="img-responsive" src="/Public/assets/images/figures/figure-4.png" alt="" />
                </figure>
            </div><!--//item-->


            <div class="feature-lead text-center">
                <h4 class="title">Want to discover all the features?</h4>
                <p><a class="btn btn-cta btn-cta-secondary" href="features.html">Take a Tour</a></p>
            </div>
        </div><!--//container-->
    </section><!--//why-->

    <!-- ******Testimonials Section****** -->
    <section class="section testimonials">
        <div class="container">
            <h2 class="title text-center">What are people saying about Velocity?</h2>
            <div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                    <li data-target="#testimonials-carousel" data-slide-to="2"></li>
                </ol><!--//carousel-indicators-->
                <div class="carousel-inner">
                    <div class="item active">
                        <figure class="profile"><img src="/Public/assets/images/people/profile-m-1.png" alt="" /></figure>
                        <div class="content">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p>We used Velocity as a front-end design template for our product site. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elit tortor, consectetur vitae varius at, interdum eget libero. Morbi.</p>
                            </blockquote>
                            <p class="source">Kevin Knight<br /><span class="title">Co-Founder, Startup Hub</span></p>
                        </div><!--//content-->
                    </div><!--//item-->
                    <div class="item">
                        <figure class="profile"><img src="/Public/assets/images/people/profile-m-2.png" alt="" /></figure>
                        <div class="content">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint.</p>
                            </blockquote>
                            <p class="source">Diana	Luna<br /><span class="title">Entrepreneur, Maecenas</span></p>
                        </div><!--//content-->
                    </div><!--//item-->
                    <div class="item">
                        <figure class="profile"><img src="/Public/assets/images/people/profile-m-3.png" alt="" /></figure>
                        <div class="content">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.</p>
                            </blockquote>
                            <p class="source">Tony Lee<br /><span class="title">CTO, Lorem Ipsum</span></p>
                        </div><!--//content-->
                    </div><!--//item-->
                </div><!--//carousel-inner-->

            </div><!--//carousel-->
        </div><!--//container-->
    </section><!--//testimonials-->

    <!-- ******Press Section****** -->
    <section class="section press">
        <div class="container text-center">
            <h2 class="title">Press Coverage</h2>
            <ul class="press-list list-inline row">
                <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-1.png" alt="" /></a></li>
                <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-2.png" alt="" /></a></li>
                <li class="xs-break col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-3.png" alt="" /></a></li>
                <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-4.png" alt="" /></a></li>
                <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-5.png" alt="" /></a></li>
                <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-6.png" alt="" /></a></li>
            </ul><!--//press-list-->
            <ul class="press-list list-inline row last">
                <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-7.png" alt="" /></a></li>
                <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-8.png" alt="" /></a></li>
                <li class="xs-break col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-9.png" alt="" /></a></li>
                <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-10.png" alt="" /></a></li>
                <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-11.png" alt="" /></a></li>
                <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive" src="/Public/assets/images/press/press-12.png" alt="" /></a></li>
            </ul><!--//press-list-->

            <!--<div class="press-lead text-center">-->
                <!--<h3 class="title">Have press inquires?</h3>-->
                <!--<p class="press-links"><a href="#">Download our press kit</a> or <a href="contact.html">Get in touch</a></p>-->
            <!--</div>-->

        </div><!--//container-->
    </section><!--//press-->

    <!-- ******CTA Section****** -->
    <section id="cta-section" class="section cta-section text-center home-cta-section">
        <div class="container">
            <h2 class="title">为改变世界而生</h2>
            <p class="intro">数字货币---颠覆现实、引发技术革命，即将渗透至你我生活的方方面面</p>
            <p><a class="btn btn-cta btn-cta-primary" href="" target="_blank">马上加入</a></p>
        </div><!--//container-->
    </section><!--//cta-section-->

</div><!--//section-wrapper-->

<!-- ******FOOTER****** -->
<footer class="footer" style="background: #253340;">
    <div class="footer-content" style="">
        <div class="container">
            <div class="row">
                <div class="footer-col links col-md-2 col-sm-4 col-xs-12">
                    <div class="footer-col-inner">
                        <h3 class="title"  style="text-align: center;">
                            
                            
                            <img src="/Public/img/logo.png" >
                            
                            
                        </h3>
                        <p  style="text-align: center;padding-left: 15px;">工作时间：09:00--18:00</p>
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
                        <ul class="list-unstyled" style="font-size: 20px;">
                            <li><a href="#"><i class="fa fa-caret-right"></i>Tcash简介</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>帮助中心&nbsp;&nbsp;</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>联系我们&nbsp;&nbsp;</a></li>
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

                        <p style="text-align: center;font-size: 18px;">官方微信群</p>

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

                        <p style="text-align: center;font-size: 18px;">官方QQ群</p>

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