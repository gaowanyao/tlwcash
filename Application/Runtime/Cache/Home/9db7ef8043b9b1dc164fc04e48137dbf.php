<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en-US"><!--<![endif]-->
<head>
    <title><?php echo ($article["title"]); ?></title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
    <![endif]-->
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="多宝金豆新闻资讯每日为您提供最新最全面的市场众筹资讯、行业报道、媒体报道等新闻热点。">
    <meta name="keywords" content="<?php echo ($article["tag"]); ?>"/>
    <meta name="author" content="Site Author">


    <!--<link href="/Public/resource/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
    <!--<link href="/Public/resource/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />-->
    <!--<link href="/Public/resource/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
    <!--<link href="/Public/resource/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />-->
    <!--&lt;!&ndash; END GLOBAL MANDATORY STYLES &ndash;&gt;-->
    <!--&lt;!&ndash; BEGIN THEME GLOBAL STYLES &ndash;&gt;-->
    <!--<link href="/Public/resource/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />-->
    <!--<link href="/Public/resource/global/css/plugins.min.css" rel="stylesheet" type="text/css" />-->
    <!--&lt;!&ndash; END THEME GLOBAL STYLES &ndash;&gt;-->

    <!--<link href="/Public/resource/global/plugins/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />-->

    <!--&lt;!&ndash; BEGIN PAGE LEVEL STYLES &ndash;&gt;-->
    <!--<link href="/Public/resource/pages/css/blog.min.css" rel="stylesheet" type="text/css" />-->
    <!--&lt;!&ndash; END PAGE LEVEL STYLES &ndash;&gt;-->
    <!--&lt;!&ndash; BEGIN THEME LAYOUT STYLES &ndash;&gt;-->
    <!--<link href="/Public/resource/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />-->
    <!--<link href="/Public/resource/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />-->
    <!--<link href="/Public/resource/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />-->


    <!-- Fav icon -->
    <link rel="shortcut icon" href="/Public/images/icoo.ico" type="image/x-icon" />

    <!-- <meta name="robots" content="index,follow"> -->

    <!-- ############################# Stylesheets ############################# -->

    <link rel="stylesheet" href="/Public/wap/css/style.css" media="screen" />

    <!-- ############################# Javascript - Modernizr ############################# -->

    <script src="/Public/wap/js/modernizr.custom.js"></script>

</head>
<body>
<!--[if lte IE 8]>
<div id="ie6-message"><p>You are using Internet Explorer 8.0 or older to view the web. Please upgrade to a newer browser to fully enjoy the web. <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Upgrade your browser</a></p></div>
<![endif]-->

<!-- ############################# Page ############################# -->
<section id="page">

    <!-- ############################# Header ############################# -->
    

<style>

    #menu-trigger2{display:block;width:30px;height:auto;background-color:transparent;z-index:9999;position:absolute;right:20px;top:10px}
    #menu-trigger2 .icon{display:inline-block;width:22px;height:3px;position:relative;left:4px;top:3px;background:#fff;margin:10px 0}
    #menu-trigger2 .icon:before,#menu-trigger2 .icon:after{content:'';width:100%;height:3px;background:#fff;position:absolute}
    #menu-trigger2 .icon:before{top:-7px}#menu-trigger2 .icon:after{top:7px}#menu-trigger2.close span{background:0}
    #menu-trigger2.close span:before{top:0!important;background-color:#fff;-moz-transform:rotate(-45deg);-webkit-transform:rotate(-45deg);-o-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg)}
    #menu-trigger2.close span:after{top:0!important;background-color:#fff;-moz-transform:rotate(45deg);-webkit-transform:rotate(45deg);-o-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}
    #menu-trigger2.close span.menu-text{color:#fff;}#menu-trigger2:hover span:before{top:-8px}#menu-trigger2:hover span:after{top:8px}
    #menu-trigger2 .icon,#menu-trigger2 .icon:before,#menu-trigger2 .icon:after{transition:all 0.3s}



    #menu-trigger3{display:block;width:30px;height:auto;background-color:transparent;z-index:9999;position:absolute;right:20px;top:10px}
    #menu-trigger3 .icon{display:inline-block;width:22px;height:3px;position:relative;left:4px;top:3px;background:#fff;margin:10px 0}
    #menu-trigger3 .icon:before,#menu-trigger3 .icon:after{content:'';width:100%;height:3px;background:#fff;position:absolute}
    #menu-trigger3 .icon:before{top:-7px}#menu-trigger3 .icon:after{top:7px}#menu-trigger3.close span{background:0}
    #menu-trigger3.close span:before{top:0!important;background-color:#fff;-moz-transform:rotate(-45deg);-webkit-transform:rotate(-45deg);-o-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg)}
    #menu-trigger3.close span:after{top:0!important;background-color:#fff;-moz-transform:rotate(45deg);-webkit-transform:rotate(45deg);-o-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}
    #menu-trigger3.close span.menu-text{color:#fff;}#menu-trigger3:hover span:before{top:-8px}#menu-trigger3:hover span:after{top:8px}
    #menu-trigger3 .icon,#menu-trigger3 .icon:before,#menu-trigger3 .icon:after{transition:all 0.3s}



    .btn_more:hover{
        background: #e96147 !important;

    }


    #logo{
        /*background: yellow !important;*/
        margin-left:-20px;

    }

    .nav_my{
        /*background: green !important;*/

        height:50px;
        display:inline-block;

    <?php if($pc == 'pc'){ echo 'margin-right:10px;';}else{ if('[keywords]' == 'account'){ echo 'margin-right: -5px;'; }else{ echo 'margin-right: 20px;';}}?>
    }

    .menu_my_nav{
        margin:0px;
        padding:0px;
        list-style-type: none;
        padding-top:10px;
        height:35px;
    }

    .menu_my_nav li{
        float: left;
        width:80px ;
        height:30px;
        font-size:18px;
        line-height: 30px;
        text-align: center;
        margin:0px 5px;
        /*background: red !important;*/

    }

    .menu_my_nav li a{
        color: #ffffff !important;
        text-decoration: none !important;

    }
    .menu_my_nav li a:hover{

        /*border-bottom: 1px solid yellow;*/

    }
    .menu_my_nav li a.youshi{
        font-weight:900;
    }

    .hidden_nav_li{
    <?php if($pc == 'notpc'|| newsdet == 'index'){ echo 'display: none !important;';};?>
    }

    .menu_my_nav li a.youshi:hover,.personal a:hover{
        color: #e96147 !important;
        text-decoration: none !important;
    }

    .footer_my_hover:hover{
        color: #e96147 !important;
        cursor: pointer;
    }


    .login,.register{
        font-size:14px !important;
        width:30px !important;
        /*background: red !important;*/
        margin:0px !important;
        padding:0px !important;
    }

    .login{
        width:50px !important;
        margin-left:10px !important;

    }

    .register{
        width:60px !important;
    }

    .xiegang{
        font-size:14px !important;
        margin:0 3px !important;
        padding:0px !important;
        width:2px !important;
    }

    .login a:hover,.register a:hover,.logout a:hover{
        color: tomato !important;
        text-decoration: none !important;

    }


    body{
    <?php if($pc == 'pc'){ echo 'min-width: 1200px !important;';};?>
    }


    .language_zh_en{
        font-size:14px !important;
        margin:0 3px !important;
        padding:0px !important;
        width:25px !important;

    }

    #menu-trigger2{

    <?php if($pc == 'notpc'){ echo 'display: inline-block;margin-right:-35px;margin-top:4px;';}else{ echo 'display:none;';};?>
    }

    #menu-trigger3{

    <?php if($pc == 'notpc'){ echo 'display: inline-block;margin-right:-5px;margin-top:4px;';}else{ echo 'display:block;';};?>
    }

    .font_menu_nav_li{
        font-size:24px !important;

    }

    .font_menu_nav_li a{
        text-decoration: none !important;
    }

    .login_or_register{
    <?php if($account == 'on'){ echo 'display: none;';};?>
    }

    .personal{

        font-size:14px !important;
        width:130px !important;
        /*background: red !important;*/
        margin:0px !important;
        padding:0px !important;
        margin-left:10px !important;
        margin-right:5px !important;


    <?php if($account == 'off'){ echo 'display: none;';};?>

    }

    .logout{

        font-size:14px !important;
        width:35px !important;
        /*background: blue !important;*/
        margin:0px !important;
        padding:0px !important;
    <?php if($account == 'off'){ echo 'display: none;';}else{ echo '';};?>

    }

    .display{
    <?php if('newsdet' != 'home'){ echo 'display: none !important;';};?>

    }

    .show{
    <?php if('newsdet' == 'home'){ echo 'display: none !important;';};?>

    }





</style>


<header id="header" style="background: #000000;opacity: 0.9;">
    <div class="container" style=" <?php if($pc == 'pc'){ echo 'min-width: 1200px !important;';};?>">
        <!-- ############################# Logo ############################# -->
        <a id="logo" href="index.php" class="smooth-link" style=" "><img src=" <?php if($pc == 'pc'){ echo '/Public/images/logo1.png';}else{ echo '/Public/images/logo3.png';};?>"  style="<?php if($pc == 'pc'){ echo 'width: 140px;height: 45px;margin-top:2px;';}else{ echo 'width:50px;height: 49px;';};?>" alt="Logo"></a>
        <!--<a id="logo" href="index.html" class="smooth-link"><img src="/Public/wap/placeholders/logo.png" alt="Logo"></a>-->


        <nav class="nav_my" style="display: inline-block;float: right;">
            <ul class="menu_my_nav">







                <li class="hidden_nav_li"><a href="index.php" class="youshi"><?php echo (L("_Header_index")); ?></a></li>
                <li class="hidden_nav_li display" style="<?php if($_SESSION['language'] == 'en-us'){ echo 'width:120px;';} ?>"><a href="javascript:;" class="youshi project_introduction"><?php echo (L("_Header_introduction")); ?></a></li>
                <li class="hidden_nav_li display"><a href="javascript:;" class="youshi products_raised"><?php echo (L("_Header_productdet")); ?></a></li>
                <li class="hidden_nav_li display"><a href="javascript:;" class="youshi news_information"><?php echo (L("_Header_news")); ?></a></li>
                <li class="hidden_nav_li display" style="<?php if($_SESSION['language'] == 'en-us'){ echo 'width:110px;';} ?>"><a href="javascript:;" class="youshi product_advantage"><?php echo (L("_Header_project_advantage")); ?></a></li>
                <li class="hidden_nav_li display"><a href="javascript:;" class="youshi team_member"><?php echo (L("_Header_team_member")); ?></a></li>
                <li class="hidden_nav_li display"><a href="javascript:;" class="youshi product_schedule"><?php echo (L("_Header_project_plan")); ?></a></li>
                <li class="hidden_nav_li display"><a href="javascript:;" class="youshi about_us"><?php echo (L("_Header_about_us")); ?></a></li>

                <li class="hidden_nav_li show"  style="<?php if($_SESSION['language'] == 'en-us'){ echo 'width:120px !important;';} ?>"><a href="index.php?a=home" class="youshi products_raised"><?php echo (L("_Header_introduction")); ?></a></li>
                <li class="hidden_nav_li show"  style="<?php if($_SESSION['language'] == 'en-us'){ echo 'width:120px;';} ?>"><a href="index.php?a=productdet" class="youshi products_raised"><?php echo (L("_Header_productdet")); ?></a></li>
                <li class="hidden_nav_li show"><a href="index.php?a=news" class="youshi news_information"><?php echo (L("_Header_news")); ?></a></li>
                <li class="hidden_nav_li show"><a href="index.php?a=about" class="youshi about_us"><?php echo (L("_Header_about_us")); ?></a></li>




                <li class="login login_or_register"><a href="index.php?a=signin" ><?php echo (L("_Login")); ?></a></li>
                <li class="xiegang login_or_register"><a href="javascript:;" >|</a></li>
                <li class="register login_or_register"><a href="index.php?&a=signup"><?php echo (L("_Register")); ?></a></li>


                <li class="personal">

                    <div style="text-align: right;margin-top:0px;" >
                        <!--<img onclick="window.location.href='index.php?a=account_set';"  onerror="javascript:this.src='/Public/img/kaola.jpg';" style="line-height:30px;width: 30px;height: 30px;border-radius:100% !important;" src="<?php echo $_SESSION['account']['head']; ?>">-->
                        <img onclick="window.location.href='index.php?a=account_set';"  onerror="javascript:this.src='/Public/images/tou.jpg';" style="line-height:30px;width: 30px;height: 30px;border-radius:100% !important;" src="<?php echo $_SESSION['account']['head']; ?>">


                        <a href="index.php?a=account_set" style="position:relative;top:-10px;cursor:pointer;"> <?php  $name = $_SESSION['account']['user_name']; echo substr($name,0,18); ?> </a>

                    </div>


                </li>

                <li class="logout" ><a href="index.php?&a=logout"><?php echo (L("_Sign_out")); ?></a></li>


                <li class="language_zh_en" style="<?php if($pc== 'notpc'){ echo 'display:none;';} ?>">

                    <select id="language" onchange="change()" style="background: #000000;font-size: 12px;width: 85px;border: 1px solid gray;">
                        <option  <?php if($_SESSION['language'] == "zh-cn"){ echo 'selected';} ?> value="zh-cn">简体中文</option>
                        <option  <?php if($_SESSION['language'] == "zh-tw"){ echo 'selected';} ?> value="zh-tw">繁体中文</option>
                        <option  <?php if($_SESSION['language'] == "en-us"){ echo 'selected';} ?> value="en-us">English</option>

                    </select>


                    <!--<div id="chinaese" style="margin-top:2px;width: 26px;height: 30px;float: left;background: url('/Public/img/flag.gif') no-repeat 1px 5px;"></div>-->
                    <!--<div id="english"  style="display:none;margin-top:2px;width: 26px;height: 30px;float: left;background: url('/Public/img/flag.gif') no-repeat 1px -24px;"></div>-->

                </li>





                <!--<li>-->
                <!--<div id="chinaese" style="margin-top:0;cursor:pointer;background-color: transparent;height: 30px;">-->
                <!--<div style="margin-top:3px;width: 26px;height: 30px;float: left;background: url('/Public/img/flag.gif') no-repeat 1px 5px;"></div>-->
                <!--&lt;!&ndash;<div style="float: left;height: 30px;margin-top:0px;line-height: 30px;width: 70px;">&nbsp;&ndash;&gt;-->
                <!--&lt;!&ndash;简体中文&ndash;&gt;-->
                <!--&lt;!&ndash;</div>&ndash;&gt;-->
                <!--</div>-->
                <!--<div id="english" style="display:none;margin-top:0px;cursor:pointer;background-color: transparent;height: 30px;">-->
                <!--<div style="margin-top:3px;width: 26px;height: 30px;float: left;background: url('/Public/img/flag.gif') no-repeat 1px -24px;"></div>-->
                <!--&lt;!&ndash;<div style="float: left;height: 30px;margin-top:0px;line-height: 30px;width: 70px;">&nbsp;English</div>&ndash;&gt;-->
                <!--</div>-->
                <!--</li>-->

                <!--<div class="pull-right" style="margin-left: 10px;" >-->
                <!--<div id="chinaese" style="margin-top:5px;cursor:pointer;background-color: transparent;height: 30px;"><div style="margin-top:3px;width: 26px;height: 30px;float: left;background: url('/Public/img/flag.gif') no-repeat 1px 5px;"></div> <div style="float: left;height: 30px;margin-top:0px;line-height: 30px;width: 70px;">&nbsp;简体中文</div></div>-->
                <!--<div id="english" style="display:none;margin-top:5px;cursor:pointer;background-color: transparent;height: 30px;"><div style="margin-top:3px;width: 26px;height: 30px;float: left;background: url('/Public/img/flag.gif') no-repeat 1px -24px;"></div> <div style="float: left;height: 30px;margin-top:0px;line-height: 30px;width: 70px;">&nbsp;English</div></div>-->
                <!---->
                <!--&lt;!&ndash;<select class="bs-select form-control" data-show-subtext="true" style="background-color: transparent !important;width: 90px;border: 0px;">&ndash;&gt;-->
                <!--&lt;!&ndash;<option data-icon="fa-heart " style="background: url('/Public/img/flag.gif') !important;">Mustard</option>&ndash;&gt;-->
                <!--&lt;!&ndash;<option data-icon="fa-heart icon-info">Ketchup</option>&ndash;&gt;-->
                <!--&lt;!&ndash;<option data-icon="fa-film icon-default">Relish</option>&ndash;&gt;-->
                <!--&lt;!&ndash;<option data-icon="fa-home icon-warning">Mayonnaise</option>&ndash;&gt;-->
                <!--&lt;!&ndash;<option data-icon="fa-user icon-danger">Barbecue Sauce</option>&ndash;&gt;-->
                <!--&lt;!&ndash;</select>&ndash;&gt;-->
                <!--</div>-->

                <!--<li><a href="index.html">Home</a></li>-->
                <!--<li><a href="index.php" class="<?php if(newsdet == 'index'){ echo 'active';} ?>">Home</a></li>-->
                <!--<li><a href="index.php?&a=news" class="<?php if(newsdet == 'news'){ echo 'active';} ?>">News</a></li>-->

                <!--<li><a href="portfolio.html">Portfolio</a></li>-->
                <!--<li><a href="contact.html">Contact</a></li>-->
            </ul>
        </nav>



        <!-- ############################# Menu ############################# -->
        <!-- Menu Tigger -->
        <a   href="#" id="menu-trigger2" style="position:absolute !important;z-index: 9999999 !important;top:6px;" ><span id="icon_yes" class="icon"></span></a>
        <!-- /menu Tigger -->
    </div>
    <!-- Menu Container -->


    <!--<div id="menu-container" >-->
    <!--<div class="container">-->
    <!--<h3 class="nav-title">MoBi Coin</h3>-->
    <!--<div class="divider white"></div>-->
    <!--<nav id="nav">-->
    <!--<ul>-->
    <!--&lt;!&ndash;<li><a href="index.html">Home</a></li>&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="index.php" class="<?php if(newsdet == 'index'){ echo 'active';} ?>">Home</a></li>&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="index.php?&a=news" class="<?php if(newsdet == 'news'){ echo 'active';} ?>">News</a></li>&ndash;&gt;-->

    <!--&lt;!&ndash;<li><a href="portfolio.html">Portfolio</a></li>&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="contact.html">Contact</a></li>&ndash;&gt;-->




    <!--<li class="font_menu_nav_li"><a href="index.php" target="_blank" class="">首页</a></li>-->
    <!--&lt;!&ndash;<li><a  href="index.php?a=home#project_introduction" target="_self" class="telescopic project_introduction">项目介绍</a></li>&ndash;&gt;-->
    <!--<li  class="font_menu_nav_li"><a href="index.php?a=home"  target="_blank" class="telescopic products_raised">项目介绍</a></li>-->
    <!--<li  class="font_menu_nav_li"><a href="index.php?a=productdet"  target="_blank" class="telescopic products_raised">产品众筹</a></li>-->
    <!--<li class="font_menu_nav_li"><a href="index.php?a=news"  target="_blank" class="telescopic news_information">新闻资讯</a></li>-->
    <!--&lt;!&ndash;<li><a href="javascript:;" class="telescopic product_advantage">项目优势</a></li>&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="javascript:;" class="telescopic team_member">团队成员</a></li>&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="javascript:;" class="telescopic product_schedule">项目计划</a></li>&ndash;&gt;-->
    <!--<li class="font_menu_nav_li"><a href="index.php?a=account_set"  target="_blank" class="telescopic about_us">个人中心</a></li>-->


    <!--</ul>-->
    <!--</nav>-->
    <!--</div>-->
    <!--<div class="overlay"></div>-->
    <!--</div>-->



</header>



<div id="my_nav_div" style="display: none;background-color: #000000;width: 100%;height: 100%;min-height: 100%;z-index: 999999999;position: fixed;opacity: 0.85;">


    <div class="container" style="padding-top:80px;">
        <a   href="#" id="menu-trigger3" style="position:fixed !important;z-index: 9999999 !important;top:8px;" ><span  class="icon"></span></a>

        <h4 class="nav-title white" style="text-align: center;"><?php echo (L("_DBCoin")); ?></h4>
        <div class="divider white"></div>
        <nav id="nav">
            <ul>
                <!--<li><a href="index.html">Home</a></li>-->
                <!--<li><a href="index.php" class="<?php if(newsdet == 'index'){ echo 'active';} ?>">Home</a></li>-->
                <!--<li><a href="index.php?&a=news" class="<?php if(newsdet == 'news'){ echo 'active';} ?>">News</a></li>-->

                <!--<li><a href="portfolio.html">Portfolio</a></li>-->
                <!--<li><a href="contact.html">Contact</a></li>-->




                <li class="font_menu_nav_li"><a href="index.php" target="_blank" class=""><?php echo (L("_Header_index")); ?></a></li>
                <!--<li><a  href="index.php?a=home#project_introduction" target="_self" class="telescopic project_introduction">项目介绍</a></li>-->
                <li  class="font_menu_nav_li"><a href="index.php?a=home"  target="_blank" class="telescopic products_raised"><?php echo (L("_Header_introduction")); ?></a></li>
                <li  class="font_menu_nav_li"><a href="index.php?a=productdet"  target="_blank" class="telescopic products_raised"><?php echo (L("_Header_productdet")); ?></a></li>
                <li class="font_menu_nav_li"><a href="index.php?a=news"  target="_blank" class="telescopic news_information"><?php echo (L("_Header_news")); ?></a></li>
                <!--<li><a href="javascript:;" class="telescopic product_advantage">项目优势</a></li>-->
                <!--<li><a href="javascript:;" class="telescopic team_member">团队成员</a></li>-->
                <!--<li><a href="javascript:;" class="telescopic product_schedule">项目计划</a></li>-->
                <li class="font_menu_nav_li"><a href="index.php?a=about"  target="_blank" class="telescopic about_us"><?php echo (L("_Header_about_us")); ?></a></li>

                <li class="font_menu_nav_li" >

                    <select id="language2" onchange="change2()" style="background: #000000;font-size: 12px;width: 85px;border: 1px solid gray;">
                        <option  <?php if($_SESSION['language'] == "zh-cn"){ echo 'selected';} ?> value="zh-cn">简体中文</option>
                        <option  <?php if($_SESSION['language'] == "zh-tw"){ echo 'selected';} ?> value="zh-tw">繁体中文</option>
                        <option  <?php if($_SESSION['language'] == "en-us"){ echo 'selected';} ?> value="en-us">English</option>

                    </select>


                    <!--<div id="chinaese" style="margin-top:2px;width: 26px;height: 30px;float: left;background: url('/Public/img/flag.gif') no-repeat 1px 5px;"></div>-->
                    <!--<div id="english"  style="display:none;margin-top:2px;width: 26px;height: 30px;float: left;background: url('/Public/img/flag.gif') no-repeat 1px -24px;"></div>-->

                </li>
            </ul>
        </nav>
    </div>


</div>



<!--<a class="dropdown dropdown-extended quick-sidebar-toggler pull-right" style="margin:33px 3px 0 13px;height:30px;">-->
<!--<span class="sr-only">Toggle Quick Sidebar</span>-->
<!--<i class="icon-logout" style="font-size:20px;"></i>-->
<!--<i class="fa fa-list" style="font-size:20px;color: gray;"></i>-->

<!--</a>-->



<script src="/Public/resource/global/plugins/jquery.min.js" type="text/javascript"></script>




<script>


    function change() {

        var url = window.location.href;

        console.log($("#language").val());

        var l = $("#language").val();

        var action = "<?php echo ($action); ?>";

        console.log(action);

        if(action == "newsdet"){
            var aid = "<?php echo ($article['id']); ?>";
            console.log(aid);
            window.location.href = "index.php?a="+action+"&id="+aid+"&l="+l;

            return false;
        }




        window.location.href = "index.php?a="+action+"&l="+l;



    }

    function change2() {

        var url = window.location.href;

        console.log($("#language2").val());

        var l = $("#language2").val();

        var action = "<?php echo ($action); ?>";

        console.log(action);


        if(action == "newsdet"){
            var aid = "<?php echo ($article['id']); ?>";
            console.log(aid);
            window.location.href = "index.php?a="+action+"&id="+aid+"&l="+l;

            return false;
        }

        window.location.href = "index.php?a="+action+"&l="+l;



    }


    $("#menu-trigger2").click(function () {
        $("#my_nav_div").fadeToggle();
        $("#icon_yes").hide(0);
    });

    $("#menu-trigger3").click(function () {
        $("#my_nav_div").fadeToggle();
        $("#icon_yes").show(0);
    });

    //    $(".telescopic").click(function () {
    //
    //
    //        $("#menu-trigger").hide();
    ////        $("#menu-trigger3").removeClass("close");
    //    });

    $("#chinaese").click(function () {
        $("#chinaese").hide();
        $("#english").show();
    });
    $("#english").click(function () {
        $("#english").hide();
        $("#chinaese").show();
    });




</script>



    <!-- ############################# Intro Image ############################# -->
    <section id="intro-image" class="intro medium clearfix">

        <div class="intro-captions">
            <h3 class="caption-title big animated"><?php echo Translate::exec ( $article['title'],"zh",$to); ?></h3><br>
            <h3 class="caption-title small animated">


                <?php $time = strtotime($article['create_time']); echo date("M d,Y",$time); ?>

                <?php echo (L("_News_author")); ?>：<?php echo (L("_DBCoin")); ?>
            </h3>
        </div>

        <!-- Image -->
        <div class="image zoom news-single-intro"></div>

        <!-- Scroll Animation -->
        <!--<div class="scroll-anim">-->
            <!--<span class="scroll"></span>-->
            <!--<span class="scroll-text">Scroll</span>-->
        <!--</div>-->

        <!-- Overlay -->
        <span class="overlay animated"></span>

    </section>

    <!-- ############################# Page Content ############################# -->
    <section id="content">

        <!-- ############################# Single News ############################# -->
        <article class="single-news container">

            <!--<div class="categories"><a href="#">Design</a></div>-->

            <!--<h2>Subheading.</h2>-->

            <!--<p>Solutions; folksonomies, channels paradigms experiences web services dynamic mesh customized 24/365 leading-edge. Clicks-and-mortar enable expedite integrate synergistic: magnetic mission-critical; clicks-and-mortar brand life-hacks; channels enhance semantic. Technologies revolutionary applications frictionless viral incentivize! User-centric transform aggregate exploit blogospheres, extensible harness disintermediate user-centric maximize e-enable ecologies plug-and-play engage architect synthesize compelling next-generation. Metrics e-tailers out-of-the-box: e-commerce redefine ubiquitous seamless rich-clientAPIs webservices disintermediate back-end synergistic citizen-media."</p>-->
            <!--<p>-->
                <!--Engage scale convergence, cross-platform syndicate create exploit, "deliverables; synergies communities, iterate one-to-one peer-to-peer scale." Sexy wikis real-time standards-compliant B2B ecologies viral extend rich capture create tag global syndicate next-generation virtual supply-chains: strategic users clicks-and-mortar syndicate. Web-enabled engineer standards-compliant. Innovate design incentivize whiteboard revolutionize: platforms rich platforms networks. Communities communities life-hacks Cluetrain grow deploy cross-platform embedded reinvent innovate target. E-commerce action-items design cross-platform embrace turn-key eyeballs data-driven e-enable partnerships web services orchestrate plug-and-play applications one-to-one, methodologies, transform user-centred.-->
            <!--</p>-->

            <blockquote>
                <p><span  style="font-weight: 900;font-style: normal;"><?php echo (L("_News_zhaiyao")); ?>：</span>

                    <?php echo Translate::exec ( $zhaiyao,"zh",$to); ?>

                </p>
            </blockquote>

            <!-- Image with caption and lightbox -->
            <div class="caption">
                <a href="<?php echo ($article['article_picture']); ?>" class="imagebox zoom-thumb" title="<?php echo Translate::exec ( $article['title'],"zh",$to); ?>">
                    <img src="<?php echo ($article['article_picture']); ?>" style="width: 100%;" alt="<?php echo ($article["title"]); ?>" title="<?php echo ($article["title"]); ?>" >
                    <!--<img src="/Public/wap/placeholders/news-single02.jpg" alt="News Single" >-->
                </a>
                <!--<p class="caption-text">Confirmation by Kushagra Agarwal</p>-->
            </div>
            <div>
                <?php echo Translate::exec ( $article['content'],"zh",$to); ?>
            </div>
            <!--<p>-->
                <!--Distributed blogging reinvent blogging Cluetrain networks benchmark rss-capable, wikis, "peer-to-peer; niches harness, harness 24/7 models." Rss-capable convergence web-readiness granular revolutionize applications magnetic semantic clicks-and-mortar e-business distributed dynamic deliver. Widgets, facilitate communities compelling aggregate, web services streamline, data-driven killer; synthesize, technologies innovative generate, interactive turn-key seize niches.-->
            <!--</p>-->



            <span style="color:#a0a9b4 !important;font-size: 16px;padding-bottom: 10px;"><?php echo (L("_Tag")); ?>：</span><?php
 $tag = $article['tag']; $arr = explode(",",$tag); $str = ""; for($i=0;$i<count($arr);$i++){ if($arr[$i] == ''){}else{ $str .='<a class="title_head" style="color:#a0a9b4 !important;margin-right:5px;margin-bottom:5px;display:inline-block;" href="index.php?&a=tag&tag='.$arr[$i].'" >
                                                                        <span  >'.Translate::exec ( $arr[$i],"zh",$to).'</span>
                                                                        </a>'; } } echo $str; ?>



            <div class="jiathis_style" style="<?php if($pc=='pc'){ echo 'float: right;';}else{ echo 'float: left;';}?>">


                <!-- JiaThis Button BEGIN -->
                <div class="jiathis_style">
                    <span class="jiathis_txt" style="color:#a0a9b4 !important;"><?php echo (L("_News_share_to")); ?>：</span>

                    <a class="jiathis_button_qzone"></a>
                    <a class="jiathis_button_tsina"></a>
                    <a class="jiathis_button_tqq"></a>
                    <a class="jiathis_button_weixin"></a>
                    <a class="jiathis_button_renren"></a>
                    <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                    <!--<a class="jiathis_counter_style"></a>-->
                </div>
                <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                <!-- JiaThis Button END -->
            </div>



            <div style="padding:0px 0px 10px;clear: both;">

                <a style="margin-top:10px;display: <?php
 if($display_last == "kong"){ echo "none"; }else{ echo "inline-block"; } ?>
                ;" href="index.php?&a=newsdet&id=<?php echo ($last); ?>" style="display: inherit;"><?php echo (L("_News_last")); ?>：<?php echo Translate::exec ( $last_title,"zh",$to); ?></a>
                <br/>
                <a style="display: <?php
 if($display_next == "kong"){ echo "none"; }else{ echo "inline-block"; } ?>
                ;" href="index.php?&a=newsdet&id=<?php echo ($next); ?>"><?php echo (L("_News_next")); ?>：<?php echo Translate::exec ( $next_title,"zh",$to); ?></a>


                <!--<a href="" style="display: inherit;">上一篇：1111111111111111111111111111</a>-->
                <!--<a href="">下一篇：2222222222222222222222222222</a>-->


            </div>




        </article>







        <!-- /entry -->

        <!-- Page Navigation -->
        <!--<div class="page-navigation">-->
            <!--<div class="flex-col-1-2 left animated" data-delay="0">-->
                <!--<a href="#" class="prev"><i class="icon icon-arrow-left2"></i> Previous</a>-->
            <!--</div>-->

            <!--<div class="flex-col-1-2 right animated" data-delay="100">-->
                <!--<a href="#" class="next">Next <i class="icon icon-arrow-right2"></i></a>-->
            <!--</div>-->
        <!--</div>-->
        <!-- /page navigation -->

        <!-- Request box  -->
        <!--<div class="request">-->

            <!--<h3 class="medium-heading white animated" data-delay="0">Unsure where to start?</h3>-->
            <!--<a class="stamp-button intro-button animated animated" href="#" data-delay="100"><span>Let Us Help</span></a>-->

        <!--</div>-->

    </section>
    <!-- /content -->

    <!-- ############################# Footer ############################# -->
    
<style>


    .footer_h4{
        font-size: 18px !important;
    }


</style>


<!-- ############################# Footer ############################# -->
<footer id="footer" style="padding: 10px 0 10px;">
    <div class="container" >
        <!-- Footer Columns -->
        <div class="footer-col" style="<?php  if($pc == 'pc'){ echo 'width: 25%;';} ?>">

            <div style="text-align: center" >
                <h4>

                    <img style="width: 160px;height: 50px;display: block;margin:0 auto;margin-bottom: 30px;" src="/Public/images/logo1.png" alt="logo" class="logo-default">

                </h4>
                <div style="text-align: center;<?php if($pc == 'pc'){ echo '';}else{ echo 'margin:0 auto;';};?>">

                    <?php echo (L("_Footer_time")); ?>：9:00-18:00<br/>
                    <?php echo (L("_Footer_qq_group")); ?>：123456789<br/>

                    <?php echo (L("_Footer_customer_phone")); ?>：400-1111-1234<br/>
                    <?php echo (L("_Footer_cooperative_mailbox")); ?>：ebo@mbc.com<br/>
                </div>


                <!--<br>-->
                <!--Melbourne, Australia +01 800 559 6580 <br>-->
                <!--<a href="#">demo@demolink.com</a>-->
            </div>
        </div>

        <div class="footer-col" style="<?php  if($pc == 'pc'){ echo 'width: 25%;';} ?>">
            <!--<h4>Let's Talk</h4>-->
            <div style="text-align: center">
                <h4><?php echo (L("_Footer_about_us")); ?></h4>
                <h4 class="footer_h4 footer_my_hover" onclick="window.location.href='index.php?a=about';"><?php echo (L("_DBCoin")); ?> </h4>
                <h4 class="footer_h4 footer_my_hover" onclick="window.location.href='index.php?a=news';"><?php echo (L("_Header_news")); ?></h4>
                <h4 class="footer_h4 footer_my_hover" onclick="window.location.href='index.php?a=productdet';"><?php echo (L("_Header_productdet")); ?></h4>


            </div>
            <!--<a class="stamp-button" href="#"><span>Get in touch</span></a>-->
            <br>
        </div>

        <div class="footer-col" style="<?php  if($pc == 'pc'){ echo 'width: 25%;';} ?>">
            <!--<h4>Let's Talk</h4>-->
            <!--<p>-->
                <!--Lorem ipsum dolorsit amet, consectetur adipiscing elit. In sagittis tincidunt leo ut volutpat.-->
            <!--</p>-->
            <!--<a class="stamp-button" href="#"><span>Get in touch</span></a>-->
            <!--<br>-->
            <div style="text-align: center">

                <h4><?php echo (L("_Footer_help")); ?></h4>
                <h4 class="footer_h4 footer_my_hover" onclick="window.location.href='index.php?a=signupguide';"><?php echo (L("_Footer_registration_guide")); ?></h4>
                <h4 class="footer_h4 footer_my_hover" onclick="window.location.href='index.php?a=rechargeguide';"><?php echo (L("_Footer_recharge_guide")); ?></h4>
                <h4 class="footer_h4 footer_my_hover" onclick="window.location.href='index.php?a=tradingguide';"><?php echo (L("_Footer_trading_guide")); ?></h4>


            </div>


        </div>


        <div class="footer-col last" style="<?php  if($pc == 'pc'){ echo 'width: 25%;';} ?>">
            <div style="text-align: center">

                <h4><?php echo (L("_Footer_contact_us")); ?></h4>
                <!--smooth-link-->
                <!--<a  href="index.html" class=" " style="text-decoration: none !important;border: 0px;"><img src="/Public/images/sina.svg" style="width: 50px!important;height: 41px!important;;" ></a>-->
                <!--<a  href="index.html" class=" " style="text-decoration: none !important;border: 0px;"><img src="/Public/images/qq.svg" style="width: 50px!important;;height: 41px!important;;" ></a>-->

                <img src="/Public/wap/tubiao/weibo1.svg" onmouseover="this.src='/Public/wap/tubiao/weibo2.svg';" onmouseout="this.src='/Public/wap/tubiao/weibo1.svg';" style="width: 40px!important;height: 41px!important;" >&nbsp;
                <img src="/Public/wap/tubiao/qq1.svg" onmouseover="this.src='/Public/wap/tubiao/qq2.svg';" onmouseout="this.src='/Public/wap/tubiao/qq1.svg';" style="width: 40px!important;height: 41px!important;" >&nbsp;
                <img src="/Public/wap/tubiao/wechat1.svg" onmouseover="this.src='/Public/wap/tubiao/wechat2.svg';" onmouseout="this.src='/Public/wap/tubiao/wechat1.svg';" style="width: 40px!important;height: 41px!important;" >&nbsp;
                <img src="/Public/wap/tubiao/phone1.svg" onmouseover="this.src='/Public/wap/tubiao/phone2.svg';" onmouseout="this.src='/Public/wap/tubiao/phone1.svg';" style="width: 40px!important;height: 41px!important;" >


                <!--<a class="social-icon" href="#"><img   src="/Public/images/sina.svg" /></a>-->
                <!--<a class="social-icon" href="#"><img   src="/Public/images/qq.svg" /></a>-->

                <!-- Footer socials icons -->
                <!--<a class="social-icon" href="#"><i class="icon icon-twitter"></i></a>-->
                <!--<a class="social-icon" href="#"><i class="icon icon-facebook"></i></a>-->
                <!--<a class="social-icon" href="#"><i class="icon icon-vimeo"></i></a>-->
                <!--<a class="social-icon" href="#"><i class="icon icon-youtube"></i></a>-->
                <!--<a class="social-icon" href="#"><i class="icon icon-flickr"></i></a>-->

                <br/>
                <img  style="width: 80px;margin-top:10px;" src="/Public/images/wechat.png"/>&nbsp;
                <img  style="width: 80px;margin-top:10px;" src="/Public/images/wechat.png"/>


            </div>


        </div>
        <!-- /footer columns -->
    </div>
</footer>
<!-- /footer -->

<!-- Footer Note -->
<div id="footer-note">
    <p>
        Copyright © 2017 dbjd.9ebo.com All rights Reserved
        <!--<a href="#">Rascals Themes</a>-->
    </p>


</div>
<!-- /footer note -->

    <!-- /footer note -->

</section>
<!-- /page -->

<!-- ############################# Javascripts ############################# -->
<script src="/Public/wap/js/jquery.min.js"></script>
<script src="/Public/wap/js/jquery.easing-1.3.min.js"></script>
<script src="/Public/wap/js/jquery.queryloader2.min.js"></script>
<script src="/Public/wap/js/smoothscroll.js"></script>
<script src="/Public/wap/js/waypoints.min.js"></script>
<script src="/Public/wap/js/jquery.transit.min.js"></script>
<script src="/Public/wap/js/jquery.scrollTo.min.js"></script>
<!--<script src="/Public/wap/js/jquery.small.plugins.js"></script>-->
<script src="/Public/wap/js/owl.carousel.min.js"></script>
<script src="/Public/wap/js/jquery.fancybox-1.3.4.pack.js"></script>
<script src="/Public/wap/js/retina.min.js"></script>

<!-- Custom scripts -->
<script src="/Public/wap/js/custom.js"></script>
</body>
</html>