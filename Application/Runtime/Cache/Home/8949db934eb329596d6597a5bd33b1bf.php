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
        .changeColor:hover{
            color: #f06060;
        }
        .iconPadding{
            margin-top: 20px;
        }
        .table tbody tr td{
            vertical-align: middle;
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
                    <li class="<?php if('[active]' == 'index'){ echo 'active';}?>  nav-item"><a class="my_center" href="index.php" ><?php echo (L("_Header_index")); ?></a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle my_center <?php if('[active]' == 'money'){ echo 'opencolor';}?> " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_Financial")); ?>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" style="text-align: center;min-width: 130px;">

                            <!--onmouseover="this.style.color='#ec6952'" onmouseout="this.style.color='#fff'"-->
                            <li><a class="<?php if('[open]' == 'ico'){ echo 'opencolor';}?>"  href="index.php?a=ico"><?php echo (L("_Header_ico")); ?></a></li>
                            <li><a class="<?php if('[open]' == 'exponential'){ echo 'opencolor';}?>"  href="index.php?a=exponential"><?php echo (L("_Header_exp")); ?></a></li>
                            <li><a class="<?php if('[open]' == 'arbitrage'){ echo 'opencolor';}?>"  href="index.php?a=arbitrage"><?php echo (L("_Header_arbitrage")); ?></a></li>

                        </ul>
                    </li><!--//dropdown-->
                    <!--<li class="nav-item"><a href="features.html">我要理财</a></li>-->
                    <li class="<?php if('[active]' == 'safety'){ echo 'active';} ?> nav-item"><a class="my_center"  href="index.php?a=safety"><?php echo (L("_Header_safety")); ?></a></li>

                    <li class="nav-item <?php if('[active]' == 'download'){ echo 'active';} ?>"><a class="my_center"  href="index.php?a=download"><?php echo (L("_Header_app_download")); ?></a></li>


                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle my_center <?php if('[active]' == 'service'){ echo 'opencolor';}?>" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_customer_service")); ?>&nbsp;<i class="fa fa-angle-down"></i></a>
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



<div style="width: 100%;height:80px;background:#304153;<?php if($pc!='pc') {echo 'margin-top:-80px;';}?>">
</div><!--//headline-bg-->

<!-- ******Video Section****** -->
<!--<section class="features-video section section-on-bg" style="height: 100px;">-->
    <!--<div class="container text-center">-->
    <!--</div>&lt;!&ndash;//container&ndash;&gt;-->
<!--</section>&lt;!&ndash;//feature-video&ndash;&gt;-->
<div class="features-tabbed section blog container" style="<?php if($pc!='pc') echo'margin-top:-50px;';?>">
    <div class="row" style="margin: 0px;">
        <div id="blog-mansonry" class="blog-list">
            <article class="post col-md-12 col-sm-12 col-xs-12" style="height: 460px;padding: 0px">
                <div class="post-inner">
                    <ul id="myTab" class="nav nav-tabs">
                        <li id="alpay" class="active">
                            <a href="#A" data-toggle="tab" style="padding: 2px 5px">
                                <img id="alpay_img" src="/Public/img/alpay.svg" alt="">
                                <?php if($pc!='pc') echo'<br>'?>
                                支付宝支付
                            </a>
                        </li>
                        <li id="bankpay"><a href="#B" data-toggle="tab"style="padding: 2px 5px">
                            <img id="bankpay_img" src="/Public/img/payCard.svg" alt=""><?php if($pc!='pc') echo'<br>'?>银行卡支付</a>
                        </li>
                        <li id="btcpay"><a href="#C" data-toggle="tab"style="padding: 2px 5px">
                            <img id="btcpay_img" src="/Public/img/bitC.svg" alt=""><?php if($pc!='pc') echo'<br>'?>比特币支付</a>
                        </li>

                    </ul>

                    <div id="myTabContent" class="tab-content" style="padding: 20px 7px">
                        <div class="tab-pane fade in active" id="A">
                                <table class="table table-bordered table-responsive text-center" style="font-size:16px ">
                                   <tr>
                                       <td style="font-weight: bold;<?php if($pc!='pc') echo'width: 85px;';?>">产品名称</td>
                                       <td style="font-weight: bold">产品周期</td>
                                       <td style="font-weight: bold">年回报率</td>
                                       <td style="font-weight: bold">起投金额</td>
                                   </tr>
                                    <tr>
                                        <td>比特币套利基金第一季</td>
                                        <td>90</td>
                                        <td>20</td>
                                        <td>1000</td>
                                    </tr>
                                </table>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 text-center" >
                                        <!--<span style="font-weight: bold">购买金额 <em style="font-weight: 200">1212</em>元</span>-->
                                        <input disabled type="text" class="form-control" value="购买金额" style="background: rgba(0,0,0,0.1);width: 85px;display: inline">
                                        <input disabled type="text" class="form-control" value="1000000" style="background: rgba(0,0,0,0.1);width: 60px;display: inline;padding: 0">
                                        <span>元</span>
                                        <button class="btn btn-success">立即支付</button>
                                    </div>
                                </div>


                        </div>
                        <div class="tab-pane fade" id="B">
                            <table class="table table-bordered table-responsive text-center" style="font-size:16px ">
                                <tr>
                                    <td style="font-weight: bold;width: 85px">产品名称</td>
                                    <td style="font-weight: bold">产品周期</td>
                                    <td style="font-weight: bold">年回报率</td>
                                    <td style="font-weight: bold">起投金额</td>
                                </tr>
                                <tr>
                                    <td>比特币<br>套利基金第一季</td>
                                    <td>90</td>
                                    <td>20</td>
                                    <td>1000</td>
                                </tr>
                            </table>
                            <div class="row">
                                <div class="col-md-12 col-xs-12 text-center" >
                                    <!--<span style="font-weight: bold">购买金额 <em style="font-weight: 200">1212</em>元</span>-->
                                    <input disabled type="text" class="form-control" value="购买金额" style="background: rgba(0,0,0,0.1);width: 85px;display: inline">
                                    <input disabled type="text" class="form-control" value="1000000" style="background: rgba(0,0,0,0.1);width: 60px;display: inline;padding: 0">
                                    <span>元</span>
                                    <button class="btn btn-success">立即支付</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="C">
                            <table class="table table-bordered table-responsive text-center" style="font-size:16px ">
                                <tr>
                                    <td style="font-weight: bold;width: 85px">产品名称</td>
                                    <td style="font-weight: bold">产品周期</td>
                                    <td style="font-weight: bold">年回报率</td>
                                    <td style="font-weight: bold">起投金额</td>
                                </tr>
                                <tr>
                                    <td>比特币<br>套利基金第一季</td>
                                    <td>90</td>
                                    <td>20</td>
                                    <td>1000</td>
                                </tr>
                            </table>
                            <div class="row">
                                <div class="col-md-12 col-xs-12 text-center" >
                                    <!--<span style="font-weight: bold">购买金额 <em style="font-weight: 200">1212</em>元</span>-->
                                    <input disabled type="text" class="form-control" value="购买金额" style="background: rgba(0,0,0,0.1);width: 85px;display: inline">
                                    <input disabled type="text" class="form-control" value="1000000" style="background: rgba(0,0,0,0.1);width: 60px;display: inline;padding: 0">
                                    <span>元</span>
                                    <button class="btn btn-success">立即支付</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!--//post-inner-->
            </article><!--//post-->
        </div><!--//blog-list-->
    </div><!--//row-->

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


<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
<script>
    $(document).ready(function () {
        $("#alpay").click(function () {
            $("#alpay_img").attr('src','/Public/img/alpay.svg');
            $("#bankpay_img").attr('src','/Public/img/payCard.svg');
            $("#btcpay_img").attr('src','/Public/img/bitC.svg');
        });
        $("#bankpay").click(function () {
            $("#alpay_img").attr('src','/Public/img/alpay1.svg');
            $("#bankpay_img").attr('src','/Public/img/payCard1.svg');
            $("#btcpay_img").attr('src','/Public/img/bitC.svg');
        });
        $("#btcpay").click(function () {
            $("#alpay_img").attr('src','/Public/img/alpay1.svg');
            $("#bankpay_img").attr('src','/Public/img/payCard.svg');
            $("#btcpay_img").attr('src','/Public/img/bitC1.svg');
        });

    })

</script>

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