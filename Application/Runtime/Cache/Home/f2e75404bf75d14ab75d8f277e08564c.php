<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>关于我们-魔币众筹平台</title>
    <meta name="keywords" content="众筹,众筹平台,区块链,比特币,股权众筹,众筹项目,众筹网">
    <meta name="description" content="魔币众筹项目平台作为首家专注于数字货币众筹、区块链领域的创业众筹融资平台,提供ICO项目,众筹资讯,数据分析等服务,协助您实现自己的创业梦想。">




    <!--<title></title>-->
    <!--<meta name="keywords" content="">-->
    <!--<meta name="description" content="">-->



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="/Public/resource/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/resource/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/resource/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/resource/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/Public/resource/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/Public/resource/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/Public/resource/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/Public/resource/pages/css/profile-2.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/Public/resource/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/resource/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/Public/resource/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link href="/Public/resource/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/resource/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!--<link href="/Public/resource/pages/css/login.min.css" rel="stylesheet" type="text/css" />-->



    <link rel="stylesheet" href="/Public/wap/css/style.css" media="screen" />


    <link rel="shortcut icon" href="/Public/img/icoico.ico" />



    <style>
        .new_item{
            padding-bottom:10px;
        }
        .nav_top_head{
            margin-right:30px;
            font-size:18px;

        }
        .nav_color_head{
            color:#000000;
        }
        .nav_color_head:hover{
            /*text-decoration: underline !important;*/
            color:red;
        }
        .nav_color_head2:link{
            color:#000000;
        }
        .nav_color_head2:hover{
            color:red;
        }
        .nav_color_head:active,.nav_color_head:visited.nav_color_head:link{
            text-decoration: none !important;
            color:#000000 !important;
        }

        .label_style{
            display: inline-block;
            margin-bottom:10px;
            font-size: 18px;
        }

        .p_header{
            text-align: center;font-weight: 600;
        }
        .p_content{
            font-size:16px !important;
            text-indent: 2em;
        }
        .radius{
            border-radius:10px !important;
        }

        .page-wrapper-middle{
            background: #ffffff!important;
        }
    </style>


</head>



<!-- END HEAD -->

<body class="page-container-bg-solid">
<div class="page-wrapper">

    <!-- BEGIN HEADER -->
    

<style>

    .btn_more:hover{
        background: #e96147 !important;

    }

    
    #logo{
        /*background: yellow !important;*/
        margin-left:-20px;

    }

    .nav_my{
        /*background: green !important;*/


        display:inline-block;

         <?php if($pc == 'pc'){ echo 'margin-right:160px;';}else{ if('about' == 'account'){ echo 'margin-right: -5px;'; }else{ echo 'margin-right: 10px;';}}?>
    }

    .menu_my_nav{
        margin:0px;
        padding:0px;
        list-style-type: none;
        margin-top:10px;
        height:30px;
    }
    
    .menu_my_nav li{
        float: left;
        width:80px;
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
    .menu_my_nav li a.youshi{
        font-weight:900;
    }

    .hidden_nav_li{
       <?php if($pc == 'notpc'|| [active] == 'index'){ echo 'display: none !important;';};?>
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

    .login{
        margin-left:50px !important;
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

    #menu-trigger{

        <?php if($pc == 'notpc'){ echo 'display: inline-block;margin-right:-35px;margin-top:4px;';}else{ echo 'display:none;';};?>
    }

    .font_menu_nav_li{
        font-size:25px !important;
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


</style>


<header id="header" style="background: #000000;opacity: 0.8;">
    <div class="container" style=" <?php if($pc == 'pc'){ echo 'min-width: 1200px !important;';};?>">
        <!-- ############################# Logo ############################# -->
        <a id="logo" href="index.html" class="smooth-link"><img src="/Public/img/ico.png"  style="width: 60px;height: 51px;" alt="Logo"></a>
        <!--<a id="logo" href="index.html" class="smooth-link"><img src="/Public/wap/placeholders/logo.png" alt="Logo"></a>-->


        <nav class="nav_my" style="display: inline-block;float: right;">
            <ul class="menu_my_nav">

                <li class="hidden_nav_li"><a href="index.php" class="youshi">首页</a></li>
                <li class="hidden_nav_li"><a href="javascript:;" class="youshi project_introduction">项目介绍</a></li>
                <li class="hidden_nav_li"><a href="javascript:;" class="youshi products_raised">产品众筹</a></li>
                <li class="hidden_nav_li"><a href="javascript:;" class="youshi news_information">新闻资讯</a></li>
                <li class="hidden_nav_li"><a href="javascript:;" class="youshi product_advantage">项目优势</a></li>
                <li class="hidden_nav_li"><a href="javascript:;" class="youshi team_member">团队成员</a></li>
                <li class="hidden_nav_li"><a href="javascript:;" class="youshi product_schedule">项目计划</a></li>
                <li class="hidden_nav_li"><a href="javascript:;" class="youshi about_us">关于我们</a></li>

                <li class="login login_or_register"><a href="index.php?a=signin" >登录</a></li>
                <li class="xiegang login_or_register"><a href="javascript:;" >|</a></li>
                <li class="register login_or_register"><a href="index.php?&a=signup">注册</a></li>


                <li class="personal">

                    <div style="text-align: right;margin-top:0px;" >
                        <img onclick="window.location.href='index.php?a=account_set';"  onerror="javascript:this.src='/Public/img/kaola.jpg';" style="line-height:30px;width: 30px;height: 30px;border-radius:100% !important;" src="<?php echo $_SESSION['account']['head']; ?>">


                        <a href="index.php?a=account_set" style="position:relative;top:-10px;cursor:pointer;"> <?php  $name = $_SESSION['account']['user_name']; echo substr($name,0,18); ?> </a>

                    </div>
       

                </li>

                <li class="logout"><a href="index.php?&a=logout">退出</a></li>


                <li class="language_zh_en">


                    <div id="chinaese" style="margin-top:2px;width: 26px;height: 30px;float: left;background: url('/Public/img/flag.gif') no-repeat 1px 5px;"></div>
                    <div id="english"  style="display:none;margin-top:2px;width: 26px;height: 30px;float: left;background: url('/Public/img/flag.gif') no-repeat 1px -24px;"></div>
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
            <!--<li><a href="index.php" class="<?php if([active] == 'index'){ echo 'active';} ?>">Home</a></li>-->
            <!--<li><a href="index.php?&a=news" class="<?php if([active] == 'news'){ echo 'active';} ?>">News</a></li>-->

            <!--<li><a href="portfolio.html">Portfolio</a></li>-->
            <!--<li><a href="contact.html">Contact</a></li>-->
            </ul>
        </nav>



        <!-- ############################# Menu ############################# -->
        <!-- Menu Tigger -->
        <a   href="#" id="menu-trigger" style="position:absolute !important;z-index: 9999999 !important;"><span class="icon"></span></a>
        <!-- /menu Tigger -->
    </div>
    <!-- Menu Container -->


    <div id="menu-container">
        <div class="container">
            <h3 class="nav-title">MoBi Coin</h3>
            <div class="divider white"></div>
            <nav id="nav">
                <ul>
                    <!--<li><a href="index.html">Home</a></li>-->
                    <!--<li><a href="index.php" class="<?php if([active] == 'index'){ echo 'active';} ?>">Home</a></li>-->
                    <!--<li><a href="index.php?&a=news" class="<?php if([active] == 'news'){ echo 'active';} ?>">News</a></li>-->

                    <!--<li><a href="portfolio.html">Portfolio</a></li>-->
                    <!--<li><a href="contact.html">Contact</a></li>-->


                    <li class="font_menu_nav_li"><a href="index.php" target="_blank" class="">首页</a></li>
                    <!--<li><a  href="index.php?a=home#project_introduction" target="_self" class="telescopic project_introduction">项目介绍</a></li>-->
                    <li  class="font_menu_nav_li"><a href="index.php?a=home"  target="_blank" class="telescopic products_raised">项目介绍</a></li>
                    <li  class="font_menu_nav_li"><a href="index.php?a=productdet"  target="_blank" class="telescopic products_raised">产品众筹</a></li>
                    <li class="font_menu_nav_li"><a href="index.php?a=news"  target="_blank" class="telescopic news_information">新闻资讯</a></li>
                    <!--<li><a href="javascript:;" class="telescopic product_advantage">项目优势</a></li>-->
                    <!--<li><a href="javascript:;" class="telescopic team_member">团队成员</a></li>-->
                    <!--<li><a href="javascript:;" class="telescopic product_schedule">项目计划</a></li>-->
                    <li class="font_menu_nav_li"><a href="index.php?a=account_set"  target="_blank" class="telescopic about_us">个人中心</a></li>


                </ul>
            </nav>
        </div>
        <div class="overlay"></div>
    </div>



</header>




<!--<a class="dropdown dropdown-extended quick-sidebar-toggler pull-right" style="margin:33px 3px 0 13px;height:30px;">-->
<!--<span class="sr-only">Toggle Quick Sidebar</span>-->
<!--<i class="icon-logout" style="font-size:20px;"></i>-->
<!--<i class="fa fa-list" style="font-size:20px;color: gray;"></i>-->

<!--</a>-->



<script src="/Public/resource/global/plugins/jquery.min.js" type="text/javascript"></script>




<script>





    $(".telescopic").click(function () {


        $("#menu-trigger").hide();
//        $("#menu-trigger").removeClass("close");
    });

    $("#chinaese").click(function () {
        $("#chinaese").hide();
        $("#english").show();
    });
    $("#english").click(function () {
        $("#english").hide();
        $("#chinaese").show();
    });




</script>

    <!-- END HEADER -->

    <div class="page-wrapper-row full-height" >
        <div class="page-wrapper-middle" >
            <!-- BEGIN CONTAINER -->
            <div class="page-container" style="margin-top: 115px;">
                <!-- BEGIN CONTENT -->


                <div class="page-content">
                    <div class="container">


                    <div class="col-md-12" style="margin-top:30px;">
                        <!-- BEGIN PORTLET-->
                        <div class="portlet light form-fit bordered">
                            <div class="portlet-title">
                                <!--<div class="caption" >-->
                                    <!--<i class="icon-settings font-green"></i>-->
                                    <!--<h2 class="caption-subject font-green sbold uppercase" style="text-align: center;">新增文章</h2>-->
                                <!--</div>-->

                                <!--<div class="actions">-->
                                <!--<input type="checkbox" class="make-switch" checked data-on="success" data-on-color="success" data-off-color="warning" data-size="small">-->
                                <!--</div>-->

                                <p class="caption-subject font-green sbold uppercase" style="font-size: 30px;text-align: center;margin-bottom: 0px;">忘记密码？</p>

                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="index.php?&a=update_pwd_confirm" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                    <div class="form-body">


                                        <div class="form-group">
                                            <label class="control-label col-md-5">用户名</label>
                                            <div class="col-md-3 dark">

                                                <?php echo ($personal["user_name"]); ?>
                                                <input type="hidden" class="form-control" name="user_name" value="<?php echo ($personal["user_name"]); ?>" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-5">邮箱</label>
                                            <div class="col-md-3 dark">
                                                <?php echo ($personal["email"]); ?>

                                                <!--<input type="text" class="form-control" maxlength="25" name="email" id="email" placeholder="请输入作者">-->
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-5">新密码</label>
                                            <div class="col-md-3">
                                                <input type="password" class="form-control" maxlength="25" name="password" id="password" placeholder="请输入新密码">
                                            </div>
                                        </div>

                                        <div class="form-group last">
                                            <label class="control-label col-md-5">确认密码</label>
                                            <div class="col-md-3">
                                                <input type="password" class="form-control" maxlength="25" name="rpassword" id="rpassword" placeholder="请输入确认密码">
                                            </div>
                                        </div>




                                    </div>
                                    <div class="form-actions"  style="height: 60px !important;">
                                        <div class="row" >
                                            <div class="col-md-offset-5 col-md-9" >
                                                <!--<a id="submit_confirm" href="javascript:;" class="btn green">-->
                                                    <!--&lt;!&ndash;<i class="fa fa-check"></i> &ndash;&gt;-->
                                                    <!--修改密码-->
                                                <!--</a>-->

                                                <button id="submit_confirm" type="button" class="btn_more">修改密码</button>

                                                <!--<a href="javascript:;" class="btn btn-outline grey-salsa">重置</a>-->
                                                <button id="submit" type="submit" style="display: none;" class="btn btn-outline grey-salsa">修改密码</button>
                                                <!--<button type="reset" class="btn btn-outline grey-salsa">重置</button>-->
                                                <button type="reset" class="btn_more">重置</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>



                    </div>
                </div>


                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
        </div>
    </div>
    
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

                    <img style="width: 130px;display: block;margin:0 auto;margin-top:0px;" src="/Public/img/logo.png" alt="logo" class="logo-default">

                </h4>
                <div style="text-align: left;<?php if($pc == 'pc'){ echo 'padding-left: 15px;';}else{ echo 'width:155px;margin:0 auto;';};?>">
                    工作时间：9:00-18:00<br/>
                    官网QQ群：123456789<br/>

                    客服电话：400-1111-1234<br/>
                    合作邮箱：ebo@mbc.com<br/>
                </div>


                <!--<br>-->
                <!--Melbourne, Australia +01 800 559 6580 <br>-->
                <!--<a href="#">demo@demolink.com</a>-->
            </div>
        </div>

        <div class="footer-col" style="<?php  if($pc == 'pc'){ echo 'width: 25%;';} ?>">
            <!--<h4>Let's Talk</h4>-->
            <div style="text-align: center">
                <h4>关于我们</h4>
                <h4 class="footer_h4 footer_my_hover">MBC简介</h4>
                <h4 class="footer_h4 footer_my_hover" onclick="window.location.href='http://wechat.tiny-calf.com/index.php?a=news';">新闻资讯</h4>
                <h4 class="footer_h4 footer_my_hover" onclick="window.location.href='http://wechat.tiny-calf.com/index.php?a=productdet';">产品众筹</h4>


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
                <h4>新手帮助</h4>
                <h4 class="footer_h4 footer_my_hover" onclick="window.location.href='';">注册指南</h4>
                <h4 class="footer_h4 footer_my_hover">充值指南</h4>
                <h4 class="footer_h4 footer_my_hover">交易指南</h4>


            </div>


        </div>


        <div class="footer-col last" style="<?php  if($pc == 'pc'){ echo 'width: 25%;';} ?>">
            <div style="text-align: center">

                <h4>联系我们</h4>
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
        Copyright © 2017 mobicoin.com All rights Reserved
        <!--<a href="#">Rascals Themes</a>-->
    </p>
</div>
<!-- /footer note -->
</div>



<div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog" style="padding-top:200px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">提示</h4>
            </div>
            <div class="modal-body" id="modal-body">  </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">确定</button>
                <!--<button type="button" class="btn green">Save changes</button>-->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>




<!-- END QUICK NAV -->

<!--[if lt IE 9]>
<script src="/Public/resource/global/plugins/respond.min.js"></script>
<script src="/Public/resource/global/plugins/excanvas.min.js"></script>
<script src="/Public/resource/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="/Public/resource/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/Public/resource/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/Public/resource/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!--<script src="/Public/resource/pages/scripts/login.min.js" type="text/javascript"></script>-->
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->

<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/Public/resource/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
<script src="/Public/resource/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
<script src="/Public/resource/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="/Public/resource/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/Public/resource/pages/scripts/ui-modals.min.js" type="text/javascript"></script>

<script>



    $("#submit_confirm").click(function () {

        var password = $("#password").val();
        var rpassword = $("#rpassword").val();

        if(password != rpassword){

            $("#modal-body").html("新密码与确认密码必须相等！");
            $("#draggable").modal("show");

            return false;
        }

        $("#submit").click();
    });



</script>


</body>

</html>