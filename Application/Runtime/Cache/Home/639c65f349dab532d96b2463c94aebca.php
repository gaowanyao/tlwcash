<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />


    <title>产品众筹-多宝金豆专注于区块链去中心化数字货币</title>
    <meta name="keywords" content="产品众筹,多宝,金豆,多宝金豆,区块链,众筹,数字货币">
    <meta name="description" content="多宝金豆数字货币ICO众筹项目应用区块链技术去中心化、不可篡改、匿名性、天然审计特点，为传统游戏带来了更安全便捷、分布式交易、透明性和时效性等特点，为广大ICO众筹者实现了自己的创业梦想。">




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
    <link href="/Public/resource/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/resource/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/Public/resource/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/Public/resource/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/Public/resource/pages/css/search.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->

    <link href="/Public/resource/pages/css/profile-2.min.css" rel="stylesheet" type="text/css" />

    <link href="/Public/resource/global/plugins/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/Public/resource/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/resource/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/Public/resource/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="/Public/img/icoico.ico" />


    <link rel="stylesheet" href="/Public/wap/css/style.css" media="screen" />

    <link rel="shortcut icon" href="/Public/img/ico.ico" />


    <!-- ############################# Javascript - Modernizr ############################# -->

    <script src="/Public/wap/js/modernizr.custom.js"></script>

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
        .time_color{
            color:#000000 !important;
        }
        .p_header{
            text-align: center;font-weight: 600;
        }
        .p_content{
            font-size:16px !important;
            text-indent: 2em;
        }
        .radius{
            /*border-radius:10px !important;*/
        }
    </style>


</head>
<!-- END HEAD -->


<!--<hr>-->
<!--<hr><?php echo ($appid); ?>-->
<!--<hr><?php echo ($timestamp); ?>-->
<!--<hr><?php echo ($nonceStr); ?>-->
<!--<hr><?php echo ($signature); ?>-->
<!--<hr>-->

<script type="text/javascript">


    //调用微信JS api 支付
    function jsApiCall()
    {
        WeixinJSBridge.invoke(
            'getBrandWCPayRequest',
        <?php echo $jsApiParameters; ?>,
        function(res,data){
            WeixinJSBridge.log(res.err_msg);
//            alert(res.err_code+res.err_desc+res.err_msg);
        }
    );
    }



    function callpay(jsApiParameters)
    {
        if (typeof WeixinJSBridge == "undefined"){
            if( document.addEventListener ){
                document.addEventListener('WeixinJSBridgeReady', jsApiCall(jsApiParameters), false);
            }else if (document.attachEvent){
                document.attachEvent('WeixinJSBridgeReady', jsApiCall(jsApiParameters));
                document.attachEvent('onWeixinJSBridgeReady', jsApiCall(jsApiParameters));
            }
        }else{
            jsApiCall(jsApiParameters);
        }
    }
</script>

<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>



<script>
    //            alert(<?php echo ($signature); ?>);

    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: '<?php echo ($appid); ?>', // 必填，公众号的唯一标识
        timestamp: '<?php echo ($timestamp); ?>', // 必填，生成签名的时间戳
        nonceStr: '<?php echo ($nonceStr); ?>', // 必填，生成签名的随机串
        signature: '<?php echo ($signature); ?>',// 必填，签名，见附录1
        jsApiList: [
            'onMenuShareTimeline',     //分享到朋友圈
            'onMenuShareAppMessage',  //分享给朋友
            'scanQRCode',             //扫二维码
            'chooseImage',         //拍照或从手机相册中选图接口
            'startRecord',         //开始录音接口
            'stopRecord',         //停止录音接口
            'onVoiceRecordEnd',  //监听录音自动停止接口
            'playVoice',     //播放语音接口
            'pauseVoice',   //暂停播放接口
            'stopVoice',  //停止播放接口
        ] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
    });

    wx.ready(function(){

        // config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready函数中。

        //                获取“分享到朋友圈”按钮点击状态及自定义分享内容接口
        wx.onMenuShareTimeline({
            title: '众筹', // 分享标题
            link: '<?php echo ($HOST_ROOT); ?>index.php?m=home&c=index&a=<?php echo ($action); ?>', // 分享链接
            imgUrl: 'http://www.h5edu.cn/Public/assets/img/logo_blue.png', // 分享图标
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });


        //                获取“分享给朋友”按钮点击状态及自定义分享内容接口
        wx.onMenuShareAppMessage({
            title: '众筹', // 分享标题
            desc: '我亦有心无处说，爱酒舍人开小酌，静夜忆谁来对坐，静时闲语上龙墀。', // 分享描述
            link: '<?php echo ($HOST_ROOT); ?>index.php?m=home&c=index&a=<?php echo ($action); ?>', // 分享链接
            imgUrl: 'http://www.h5edu.cn/Public/assets/img/logo_blue.png', // 分享图标
            type: 'link', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数
//                alert("分享成功");
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
//                alert("已取消");
            }
        });



//        document.querySelector("#Qrcode").onclick = function (){
//            wx.scanQRCode({
//                needResult: 0, // 默认为0，扫描结果由微信处理，1则直接返回扫描结果，
//                scanType: ["qrCode","barCode"], // 可以指定扫二维码还是一维码，默认二者都有
//                success: function (res) {
//                    var result = res.resultStr; // 当needResult 为 1 时，扫码返回的结果
//                }
//            });
//
//        }

//        document.querySelector("#startRecord").onclick = function () {
//            wx.startRecord(); // 开始录音接口
//        }
//
//        //停止录音接口
//        document.querySelector("#stopRecord").onclick = function () {
//            wx.stopRecord({
//                success: function (res) {
//                    var localId = res.localId;
//                }
//            });
//        }






    });



    wx.error(function(res){

        // config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA可以在这里更新签名。

    });





</script>





<body class="page-container-bg-solid">
<div class="page-wrapper">
            <!-- BEGIN HEADER -->
            

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

         <?php if($pc == 'pc'){ echo 'margin-right:10px;';}else{ if('productdet' == 'account'){ echo 'margin-right: -5px;'; }else{ echo 'margin-right: 10px;';}}?>
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
    .menu_my_nav li a:hover{

        /*border-bottom: 1px solid yellow;*/

    }
    .menu_my_nav li a.youshi{
        font-weight:900;
    }

    .hidden_nav_li{
       <?php if($pc == 'notpc'|| productdet == 'index'){ echo 'display: none !important;';};?>
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

    #menu-trigger2{

    <?php if($pc == 'notpc'){ echo 'display: inline-block;margin-right:-35px;margin-top:4px;';}else{ echo 'display:none;';};?>
    }

    #menu-trigger3{

    <?php if($pc == 'notpc'){ echo 'display: inline-block;margin-right:-5px;margin-top:4px;';}else{ echo 'display:block;';};?>
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

    .display{
    <?php if('productdet' != 'home'){ echo 'display: none !important;';};?>

    }

    .show{
          <?php if('productdet' == 'home'){ echo 'display: none !important;';};?>

    }





</style>


<header id="header" style="background: #000000;opacity: 0.8;">
    <div class="container" style=" <?php if($pc == 'pc'){ echo 'min-width: 1200px !important;';};?>">
        <!-- ############################# Logo ############################# -->
        <a id="logo" href="index.php" class="smooth-link" style=" "><img src=" <?php if($pc == 'pc'){ echo '/Public/images/logo1.png';}else{ echo '/Public/images/logo3.png';};?>"  style="<?php if($pc == 'pc'){ echo 'width: 140px;height: 45px;margin-top:2px;';}else{ echo 'width:50px;height: 49px;';};?>" alt="Logo"></a>
        <!--<a id="logo" href="index.html" class="smooth-link"><img src="/Public/wap/placeholders/logo.png" alt="Logo"></a>-->


        <nav class="nav_my" style="display: inline-block;float: right;">
            <ul class="menu_my_nav">

                <li class="hidden_nav_li"><a href="index.php" class="youshi">首页</a></li>
                <li class="hidden_nav_li display"><a href="javascript:;" class="youshi project_introduction">项目介绍</a></li>
                <li class="hidden_nav_li display"><a href="javascript:;" class="youshi products_raised">产品众筹</a></li>
                <li class="hidden_nav_li display"><a href="javascript:;" class="youshi news_information">新闻资讯</a></li>
                <li class="hidden_nav_li display"><a href="javascript:;" class="youshi product_advantage">项目优势</a></li>
                <li class="hidden_nav_li display"><a href="javascript:;" class="youshi team_member">团队成员</a></li>
                <li class="hidden_nav_li display"><a href="javascript:;" class="youshi product_schedule">项目计划</a></li>
                <li class="hidden_nav_li display"><a href="javascript:;" class="youshi about_us">关于我们</a></li>

                <li class="hidden_nav_li show"><a href="index.php?a=home" class="youshi products_raised">项目介绍</a></li>
                <li class="hidden_nav_li show"><a href="index.php?a=productdet" class="youshi products_raised">产品众筹</a></li>
                <li class="hidden_nav_li show"><a href="index.php?a=news" class="youshi news_information">新闻资讯</a></li>
                <li class="hidden_nav_li show"><a href="index.php?a=about" class="youshi about_us">关于我们</a></li>


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
            <!--<li><a href="index.php" class="<?php if(productdet == 'index'){ echo 'active';} ?>">Home</a></li>-->
            <!--<li><a href="index.php?&a=news" class="<?php if(productdet == 'news'){ echo 'active';} ?>">News</a></li>-->

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
                    <!--&lt;!&ndash;<li><a href="index.php" class="<?php if(productdet == 'index'){ echo 'active';} ?>">Home</a></li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<li><a href="index.php?&a=news" class="<?php if(productdet == 'news'){ echo 'active';} ?>">News</a></li>&ndash;&gt;-->

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

             <h4 class="nav-title white" style="text-align: center;">多宝金豆</h4>
                <div class="divider white"></div>
                <nav id="nav">
                    <ul>
                        <!--<li><a href="index.html">Home</a></li>-->
                        <!--<li><a href="index.php" class="<?php if(productdet == 'index'){ echo 'active';} ?>">Home</a></li>-->
                        <!--<li><a href="index.php?&a=news" class="<?php if(productdet == 'news'){ echo 'active';} ?>">News</a></li>-->

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
                        <li class="font_menu_nav_li"><a href="index.php?a=about"  target="_blank" class="telescopic about_us">关于我们</a></li>


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


            <!-- END HEADER -->
    <div class="page-wrapper-row full-height">
        <div class="page-wrapper-middle">
            <!-- BEGIN CONTAINER -->
            <div class="page-container" style="background-color: transparent;margin-top:0px;">
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <!-- BEGIN PAGE HEAD-->
                    <!--<div class="page-head">-->
                    <!--<div class="container">-->
                    <!--&lt;!&ndash; BEGIN PAGE TITLE &ndash;&gt;-->
                    <!--<div class="page-title">-->
                    <!--<h1>Search Results-->
                    <!--<small>search results</small>-->
                    <!--</h1>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; END PAGE TITLE &ndash;&gt;-->
                    <!--&lt;!&ndash; BEGIN PAGE TOOLBAR &ndash;&gt;-->
                    <!--&lt;!&ndash; END PAGE TOOLBAR &ndash;&gt;-->
                    <!--</div>-->
                    <!--</div>-->


                    <section id="intro-image" class="intro medium clearfix">

                        <div class="intro-captions">
                            <h3 class="caption-title big animated">产品众筹</h3><br>
                            <h3 class="caption-title small animated">多宝金豆利用了区块链去中心化、匿名性、天然审计、不可篡改的特征，以太坊嵌入的智能合约实现了交易自动执行的功能</h3>
                        </div>

                        <!-- Image -->
                        <div class="image zoom news-intro"></div>

                        <!-- Scroll Animation -->
                        <!--<div class="scroll-anim">-->
                        <!--<span class="scroll"></span>-->
                        <!--<span class="scroll-text">Scroll</span>-->
                        <!--</div>-->

                        <!-- Overlay -->
                        <span class="overlay animated"></span>

                    </section>

                    <!--<div class="page-head" style="background: url(/Public/wap/placeholders/news.jpg) no-repeat;background-size: 140% 100%;<?php if($pc == 'notpc'){ echo 'height:260px;';} else{echo 'height: 500px;';}?>">-->
                        <!--&lt;!&ndash;<div class="page-head" style="background:url('/Public/resource/pages/media/gallery/item_img.jpg') no-repeat;height: 500px; ">&ndash;&gt;-->


                    <!--</div>-->


                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE CONTENT BODY -->
                    <div class="page-content" style="margin-top: 10px;">
                        <div class="container">
                            <!-- BEGIN PAGE BREADCRUMBS -->
                            <!--<ul class="page-breadcrumb breadcrumb">-->
                                <!--<li>-->
                                    <!--<a href="index.php">首页</a>-->
                                    <!--<i class="fa fa-circle"></i>-->
                                <!--</li>-->
                                <!--<li>-->
                                    <!--<a href="#">产品众筹</a>-->
                                    <!--&lt;!&ndash;<i class="fa fa-circle"></i>&ndash;&gt;-->
                                <!--</li>-->
                                <!--&lt;!&ndash;<li>&ndash;&gt;-->
                                <!--&lt;!&ndash;<a href="#">众筹资讯</a>&ndash;&gt;-->
                                <!--&lt;!&ndash;&lt;!&ndash;<i class="fa fa-circle"></i>&ndash;&gt;&ndash;&gt;-->
                                <!--&lt;!&ndash;</li>&ndash;&gt;-->
                                <!--&lt;!&ndash;<li>&ndash;&gt;-->
                                <!--&lt;!&ndash;<a href="#">General</a>&ndash;&gt;-->
                                <!--&lt;!&ndash;<i class="fa fa-circle"></i>&ndash;&gt;-->
                                <!--&lt;!&ndash;</li>&ndash;&gt;-->
                                <!--&lt;!&ndash;<li>&ndash;&gt;-->
                                <!--&lt;!&ndash;<span>Search</span>&ndash;&gt;-->
                                <!--&lt;!&ndash;</li>&ndash;&gt;-->
                            <!--</ul>-->



                            <!-- END PAGE BREADCRUMBS -->
                            <!-- BEGIN PAGE CONTENT INNER -->
                            <div class="page-content-inner">
                                <div class="search-page search-content-1">


                                    <!--<div class="search-bar ">-->
                                    <!--<div class="row">-->
                                    <!--<div class="col-md-7">-->
                                    <!--<div class="input-group">-->
                                    <!--<input type="text" class="form-control" placeholder="Search for...">-->
                                    <!--<span class="input-group-btn">-->
                                    <!--<button class="btn blue uppercase bold" type="button">Search</button>-->
                                    <!--</span>-->
                                    <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="col-md-5">-->
                                    <!--<p class="search-desc clearfix"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque. </p>-->
                                    <!--</div>-->
                                    <!--</div>-->
                                    <!--</div>-->
                                    <!---->

                                    <div class="row">



                                            <div class="page-content-inner col-md-8" style="margin-bottom:25px;">
                                                <div class="profile radius">
                                                    <div class="tabbable-line tabbable-full-width">
                                                        <ul class="nav nav-tabs" style="margin-top:-8px;text-align: center;">
                                                            <li class="active" style="width: 33.3%;">
                                                                <a href="#tab_1_1" data-toggle="tab" style="<?php if($pc=='pc'){echo 'font-size: 18px !important;';}else{ echo 'font-size: 15px !important;';} ?>font-weight: 600;"> 项目主页 </a>
                                                            </li>
                                                            <li style="width: 33.3%;">
                                                            <!--<li style="width: 50%;">-->
                                                                <a href="#tab_1_2" data-toggle="tab" style="<?php if($pc=='pc'){echo 'font-size: 18px !important;';}else{ echo 'font-size: 15px !important;';} ?>font-weight: 600;"> 项目动态 </a>
                                                            </li>

                                                            <li style="width: 33.3%;">
                                                                <a href="#tab_1_3" data-toggle="tab" style="<?php if($pc=='pc'){echo 'font-size: 18px !important;';}else{ echo 'font-size: 15px !important;';} ?>font-weight: 600;"> 支持者 </a>
                                                            </li>

                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab_1_1">
                                                                <div class="row">
                                                                    <div class="col-md-12">


                                                                        <img style="width: 100%;height: 300px;" src="/Public/img/new/pro1.jpg"/>


                                                                        <!--<div>-->
                                                                            <!--<p>-->
                                                                                <!--<h4 class="p_header" >多宝金豆简介</h4>-->
                                                                            <!--</p>-->

                                                                            <!--<p class="p_content" >中文名：多宝金豆-->
                                                                        <!--&lt;!&ndash;　　<p  class="p_content" >英文名：Mobicoin&ndash;&gt;-->
                                                                        <!--　　<p class="p_content" >英文简称：MBC-->
                                                                        <!--　　<p class="p_content" >总量：2000万枚-->
                                                                        <!--</div>-->

                                                                        <div>
                                                                            <!--<p>-->
                                                                            <!--<h4 class="p_header" >ICO说明</h4>-->
                                                                            <!--</p>-->

                                                                            <!--<p class="p_content" >代币分配说明：-->
                                                                            <!--<p class="p_content" >1）500万个MBC用来众筹-->
                                                                            <!--<p class="p_content" >2）1200万个MBC用来股东分配-->
                                                                            <!--<p class="p_content" >3）200万个MBC用来支持各大货币平台-->
                                                                            <!--<p class="p_content" >4）100万个MBC个进行社区推广奖励-->
                                                                            <!--<p class="p_content" >资金分配说明：-->
                                                                            <!--<p class="p_content" >所有众售筹得的资金都会由 Mobicoin基金会负责支出。-->
                                                                            <!--<p class="p_content" >1）最少50%会用于直接营销， 购买装机量。-->
                                                                            <!--<p class="p_content" >2）20%用于开发去中心化虚拟交易市场、 去中心化游戏玩家。-->
                                                                            <!--<p class="p_content" >3）最高 30%会用于法务、 支付准备金、 未来手游平台发展涉及的游戏化和扩张所需的营销费用。-->
                                                                        </div>



                                                                        <div>
                                                                            <p>
                                                                            <h4 class="p_header" >多宝金豆项目介绍</h4>
                                                                            </p>

                                                                            <p class="p_content" >
                                                                                多宝金豆是集团有效整合企业和社会中的各种形式积分的一种多功能性资产，公司根据集团资产扩大溢价和用户消费交易量进行多宝金豆的增加，满足大众用户对多宝金豆的需求，拥有多宝金豆即等于持有等值集团资产包份额，即可实现消费、投资、支付、抵押、贷款、兑换、增值八大功能，多宝金豆采用区块链技术中去中心化、不可篡改、匿名性、天然审计特点，为传统游戏带来了更安全便捷、分布式交易、透明性和时效性等特点，满足用户多种需求，加入逊和集团多宝金豆让您的消费变理财，让消费者成为企业的股东，获赠企业利润分红，实现财富盛世。
                                                                                <!--魔币Mobicoi简称（MBC）首先用于支持商业运营、区块链+游戏的应用场景，应用场景包含了游戏渠道、游戏账户交易、游戏充值、虚拟商品购买、竞技、众筹、社区等方面。能有效改善现有游戏渠道的资源垄断、高成本现状，解决用户玩家的交易安全、行业经济共享等问题，并建立由玩家自治的社区组织，实现玩家真正的自我主宰。-->

                                                                        </div>

                                                                        <!--<div>-->
                                                                            <!--<p>-->
                                                                            <!--<h4 class="p_header" >Mobicoin创新点</h4>-->
                                                                            <!--</p>-->

                                                                            <!--<p class="p_content" >Mbc代币上线交易后，供给总量为2000万个，则变动看各游戏玩家对魔币的使用需要，如果首先用于支持商业运营、区块链+游戏的应用场景，玩家越多，魔币的使用需求就越大，使用价值也越高。-->
                                                                            <!--<p class="p_content" >Mbc代币钱包兼容安卓（Android）、苹果IOS等多平台运行，并拟将支持以太币ETH等多款币种交易兑换。账户余额和私人密钥由区块链备份，支持在多个设备上使用同一个账号，用户可通过区块链在账号意外丢失或者设备切换时重新找回资金。 代币钱包SDK拟将作为一种魔币的通用支付、记账与清结算组件，内嵌到本项目的多个合作游戏中，为游戏世界提供一个互联互通的支付方式与虚拟财产存储手段，从而打破传统游戏经济中的孤岛现象。-->
                                                                            <!--<p class="p_content" >Mbc代币是使用区块链技术开发的不可篡改，对代币钱包用户的所有充值、兑换、交易、被奖赏、时长、余额等有价值的明细信息进行脱敏及加密后存证于公链之上，记录永久保存且不可篡改。 基于此，一方面即便某个游戏公司倒闭也不妨碍数据的持续可用性，数据成为玩家绑定的财富；另一方面可杜绝游戏公司的数据造假行为，且由于数据的真实可信，就具备了进一步进行大数据挖掘、分析和出售的价值；更具有变革性的是，将所有的数据权明晰地归属给玩家，游戏运营商、广告商、征信公司、研究咨询机构、金融机构等游戏大数据。-->
                                                                            <!--<p class="p_content" >当游戏中使用魔币玩家达到一定规模后将考虑增加去中心化的虚拟游戏内容交易功能模块，允许玩家之间对游戏内的装备、服装、道具、甚至账户等进行交易转让。所有交易将由智能合约控制执行，交易过程将随机选择多个第三方玩家承担担保与仲裁角色，仲裁者将按交易价值获得适当比例的代币补偿。交易者、仲裁者、交易标的、交易价格等核心要素及全交易流程将记录在链上不可篡改，且以去中心化的方式自动执行，不受人为干预。-->
                                                                            <!--<p class="p_content" >目前游戏经济系统的孤岛效应，不同的游戏往往会形成其独立的虚拟经济系统，其发行的虚拟游戏币往往割裂地存在，流通渠道有限，无法与其他游戏互联互通，又是由中心化运作的游戏公司决定其供给，极易造成过度增发导致币值贬值。其次数据渠道垄断、数据造假、缺失数据保护与数据归属规则。最后虚拟游戏内容交易成本高、安全系数低、缺乏确权凭证。近年来区块链和分布式账本技术的飞跃发展，为游戏行业带来了变革的契机。-->
                                                                            <!--<p class="p_content" >据统计2016年全球游戏行业营收约为996亿美元，到了2019年行业将增长20%至1186亿美元。在这个增长额中，全球手游市场是增长最快的版块。手游市场2016年营收为367亿美元。而按照目前的增长率，到2020年，手游市场将会增长58%至581亿美元。目前手游平台积聚最多的地方是中国。中国有全球30.2%的智能手机用户，其中73.3%是安卓终端。因此， 全球绝大部分的手游收益来自安卓设备。中国有超过200家第三方安卓手游商店可以与Google Play抗衡。中国之外，Google Play和Apple 目前控制了超过98%的手游市场，缺乏来自其他第三方手游市场的竞争威胁。-->
                                                                        <!--</div>-->

                                                                        <!--<div>-->
                                                                            <!--<p>-->
                                                                            <!--<h4 class="p_header" >风险提示</h4>-->
                                                                            <!--</p>-->

                                                                            <!--<p class="p_content" >投资魔币之前，其根本性风险来源于参与者对价格的预期，因此，其实时报价最终由市场参与者决定，请仔细阅读央行等五部委《关于防范BTC风险的通知》，数字货币受政策、市场、技术等各方面因素影响，价格容易剧幅波动，请大家认清和评估自身风险，理性投资。建议您在自身承受风险范围内，参与魔币投资。严禁使用魔币从事洗钱、走私、商业贿赂等一切触犯国家法律的非法交易活动。若发现违法事件，将配合交易平台冻结其账户，并送相关部门进行处理，由此所产生的一切损失将由用户自行承担。-->
                                                                            <!--<p class="p_content" >数字资产的交易存在极高风险(预挖、暴涨暴跌、庄家操控、团队解散、技术缺陷等)，作为全球的虚拟数字货币，都是全天24小时交易，没有涨跌限制，价格容易因为庄家、全球政府的政策影响而大幅波动，我们强烈建议您在自身能承受的风险范围内，参与虚拟货币交易。-->
                                                                        <!--</div>-->




                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--tab_1_2-->
                                                            <div class="tab-pane" id="tab_1_2">
                                                                <div class="row">
                                                                    <div class="col-md-12">



                                                                        <div class="flex-col-1-2 animated"  data-delay="100" style="width: 100%;text-align: center;">
                                                                            <img src="/Public/images/timeline3.png" style="<?php if($pc == 'notpc'){ echo 'width: 100%;';}else{ echo 'width: 475px;padding-left:0px;';}?>" />

                                                                        </div>


                                                                        <div class="portlet-body" style="display: none;">
                                                                            <div class="mt-timeline-2">
                                                                                <div class="mt-timeline-line border-grey-steel"></div>
                                                                                <ul class="mt-container">

                                                                                    <li class="mt-item">
                                                                                        <div class="mt-timeline-icon bg-red bg-font-red border-grey-steel">
                                                                                            <i class="icon-home" style="<?php if($pc == 'notpc'){ echo 'display: inherit;margin-left: 35px;';}?>"></i>
                                                                                        </div>


                                                                                        <div class="mt-timeline-content">
                                                                                            <div class="mt-content-container" style="border: 0px;background: #ffffff;">

                                                                                                <div class="mt-author-name">
                                                                                                    <a href="javascript:;" class="font-white time_color">项目计划</a>
                                                                                                </div>
                                                                                                <div class=" font-white time_color" style="<?php if($pc == 'pc'){ echo 'text-align: right;';}?>">这里记录了项目发起人的项目计划</div>



                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="mt-item">
                                                                                        <div class="mt-timeline-icon bg-blue bg-font-blue border-grey-steel">
                                                                                            <i class="icon-plane"></i>
                                                                                        </div>
                                                                                        <div class="mt-timeline-content">

                                                                                            <div class="mt-content-container" style="border: 0px;background: #ffffff;">

                                                                                                <div class="mt-author-name">
                                                                                                    <a href="javascript:;" class="font-white time_color">2017年6月</a>
                                                                                                </div>
                                                                                                <div class="mt-author-notes font-white time_color">完成MobiCoin核心开发，实现交易系统</div>



                                                                                            </div>
                                                                                        </div>
                                                                                    </li>

                                                                                    <li class="mt-item">
                                                                                        <div class="mt-timeline-icon bg-green-turquoise bg-font-green-turquoise border-grey-steel">
                                                                                            <i class="icon-calendar" style="<?php if($pc == 'notpc'){ echo 'display: inherit;margin-left: 35px;';}?>"></i>
                                                                                        </div>
                                                                                        <div class="mt-timeline-content">
                                                                                            <div class="mt-content-container" style="border: 0px;background: #ffffff;">
                                                                                                <!--<div class="mt-content-container bg-red bg-font-red border-left-before-red border-red">-->
                                                                                                <!--<div class="mt-title">-->
                                                                                                <!--<h3 class="mt-content-title">Red</h3>-->
                                                                                                <!--</div>-->
                                                                                                <!--<div class="mt-author">-->
                                                                                                <!--<div class="mt-avatar">-->
                                                                                                <!--<img src="/Public/resource/pages/media/users/avatar80_2.jpg" />-->
                                                                                                <!--</div>-->
                                                                                                <div class="mt-author-name">
                                                                                                    <a href="javascript:;" class="font-white time_color">2017年7月</a>
                                                                                                </div>
                                                                                                <div class=" font-white time_color" style="<?php if($pc == 'pc'){ echo 'text-align: right;';}?>">定义MobiGame白皮书，开发ICO网站</div>
                                                                                                <!--</div>-->
                                                                                                <!--<div class="mt-content border-white ">-->
                                                                                                <!--<div class="time_color">-->
                                                                                                <!--MBC团队成立，随后开始区块链和金融行业的实践-->
                                                                                                <!--</div>-->
                                                                                                <!--<a href="javascript:;" class="btn btn-circle white">Read More</a>-->
                                                                                                <!--<a href="javascript:;" class="btn btn-circle btn-icon-only blue">-->
                                                                                                <!--<i class="fa fa-plus"></i>-->
                                                                                                <!--</a>-->
                                                                                                <!--<a href="javascript:;" class="btn btn-circle btn-icon-only green pull-right">-->
                                                                                                <!--<i class="fa fa-twitter"></i>-->
                                                                                                <!--</a>-->
                                                                                                <!--</div>-->


                                                                                            </div>
                                                                                        </div>
                                                                                    </li>


                                                                                    <li style="display: block;" class="mt-item">
                                                                                        <div class="mt-timeline-icon bg-blue-chambray bg-font-blue-chambray border-grey-steel">
                                                                                            <i class="icon-bubbles"></i>
                                                                                        </div>
                                                                                        <div class="mt-timeline-content">

                                                                                            <div class="mt-content-container" style="border: 0px;background: #ffffff;">
                                                                                                <!--<div class="mt-content-container bg-blue bg-font-blue border-blue border-right-before-blue">-->
                                                                                                <!--<div class="mt-title">-->
                                                                                                <!--<h3 class="mt-content-title">Blue</h3>-->
                                                                                                <!--</div>-->
                                                                                                <!--<div class="mt-author">-->
                                                                                                <!--<div class="mt-avatar">-->
                                                                                                <!--<img src="/Public/resource/pages/media/users/avatar80_3.jpg" />-->
                                                                                                <!--</div>-->
                                                                                                <div class="mt-author-name">
                                                                                                    <a href="javascript:;" class="font-white time_color">2017年8月8日</a>
                                                                                                </div>
                                                                                                <div class="mt-author-notes font-white time_color">ICO项目正式上线</div>
                                                                                                <!--</div>-->


                                                                                                <!--<div class="mt-content border-white">-->
                                                                                                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>-->
                                                                                                <!--<a href="javascript:;"-->
                                                                                                <!--class="btn btn-circle btn-outline white">Download Shipment List</a>-->
                                                                                                <!--<div class="btn-group pull-right">-->
                                                                                                <!--<button class="btn btn-circle blue-steel dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> Actions-->
                                                                                                <!--<i class="fa fa-angle-down"></i>-->
                                                                                                <!--</button>-->
                                                                                                <!--<ul class="dropdown-menu pull-right" role="menu">-->
                                                                                                <!--<li>-->
                                                                                                <!--<a href="javascript:;">Action </a>-->
                                                                                                <!--</li>-->
                                                                                                <!--<li>-->
                                                                                                <!--<a href="javascript:;">Another action </a>-->
                                                                                                <!--</li>-->
                                                                                                <!--<li>-->
                                                                                                <!--<a href="javascript:;">Something else here </a>-->
                                                                                                <!--</li>-->
                                                                                                <!--<li class="divider"> </li>-->
                                                                                                <!--<li>-->
                                                                                                <!--<a href="javascript:;">Separated link </a>-->
                                                                                                <!--</li>-->
                                                                                                <!--</ul>-->
                                                                                                <!--</div>-->
                                                                                                <!--</div>-->


                                                                                            </div>
                                                                                        </div>

                                                                                    </li>


                                                                                    <li class="mt-item">
                                                                                        <div class="mt-timeline-icon bg-purple-medium bg-font-purple-medium border-grey-steel">
                                                                                            <i class="icon-heart"  style="<?php if($pc == 'notpc'){ echo 'display: inherit;margin-left: 35px;';}?>"></i>
                                                                                        </div>
                                                                                        <div class="mt-timeline-content">

                                                                                            <div class="mt-content-container" style="border: 0px;background: #ffffff;">
                                                                                                <!--<div class="mt-content-container bg-blue bg-font-blue border-blue border-right-before-blue">-->
                                                                                                <!--<div class="mt-title">-->
                                                                                                <!--<h3 class="mt-content-title">Blue</h3>-->
                                                                                                <!--</div>-->
                                                                                                <!--<div class="mt-author">-->
                                                                                                <!--<div class="mt-avatar">-->
                                                                                                <!--<img src="/Public/resource/pages/media/users/avatar80_3.jpg" />-->
                                                                                                <!--</div>-->
                                                                                                <div class="mt-author-name">
                                                                                                    <a href="javascript:;" class="font-white time_color">2017年12月</a>
                                                                                                </div>
                                                                                                <div class="mt-author-notes font-white time_color">MoBiGame产品上线</div>
                                                                                                <!--</div>-->


                                                                                                <!--<div class="mt-content border-white">-->
                                                                                                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>-->
                                                                                                <!--<a href="javascript:;"-->
                                                                                                <!--class="btn btn-circle btn-outline white">Download Shipment List</a>-->
                                                                                                <!--<div class="btn-group pull-right">-->
                                                                                                <!--<button class="btn btn-circle blue-steel dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> Actions-->
                                                                                                <!--<i class="fa fa-angle-down"></i>-->
                                                                                                <!--</button>-->
                                                                                                <!--<ul class="dropdown-menu pull-right" role="menu">-->
                                                                                                <!--<li>-->
                                                                                                <!--<a href="javascript:;">Action </a>-->
                                                                                                <!--</li>-->
                                                                                                <!--<li>-->
                                                                                                <!--<a href="javascript:;">Another action </a>-->
                                                                                                <!--</li>-->
                                                                                                <!--<li>-->
                                                                                                <!--<a href="javascript:;">Something else here </a>-->
                                                                                                <!--</li>-->
                                                                                                <!--<li class="divider"> </li>-->
                                                                                                <!--<li>-->
                                                                                                <!--<a href="javascript:;">Separated link </a>-->
                                                                                                <!--</li>-->
                                                                                                <!--</ul>-->
                                                                                                <!--</div>-->
                                                                                                <!--</div>-->


                                                                                            </div>
                                                                                        </div>
                                                                                    </li>

                                                                                    <li style="display: none;" class="mt-item">
                                                                                        <div class="mt-timeline-icon bg-blue-steel bg-font-blue-steel border-grey-steel">
                                                                                            <i class="icon-call-in"></i>
                                                                                        </div>
                                                                                        <div class="mt-timeline-content">
                                                                                            <div class="mt-content-container" style="border: 0px;background: #ffffff;">
                                                                                                <!--<div class="mt-content-container bg-red bg-font-red border-left-before-red border-red">-->
                                                                                                <!--<div class="mt-title">-->
                                                                                                <!--<h3 class="mt-content-title">Red</h3>-->
                                                                                                <!--</div>-->
                                                                                                <!--<div class="mt-author">-->
                                                                                                <!--<div class="mt-avatar">-->
                                                                                                <!--<img src="/Public/resource/pages/media/users/avatar80_2.jpg" />-->
                                                                                                <!--</div>-->
                                                                                                <div class="mt-author-name">
                                                                                                    <a href="javascript:;" class="font-white time_color">2017年X月</a>
                                                                                                </div>
                                                                                                <div class=" font-white time_color" style="<?php if($pc == 'pc'){ echo 'text-align: right;';}?>">代币发放，钱包功能上线，代币在交易所上线</div>
                                                                                                <!--</div>-->
                                                                                                <!--<div class="mt-content border-white ">-->
                                                                                                <!--<div class="time_color">-->
                                                                                                <!--MBC团队成立，随后开始区块链和金融行业的实践-->
                                                                                                <!--</div>-->
                                                                                                <!--<a href="javascript:;" class="btn btn-circle white">Read More</a>-->
                                                                                                <!--<a href="javascript:;" class="btn btn-circle btn-icon-only blue">-->
                                                                                                <!--<i class="fa fa-plus"></i>-->
                                                                                                <!--</a>-->
                                                                                                <!--<a href="javascript:;" class="btn btn-circle btn-icon-only green pull-right">-->
                                                                                                <!--<i class="fa fa-twitter"></i>-->
                                                                                                <!--</a>-->
                                                                                                <!--</div>-->


                                                                                            </div>
                                                                                        </div>
                                                                                    </li>

                                                                                    <li style="display: none;" class="mt-item">
                                                                                        <div class="mt-timeline-icon bg-green-jungle bg-font-green-jungle border-grey-steel">
                                                                                            <i class="icon-call-out"></i>
                                                                                        </div>
                                                                                        <div class="mt-timeline-content">

                                                                                            <div class="mt-content-container" style="border: 0px;background: #ffffff;">
                                                                                                <!--<div class="mt-content-container bg-blue bg-font-blue border-blue border-right-before-blue">-->
                                                                                                <!--<div class="mt-title">-->
                                                                                                <!--<h3 class="mt-content-title">Blue</h3>-->
                                                                                                <!--</div>-->
                                                                                                <!--<div class="mt-author">-->
                                                                                                <!--<div class="mt-avatar">-->
                                                                                                <!--<img src="/Public/resource/pages/media/users/avatar80_3.jpg" />-->
                                                                                                <!--</div>-->
                                                                                                <div class="mt-author-name">
                                                                                                    <a href="javascript:;" class="font-white time_color">2017年X月</a>
                                                                                                </div>
                                                                                                <div class="mt-author-notes font-white time_color">游戏内钱包上线</div>
                                                                                                <!--</div>-->


                                                                                                <!--<div class="mt-content border-white">-->
                                                                                                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>-->
                                                                                                <!--<a href="javascript:;"-->
                                                                                                <!--class="btn btn-circle btn-outline white">Download Shipment List</a>-->
                                                                                                <!--<div class="btn-group pull-right">-->
                                                                                                <!--<button class="btn btn-circle blue-steel dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> Actions-->
                                                                                                <!--<i class="fa fa-angle-down"></i>-->
                                                                                                <!--</button>-->
                                                                                                <!--<ul class="dropdown-menu pull-right" role="menu">-->
                                                                                                <!--<li>-->
                                                                                                <!--<a href="javascript:;">Action </a>-->
                                                                                                <!--</li>-->
                                                                                                <!--<li>-->
                                                                                                <!--<a href="javascript:;">Another action </a>-->
                                                                                                <!--</li>-->
                                                                                                <!--<li>-->
                                                                                                <!--<a href="javascript:;">Something else here </a>-->
                                                                                                <!--</li>-->
                                                                                                <!--<li class="divider"> </li>-->
                                                                                                <!--<li>-->
                                                                                                <!--<a href="javascript:;">Separated link </a>-->
                                                                                                <!--</li>-->
                                                                                                <!--</ul>-->
                                                                                                <!--</div>-->
                                                                                                <!--</div>-->


                                                                                            </div>
                                                                                        </div>
                                                                                    </li>





                                                                                </ul>
                                                                            </div>
                                                                        </div>







                                                                    </div>
                                                                    <!--end col-md-9-->
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane " id="tab_1_3">
                                                                <div class="row">
                                                                    <div class="col-md-12">


                                                                        <p style="text-align: center;">
                                                                            暂无支持者

                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>












                                        <div class="col-md-4">
    <!-- BEGIN PORTLET-->
    <div class="portlet light radius">
        <div class="portlet-title" style="height: 50px;">
            <div class="caption">
                <!--<i class="icon-social-dribbble font-green" style="font-weight: 900; font-size: 20px;"></i>-->
                <span class="caption-subject font-dark bold uppercase"><span style="color: #424e98;display: inline-block;font-size: 2em;">多宝金豆</span>/众筹进度</span>
            </div>

        </div>
        <div class="portlet-body">

            <div style="color:#000;margin-top: -20px;">
                目前累计资金：<span style="font-size:20px;color:red;font-weight: 600;">￥8555</span><br>

                <div  style="color:gray;margin-top: 10px;">
                    此项目须在 2017年09月25日00分前，获得<span style="font-size:20px;color:red;font-weight: 600;">￥31,200.00</span>的支持才可成功!<br>
                </div>

                <div class="row">
                    <div class="col-md-12 profile-info">


                        <button style="<?php if($pc=='pc'){ echo 'margin-top: -5px;';}else{ echo 'margin-top: -5px;';} ?>padding:5px 10px;" type="button" data-loading-text="Loading..." class="pull-right btn red btn-sm   btn-circle" data-style="slide-left">
                            <span class="ladda-label">进行中</span>
                        </button>


                        <h3 class="font-red-haze">
                            众筹进度<span data-counter="counterup" data-value="85">0</span>%
                        </h3>


                        <div style="height:10px;border-radius:10px !important;background-color: #ffeffc;" class="progress progress-striped active">
                            <div id="progress" class="progress-bar progress-bar-danger" role="progressbar"
                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                 style="width: 0%;">
                                <!--<span class="sr-only">40% 完成</span>-->
                            </div>
                        </div>

                        <div style="margin-left: 0px;">


                            <div style="width:21%;float: left;font-size: 12px;">
                                <i class="fa fa-users" style="color:gray;"></i> 6 <br>支持人数
                            </div>
                            <div style="width: 29%;float: left;font-size: 12px;padding-left:10px;">
                                <i class="fa fa-calendar-minus-o" style="color:gray;"></i> 25  <br>剩余天数
                            </div>
                            <div  style="font-size: 12px;float: left;">
                                <i class="fa fa-calculator" style="color:gray;"></i> 2017-09-01<br>开始时间
                            </div>

                        </div>


                    </div>
                </div>








            </div>
        </div>




    </div>






    <div class="portlet light radius">
        <div class="portlet-title" style="height: 50px;">
            <div class="caption" style="margin-top: 0px;">
                <!--<i class="icon-social-dribbble font-green" style="font-weight: 900; font-size: 20px;"></i>-->
                <!--<span class="caption-subject font-dark bold uppercase">  支持 ￥10.0000/（一份起）</span>-->
                <span class="caption-subject font-dark bold uppercase">  <span style="color: #424e98;display: inline-block;font-size: 2em;">多宝金豆</span>/金额不限</span>
            </div>
            <div class="actions">
                <!--<a class="btn btn-circle btn-icon-only btn-default" href="javascriptt:;">-->
                <!--<i class="icon-cloud-upload"></i>-->
                <!--</a>-->
                <!--<a class="btn btn-circle btn-icon-only btn-default" href="javascriptt:;">-->
                <!--<i class="icon-wrench"></i>-->
                <!--</a>-->
                <!--<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascriptt:;"> </a>-->
                <!--<a class="btn btn-circle btn-icon-only btn-default" href="javascriptt:;">-->
                <!--<i class="icon-trash"></i>-->
                <!--</a>-->
            </div>
        </div>
        <div class="portlet-body">

            <div style="margin-top:-20px;">
                <div style="margin-bottom: 10px;">
                    <span class="caption-subject font-dark bold uppercase" >不限投资人数</span><span style="display: inline-block;float: right;color: gray;">已参与0人次</span><br>

                </div>

                <p style="margin-top:0px;color:gray;">


                    参考官方信息<br/>
                    <div style="margin:-30px 0 0px;color: gray;">
                        <i class="fa fa-genderless"></i> 回报时间： 预计项目ICO成功结束后90天内
                    </div>

                    <!--<img src="/Public/images/product.png" alt="" class="img-responsive product-img">-->
                    <!--运费包邮  <span style="display: inherit;" class="pull-right"> 预计发放时间：项目成功后</span>-->
                </p>



                <!--<span class="funding-btn" onclick="callpay()">支持RMB</span>-->
                <input style="margin-top:-10px;" type="button"  class="btn btn-circle green-sharp btn-outline  btn-block sbold uppercase" value="立即支持">


            </div>
        </div>




    </div>



    <!-- END PORTLET-->
</div>



                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE CONTENT INNER -->
                        </div>
                    </div>
                    <!-- END PAGE CONTENT BODY -->
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
                <a href="javascript:;" class="page-quick-sidebar-toggler">
    <i class="icon-login" style="font-size:20px;"></i>
</a>

<div class="page-quick-sidebar-wrapper" style="z-index:20000;width: 150px;" data-close-on-body-click="false">
    <div class="page-quick-sidebar">
        <br>
        <ul class="nav nav-tabs">
            <!--<li class="active">-->
                <!--&lt;!&ndash;<a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users&ndash;&gt;-->
                    <!--&lt;!&ndash;<span class="badge badge-danger">2</span>&ndash;&gt;-->
                <!--&lt;!&ndash;</a>&ndash;&gt;-->
                <!--<div style="margin-top: 25px;<?php if($account == 'on'){ echo 'display:none';} ?>" class="btn-group btn-group-circle btn-group-sm btn-group-solid pull-right">-->
                    <!--<button onclick="window.location.href='index.php?&a=login';" type="button" class="btn red">登陆</button>-->
                    <!--&lt;!&ndash;<button type="button" class="btn green">Middle</button>&ndash;&gt;-->
                    <!--<button type="button" onclick="window.location.href='index.php?&a=login&vv=1';" class="btn blue">注册</button>-->
                <!--</div>-->

            <!--</li>-->
            <!--<li>-->
                <!--<a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts-->
                    <!--<span class="badge badge-success">7</span>-->
                <!--</a>-->
            <!--</li>-->
        </ul>
        <div class="tab-content">
            <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">


                    <div style="<?php if($account == 'on'){ echo 'display:none;';} ?>margin:30px 0 10px 15px;" class="btn-group btn-group-circle btn-group-sm btn-group-solid">
                        <button onclick="window.location.href='index.php?&a=login';" type="button" class="btn red">登陆</button>
                        <!--<button type="button" class="btn green">Middle</button>-->
                        <button type="button" onclick="window.location.href='index.php?&a=login&vv=1';" class="btn blue">注册</button>
                    </div>


                    <!--<h3 class="list-heading">Staff</h3>-->
                    <ul class="list-items" style="margin-top:20px;">
                        <!--<ul class="media-list list-items">-->
                        <!--<li class="media">-->
                            <!--&lt;!&ndash;<div class="media-status">&ndash;&gt;-->
                                <!--&lt;!&ndash;<span class="badge badge-success">8</span>&ndash;&gt;-->
                            <!--&lt;!&ndash;</div>&ndash;&gt;-->
                            <!--&lt;!&ndash;<img class="media-object" src="/Public/resource/layouts/layout/img/avatar3.jpg" alt="...">&ndash;&gt;-->
                            <!--<div class="media-body">-->
                                <!--<h4 class="media-heading">首页</h4>-->
                                <!--&lt;!&ndash;<div class="media-heading-sub"> Project Manager </div>&ndash;&gt;-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="media">-->
                            <!--&lt;!&ndash;<img class="media-object" src="/Public/resource/layouts/layout/img/avatar1.jpg" alt="...">&ndash;&gt;-->
                            <!--<div class="media-body">-->
                                <!--<h4 class="media-heading">新闻资讯</h4>-->
                                <!--&lt;!&ndash;<div class="media-heading-sub"> Art Director </div>&ndash;&gt;-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="media">-->
                            <!--&lt;!&ndash;<div class="media-status">&ndash;&gt;-->
                                <!--&lt;!&ndash;<span class="badge badge-danger">3</span>&ndash;&gt;-->
                            <!--&lt;!&ndash;</div>&ndash;&gt;-->
                            <!--&lt;!&ndash;<img class="media-object" src="/Public/resource/layouts/layout/img/avatar4.jpg" alt="...">&ndash;&gt;-->
                            <!--<div class="media-body">-->
                                <!--<h4 class="media-heading">产品众筹</h4>-->
                                <!--&lt;!&ndash;<div class="media-heading-sub"> CTO </div>&ndash;&gt;-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="media">-->
                            <!--&lt;!&ndash;<img class="media-object" src="/Public/resource/layouts/layout/img/avatar2.jpg" alt="...">&ndash;&gt;-->
                            <!--<div class="media-body">-->
                                <!--<h4 class="media-heading">关于我们</h4>-->
                                <!--&lt;!&ndash;<div class="media-heading-sub"> CEO </div>&ndash;&gt;-->
                            <!--</div>-->
                        <!--</li>-->


                        <!--<li class="menu-dropdown classic-menu-dropdown active">-->
                            <!--<div style="<?php if($account == 'on'){ echo 'display:none';} ?>" class="btn-group btn-group-circle btn-group-sm btn-group-solid">-->
                                <!--<button onclick="window.location.href='index.php?&a=login';" type="button" class="btn red">登陆</button>-->
                                <!--&lt;!&ndash;<button type="button" class="btn green">Middle</button>&ndash;&gt;-->
                                <!--<button type="button" onclick="window.location.href='index.php?&a=login&vv=1';" class="btn blue">注册</button>-->
                            <!--</div>-->

                        <!--</li>-->

                        <li style="<?php if($account == 'off'){ echo 'display:none';} ?>"  class="dropdown dropdown-user dropdown-dark">
                            <a style="text-decoration: none;" href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="/Public/resource/layouts/layout3/img/avatar9.jpg">
                                <span class="username username-hide-mobile"><?php echo $_SESSION['account']['user_name']; ?></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">

                                <!--<li class="divider"> </li>-->

                                <li >
                                    <a href="index.php?&a=logout">
                                        <i class="icon-key"></i> 退出
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-dropdown classic-menu-dropdown active">
                            <a style="text-decoration: none;display: block;" href="index.php">
                                首页
                                <!--<span class="arrow"></span>-->
                            </a>
                        </li>


                        <li class="dropdown dropdown-user dropdown-dark">
                            <a style="text-decoration: none;display: block;" href="index.php?&a=news">
                            <!--<a href="javascript:;" style="display: block;text-decoration: none;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">-->
                                <!--<span onclick="window.location.href='index.php?&a=news';">-->
                                    新闻资讯
                                <!--</span>-->
                                <!--<i class="fa fa-caret-right" style="margin-left:50px;"></i>-->

                            </a>
                            <!--<ul class="dropdown-menu dropdown-menu-default">-->

                                <!--&lt;!&ndash;<li class="divider"> </li>&ndash;&gt;-->

                                <!--<li class=" "  >-->
                                    <!--<a href="index.php?&a=zczx" class="nav-link  active">-->
                                        <!--<i class="icon-bar-chart"></i> 众筹资讯-->
                                        <!--&lt;!&ndash;<span class="badge badge-success">1</span>&ndash;&gt;-->
                                    <!--</a>-->
                                <!--</li>-->
                                <!--<li class=" ">-->
                                    <!--<a href="index.php?&a=hyxw" class="nav-link  ">-->
                                        <!--<i class="icon-bulb"></i> 行业新闻</a>-->
                                <!--</li>-->
                                <!--<li class=" ">-->
                                    <!--<a href="index.php?&a=mtbd" class="nav-link  ">-->
                                        <!--<i class="icon-graph"></i> 媒体报道-->
                                        <!--&lt;!&ndash;<span class="badge badge-danger">3</span>&ndash;&gt;-->
                                    <!--</a>-->
                                <!--</li>-->

                            <!--</ul>-->
                        </li>




                        <li class="menu-dropdown classic-menu-dropdown ">
                            <a  style="text-decoration: none;display: block;" href="index.php?&a=productdet"> 产品众筹
                                <!--<span class="arrow"></span>-->
                            </a>
                        </li>
                        <li class="menu-dropdown mega-menu-dropdown  mega-menu-full">
                            <a  style="text-decoration: none;display: block;" href="index.php?&a=about"> 关于我们
                                <!--<span class="arrow"></span>-->
                            </a>
                        </li>




                    </ul>
                    <!--<h3 class="list-heading">Customers</h3>-->
                    <!--<ul class="media-list list-items">-->
                        <!--<li class="media">-->
                            <!--<div class="media-status">-->
                                <!--<span class="badge badge-warning">2</span>-->
                            <!--</div>-->
                            <!--<img class="media-object" src="/Public/resource/layouts/layout/img/avatar6.jpg" alt="...">-->
                            <!--<div class="media-body">-->
                                <!--<h4 class="media-heading">Lara Kunis</h4>-->
                                <!--<div class="media-heading-sub"> CEO, Loop Inc </div>-->
                                <!--<div class="media-heading-small"> Last seen 03:10 AM </div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="media">-->
                            <!--<div class="media-status">-->
                                <!--<span class="label label-sm label-success">new</span>-->
                            <!--</div>-->
                            <!--<img class="media-object" src="/Public/resource/layouts/layout/img/avatar7.jpg" alt="...">-->
                            <!--<div class="media-body">-->
                                <!--<h4 class="media-heading">Ernie Kyllonen</h4>-->
                                <!--<div class="media-heading-sub"> Project Manager,-->
                                    <!--<br> SmartBizz PTL </div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="media">-->
                            <!--<img class="media-object" src="/Public/resource/layouts/layout/img/avatar8.jpg" alt="...">-->
                            <!--<div class="media-body">-->
                                <!--<h4 class="media-heading">Lisa Stone</h4>-->
                                <!--<div class="media-heading-sub"> CTO, Keort Inc </div>-->
                                <!--<div class="media-heading-small"> Last seen 13:10 PM </div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="media">-->
                            <!--<div class="media-status">-->
                                <!--<span class="badge badge-success">7</span>-->
                            <!--</div>-->
                            <!--<img class="media-object" src="/Public/resource/layouts/layout/img/avatar9.jpg" alt="...">-->
                            <!--<div class="media-body">-->
                                <!--<h4 class="media-heading">Deon Portalatin</h4>-->
                                <!--<div class="media-heading-sub"> CFO, H&D LTD </div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="media">-->
                            <!--<img class="media-object" src="/Public/resource/layouts/layout/img/avatar10.jpg" alt="...">-->
                            <!--<div class="media-body">-->
                                <!--<h4 class="media-heading">Irina Savikova</h4>-->
                                <!--<div class="media-heading-sub"> CEO, Tizda Motors Inc </div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="media">-->
                            <!--<div class="media-status">-->
                                <!--<span class="badge badge-danger">4</span>-->
                            <!--</div>-->
                            <!--<img class="media-object" src="/Public/resource/layouts/layout/img/avatar11.jpg" alt="...">-->
                            <!--<div class="media-body">-->
                                <!--<h4 class="media-heading">Maria Gomez</h4>-->
                                <!--<div class="media-heading-sub"> Manager, Infomatic Inc </div>-->
                                <!--<div class="media-heading-small"> Last seen 03:10 AM </div>-->
                            <!--</div>-->
                        <!--</li>-->
                    <!--</ul>-->
                </div>
                <!--<div class="page-quick-sidebar-item">-->
                    <!--<div class="page-quick-sidebar-chat-user">-->
                        <!--<div class="page-quick-sidebar-nav">-->
                            <!--<a href="javascript:;" class="page-quick-sidebar-back-to-list">-->
                                <!--<i class="icon-arrow-left"></i>Back</a>-->
                        <!--</div>-->
                        <!--<div class="page-quick-sidebar-chat-user-messages">-->
                            <!--<div class="post out">-->
                                <!--<img class="avatar" alt="" src="/Public/resource/layouts/layout/img/avatar3.jpg" />-->
                                <!--<div class="message">-->
                                    <!--<span class="arrow"></span>-->
                                    <!--<a href="javascript:;" class="name">Bob Nilson</a>-->
                                    <!--<span class="datetime">20:15</span>-->
                                    <!--<span class="body"> When could you send me the report ? </span>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="post in">-->
                                <!--<img class="avatar" alt="" src="/Public/resource/layouts/layout/img/avatar2.jpg" />-->
                                <!--<div class="message">-->
                                    <!--<span class="arrow"></span>-->
                                    <!--<a href="javascript:;" class="name">Ella Wong</a>-->
                                    <!--<span class="datetime">20:15</span>-->
                                    <!--<span class="body"> Its almost done. I will be sending it shortly </span>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="post out">-->
                                <!--<img class="avatar" alt="" src="/Public/resource/layouts/layout/img/avatar3.jpg" />-->
                                <!--<div class="message">-->
                                    <!--<span class="arrow"></span>-->
                                    <!--<a href="javascript:;" class="name">Bob Nilson</a>-->
                                    <!--<span class="datetime">20:15</span>-->
                                    <!--<span class="body"> Alright. Thanks! :) </span>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="post in">-->
                                <!--<img class="avatar" alt="" src="/Public/resource/layouts/layout/img/avatar2.jpg" />-->
                                <!--<div class="message">-->
                                    <!--<span class="arrow"></span>-->
                                    <!--<a href="javascript:;" class="name">Ella Wong</a>-->
                                    <!--<span class="datetime">20:16</span>-->
                                    <!--<span class="body"> You are most welcome. Sorry for the delay. </span>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="post out">-->
                                <!--<img class="avatar" alt="" src="/Public/resource/layouts/layout/img/avatar3.jpg" />-->
                                <!--<div class="message">-->
                                    <!--<span class="arrow"></span>-->
                                    <!--<a href="javascript:;" class="name">Bob Nilson</a>-->
                                    <!--<span class="datetime">20:17</span>-->
                                    <!--<span class="body"> No probs. Just take your time :) </span>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="post in">-->
                                <!--<img class="avatar" alt="" src="/Public/resource/layouts/layout/img/avatar2.jpg" />-->
                                <!--<div class="message">-->
                                    <!--<span class="arrow"></span>-->
                                    <!--<a href="javascript:;" class="name">Ella Wong</a>-->
                                    <!--<span class="datetime">20:40</span>-->
                                    <!--<span class="body"> Alright. I just emailed it to you. </span>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="post out">-->
                                <!--<img class="avatar" alt="" src="/Public/resource/layouts/layout/img/avatar3.jpg" />-->
                                <!--<div class="message">-->
                                    <!--<span class="arrow"></span>-->
                                    <!--<a href="javascript:;" class="name">Bob Nilson</a>-->
                                    <!--<span class="datetime">20:17</span>-->
                                    <!--<span class="body"> Great! Thanks. Will check it right away. </span>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="post in">-->
                                <!--<img class="avatar" alt="" src="/Public/resource/layouts/layout/img/avatar2.jpg" />-->
                                <!--<div class="message">-->
                                    <!--<span class="arrow"></span>-->
                                    <!--<a href="javascript:;" class="name">Ella Wong</a>-->
                                    <!--<span class="datetime">20:40</span>-->
                                    <!--<span class="body"> Please let me know if you have any comment. </span>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="post out">-->
                                <!--<img class="avatar" alt="" src="/Public/resource/layouts/layout/img/avatar3.jpg" />-->
                                <!--<div class="message">-->
                                    <!--<span class="arrow"></span>-->
                                    <!--<a href="javascript:;" class="name">Bob Nilson</a>-->
                                    <!--<span class="datetime">20:17</span>-->
                                    <!--<span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="page-quick-sidebar-chat-user-form">-->
                            <!--<div class="input-group">-->
                                <!--<input type="text" class="form-control" placeholder="Type a message here...">-->
                                <!--<div class="input-group-btn">-->
                                    <!--<button type="button" class="btn green">-->
                                        <!--<i class="icon-paper-clip"></i>-->
                                    <!--</button>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            </div>
            <!--<div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">-->
                <!--<div class="page-quick-sidebar-alerts-list">-->
                    <!--<h3 class="list-heading">General</h3>-->
                    <!--<ul class="feeds list-items">-->
                        <!--<li>-->
                            <!--<div class="col1">-->
                                <!--<div class="cont">-->
                                    <!--<div class="cont-col1">-->
                                        <!--<div class="label label-sm label-info">-->
                                            <!--<i class="fa fa-check"></i>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="cont-col2">-->
                                        <!--<div class="desc"> You have 4 pending tasks.-->
                                            <!--<span class="label label-sm label-warning "> Take action-->
                                                                        <!--<i class="fa fa-share"></i>-->
                                                                    <!--</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="col2">-->
                                <!--<div class="date"> Just now </div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="javascript:;">-->
                                <!--<div class="col1">-->
                                    <!--<div class="cont">-->
                                        <!--<div class="cont-col1">-->
                                            <!--<div class="label label-sm label-success">-->
                                                <!--<i class="fa fa-bar-chart-o"></i>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                        <!--<div class="cont-col2">-->
                                            <!--<div class="desc"> Finance Report for year 2013 has been released. </div>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                                <!--<div class="col2">-->
                                    <!--<div class="date"> 20 mins </div>-->
                                <!--</div>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<div class="col1">-->
                                <!--<div class="cont">-->
                                    <!--<div class="cont-col1">-->
                                        <!--<div class="label label-sm label-danger">-->
                                            <!--<i class="fa fa-user"></i>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="cont-col2">-->
                                        <!--<div class="desc"> You have 5 pending membership that requires a quick review. </div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="col2">-->
                                <!--<div class="date"> 24 mins </div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<div class="col1">-->
                                <!--<div class="cont">-->
                                    <!--<div class="cont-col1">-->
                                        <!--<div class="label label-sm label-info">-->
                                            <!--<i class="fa fa-shopping-cart"></i>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="cont-col2">-->
                                        <!--<div class="desc"> New order received with-->
                                            <!--<span class="label label-sm label-success"> Reference Number: DR23923 </span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="col2">-->
                                <!--<div class="date"> 30 mins </div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<div class="col1">-->
                                <!--<div class="cont">-->
                                    <!--<div class="cont-col1">-->
                                        <!--<div class="label label-sm label-success">-->
                                            <!--<i class="fa fa-user"></i>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="cont-col2">-->
                                        <!--<div class="desc"> You have 5 pending membership that requires a quick review. </div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="col2">-->
                                <!--<div class="date"> 24 mins </div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<div class="col1">-->
                                <!--<div class="cont">-->
                                    <!--<div class="cont-col1">-->
                                        <!--<div class="label label-sm label-info">-->
                                            <!--<i class="fa fa-bell-o"></i>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="cont-col2">-->
                                        <!--<div class="desc"> Web server hardware needs to be upgraded.-->
                                            <!--<span class="label label-sm label-warning"> Overdue </span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="col2">-->
                                <!--<div class="date"> 2 hours </div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="javascript:;">-->
                                <!--<div class="col1">-->
                                    <!--<div class="cont">-->
                                        <!--<div class="cont-col1">-->
                                            <!--<div class="label label-sm label-default">-->
                                                <!--<i class="fa fa-briefcase"></i>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                        <!--<div class="cont-col2">-->
                                            <!--<div class="desc"> IPO Report for year 2013 has been released. </div>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                                <!--<div class="col2">-->
                                    <!--<div class="date"> 20 mins </div>-->
                                <!--</div>-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                    <!--<h3 class="list-heading">System</h3>-->
                    <!--<ul class="feeds list-items">-->
                        <!--<li>-->
                            <!--<div class="col1">-->
                                <!--<div class="cont">-->
                                    <!--<div class="cont-col1">-->
                                        <!--<div class="label label-sm label-info">-->
                                            <!--<i class="fa fa-check"></i>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="cont-col2">-->
                                        <!--<div class="desc"> You have 4 pending tasks.-->
                                            <!--<span class="label label-sm label-warning "> Take action-->
                                                                        <!--<i class="fa fa-share"></i>-->
                                                                    <!--</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="col2">-->
                                <!--<div class="date"> Just now </div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="javascript:;">-->
                                <!--<div class="col1">-->
                                    <!--<div class="cont">-->
                                        <!--<div class="cont-col1">-->
                                            <!--<div class="label label-sm label-danger">-->
                                                <!--<i class="fa fa-bar-chart-o"></i>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                        <!--<div class="cont-col2">-->
                                            <!--<div class="desc"> Finance Report for year 2013 has been released. </div>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                                <!--<div class="col2">-->
                                    <!--<div class="date"> 20 mins </div>-->
                                <!--</div>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<div class="col1">-->
                                <!--<div class="cont">-->
                                    <!--<div class="cont-col1">-->
                                        <!--<div class="label label-sm label-default">-->
                                            <!--<i class="fa fa-user"></i>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="cont-col2">-->
                                        <!--<div class="desc"> You have 5 pending membership that requires a quick review. </div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="col2">-->
                                <!--<div class="date"> 24 mins </div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<div class="col1">-->
                                <!--<div class="cont">-->
                                    <!--<div class="cont-col1">-->
                                        <!--<div class="label label-sm label-info">-->
                                            <!--<i class="fa fa-shopping-cart"></i>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="cont-col2">-->
                                        <!--<div class="desc"> New order received with-->
                                            <!--<span class="label label-sm label-success"> Reference Number: DR23923 </span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="col2">-->
                                <!--<div class="date"> 30 mins </div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<div class="col1">-->
                                <!--<div class="cont">-->
                                    <!--<div class="cont-col1">-->
                                        <!--<div class="label label-sm label-success">-->
                                            <!--<i class="fa fa-user"></i>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="cont-col2">-->
                                        <!--<div class="desc"> You have 5 pending membership that requires a quick review. </div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="col2">-->
                                <!--<div class="date"> 24 mins </div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<div class="col1">-->
                                <!--<div class="cont">-->
                                    <!--<div class="cont-col1">-->
                                        <!--<div class="label label-sm label-warning">-->
                                            <!--<i class="fa fa-bell-o"></i>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="cont-col2">-->
                                        <!--<div class="desc"> Web server hardware needs to be upgraded.-->
                                            <!--<span class="label label-sm label-default "> Overdue </span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="col2">-->
                                <!--<div class="date"> 2 hours </div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="javascript:;">-->
                                <!--<div class="col1">-->
                                    <!--<div class="cont">-->
                                        <!--<div class="cont-col1">-->
                                            <!--<div class="label label-sm label-info">-->
                                                <!--<i class="fa fa-briefcase"></i>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                        <!--<div class="cont-col2">-->
                                            <!--<div class="desc"> IPO Report for year 2013 has been released. </div>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                                <!--<div class="col2">-->
                                    <!--<div class="date"> 20 mins </div>-->
                                <!--</div>-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">-->
                <!--<div class="page-quick-sidebar-settings-list">-->
                    <!--<h3 class="list-heading">General Settings</h3>-->
                    <!--<ul class="list-items borderless">-->
                        <!--<li> Enable Notifications-->
                            <!--<input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>-->
                        <!--<li> Allow Tracking-->
                            <!--<input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>-->
                        <!--<li> Log Errors-->
                            <!--<input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>-->
                        <!--<li> Auto Sumbit Issues-->
                            <!--<input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>-->
                        <!--<li> Enable SMS Alerts-->
                            <!--<input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>-->
                    <!--</ul>-->
                    <!--<h3 class="list-heading">System Settings</h3>-->
                    <!--<ul class="list-items borderless">-->
                        <!--<li> Security Level-->
                            <!--<select class="form-control input-inline input-sm input-small">-->
                                <!--<option value="1">Normal</option>-->
                                <!--<option value="2" selected>Medium</option>-->
                                <!--<option value="e">High</option>-->
                            <!--</select>-->
                        <!--</li>-->
                        <!--<li> Failed Email Attempts-->
                            <!--<input class="form-control input-inline input-sm input-small" value="5" /> </li>-->
                        <!--<li> Secondary SMTP Port-->
                            <!--<input class="form-control input-inline input-sm input-small" value="3560" /> </li>-->
                        <!--<li> Notify On System Error-->
                            <!--<input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>-->
                        <!--<li> Notify On SMTP Error-->
                            <!--<input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>-->
                    <!--</ul>-->
                    <!--<div class="inner-content">-->
                        <!--<button class="btn btn-success">-->
                            <!--<i class="icon-settings"></i> Save Changes</button>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
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

                    <img style="width: 160px;height: 50px;display: block;margin:0 auto;margin-bottom: 30px;" src="/Public/images/logo1.png" alt="logo" class="logo-default">

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
                <h4 class="footer_h4 footer_my_hover" onclick="window.location.href='index.php?a=about';">多宝金豆 </h4>
                <h4 class="footer_h4 footer_my_hover" onclick="window.location.href='index.php?a=news';">新闻资讯</h4>
                <h4 class="footer_h4 footer_my_hover" onclick="window.location.href='index.php?a=productdet';">产品众筹</h4>


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
                <h4 class="footer_h4 footer_my_hover" onclick="window.location.href='index.php?a=signupguide';">注册指南</h4>
                <h4 class="footer_h4 footer_my_hover" onclick="window.location.href='index.php?a=rechargeguide';">充值指南</h4>
                <h4 class="footer_h4 footer_my_hover" onclick="window.location.href='index.php?a=tradingguide';">交易指南</h4>


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
        Copyright © 2017 dbjd.9ebo.com All rights Reserved
        <!--<a href="#">Rascals Themes</a>-->
    </p>


</div>
<!-- /footer note -->
</div>
<!-- BEGIN QUICK NAV -->











<!-- END QUICK NAV -->
<!--[if lt IE 9]>
<script src="/Public/resource/global/plugins/respond.min.js"></script>
<script src="/Public/resource/global/plugins/excanvas.min.js"></script>
<script src="/Public/resource/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<!--<script src="/Public/resource/global/plugins/jquery.min.js" type="text/javascript"></script>-->
<script src="/Public/resource/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/Public/resource/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/Public/resource/global/plugins/ladda/spin.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/ladda/ladda.min.js" type="text/javascript"></script>

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/Public/resource/global/scripts/app.min.js" type="text/javascript"></script>

<script src="/Public/resource/pages/scripts/ui-buttons.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/Public/resource/pages/scripts/search.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/Public/resource/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
<script src="/Public/resource/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
<script src="/Public/resource/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="/Public/resource/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->


<script src="/Public/resource/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>



<script src="/Public/resource/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/Public/resource/pages/scripts/portfolio-4.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script src="/Public/js/main.js" type="text/javascript"></script>





<!--<script src="/Public/wap/js/jquery.min.js"></script>-->
<script src="/Public/wap/js/jquery.easing-1.3.min.js"></script>
<script src="/Public/wap/js/jquery.queryloader2.min.js"></script>
<script src="/Public/wap/js/smoothscroll.js"></script>
<script src="/Public/wap/js/waypoints.min.js"></script>
<script src="/Public/wap/js/jquery.transit.min.js"></script>
<script src="/Public/wap/js/jquery.scrollTo.min.js"></script>
<script src="/Public/wap/js/jquery.small.plugins.js"></script>
<script src="/Public/wap/js/owl.carousel.min.js"></script>
<script src="/Public/wap/js/jquery.fancybox-1.3.4.pack.js"></script>
<script src="/Public/wap/js/retina.min.js"></script>

<!--&lt;!&ndash; Custom scripts &ndash;&gt;-->
<script src="/Public/wap/js/custom.js"></script>














<script>

    $(document).ready(function () {
        $("#progress").animate({"width":"85%"});



        $(window).resize(function () {
            console.log($(window).width());
        })

    })

</script>



</body>

</html>