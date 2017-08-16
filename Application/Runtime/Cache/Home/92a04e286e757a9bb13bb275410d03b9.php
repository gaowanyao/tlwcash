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
    <!--tabCSS-->
    <link rel="stylesheet" href="/Public/style/tab/css/responsive-tabs.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        h2{
            font-size: 22px;
        }
        ul li{
            display: inline-block;
            margin: 0 auto;
        }
        body{
            background: #f5f5f5;
        }

        .my_question{
            width:100%;height: 100%;font-size: 20px;color: #FFFFFF;padding-left:16px;
            margin-top: 12px;
        }

        .my_h{
            /*margin-top: 50px;*/
            /*color: #fff;*/
            width:95%;
            margin: 1em auto;
            /*background-color: #e96147;*/

        }
        .responsive-tabs__list{
            margin: 1em auto;

        }

        .responsive-tabs__list__item{
            min-width:120px;
            margin-left:6.8%;
        }

    </style>
</head>

<body class="pricing-page">
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
                    <li class="<?php if('service' == 'index'){ echo 'active';}?>  nav-item"><a class="my_center" href="index.php" ><?php echo (L("_Header_index")); ?></a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle my_center <?php if('service' == 'money'){ echo 'opencolor';}?> " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_Financial")); ?>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" style="text-align: center;min-width: 130px;">

                            <!--onmouseover="this.style.color='#ec6952'" onmouseout="this.style.color='#fff'"-->
                            <li><a class="<?php if('faq' == 'ico'){ echo 'opencolor';}?>"  href="index.php?a=ico"><?php echo (L("_Header_ico")); ?></a></li>
                            <li><a class="<?php if('faq' == 'exponential'){ echo 'opencolor';}?>"  href="index.php?a=exponential"><?php echo (L("_Header_exp")); ?></a></li>
                            <li><a class="<?php if('faq' == 'arbitrage'){ echo 'opencolor';}?>"  href="index.php?a=arbitrage"><?php echo (L("_Header_arbitrage")); ?></a></li>

                        </ul>
                    </li><!--//dropdown-->
                    <!--<li class="nav-item"><a href="features.html">我要理财</a></li>-->
                    <li class="<?php if('service' == 'safety'){ echo 'active';} ?> nav-item"><a class="my_center"  href="index.php?a=safety"><?php echo (L("_Header_safety")); ?></a></li>

                    <li class="nav-item <?php if('service' == 'download'){ echo 'active';} ?>"><a class="my_center"  href="index.php?a=download"><?php echo (L("_Header_app_download")); ?></a></li>


                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle my_center <?php if('service' == 'service'){ echo 'opencolor';}?>" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (L("_Header_customer_service")); ?>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu"  style="text-align: center;min-width: 130px;">
                            <li><a class="<?php if('faq' == 'faq'){ echo 'opencolor';}?>" href="index.php?a=faq"><?php echo (L("_Header_help")); ?></a></li>
                            <li><a class="<?php if('faq' == 'about'){ echo 'opencolor';}?>" href="index.php?a=about"><?php echo (L("_Header_about_us")); ?></a></li>

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




<div class="headline-bg pricing-headline-bg">
</div><!--//headline-bg-->

<!-- ******Pricing Section****** -->
<section class="features-video section section-on-bg" style="height: 500px;">
    <div class="container text-center">
        <h2 class="title"><?php echo (L("_help_center")); ?></h2>
        <div class="" style="color:#fff;width: 100%">
            <!--<iframe src="/player.vimeo.com/video/90299717?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
            <?php echo (L("_help_center_1")); ?>
        </div><!--//video-container-->
        <!--<div class="video-container">-->
        <!--<iframe src="/player.vimeo.com/video/90299717?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
        <!--</div>&lt;!&ndash;//video-container&ndash;&gt;-->
    </div><!--//container-->
</section><!--//feature-video-->
<section class="faq section has-bg-color" style="padding-bottom: 20px;margin-top:-120px;<?php if($pc=='pc')echo 'margin-top:0px;'?>">
    <div class="container">
        <!--<h2 class="title text-center">Frequently Asked Questions</h2>-->
        <div class="row" style="">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-danger">
                    <div class="responsive-tabs">
                        <h2 class="my_h"><?php echo (L("_help_project")); ?></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 panel" style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div class="my_question"><?php echo (L("_help_q")); ?>：<span style="font-size: 15px"><?php echo (L("_help_project_1")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_project_1_1")); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div class="my_question"><?php echo (L("_help_q")); ?>：<span style="font-size: 15px"><?php echo (L("_help_project_2")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_project_2_2")); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div class="my_question"><?php echo (L("_help_q")); ?>：<span style="font-size: 15px"><?php echo (L("_help_project_3")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_project_3_3")); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div  class="my_question"><?php echo (L("_help_q")); ?>：<span style="font-size: 15px"><?php echo (L("_help_project_4")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_project_4_4")); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="my_h"><?php echo (L("_help_recharge")); ?></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div  class="my_question"><?php echo (L("_help_q")); ?>：<span style="font-size: 15px"><?php echo (L("_help_recharge_1")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_recharge_1_1")); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div  class="my_question"><?php echo (L("_help_q")); ?>: <span style="font-size: 15px"><?php echo (L("_help_recharge_2")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_recharge_2_2")); ?>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!--<div class="col-md-12">-->
                            <!--<div class="row">-->
                            <!--<div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">-->
                            <!--<div  class="my_question"><?php echo (L("_help_q")); ?>: <span style="font-size: 15px"><?php echo (L("_help_recharge_2")); ?></span></div>-->
                            <!--<div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">-->
                            <!--<span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>-->
                            <!--<?php echo (L("_help_recharge_2_2")); ?>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                        </div>
                        <h2 class="my_h"><?php echo (L("_help_withdrawals")); ?></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div  class="my_question"><?php echo (L("_help_q")); ?>：<span style="font-size: 15px"><?php echo (L("_help_withdrawals_1")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_withdrawals_1_1")); ?>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div  class="my_question"><?php echo (L("_help_q")); ?>: <span style="font-size: 15px"><?php echo (L("_help_withdrawals_2")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_withdrawals_2_2")); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <h2 class="my_h"><?php echo (L("_help_novice")); ?></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div  class="my_question"><?php echo (L("_help_q")); ?>：<span style="font-size: 15px"><?php echo (L("_help_novice_1")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_novice_1_1")); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div  class="my_question"><?php echo (L("_help_q")); ?>：<span style="font-size: 15px"><?php echo (L("_help_novice_2")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_novice_2_2")); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div  class="my_question"><?php echo (L("_help_q")); ?>：<span style="font-size: 15px"><?php echo (L("_help_novice_3")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_novice_3_3")); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="my_h"><?php echo (L("_help_risk")); ?></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div  class="my_question"><?php echo (L("_help_q")); ?>：<span style="font-size: 15px"><?php echo (L("_help_risk_1")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_risk_1_1")); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div  class="my_question"><?php echo (L("_help_q")); ?>: <span style="font-size: 15px"><?php echo (L("_help_risk_2")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_risk_2_2")); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div  class="my_question"><?php echo (L("_help_q")); ?>: <span style="font-size: 15px"><?php echo (L("_help_risk_3")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_risk_3_3")); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div  class="my_question"><?php echo (L("_help_q")); ?>: <span style="font-size: 15px"><?php echo (L("_help_risk_4")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_risk_4_4")); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div  class="my_question"><?php echo (L("_help_q")); ?>: <span style="font-size: 15px"><?php echo (L("_help_risk_5")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_risk_5_5")); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div  class="my_question"><?php echo (L("_help_q")); ?>: <span style="font-size: 15px"><?php echo (L("_help_risk_6")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_risk_6_6")); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 panel " style="margin-left: 28px;<?php if($pc=='pc') echo 'margin-left: 50px;'?>margin-top:20px;background: #0d66aa">
                                        <div  class="my_question"><?php echo (L("_help_q")); ?>: <span style="font-size: 15px"><?php echo (L("_help_risk_7")); ?></span></div>
                                        <div class="col-md-12 col-xs-12 panel " style="margin-top:20px;background: #169bd7;color:white">
                                            <span style="font-size: 20px;color: white"><?php echo (L("_help_a")); ?>：</span>
                                            <?php echo (L("_help_risk_7_7")); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--//panel-->

            </div>
        </div><!--//row-->
        <!--<div class="contact-lead text-center">-->
        <!--<h4 class="title">Have more questions?</h4>-->
        <!--<a class="btn btn-cta btn-cta-secondary" href="contact.html">Get in touch</a>-->
        <!--</div>-->
    </div><!--//container-->
</section><!--//faq-->



<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="/Public/style/tab/js/responsiveTabs.min.js"></script>
<script>
    $(document).ready(function () {
        RESPONSIVEUI.responsiveTabs();
    })
</script>
<!-- ******FAQ Section****** -->
<!--<section class="faq section has-bg-color" style="padding-bottom: 50px;">-->
<!--<div class="container">-->
<!--&lt;!&ndash;<h2 class="title text-center">Frequently Asked Questions</h2>&ndash;&gt;-->
<!--<div class="row" style="margin-top: 50px;">-->
<!--<div class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">-->
<!--<div class="panel">-->
<!--<div class="panel-heading">-->
<!--<h4 class="panel-title">-->
<!--<a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq1"><i class="fa fa-plus-square"></i>-->
<!--政策风险-->
<!--</a>-->
<!--</h4>-->
<!--</div>-->

<!--<div class="panel-collapse collapse" id="faq1">-->
<!--<div class="panel-body">-->
<!--国家宏观政策以及市场法律法规、相关监管规定发生变化，可以影响产品的运营、清算等进行。-->
<!--</div>-->
<!--</div>-->
<!--</div>&lt;!&ndash;//panel&ndash;&gt;-->

<!--<div class="panel">-->
<!--<div class="panel-heading">-->
<!--<h4 class="panel-title">-->
<!--<a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq2"><i class="fa fa-plus-square"></i>-->
<!--信用风险-->
<!--</a>-->
<!--</h4>-->
<!--</div>-->

<!--<div class="panel-collapse collapse" id="faq2">-->
<!--<div class="panel-body">-->
<!--发行人可能出现违约情形或者交易对手方未能按约履行的情形。-->
<!--</div>-->
<!--</div>-->
<!--</div>&lt;!&ndash;//panel&ndash;&gt;-->

<!--<div class="panel">-->
<!--<div class="panel-heading">-->
<!--<h4 class="panel-title">-->
<!--<a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq3"><i class="fa fa-plus-square"></i>-->
<!--市场风险-->
<!--</a>-->
<!--</h4>-->
<!--</div>-->

<!--<div class="panel-collapse collapse" id="faq3">-->
<!--<div class="panel-body">-->
<!--金融产品的基础资产价值受未来市场的不确定影响，产生的收益波动。-->
<!--</div>-->
<!--</div>-->
<!--</div>&lt;!&ndash;//panel&ndash;&gt;-->



<!--<div class="panel">-->
<!--<div class="panel-heading">-->
<!--<h4 class="panel-title">-->
<!--<a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq5"><i class="fa fa-plus-square"></i>-->
<!--合规风险-->
<!--</a>-->
<!--</h4>-->
<!--</div>-->

<!--<div class="panel-collapse collapse" id="faq5">-->
<!--<div class="panel-body">-->
<!--金融产品的管理人的管理运作不符合法律法规和合同规定，可能造成的风险。-->
<!--</div>-->
<!--</div>-->
<!--</div>&lt;!&ndash;//panel&ndash;&gt;-->

<!--<div class="panel">-->
<!--<div class="panel-heading">-->
<!--<h4 class="panel-title">-->
<!--<a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq6"><i class="fa fa-plus-square"></i>-->
<!--管理风险-->
<!--</a>-->
<!--</h4>-->
<!--</div>-->

<!--<div class="panel-collapse collapse" id="faq6">-->
<!--<div class="panel-body">-->
<!--管理人和发行人受经验、技能、判断力、执行力等方面的限制，可能对产品的运作及管理造成一定影响。-->
<!--</div>-->
<!--</div>-->
<!--</div>&lt;!&ndash;//panel&ndash;&gt;-->


<!--<div class="panel">-->
<!--<div class="panel-heading">-->
<!--<h4 class="panel-title">-->
<!--<a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq4"><i class="fa fa-plus-square"></i>-->
<!--不可抗力及意外事件-->
<!--</a>-->
<!--</h4>-->
<!--</div>-->

<!--<div class="panel-collapse collapse" id="faq4">-->
<!--<div class="panel-body">-->
<!--包括但不限于自然灾害、金融市场危机、战争或国家政策变化等。-->
<!--</div>-->
<!--</div>-->
<!--</div>&lt;!&ndash;//panel&ndash;&gt;-->


<!--<div class="panel">-->
<!--<div class="panel-heading">-->
<!--<h4 class="panel-title">-->
<!--<a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq7"><i class="fa fa-plus-square"></i>-->
<!--其他数字货币和区块链技术问题-->
<!--</a>-->
<!--</h4>-->
<!--</div>-->

<!--<div class="panel-collapse collapse" id="faq7">-->
<!--<div class="panel-body">-->
<!--相对于比特币/莱特币这些去中心化的数字货币在市值还小的情况下无法兼顾流动性良好和币值稳定两个目标。Tcash是中心化发行，一定程度上应用区块链技术中的特性去中心化运营、来相对稳定币值、以流通为目的数字货币，即能解决法币流通中的流动性问题，又能解决比特币、莱特币流通中价值波动的问题。-->
<!--</div>-->
<!--</div>-->
<!--</div>&lt;!&ndash;//panel&ndash;&gt;-->

<!--<div class="panel" style="display: none;">-->
<!--<div class="panel-heading">-->
<!--<h4 class="panel-title"><a data-parent="#accordion"-->
<!--data-toggle="collapse" class="panel-toggle" href="#faq8"><i class="fa fa-plus-square"></i>Can I imperdiet massa ut?</a></h4>-->
<!--</div>-->

<!--<div class="panel-collapse collapse" id="faq8">-->
<!--<div class="panel-body">-->
<!--Anim pariatur cliche reprehenderit, enim eiusmod high life-->
<!--accusamus terry richardson ad squid. 3 wolf moon officia-->
<!--aute, non cupidatat skateboard dolor brunch. Food truck-->
<!--quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,-->
<!--sunt aliqua put a bird on it squid single-origin coffee-->
<!--nulla assumenda shoreditch et. Nihil anim keffiyeh-->
<!--helvetica, craft beer labore wes anderson cred nesciunt-->
<!--sapiente ea proident. Ad vegan excepteur butcher vice lomo.-->
<!--Leggings occaecat craft beer farm-to-table, raw denim-->
<!--aesthetic synth nesciunt you probably haven't heard of them-->
<!--accusamus labore sustainable VHS.-->
<!--</div>-->
<!--</div>-->
<!--</div>&lt;!&ndash;//panel&ndash;&gt;-->
<!--</div>-->
<!--</div>&lt;!&ndash;//row&ndash;&gt;-->
<!--&lt;!&ndash;<div class="contact-lead text-center">&ndash;&gt;-->
<!--&lt;!&ndash;<h4 class="title">Have more questions?</h4>&ndash;&gt;-->
<!--&lt;!&ndash;<a class="btn btn-cta btn-cta-secondary" href="contact.html">Get in touch</a>&ndash;&gt;-->
<!--&lt;!&ndash;</div>&ndash;&gt;-->
<!--</div>&lt;!&ndash;//container&ndash;&gt;-->
<!--</section>&lt;!&ndash;//faq&ndash;&gt;-->

<!--&lt;!&ndash; ******CTA Section****** &ndash;&gt;-->
<!--<section id="cta-section" class="section cta-section text-center pricing-cta-section">-->
<!--<div class="container">-->
<!--<h2 class="title">More than <span class="counting">300,000</span> users are using Velocity</h2>-->
<!--<p class="intro">What are you waiting for?</p>-->
<!--<p><a class="btn btn-cta btn-cta-primary" href="" target="_blank">Get Velocity Now</a></p>-->
<!--</div>&lt;!&ndash;//container&ndash;&gt;-->
<!--</section>&lt;!&ndash;//cta-section&ndash;&gt;-->




<!-- ******CTA Section****** -->
<section id="cta-section" class="section cta-section text-center home-cta-section">
    <div class="container">
        <h2 class="title">为改变世界而生</h2>
        <p class="intro">数字货币---颠覆现实、引发技术革命，即将渗透至你我生活的方方面面</p>
        <p><a class="btn btn-cta btn-cta-primary" href="" target="_blank">马上加入</a></p>
    </div><!--//container-->
</section><!--//cta-section-->

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
                    <iframe src="" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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