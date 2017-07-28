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



    <link rel="stylesheet" href="/Public/wap/css/style.css" media="screen" />

    <link rel="shortcut icon" href="/Public/images/icoo.ico" type="image/x-icon" />



    <link href="/Public/resource/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/resource/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="/Public/resource/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/resource/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
    

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
            margin-bottom:0px;
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

    <?php if($pc == 'pc'){ echo 'margin-right:10px;';}else{ if('productdet' == 'account'){ echo 'margin-right: -5px;'; }else{ echo 'margin-right: 20px;';}}?>
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
    <?php if('productdet' != 'home'){ echo 'display: none !important;';};?>

    }

    .show{
    <?php if('productdet' == 'home'){ echo 'display: none !important;';};?>

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

        <h4 class="nav-title white" style="text-align: center;"><?php echo (L("_DBCoin")); ?></h4>
        <div class="divider white"></div>
        <nav id="nav">
            <ul>
                <!--<li><a href="index.html">Home</a></li>-->
                <!--<li><a href="index.php" class="<?php if(productdet == 'index'){ echo 'active';} ?>">Home</a></li>-->
                <!--<li><a href="index.php?&a=news" class="<?php if(productdet == 'news'){ echo 'active';} ?>">News</a></li>-->

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
                            <h3 class="caption-title big animated"><?php echo (L("_Header_productdet")); ?></h3><br>
                            <h3 class="caption-title small animated"><?php echo (L("_Raised_small_title")); ?></h3>
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
                                                <div class="profile radius" style="padding-bottom: 0px;">
                                                    <div class="tabbable-line tabbable-full-width">
                                                        <ul class="nav nav-tabs" style="margin-top:-8px;text-align: center;">
                                                            <li class="active" style="width: 33.3%;">
                                                                <a href="#tab_1_1" data-toggle="tab" style="<?php if($pc=='pc'){echo 'font-size: 18px !important;';}else{ echo 'font-size: 15px !important;';} ?>font-weight: 600;"><?php echo (L("_Raised_project_home")); ?></a>
                                                            </li>
                                                            <li style="width: 33.3%;">
                                                            <!--<li style="width: 50%;">-->
                                                                <a href="#tab_1_2" data-toggle="tab" style="<?php if($pc=='pc'){echo 'font-size: 18px !important;';}else{ echo 'font-size: 15px !important;';} ?>font-weight: 600;">ICO</a>
                                                            </li>

                                                            <li style="width: 33.3%;">
                                                                <a href="#tab_1_3" data-toggle="tab" style="<?php if($pc=='pc'){echo 'font-size: 18px !important;';}else{ echo 'font-size: 15px !important;';} ?>font-weight: 600;"><?php echo (L("_Raised_history")); ?></a>
                                                            </li>

                                                        </ul>
                                                        <div class="tab-content" style="padding-bottom: 10px;">
                                                            <div class="tab-pane " id="tab_1_1">
                                                                <!--<div class="tab-pane active" id="tab_1_1">-->
                                                                <div class="row">
                                                                    <div class="col-md-12">


                                                                        <img style="width: 100%;<?php if($pc=='pc'){ echo 'height: 300px;';}else{ echo 'height: 200px;';} ?>" src="/Public/img/new/pro1.jpg"/>


                                                                        <div>
                                                                            <p>
                                                                                <h4 class="p_header" >多宝金豆简介</h4>
                                                                            </p>

                                                                            <p class="p_content" >中文名称：多宝金豆
                                                                        　　<p  class="p_content" >英文名称：DBCoin
                                                                        <!--　　<p class="p_content" >英文简称：DBJD-->
                                                                            　　<p class="p_content" >总发行量：6000万枚
                                                                            　　<p class="p_content" >开始日期：2017年9月01日
                                                                            　　<p class="p_content" >结束日期：2017年9月30日
                                                                        </div>

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
                                                                                多宝金豆是逊和集团有限公司消费金融经营方式中实现用户获得金融收益的一种数字货币资产，是逊和集团依据自身的资金和资产，通过资产转化方式形成的一种数字资产，全球限量6000万个，用户通过公司赠送和公司兑换获得多宝金豆，拥有多宝金豆即等于持有等值集团资产包份额。目前开通了抵押、贷款、担保、兑换、变现、增值、置换、交易、众筹等商业应用。加入逊和集团多宝互联平台，拥有多宝金豆让您的消费变成理财，让消费者成为企业的股东，实现财富共享。
                                                                            </p>
                                                                        </div>

                                                                        <div>
                                                                            <p>
                                                                            <h4 class="p_header" >多宝金豆数字货币优势</h4>
                                                                            </p>

                                                                            <p class="p_content" >发展趋势：消费和金融最完美的结合;跟随国家发展趋势，引领新时代的群众消费理财潮流，让消费成为理财，将赚钱变得更加简单!
                                                                            <p class="p_content" >基金投资：每个投资者都有专门的业务对接员持续和投资者保持交流和沟通，另外我们也会定期组织投资者活动，定期公布财务数据，同时我们也会提供手机APP让每个投资者每天可以看到投资的收益，就好比余额宝一样，收益的分红也可以随时提现，总之我们希望给投资者全方位的服务。
                                                                            <p class="p_content" >区块链记账：是我们的基金管理优势和特点，每一笔投资和使用都有据可查，区块链技术中去中心化实现记账，用户无论通过法币或比特币、莱特币还是以太币等数字货币进行充值、兑换、交易、消费都可以换成等值比例多宝金豆，这是对投资者最大的保障。
                                                                            <p class="p_content" >公开众筹：多宝金币公开开启众筹模式来让所有行业用户参与运营，主要以P2P、密码学、共识机制、智能合约等技术，没有繁琐的额度与手续限制。知道对方地址就可以进行支付，实时交易都在区块链上实现记账，让投资者都能看到我们的投资行为，保证基金的资金安全。
                                                                            <p class="p_content" >全世界流通：多宝金豆可以在任意一台接入互联网的电脑上管理。不管身处何方，任何人都可以挖掘、购买、出售或收取多宝金豆。
                                                                            <p class="p_content" >跨平台挖掘：用户可以在众多平台上发掘不同硬件的计算能力。
                                                                        </div>

                                                                        <div>
                                                                            <p>
                                                                            <h4 class="p_header" >多宝金豆数字货币商业应用</h4>
                                                                            </p>

                                                                            <p class="p_content" >多宝金豆是逊和集团消费金融经营方式中实现用户获得金融收益的一种数字资产，根据集团资产扩大溢价和用户消费交易量进行多宝金豆的增值，为了满足大众用户对多宝金豆的需求，拥有多宝金豆即等于持有等值集团资产包份额。

                                                                            <h6 style="margin: 10px 0;text-indent: 2em;">多宝金豆商业应用：</h6>
                                                                            <p class="p_content" >多宝金豆拥有抵押、贷款、担保、兑换、变现、增值、置换、交易、众筹等商业应用。
                                                                            <p class="p_content"  style="color: red;">注：抵押贷款平台会员可将多宝金豆抵押冻结在逊和集团公司付利平台获得贷款，贷款最快一小时内放款。


                                                                            <h6 style="margin: 10px 0;text-indent: 2em;">多宝金豆获得方式：</h6>
                                                                            <p class="p_content" >1、参加公司发布的众筹项目及产品、获得多宝金豆;
                                                                        　　<p class="p_content" >2、在与公司指定合作的商家消费，获得多宝金豆;
                                                                        　　<p class="p_content" >3、公司政策和业绩奖励，产业和商品兑换，获得多宝金豆。
                                                                        　　<p class="p_content" >4、推广用户兑换多宝券，获得公司奖励的多宝金豆。



                                                                            <h6 style="margin: 10px 0;text-indent: 2em;">多宝金豆卖出收益：</h6>
                                                                            <p class="p_content" >由公司每月8日，18日发起依据当日多宝金豆价格从用户手中回购多宝金豆，从而用户获得卖出收益，或者用户每周六在多宝金豆场内交易区卖出金豆，由公司回购和用户认购。

                                                                        </div>


                                                                        <div>
                                                                            <p>
                                                                            <h4 class="p_header" >多宝金豆数字货币获利模式</h4>
                                                                            </p>

                                                                            <p class="p_content" >1、企业资产增值利润来源;
                                                                                　　 <p class="p_content" >2、项目投资利润来源;
                                                                            　　 <p class="p_content" >3、互联网金融利润来源;
                                                                            　　 <p class="p_content" >4、线上与线下消费利润来源;
                                                                            <p class="p_content" >5、渠道入股利润来源。
                                                                        </div>

                                                                        <!--<div>-->
                                                                            <!--<p>-->
                                                                            <!--<h4 class="p_header" >风险提示</h4>-->
                                                                            <!--</p>-->

                                                                            <!--<p class="p_content" >投资多宝金豆之前，其根本性风险来源于参与者对价格的预期，因此，其实时报价最终由市场参与者决定，请仔细阅读央行等五部委《关于防范BTC风险的通知》，数字货币受政策、市场、技术等各方面因素影响，价格容易剧幅波动，请大家认清和评估自身风险，理性投资。建议您在自身承受风险范围内，参与多宝金豆数字货币投资。严禁使用多宝金豆数字货币从事洗钱、走私、商业贿赂等一切触犯国家法律的非法交易活动。若发现违法事件，将配合交易平台冻结其账户，并送相关部门进行处理，由此所产生的一切损失将由用户自行承担。-->
                                                                            <!--<p class="p_content" >数字资产的交易存在极高风险(预挖、暴涨暴跌、庄家操控、团队解散、技术缺陷等)，作为全球的虚拟数字货币，都是全天24小时交易，没有涨跌限制，价格容易因为庄家、全球政府的政策影响而大幅波动，我们强烈建议您在自身能承受的风险范围内，参与虚拟货币交易。-->
                                                                        <!--</div>-->

                                                                        <!--<div>-->
                                                                            <!--<p>-->
                                                                            <!--<h4 class="p_header" >总结</h4>-->
                                                                            <!--</p>-->

                                                                            <!--<p class="p_content" >多宝金豆是逊和集团消费金融经营方式中实现用户获得金融收益的一种数字资产，根据集团资产扩大溢价和用户消费交易量进行多宝金豆的增值，为了满足大众用户对多宝金豆的需求，拥有多宝金豆即等于持有等值集团资产包份额。-->
                                                                            <!--<p class="p_content" >多宝金豆八大商业应用功能抵押、贷款、担保、兑换、变现、增值、置换、交易、众筹等，多宝金豆采用区块链技术中去中心化、不可篡改、匿名性、天然审计特点，为传统游戏带来了更安全便捷、分布式交易、透明性和时效性等特点，满足用户多种需求，加入逊和集团多宝金豆让您的消费变理财，让消费者成为企业的股东，获赠企业利润分红，实现财富盛世。-->
                                                                        <!--</div>-->



                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--tab_1_2-->
                                                            <div class="tab-pane active" id="tab_1_2">
                                                                <div class="row">
                                                                    <div class="col-md-12">



                                                                        <h4 style="text-align: center;<?php  if($pc == 'pc'){ echo 'margin-top:20px;';}else{ echo 'margin-top:20px;';} ?>">多宝金豆 ICO 分配计划</h4>

                                                                        <p style="text-align: center;margin: 0 auto;">多宝金豆总共发行6000万个，代表项目100%股份，其中募资60%。团队占40%（团队的40%股份中，其中20%永不不流通，5%项目运营后可流通，另外的15%锁定3年，每年解冻5%）随着DBC在市场自由流动，价值波动由市场决定。(详情请看下图，单位：万)。</p>
                                                                        <div id="chart_6" class="chart" style="background:transparent;height: 425px;padding: 0px;<?php  if($pc == 'pc'){ echo 'margin-top:-50px;';}else{ echo 'margin-top:-120px;';} ?>" > </div>



                                                                        <table style="<?php  if($pc == 'pc'){ echo 'margin-top:-40px;';}else{ echo 'margin-top:-120px;';} ?>" class="table table-striped table-bordered table-hover order-column" id="sample_2">
                                                                            <caption align="top" style="font-weight: 900;text-align: center;">多宝金豆分配计划描述</caption>

                                                                            <thead  style="background-color: #e1e1e1;">
                                                                            <tr >

                                                                                <th  style="text-align: center !important;min-width: 50px;">比例</th>
                                                                                <th  style="text-align: center !important;min-width: 80px;">分配方案</th>
                                                                                <th  style="text-align: center !important;">明细</th>

                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="text-align: center;">60%</td>
                                                                                    <td style="text-align: center;">DBC募资</td>
                                                                                    <td>用于DBC技术开发团队费用和项目产品完善</td>
                                                                                </tr>
                                                                                <tr >
                                                                                    <td rowspan="3" style="text-align: center;vertical-align: middle;">40%</td>
                                                                                    <td rowspan="3" style="text-align: center;vertical-align: middle;">团队占有</td>
                                                                                    <td>20%永不流通</td>
                                                                                </tr>
                                                                                <tr >
                                                                                    <td>其中5%项目运营后可流通</td>
                                                                                </tr>
                                                                                <tr >
                                                                                    <td>15%锁定3年，每年解冻5%</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>

                                                                        <h4 style="text-align: center;<?php  if($pc == 'pc'){ echo 'margin-top:50px;';}else{ echo 'margin-top:50px;';} ?>">ICO 众筹时间</h4>

                                                                        <p style="text-align: center;margin: 0 auto;">多宝金豆ICO众筹在北京时间2017年9月1日(周二)20:00至北京时间2017年9月30日(周五)20:00，或达到众筹募集上限时，ICO立即结束。</p>



                                                                        <h4 style="text-align: center;<?php  if($pc == 'pc'){ echo 'margin-top:50px;';}else{ echo 'margin-top:50px;';} ?>">ICO 众筹规则</h4>

                                                                        <p style="text-align: center;margin: 0 auto;">

                                                                            <ol>

                                                                        <li>本次ICO仅接受BTC;</li>
                                                                        <li>本次ICO总共发行500万个多宝金豆;</li>
                                                                        <li>本次ICO最低募集1000个BTC,如果ICO众筹数量低于1000个BTC,则宣布ICO失败，已筹集到的BTC会原路退回给众筹参与者;</li>

                                                                            </ol>


                                                                        </p>

                                                                        <table style="<?php  if($pc == 'pc'){ echo 'margin-top:-20px;';}else{ echo 'margin-top:0px;';} ?>" class="table table-striped table-bordered table-hover order-column" id="sample_2">
                                                                            <caption align="top" style="font-weight: 900;text-align: center;">多宝金豆ICO众筹细则兑换比例表</caption>

                                                                            <thead  style="background-color: #e1e1e1;">
                                                                            <tr >

                                                                                <th  style="text-align: center !important;min-width: 50px;">阶段</th>
                                                                                <th  style="text-align: center !important;min-width: 80px;">时间</th>
                                                                                <th  style="text-align: center !important;">兑换比例</th>

                                                                            </tr>
                                                                            </thead>
                                                                            <tbody id="msg">
                                                                            <tr>
                                                                                <td style="text-align: center;">第一阶段</td>
                                                                                <td style="text-align: center;">9/01 20:00—9/04 20:00</td>
                                                                                <td style="text-align: center;">1BTC = 6000 金豆</td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td style="text-align: center;">第二阶段</td>
                                                                                <td style="text-align: center;">9/04 20:00—9/08 20:00</td>
                                                                                <td style="text-align: center;">1BTC = 5000 金豆</td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td style="text-align: center;">第三阶段</td>
                                                                                <td style="text-align: center;">9/08 20:00—8/16 20:00</td>
                                                                                <td style="text-align: center;">1BTC = 3000 金豆</td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td style="text-align: center;">第四阶段</td>
                                                                                <td style="text-align: center;">9/16 20:00—9/30 20:00</td>
                                                                                <td style="text-align: center;">1BTC = 2000 金豆</td>
                                                                            </tr>

                                                                            </tbody>
                                                                        </table>




                                                                        <h4 style="text-align: center;<?php  if($pc == 'pc'){ echo 'margin-top:50px;';}else{ echo 'margin-top:50px;';} ?>">ICO 众筹获得 BTC 使用计划</h4>

                                                                        <p style="text-align: center;margin: 0 auto;">本次ICO将众筹10000个BTC主要用于后期多宝金豆项目产品完善和日常运营市场推广，及后期商业运营、金融、众筹等不同商业应用场景。50%用于DBC资金储备金；
                                                                            20%用于团队项目产品完善；
                                                                            10%用于日常运营推广开支；
                                                                            20%DBC风险预备金，防范由于不可预测的市场风险造成的多宝金豆价格不稳。</p>
                                                                        <div id="chart_69" class="chart" style="background:transparent;height: 425px;padding: 0px;<?php  if($pc == 'pc'){ echo 'margin-top:-50px;';}else{ echo 'margin-top:-120px;';} ?>" > </div>




                                                                        <h4 style="text-align: center;<?php  if($pc == 'pc'){ echo 'margin-top:-40px;';}else{ echo 'margin-top:-120px;';} ?>">ICO 众筹参与者的回报</h4>

                                                                        <p style="text-align: center;margin: 0 auto;">

                                                                            <ol>

                                                                                <li>多宝金豆整个运作由多宝金豆董事会进行操作保证每年持有多宝金豆者权益和增值回报，另多宝金豆属于全民持股数字资产，只要拥有多宝金豆即等于持有等值集团资产包份额，投资者有权享有分红权，或由公司每月8日、18日发起依据当日多宝金豆价格从用户手中回购多宝金豆，从而用户获得卖出收益。</li>
                                                                                <li>多宝金豆团队对于本次ICO众筹成功后将用于后期项目产品完善、项目推广及商品交易、金融、众筹、金豆流通有很大的信心。</li>
                                                                                <li>多宝金豆团队为了保证币值的稳定和安全，和避免出现恶意套现的行为，DBCoin董事会会严格核查财务信息和数据报告。</li>

                                                                            </ol>


                                                                        </p>


                                                                        <h4 style="text-align: center;<?php  if($pc == 'pc'){ echo 'margin-top:0px;';}else{ echo 'margin-top:-0px;';} ?>">风险提示</h4>

                                                                        <p style="text-align: center;margin: 0 auto;">

                                                                        <ol>

                                                                            <li>投资DBCoin之前，其根本性风险来源于参与者对价格的预期，因此，其实时报价最终由市场参与者决定，请仔细阅读央行等五部委《关于防范BTC风险的通知》，数字货币受政策、市场、技术等各方面因素影响，价格容易剧幅波动，请大家认清和评估自身风险，理性投资。建议您在自身承受风险范围内，参与多宝金豆数字货币投资。严禁使用多宝金豆数字货币从事洗钱、走私、商业贿赂等一切触犯国家法律的非法交易活动。若发现违法事件，将配合交易平台冻结其账户，并送相关部门进行处理，由此所产生的一切损失将由用户自行承担。</li>
                                                                            <li>免责声明：数字资产作为全球的虚拟数字货币，交易存在极高风险，一天24小时都在交易，没有涨跌限制，价格容易因为庄家、全球政府的政策影响而大幅波动，我们强烈建议您在自身能承受的风险范围内，进行参与投资。</li>

                                                                        </ol>


                                                                        </p>
                                                                        <!--<div class="flex-col-1-2 animated"  data-delay="100" style="width: 100%;text-align: center;">-->
                                                                            <!--<img src="/Public/images/timeline3.png" style="<?php if($pc == 'notpc'){ echo 'width: 100%;';}else{ echo 'width: 475px;padding-left:0px;';}?>" />-->

                                                                        <!--</div>-->







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
                <span class="caption-subject font-dark bold "><span style="color: #424e98;display: inline-block;font-size: 2em;"><?php echo (L("_DBCoin")); ?></span>/<?php echo (L("_Raised_Progress")); ?></span>
            </div>

        </div>
        <div class="portlet-body">

            <div style="color:#000;margin-top: -20px;">
                目前累计资金：<span style="font-size:20px;color:red;font-weight: 600;">0BTC</span><br>

                <div  style="color:gray;margin-top: 10px;">
                    此项目须在 2017年09月25日00分前，获得 <span style="font-size:20px;color:red;font-weight: 600;">10000BTC</span> 的支持才可成功!<br>
                </div>

                <div class="row">
                    <div class="col-md-12 profile-info">


                        <button style="<?php if($pc=='pc'){ echo 'margin-top: -5px;';}else{ echo 'margin-top: -5px;';} ?>padding:5px 10px;" type="button" data-loading-text="Loading..." class="pull-right btn red btn-sm   btn-circle" data-style="slide-left">
                            <span class="ladda-label"><?php echo (L("_Raised_going")); ?></span>
                        </button>


                        <h3 class="font-red-haze">
                            <?php echo (L("_Raised_Progress")); ?> <span data-counter="counterup" data-value="0">0</span>%
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
                                <i class="fa fa-users" style="color:gray;"></i> 0 <br>支持人数
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
                <span class="caption-subject font-dark bold ">  <span style="color: #424e98;display: inline-block;font-size: 2em;"><?php echo (L("_DBCoin")); ?></span>/金额不限</span>
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
                <input style="margin-top:-10px;" type="button"  onclick="window.location.href='index.php?&a=account_zhongchou';" class="btn btn-circle green-sharp btn-outline  btn-block sbold uppercase" value="立即支持">


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






<script src="/Public/resource/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/Public/resource/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!--<script src="/Public/resource/pages/scripts/charts-amcharts.min.js" type="text/javascript"></script>-->




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

//    document.body.innerHTML="<div id='div1'>aaa</div><div id='div2'>bbb</div><div id='div3'>ccc</div>";
//    for(var i=1;i<4;i++){
//        document.getElementById("div"+i).addEventListener("click",function(){
//            alert(i);
//        });
//
//        console.log(i);
//    }
//
//    i=5;

//    for(var i=1;i<4;i++){
//        document.getElementById("div"+i).addEventListener("click",function(){
//            alert(i);
//        });
//    }

//    for(var i=1;i<4;i++){
//        (function(i){
//            document.getElementById("div"+i).addEventListener("click",function(){
//                alert(i);
//            });
//        }(i));
//        console.log(i);
//    }




    $(document).ready(function () {
        $("#progress").animate({"width":"0%"});



        $(window).resize(function () {
            console.log($(window).width());
        })

    })

</script>



<script>
    var ChartsAmcharts = function() {

        var initChartSample1 = function() {
            var chart = AmCharts.makeChart("chart_1", {
                "type": "serial",
                "theme": "light",
                "pathToImages": App.getGlobalPluginsPath() + "amcharts/amcharts/images/",
                "autoMargins": false,
                "marginLeft": 30,
                "marginRight": 8,
                "marginTop": 10,
                "marginBottom": 26,

                "fontFamily": 'Open Sans',
                "color":    '#888',

                "dataProvider": [{
                    "year": 2009,
                    "income": 23.5,
                    "expenses": 18.1
                }, {
                    "year": 2010,
                    "income": 26.2,
                    "expenses": 22.8
                }, {
                    "year": 2011,
                    "income": 30.1,
                    "expenses": 23.9
                }, {
                    "year": 2012,
                    "income": 29.5,
                    "expenses": 25.1
                }, {
                    "year": 2013,
                    "income": 30.6,
                    "expenses": 27.2,
                    "dashLengthLine": 5
                }, {
                    "year": 2014,
                    "income": 34.1,
                    "expenses": 29.9,
                    "dashLengthColumn": 5,
                    "alpha": 0.2,
                    "additional": "(projection)"
                }],
                "valueAxes": [{
                    "axisAlpha": 0,
                    "position": "left"
                }],
                "startDuration": 1,
                "graphs": [{
                    "alphaField": "alpha",
                    "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>",
                    "dashLengthField": "dashLengthColumn",
                    "fillAlphas": 1,
                    "title": "Income",
                    "type": "column",
                    "valueField": "income"
                }, {
                    "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>",
                    "bullet": "round",
                    "dashLengthField": "dashLengthLine",
                    "lineThickness": 3,
                    "bulletSize": 7,
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#FFFFFF",
                    "useLineColorForBulletBorder": true,
                    "bulletBorderThickness": 3,
                    "fillAlphas": 0,
                    "lineAlpha": 1,
                    "title": "Expenses",
                    "valueField": "expenses"
                }],
                "categoryField": "year",
                "categoryAxis": {
                    "gridPosition": "start",
                    "axisAlpha": 0,
                    "tickLength": 0
                }
            });

            $('#chart_1').closest('.portlet').find('.fullscreen').click(function() {
                chart.invalidateSize();
            });
        }

        var initChartSample2 = function() {
            var chart = AmCharts.makeChart("chart_2", {
                "type": "serial",
                "theme": "light",

                "fontFamily": 'Open Sans',
                "color":    '#888888',

                "legend": {
                    "equalWidths": false,
                    "useGraphSettings": true,
                    "valueAlign": "left",
                    "valueWidth": 120
                },
                "dataProvider": [{
                    "date": "2012-01-01",
                    "distance": 227,
                    "townName": "New York",
                    "townName2": "New York",
                    "townSize": 25,
                    "latitude": 40.71,
                    "duration": 408
                }, {
                    "date": "2012-01-02",
                    "distance": 371,
                    "townName": "Washington",
                    "townSize": 14,
                    "latitude": 38.89,
                    "duration": 482
                }, {
                    "date": "2012-01-03",
                    "distance": 433,
                    "townName": "Wilmington",
                    "townSize": 6,
                    "latitude": 34.22,
                    "duration": 562
                }, {
                    "date": "2012-01-04",
                    "distance": 345,
                    "townName": "Jacksonville",
                    "townSize": 7,
                    "latitude": 30.35,
                    "duration": 379
                }, {
                    "date": "2012-01-05",
                    "distance": 480,
                    "townName": "Miami",
                    "townName2": "Miami",
                    "townSize": 10,
                    "latitude": 25.83,
                    "duration": 501
                }, {
                    "date": "2012-01-06",
                    "distance": 386,
                    "townName": "Tallahassee",
                    "townSize": 7,
                    "latitude": 30.46,
                    "duration": 443
                }, {
                    "date": "2012-01-07",
                    "distance": 348,
                    "townName": "New Orleans",
                    "townSize": 10,
                    "latitude": 29.94,
                    "duration": 405
                }, {
                    "date": "2012-01-08",
                    "distance": 238,
                    "townName": "Houston",
                    "townName2": "Houston",
                    "townSize": 16,
                    "latitude": 29.76,
                    "duration": 309
                }, {
                    "date": "2012-01-09",
                    "distance": 218,
                    "townName": "Dalas",
                    "townSize": 17,
                    "latitude": 32.8,
                    "duration": 287
                }, {
                    "date": "2012-01-10",
                    "distance": 349,
                    "townName": "Oklahoma City",
                    "townSize": 11,
                    "latitude": 35.49,
                    "duration": 485
                }, {
                    "date": "2012-01-11",
                    "distance": 603,
                    "townName": "Kansas City",
                    "townSize": 10,
                    "latitude": 39.1,
                    "duration": 890
                }, {
                    "date": "2012-01-12",
                    "distance": 534,
                    "townName": "Denver",
                    "townName2": "Denver",
                    "townSize": 18,
                    "latitude": 39.74,
                    "duration": 810
                }, {
                    "date": "2012-01-13",
                    "townName": "Salt Lake City",
                    "townSize": 12,
                    "distance": 425,
                    "duration": 670,
                    "latitude": 40.75,
                    "dashLength": 8,
                    "alpha": 0.4
                }, {
                    "date": "2012-01-14",
                    "latitude": 36.1,
                    "duration": 470,
                    "townName": "Las Vegas",
                    "townName2": "Las Vegas"
                }, {
                    "date": "2012-01-15"
                }, {
                    "date": "2012-01-16"
                }, {
                    "date": "2012-01-17"
                }, {
                    "date": "2012-01-18"
                }, {
                    "date": "2012-01-19"
                }],
                "valueAxes": [{
                    "id": "distanceAxis",
                    "axisAlpha": 0,
                    "gridAlpha": 0,
                    "position": "left",
                    "title": "distance"
                }, {
                    "id": "latitudeAxis",
                    "axisAlpha": 0,
                    "gridAlpha": 0,
                    "labelsEnabled": false,
                    "position": "right"
                }, {
                    "id": "durationAxis",
                    "duration": "mm",
                    "durationUnits": {
                        "hh": "h ",
                        "mm": "min"
                    },
                    "axisAlpha": 0,
                    "gridAlpha": 0,
                    "inside": true,
                    "position": "right",
                    "title": "duration"
                }],
                "graphs": [{
                    "alphaField": "alpha",
                    "balloonText": "[[value]] miles",
                    "dashLengthField": "dashLength",
                    "fillAlphas": 0.7,
                    "legendPeriodValueText": "total: [[value.sum]] mi",
                    "legendValueText": "[[value]] mi",
                    "title": "distance",
                    "type": "column",
                    "valueField": "distance",
                    "valueAxis": "distanceAxis"
                }, {
                    "balloonText": "latitude:[[value]]",
                    "bullet": "round",
                    "bulletBorderAlpha": 1,
                    "useLineColorForBulletBorder": true,
                    "bulletColor": "#FFFFFF",
                    "bulletSizeField": "townSize",
                    "dashLengthField": "dashLength",
                    "descriptionField": "townName",
                    "labelPosition": "right",
                    "labelText": "[[townName2]]",
                    "legendValueText": "[[description]]/[[value]]",
                    "title": "latitude/city",
                    "fillAlphas": 0,
                    "valueField": "latitude",
                    "valueAxis": "latitudeAxis"
                }, {
                    "bullet": "square",
                    "bulletBorderAlpha": 1,
                    "bulletBorderThickness": 1,
                    "dashLengthField": "dashLength",
                    "legendValueText": "[[value]]",
                    "title": "duration",
                    "fillAlphas": 0,
                    "valueField": "duration",
                    "valueAxis": "durationAxis"
                }],
                "chartCursor": {
                    "categoryBalloonDateFormat": "DD",
                    "cursorAlpha": 0.1,
                    "cursorColor": "#000000",
                    "fullWidth": true,
                    "valueBalloonsEnabled": false,
                    "zoomable": false
                },
                "dataDateFormat": "YYYY-MM-DD",
                "categoryField": "date",
                "categoryAxis": {
                    "dateFormats": [{
                        "period": "DD",
                        "format": "DD"
                    }, {
                        "period": "WW",
                        "format": "MMM DD"
                    }, {
                        "period": "MM",
                        "format": "MMM"
                    }, {
                        "period": "YYYY",
                        "format": "YYYY"
                    }],
                    "parseDates": true,
                    "autoGridCount": false,
                    "axisColor": "#555555",
                    "gridAlpha": 0.1,
                    "gridColor": "#FFFFFF",
                    "gridCount": 50
                },
                "exportConfig": {
                    "menuBottom": "20px",
                    "menuRight": "22px",
                    "menuItems": [{
                        "icon": App.getGlobalPluginsPath() + "amcharts/amcharts/images/export.png",
                        "format": 'png'
                    }]
                }
            });

            $('#chart_2').closest('.portlet').find('.fullscreen').click(function() {
                chart.invalidateSize();
            });
        }

        var initChartSample3 = function() {
            var chart = AmCharts.makeChart("chart_3", {
                "type": "serial",
                "theme": "light",

                "fontFamily": 'Open Sans',
                "color":    '#888888',

                "pathToImages": App.getGlobalPluginsPath() + "amcharts/amcharts/images/",

                "dataProvider": [{
                    "lineColor": "#b7e021",
                    "date": "2012-01-01",
                    "duration": 408
                }, {
                    "date": "2012-01-02",
                    "duration": 482
                }, {
                    "date": "2012-01-03",
                    "duration": 562
                }, {
                    "date": "2012-01-04",
                    "duration": 379
                }, {
                    "lineColor": "#fbd51a",
                    "date": "2012-01-05",
                    "duration": 501
                }, {
                    "date": "2012-01-06",
                    "duration": 443
                }, {
                    "date": "2012-01-07",
                    "duration": 405
                }, {
                    "date": "2012-01-08",
                    "duration": 309,
                    "lineColor": "#2498d2"
                }, {
                    "date": "2012-01-09",
                    "duration": 287
                }, {
                    "date": "2012-01-10",
                    "duration": 485
                }, {
                    "date": "2012-01-11",
                    "duration": 890
                }, {
                    "date": "2012-01-12",
                    "duration": 810
                }],
                "balloon": {
                    "cornerRadius": 6
                },
                "valueAxes": [{
                    "duration": "mm",
                    "durationUnits": {
                        "hh": "h ",
                        "mm": "min"
                    },
                    "axisAlpha": 0
                }],
                "graphs": [{
                    "bullet": "square",
                    "bulletBorderAlpha": 1,
                    "bulletBorderThickness": 1,
                    "fillAlphas": 0.3,
                    "fillColorsField": "lineColor",
                    "legendValueText": "[[value]]",
                    "lineColorField": "lineColor",
                    "title": "duration",
                    "valueField": "duration"
                }],
                "chartScrollbar": {},
                "chartCursor": {
                    "categoryBalloonDateFormat": "YYYY MMM DD",
                    "cursorAlpha": 0,
                    "zoomable": false
                },
                "dataDateFormat": "YYYY-MM-DD",
                "categoryField": "date",
                "categoryAxis": {
                    "dateFormats": [{
                        "period": "DD",
                        "format": "DD"
                    }, {
                        "period": "WW",
                        "format": "MMM DD"
                    }, {
                        "period": "MM",
                        "format": "MMM"
                    }, {
                        "period": "YYYY",
                        "format": "YYYY"
                    }],
                    "parseDates": true,
                    "autoGridCount": false,
                    "axisColor": "#555555",
                    "gridAlpha": 0,
                    "gridCount": 50
                }
            });

            $('#chart_3').closest('.portlet').find('.fullscreen').click(function() {
                chart.invalidateSize();
            });
        }

        var initChartSample4 = function() {
            var chart = AmCharts.makeChart("chart_4", {
                "type": "serial",
                "theme": "light",


                "handDrawn": true,
                "handDrawScatter": 3,
                "legend": {
                    "useGraphSettings": true,
                    "markerSize": 12,
                    "valueWidth": 0,
                    "verticalGap": 0
                },
                "dataProvider": [{
                    "year": 2005,
                    "income": 23.5,
                    "expenses": 18.1
                }, {
                    "year": 2006,
                    "income": 26.2,
                    "expenses": 22.8
                }, {
                    "year": 2007,
                    "income": 30.1,
                    "expenses": 23.9
                }, {
                    "year": 2008,
                    "income": 29.5,
                    "expenses": 25.1
                }, {
                    "year": 2009,
                    "income": 24.6,
                    "expenses": 25
                }],
                "valueAxes": [{
                    "minorGridAlpha": 0.08,
                    "minorGridEnabled": true,
                    "position": "top",
                    "axisAlpha": 0
                }],
                "startDuration": 1,
                "graphs": [{
                    "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b></span>",
                    "title": "Income",
                    "type": "column",
                    "fillAlphas": 0.8,

                    "valueField": "income"
                }, {
                    "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b></span>",
                    "bullet": "round",
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#FFFFFF",
                    "useLineColorForBulletBorder": true,
                    "fillAlphas": 0,
                    "lineThickness": 2,
                    "lineAlpha": 1,
                    "bulletSize": 7,
                    "title": "Expenses",
                    "valueField": "expenses"
                }],
                "rotate": true,
                "categoryField": "year",
                "categoryAxis": {
                    "gridPosition": "start"
                }
            });

            $('#chart_4').closest('.portlet').find('.fullscreen').click(function() {
                chart.invalidateSize();
            });
        }

        var initChartSample5 = function() {
            var chart = AmCharts.makeChart("chart_5", {
                "theme": "light",
                "type": "serial",
                "startDuration": 2,

                "fontFamily": 'Open Sans',

                "color":    '#888',

                "dataProvider": [{
                    "country": "USA",
                    "visits": 4025,
                    "color": "#FF0F00"
                }, {
                    "country": "China",
                    "visits": 1882,
                    "color": "#FF6600"
                }, {
                    "country": "Japan",
                    "visits": 1809,
                    "color": "#FF9E01"
                }, {
                    "country": "Germany",
                    "visits": 1322,
                    "color": "#FCD202"
                }, {
                    "country": "UK",
                    "visits": 1122,
                    "color": "#F8FF01"
                }, {
                    "country": "France",
                    "visits": 1114,
                    "color": "#B0DE09"
                }, {
                    "country": "India",
                    "visits": 984,
                    "color": "#04D215"
                }, {
                    "country": "Spain",
                    "visits": 711,
                    "color": "#0D8ECF"
                }, {
                    "country": "Netherlands",
                    "visits": 665,
                    "color": "#0D52D1"
                }, {
                    "country": "Russia",
                    "visits": 580,
                    "color": "#2A0CD0"
                }, {
                    "country": "South Korea",
                    "visits": 443,
                    "color": "#8A0CCF"
                }, {
                    "country": "Canada",
                    "visits": 441,
                    "color": "#CD0D74"
                }, {
                    "country": "Brazil",
                    "visits": 395,
                    "color": "#754DEB"
                }, {
                    "country": "Italy",
                    "visits": 386,
                    "color": "#DDDDDD"
                }, {
                    "country": "Australia",
                    "visits": 384,
                    "color": "#999999"
                }, {
                    "country": "Taiwan",
                    "visits": 338,
                    "color": "#333333"
                }, {
                    "country": "Poland",
                    "visits": 328,
                    "color": "#000000"
                }],
                "valueAxes": [{
                    "position": "left",
                    "axisAlpha": 0,
                    "gridAlpha": 0
                }],
                "graphs": [{
                    "balloonText": "[[category]]: <b>[[value]]</b>",
                    "colorField": "color",
                    "fillAlphas": 0.85,
                    "lineAlpha": 0.1,
                    "type": "column",
                    "topRadius": 1,
                    "valueField": "visits"
                }],
                "depth3D": 40,
                "angle": 30,
                "chartCursor": {
                    "categoryBalloonEnabled": false,
                    "cursorAlpha": 0,
                    "zoomable": false
                },
                "categoryField": "country",
                "categoryAxis": {
                    "gridPosition": "start",
                    "axisAlpha": 0,
                    "gridAlpha": 0

                },
                "exportConfig": {
                    "menuTop": "20px",
                    "menuRight": "20px",
                    "menuItems": [{
                        "icon": '/lib/3/images/export.png',
                        "format": 'png'
                    }]
                }
            }, 0);

            jQuery('.chart_5_chart_input').off().on('input change', function() {
                var property = jQuery(this).data('property');
                var target = chart;
                chart.startDuration = 0;

                if (property == 'topRadius') {
                    target = chart.graphs[0];
                }

                target[property] = this.value;
                chart.validateNow();
            });

            $('#chart_5').closest('.portlet').find('.fullscreen').click(function() {
                chart.invalidateSize();
            });
        }

        var initChartSample6 = function() {
            var chart = AmCharts.makeChart("chart_6", {
                "type": "pie",
                "theme": "light",

                "fontFamily": 'Open Sans',

                "color":    '#888',

                "dataProvider": [{
                    "country": "DBC募资",
                    "litres": "3600"
                }, {
                    "country": "永不流通",
                    "litres": "1200"
                },{
                    "country": "运营后流通",
                    "litres": "300"
                },{
                        "country": "锁定3年",
                        "litres": "900"
                    },
//                , {
//                    "country": "Germany",
//                    "litres": 165.8
//                }, {
//                    "country": "Australia",
//                    "litres": 139.9
//                }, {
//                    "country": "Austria",
//                    "litres": 128.3
//                }, {
//                    "country": "UK",
//                    "litres": 99
//                }, {
//                    "country": "Belgium",
//                    "litres": 60
//                }, {
//                    "country": "The Netherlands",
//                    "litres": 50
//                }
                ],
                "valueField": "litres",
                "titleField": "country",
                "exportConfig": {
                    menuItems: [{
                        icon: App.getGlobalPluginsPath() + "amcharts/amcharts/images/export.png",
                        format: 'png'
                    }]
                }
            });

            $('#chart_6').closest('.portlet').find('.fullscreen').click(function() {
                chart.invalidateSize();
            });
        }

        var initChartSample69 = function() {
            var chart = AmCharts.makeChart("chart_69", {
                "type": "pie",
                "theme": "light",

                "fontFamily": 'Open Sans',

                "color":    '#888',

                "dataProvider": [{

                    "country": "资金储备金；",
                    "litres": "5000"
                }, {

                    "country": "产品完善",
                    "litres": "2000"
                }, {
                    "country": "运营推广",
                    "litres": "1000"
                }, {
                    "country": "风险预备金",
                    "litres": "2000"
                }
//                , {
//                    "country": "Germany",
//                    "litres": 165.8
//                }, {
//                    "country": "Australia",
//                    "litres": 139.9
//                }, {
//                    "country": "Austria",
//                    "litres": 128.3
//                }, {
//                    "country": "UK",
//                    "litres": 99
//                }, {
//                    "country": "Belgium",
//                    "litres": 60
//                }, {
//                    "country": "The Netherlands",
//                    "litres": 50
//                }
                ],
                "valueField": "litres",
                "titleField": "country",
                "exportConfig": {
                    menuItems: [{
                        icon: App.getGlobalPluginsPath() + "amcharts/amcharts/images/export.png",
                        format: 'png'
                    }]
                }
            });

            $('#chart_6').closest('.portlet').find('.fullscreen').click(function() {
                chart.invalidateSize();
            });
        }

        var initChartSample7 = function() {
            var chart = AmCharts.makeChart("chart_7", {
                "type": "pie",
                "theme": "light",

                "fontFamily": 'Open Sans',

                "color":    '#888',

                "dataProvider": [{
                    "country": "Lithuania",
                    "value": 260
                }, {
                    "country": "Ireland",
                    "value": 201
                }, {
                    "country": "Germany",
                    "value": 65
                }, {
                    "country": "Australia",
                    "value": 39
                }, {
                    "country": "UK",
                    "value": 19
                }, {
                    "country": "Latvia",
                    "value": 10
                }],
                "valueField": "value",
                "titleField": "country",
                "outlineAlpha": 0.4,
                "depth3D": 15,
                "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                "angle": 30,
                "exportConfig": {
                    menuItems: [{
                        icon: '/lib/3/images/export.png',
                        format: 'png'
                    }]
                }
            });

            jQuery('.chart_7_chart_input').off().on('input change', function() {
                var property = jQuery(this).data('property');
                var target = chart;
                var value = Number(this.value);
                chart.startDuration = 0;

                if (property == 'innerRadius') {
                    value += "%";
                }

                target[property] = value;
                chart.validateNow();
            });

            $('#chart_7').closest('.portlet').find('.fullscreen').click(function() {
                chart.invalidateSize();
            });
        }

        var initChartSample8 = function() {
            var chart = AmCharts.makeChart("chart_8", {
                "type": "radar",
                "theme": "light",

                "fontFamily": 'Open Sans',

                "color":    '#888',

                "dataProvider": [{
                    "direction": "N",
                    "value": 8
                }, {
                    "direction": "NE",
                    "value": 9
                }, {
                    "direction": "E",
                    "value": 4.5
                }, {
                    "direction": "SE",
                    "value": 3.5
                }, {
                    "direction": "S",
                    "value": 9.2
                }, {
                    "direction": "SW",
                    "value": 8.4
                }, {
                    "direction": "W",
                    "value": 11.1
                }, {
                    "direction": "NW",
                    "value": 10
                }],
                "valueAxes": [{
                    "gridType": "circles",
                    "minimum": 0,
                    "autoGridCount": false,
                    "axisAlpha": 0.2,
                    "fillAlpha": 0.05,
                    "fillColor": "#FFFFFF",
                    "gridAlpha": 0.08,
                    "guides": [{
                        "angle": 225,
                        "fillAlpha": 0.3,
                        "fillColor": "#0066CC",
                        "tickLength": 0,
                        "toAngle": 315,
                        "toValue": 14,
                        "value": 0,
                        "lineAlpha": 0,

                    }, {
                        "angle": 45,
                        "fillAlpha": 0.3,
                        "fillColor": "#CC3333",
                        "tickLength": 0,
                        "toAngle": 135,
                        "toValue": 14,
                        "value": 0,
                        "lineAlpha": 0,
                    }],
                    "position": "left"
                }],
                "startDuration": 1,
                "graphs": [{
                    "balloonText": "[[category]]: [[value]] m/s",
                    "bullet": "round",
                    "fillAlphas": 0.3,
                    "valueField": "value"
                }],
                "categoryField": "direction"
            });

            $('#chart_8').closest('.portlet').find('.fullscreen').click(function() {
                chart.invalidateSize();
            });
        }

        var initChartSample9 = function() {
            var chart = AmCharts.makeChart("chart_9", {
                "type": "radar",
                "theme": "light",

                "fontFamily": 'Open Sans',

                "color":    '#888',

                "dataProvider": [{
                    "country": "Czech Republic",
                    "litres": 156.9
                }, {
                    "country": "Ireland",
                    "litres": 131.1
                }, {
                    "country": "Germany",
                    "litres": 115.8
                }, {
                    "country": "Australia",
                    "litres": 109.9
                }, {
                    "country": "Austria",
                    "litres": 108.3
                }, {
                    "country": "UK",
                    "litres": 99
                }],
                "valueAxes": [{
                    "axisTitleOffset": 20,
                    "minimum": 0,
                    "axisAlpha": 0.15
                }],
                "startDuration": 2,
                "graphs": [{
                    "balloonText": "[[value]] litres of beer per year",
                    "bullet": "round",
                    "valueField": "litres"
                }],
                "categoryField": "country",
                "exportConfig": {
                    "menuTop": "10px",
                    "menuRight": "10px",
                    "menuItems": [{
                        "icon": '/lib/3/images/export.png',
                        "format": 'png'
                    }]
                }
            });

            $('#chart_9').closest('.portlet').find('.fullscreen').click(function() {
                chart.invalidateSize();
            });
        }

        var initChartSample10 = function() {
            /*
            although ammap has methos like getAreaCenterLatitude and getAreaCenterLongitude,
            they are not suitable in quite a lot of cases as the center of some countries
            is even outside the country itself (like US, because of Alaska and Hawaii)
            That's why wehave the coordinates stored here
        */

            var latlong = {};
            latlong["AD"] = {
                "latitude": 42.5,
                "longitude": 1.5
            };
            latlong["AE"] = {
                "latitude": 24,
                "longitude": 54
            };
            latlong["AF"] = {
                "latitude": 33,
                "longitude": 65
            };
            latlong["AG"] = {
                "latitude": 17.05,
                "longitude": -61.8
            };
            latlong["AI"] = {
                "latitude": 18.25,
                "longitude": -63.1667
            };
            latlong["AL"] = {
                "latitude": 41,
                "longitude": 20
            };
            latlong["AM"] = {
                "latitude": 40,
                "longitude": 45
            };
            latlong["AN"] = {
                "latitude": 12.25,
                "longitude": -68.75
            };
            latlong["AO"] = {
                "latitude": -12.5,
                "longitude": 18.5
            };
            latlong["AP"] = {
                "latitude": 35,
                "longitude": 105
            };
            latlong["AQ"] = {
                "latitude": -90,
                "longitude": 0
            };
            latlong["AR"] = {
                "latitude": -34,
                "longitude": -64
            };
            latlong["AS"] = {
                "latitude": -14.3333,
                "longitude": -170
            };
            latlong["AT"] = {
                "latitude": 47.3333,
                "longitude": 13.3333
            };
            latlong["AU"] = {
                "latitude": -27,
                "longitude": 133
            };
            latlong["AW"] = {
                "latitude": 12.5,
                "longitude": -69.9667
            };
            latlong["AZ"] = {
                "latitude": 40.5,
                "longitude": 47.5
            };
            latlong["BA"] = {
                "latitude": 44,
                "longitude": 18
            };
            latlong["BB"] = {
                "latitude": 13.1667,
                "longitude": -59.5333
            };
            latlong["BD"] = {
                "latitude": 24,
                "longitude": 90
            };
            latlong["BE"] = {
                "latitude": 50.8333,
                "longitude": 4
            };
            latlong["BF"] = {
                "latitude": 13,
                "longitude": -2
            };
            latlong["BG"] = {
                "latitude": 43,
                "longitude": 25
            };
            latlong["BH"] = {
                "latitude": 26,
                "longitude": 50.55
            };
            latlong["BI"] = {
                "latitude": -3.5,
                "longitude": 30
            };
            latlong["BJ"] = {
                "latitude": 9.5,
                "longitude": 2.25
            };
            latlong["BM"] = {
                "latitude": 32.3333,
                "longitude": -64.75
            };
            latlong["BN"] = {
                "latitude": 4.5,
                "longitude": 114.6667
            };
            latlong["BO"] = {
                "latitude": -17,
                "longitude": -65
            };
            latlong["BR"] = {
                "latitude": -10,
                "longitude": -55
            };
            latlong["BS"] = {
                "latitude": 24.25,
                "longitude": -76
            };
            latlong["BT"] = {
                "latitude": 27.5,
                "longitude": 90.5
            };
            latlong["BV"] = {
                "latitude": -54.4333,
                "longitude": 3.4
            };
            latlong["BW"] = {
                "latitude": -22,
                "longitude": 24
            };
            latlong["BY"] = {
                "latitude": 53,
                "longitude": 28
            };
            latlong["BZ"] = {
                "latitude": 17.25,
                "longitude": -88.75
            };
            latlong["CA"] = {
                "latitude": 54,
                "longitude": -100
            };
            latlong["CC"] = {
                "latitude": -12.5,
                "longitude": 96.8333
            };
            latlong["CD"] = {
                "latitude": 0,
                "longitude": 25
            };
            latlong["CF"] = {
                "latitude": 7,
                "longitude": 21
            };
            latlong["CG"] = {
                "latitude": -1,
                "longitude": 15
            };
            latlong["CH"] = {
                "latitude": 47,
                "longitude": 8
            };
            latlong["CI"] = {
                "latitude": 8,
                "longitude": -5
            };
            latlong["CK"] = {
                "latitude": -21.2333,
                "longitude": -159.7667
            };
            latlong["CL"] = {
                "latitude": -30,
                "longitude": -71
            };
            latlong["CM"] = {
                "latitude": 6,
                "longitude": 12
            };
            latlong["CN"] = {
                "latitude": 35,
                "longitude": 105
            };
            latlong["CO"] = {
                "latitude": 4,
                "longitude": -72
            };
            latlong["CR"] = {
                "latitude": 10,
                "longitude": -84
            };
            latlong["CU"] = {
                "latitude": 21.5,
                "longitude": -80
            };
            latlong["CV"] = {
                "latitude": 16,
                "longitude": -24
            };
            latlong["CX"] = {
                "latitude": -10.5,
                "longitude": 105.6667
            };
            latlong["CY"] = {
                "latitude": 35,
                "longitude": 33
            };
            latlong["CZ"] = {
                "latitude": 49.75,
                "longitude": 15.5
            };
            latlong["DE"] = {
                "latitude": 51,
                "longitude": 9
            };
            latlong["DJ"] = {
                "latitude": 11.5,
                "longitude": 43
            };
            latlong["DK"] = {
                "latitude": 56,
                "longitude": 10
            };
            latlong["DM"] = {
                "latitude": 15.4167,
                "longitude": -61.3333
            };
            latlong["DO"] = {
                "latitude": 19,
                "longitude": -70.6667
            };
            latlong["DZ"] = {
                "latitude": 28,
                "longitude": 3
            };
            latlong["EC"] = {
                "latitude": -2,
                "longitude": -77.5
            };
            latlong["EE"] = {
                "latitude": 59,
                "longitude": 26
            };
            latlong["EG"] = {
                "latitude": 27,
                "longitude": 30
            };
            latlong["EH"] = {
                "latitude": 24.5,
                "longitude": -13
            };
            latlong["ER"] = {
                "latitude": 15,
                "longitude": 39
            };
            latlong["ES"] = {
                "latitude": 40,
                "longitude": -4
            };
            latlong["ET"] = {
                "latitude": 8,
                "longitude": 38
            };
            latlong["EU"] = {
                "latitude": 47,
                "longitude": 8
            };
            latlong["FI"] = {
                "latitude": 62,
                "longitude": 26
            };
            latlong["FJ"] = {
                "latitude": -18,
                "longitude": 175
            };
            latlong["FK"] = {
                "latitude": -51.75,
                "longitude": -59
            };
            latlong["FM"] = {
                "latitude": 6.9167,
                "longitude": 158.25
            };
            latlong["FO"] = {
                "latitude": 62,
                "longitude": -7
            };
            latlong["FR"] = {
                "latitude": 46,
                "longitude": 2
            };
            latlong["GA"] = {
                "latitude": -1,
                "longitude": 11.75
            };
            latlong["GB"] = {
                "latitude": 54,
                "longitude": -2
            };
            latlong["GD"] = {
                "latitude": 12.1167,
                "longitude": -61.6667
            };
            latlong["GE"] = {
                "latitude": 42,
                "longitude": 43.5
            };
            latlong["GF"] = {
                "latitude": 4,
                "longitude": -53
            };
            latlong["GH"] = {
                "latitude": 8,
                "longitude": -2
            };
            latlong["GI"] = {
                "latitude": 36.1833,
                "longitude": -5.3667
            };
            latlong["GL"] = {
                "latitude": 72,
                "longitude": -40
            };
            latlong["GM"] = {
                "latitude": 13.4667,
                "longitude": -16.5667
            };
            latlong["GN"] = {
                "latitude": 11,
                "longitude": -10
            };
            latlong["GP"] = {
                "latitude": 16.25,
                "longitude": -61.5833
            };
            latlong["GQ"] = {
                "latitude": 2,
                "longitude": 10
            };
            latlong["GR"] = {
                "latitude": 39,
                "longitude": 22
            };
            latlong["GS"] = {
                "latitude": -54.5,
                "longitude": -37
            };
            latlong["GT"] = {
                "latitude": 15.5,
                "longitude": -90.25
            };
            latlong["GU"] = {
                "latitude": 13.4667,
                "longitude": 144.7833
            };
            latlong["GW"] = {
                "latitude": 12,
                "longitude": -15
            };
            latlong["GY"] = {
                "latitude": 5,
                "longitude": -59
            };
            latlong["HK"] = {
                "latitude": 22.25,
                "longitude": 114.1667
            };
            latlong["HM"] = {
                "latitude": -53.1,
                "longitude": 72.5167
            };
            latlong["HN"] = {
                "latitude": 15,
                "longitude": -86.5
            };
            latlong["HR"] = {
                "latitude": 45.1667,
                "longitude": 15.5
            };
            latlong["HT"] = {
                "latitude": 19,
                "longitude": -72.4167
            };
            latlong["HU"] = {
                "latitude": 47,
                "longitude": 20
            };
            latlong["ID"] = {
                "latitude": -5,
                "longitude": 120
            };
            latlong["IE"] = {
                "latitude": 53,
                "longitude": -8
            };
            latlong["IL"] = {
                "latitude": 31.5,
                "longitude": 34.75
            };
            latlong["IN"] = {
                "latitude": 20,
                "longitude": 77
            };
            latlong["IO"] = {
                "latitude": -6,
                "longitude": 71.5
            };
            latlong["IQ"] = {
                "latitude": 33,
                "longitude": 44
            };
            latlong["IR"] = {
                "latitude": 32,
                "longitude": 53
            };
            latlong["IS"] = {
                "latitude": 65,
                "longitude": -18
            };
            latlong["IT"] = {
                "latitude": 42.8333,
                "longitude": 12.8333
            };
            latlong["JM"] = {
                "latitude": 18.25,
                "longitude": -77.5
            };
            latlong["JO"] = {
                "latitude": 31,
                "longitude": 36
            };
            latlong["JP"] = {
                "latitude": 36,
                "longitude": 138
            };
            latlong["KE"] = {
                "latitude": 1,
                "longitude": 38
            };
            latlong["KG"] = {
                "latitude": 41,
                "longitude": 75
            };
            latlong["KH"] = {
                "latitude": 13,
                "longitude": 105
            };
            latlong["KI"] = {
                "latitude": 1.4167,
                "longitude": 173
            };
            latlong["KM"] = {
                "latitude": -12.1667,
                "longitude": 44.25
            };
            latlong["KN"] = {
                "latitude": 17.3333,
                "longitude": -62.75
            };
            latlong["KP"] = {
                "latitude": 40,
                "longitude": 127
            };
            latlong["KR"] = {
                "latitude": 37,
                "longitude": 127.5
            };
            latlong["KW"] = {
                "latitude": 29.3375,
                "longitude": 47.6581
            };
            latlong["KY"] = {
                "latitude": 19.5,
                "longitude": -80.5
            };
            latlong["KZ"] = {
                "latitude": 48,
                "longitude": 68
            };
            latlong["LA"] = {
                "latitude": 18,
                "longitude": 105
            };
            latlong["LB"] = {
                "latitude": 33.8333,
                "longitude": 35.8333
            };
            latlong["LC"] = {
                "latitude": 13.8833,
                "longitude": -61.1333
            };
            latlong["LI"] = {
                "latitude": 47.1667,
                "longitude": 9.5333
            };
            latlong["LK"] = {
                "latitude": 7,
                "longitude": 81
            };
            latlong["LR"] = {
                "latitude": 6.5,
                "longitude": -9.5
            };
            latlong["LS"] = {
                "latitude": -29.5,
                "longitude": 28.5
            };
            latlong["LT"] = {
                "latitude": 55,
                "longitude": 24
            };
            latlong["LU"] = {
                "latitude": 49.75,
                "longitude": 6
            };
            latlong["LV"] = {
                "latitude": 57,
                "longitude": 25
            };
            latlong["LY"] = {
                "latitude": 25,
                "longitude": 17
            };
            latlong["MA"] = {
                "latitude": 32,
                "longitude": -5
            };
            latlong["MC"] = {
                "latitude": 43.7333,
                "longitude": 7.4
            };
            latlong["MD"] = {
                "latitude": 47,
                "longitude": 29
            };
            latlong["ME"] = {
                "latitude": 42.5,
                "longitude": 19.4
            };
            latlong["MG"] = {
                "latitude": -20,
                "longitude": 47
            };
            latlong["MH"] = {
                "latitude": 9,
                "longitude": 168
            };
            latlong["MK"] = {
                "latitude": 41.8333,
                "longitude": 22
            };
            latlong["ML"] = {
                "latitude": 17,
                "longitude": -4
            };
            latlong["MM"] = {
                "latitude": 22,
                "longitude": 98
            };
            latlong["MN"] = {
                "latitude": 46,
                "longitude": 105
            };
            latlong["MO"] = {
                "latitude": 22.1667,
                "longitude": 113.55
            };
            latlong["MP"] = {
                "latitude": 15.2,
                "longitude": 145.75
            };
            latlong["MQ"] = {
                "latitude": 14.6667,
                "longitude": -61
            };
            latlong["MR"] = {
                "latitude": 20,
                "longitude": -12
            };
            latlong["MS"] = {
                "latitude": 16.75,
                "longitude": -62.2
            };
            latlong["MT"] = {
                "latitude": 35.8333,
                "longitude": 14.5833
            };
            latlong["MU"] = {
                "latitude": -20.2833,
                "longitude": 57.55
            };
            latlong["MV"] = {
                "latitude": 3.25,
                "longitude": 73
            };
            latlong["MW"] = {
                "latitude": -13.5,
                "longitude": 34
            };
            latlong["MX"] = {
                "latitude": 23,
                "longitude": -102
            };
            latlong["MY"] = {
                "latitude": 2.5,
                "longitude": 112.5
            };
            latlong["MZ"] = {
                "latitude": -18.25,
                "longitude": 35
            };
            latlong["NA"] = {
                "latitude": -22,
                "longitude": 17
            };
            latlong["NC"] = {
                "latitude": -21.5,
                "longitude": 165.5
            };
            latlong["NE"] = {
                "latitude": 16,
                "longitude": 8
            };
            latlong["NF"] = {
                "latitude": -29.0333,
                "longitude": 167.95
            };
            latlong["NG"] = {
                "latitude": 10,
                "longitude": 8
            };
            latlong["NI"] = {
                "latitude": 13,
                "longitude": -85
            };
            latlong["NL"] = {
                "latitude": 52.5,
                "longitude": 5.75
            };
            latlong["NO"] = {
                "latitude": 62,
                "longitude": 10
            };
            latlong["NP"] = {
                "latitude": 28,
                "longitude": 84
            };
            latlong["NR"] = {
                "latitude": -0.5333,
                "longitude": 166.9167
            };
            latlong["NU"] = {
                "latitude": -19.0333,
                "longitude": -169.8667
            };
            latlong["NZ"] = {
                "latitude": -41,
                "longitude": 174
            };
            latlong["OM"] = {
                "latitude": 21,
                "longitude": 57
            };
            latlong["PA"] = {
                "latitude": 9,
                "longitude": -80
            };
            latlong["PE"] = {
                "latitude": -10,
                "longitude": -76
            };
            latlong["PF"] = {
                "latitude": -15,
                "longitude": -140
            };
            latlong["PG"] = {
                "latitude": -6,
                "longitude": 147
            };
            latlong["PH"] = {
                "latitude": 13,
                "longitude": 122
            };
            latlong["PK"] = {
                "latitude": 30,
                "longitude": 70
            };
            latlong["PL"] = {
                "latitude": 52,
                "longitude": 20
            };
            latlong["PM"] = {
                "latitude": 46.8333,
                "longitude": -56.3333
            };
            latlong["PR"] = {
                "latitude": 18.25,
                "longitude": -66.5
            };
            latlong["PS"] = {
                "latitude": 32,
                "longitude": 35.25
            };
            latlong["PT"] = {
                "latitude": 39.5,
                "longitude": -8
            };
            latlong["PW"] = {
                "latitude": 7.5,
                "longitude": 134.5
            };
            latlong["PY"] = {
                "latitude": -23,
                "longitude": -58
            };
            latlong["QA"] = {
                "latitude": 25.5,
                "longitude": 51.25
            };
            latlong["RE"] = {
                "latitude": -21.1,
                "longitude": 55.6
            };
            latlong["RO"] = {
                "latitude": 46,
                "longitude": 25
            };
            latlong["RS"] = {
                "latitude": 44,
                "longitude": 21
            };
            latlong["RU"] = {
                "latitude": 60,
                "longitude": 100
            };
            latlong["RW"] = {
                "latitude": -2,
                "longitude": 30
            };
            latlong["SA"] = {
                "latitude": 25,
                "longitude": 45
            };
            latlong["SB"] = {
                "latitude": -8,
                "longitude": 159
            };
            latlong["SC"] = {
                "latitude": -4.5833,
                "longitude": 55.6667
            };
            latlong["SD"] = {
                "latitude": 15,
                "longitude": 30
            };
            latlong["SE"] = {
                "latitude": 62,
                "longitude": 15
            };
            latlong["SG"] = {
                "latitude": 1.3667,
                "longitude": 103.8
            };
            latlong["SH"] = {
                "latitude": -15.9333,
                "longitude": -5.7
            };
            latlong["SI"] = {
                "latitude": 46,
                "longitude": 15
            };
            latlong["SJ"] = {
                "latitude": 78,
                "longitude": 20
            };
            latlong["SK"] = {
                "latitude": 48.6667,
                "longitude": 19.5
            };
            latlong["SL"] = {
                "latitude": 8.5,
                "longitude": -11.5
            };
            latlong["SM"] = {
                "latitude": 43.7667,
                "longitude": 12.4167
            };
            latlong["SN"] = {
                "latitude": 14,
                "longitude": -14
            };
            latlong["SO"] = {
                "latitude": 10,
                "longitude": 49
            };
            latlong["SR"] = {
                "latitude": 4,
                "longitude": -56
            };
            latlong["ST"] = {
                "latitude": 1,
                "longitude": 7
            };
            latlong["SV"] = {
                "latitude": 13.8333,
                "longitude": -88.9167
            };
            latlong["SY"] = {
                "latitude": 35,
                "longitude": 38
            };
            latlong["SZ"] = {
                "latitude": -26.5,
                "longitude": 31.5
            };
            latlong["TC"] = {
                "latitude": 21.75,
                "longitude": -71.5833
            };
            latlong["TD"] = {
                "latitude": 15,
                "longitude": 19
            };
            latlong["TF"] = {
                "latitude": -43,
                "longitude": 67
            };
            latlong["TG"] = {
                "latitude": 8,
                "longitude": 1.1667
            };
            latlong["TH"] = {
                "latitude": 15,
                "longitude": 100
            };
            latlong["TJ"] = {
                "latitude": 39,
                "longitude": 71
            };
            latlong["TK"] = {
                "latitude": -9,
                "longitude": -172
            };
            latlong["TM"] = {
                "latitude": 40,
                "longitude": 60
            };
            latlong["TN"] = {
                "latitude": 34,
                "longitude": 9
            };
            latlong["TO"] = {
                "latitude": -20,
                "longitude": -175
            };
            latlong["TR"] = {
                "latitude": 39,
                "longitude": 35
            };
            latlong["TT"] = {
                "latitude": 11,
                "longitude": -61
            };
            latlong["TV"] = {
                "latitude": -8,
                "longitude": 178
            };
            latlong["TW"] = {
                "latitude": 23.5,
                "longitude": 121
            };
            latlong["TZ"] = {
                "latitude": -6,
                "longitude": 35
            };
            latlong["UA"] = {
                "latitude": 49,
                "longitude": 32
            };
            latlong["UG"] = {
                "latitude": 1,
                "longitude": 32
            };
            latlong["UM"] = {
                "latitude": 19.2833,
                "longitude": 166.6
            };
            latlong["US"] = {
                "latitude": 38,
                "longitude": -97
            };
            latlong["UY"] = {
                "latitude": -33,
                "longitude": -56
            };
            latlong["UZ"] = {
                "latitude": 41,
                "longitude": 64
            };
            latlong["VA"] = {
                "latitude": 41.9,
                "longitude": 12.45
            };
            latlong["VC"] = {
                "latitude": 13.25,
                "longitude": -61.2
            };
            latlong["VE"] = {
                "latitude": 8,
                "longitude": -66
            };
            latlong["VG"] = {
                "latitude": 18.5,
                "longitude": -64.5
            };
            latlong["VI"] = {
                "latitude": 18.3333,
                "longitude": -64.8333
            };
            latlong["VN"] = {
                "latitude": 16,
                "longitude": 106
            };
            latlong["VU"] = {
                "latitude": -16,
                "longitude": 167
            };
            latlong["WF"] = {
                "latitude": -13.3,
                "longitude": -176.2
            };
            latlong["WS"] = {
                "latitude": -13.5833,
                "longitude": -172.3333
            };
            latlong["YE"] = {
                "latitude": 15,
                "longitude": 48
            };
            latlong["YT"] = {
                "latitude": -12.8333,
                "longitude": 45.1667
            };
            latlong["ZA"] = {
                "latitude": -29,
                "longitude": 24
            };
            latlong["ZM"] = {
                "latitude": -15,
                "longitude": 30
            };
            latlong["ZW"] = {
                "latitude": -20,
                "longitude": 30
            };

            var mapData = [{
                "code": "AF",
                "name": "Afghanistan",
                "value": 32358260,
                "color": "#eea638"
            }, {
                "code": "AL",
                "name": "Albania",
                "value": 3215988,
                "color": "#d8854f"
            }, {
                "code": "DZ",
                "name": "Algeria",
                "value": 35980193,
                "color": "#de4c4f"
            }, {
                "code": "AO",
                "name": "Angola",
                "value": 19618432,
                "color": "#de4c4f"
            }, {
                "code": "AR",
                "name": "Argentina",
                "value": 40764561,
                "color": "#86a965"
            }, {
                "code": "AM",
                "name": "Armenia",
                "value": 3100236,
                "color": "#d8854f"
            }, {
                "code": "AU",
                "name": "Australia",
                "value": 22605732,
                "color": "#8aabb0"
            }, {
                "code": "AT",
                "name": "Austria",
                "value": 8413429,
                "color": "#d8854f"
            }, {
                "code": "AZ",
                "name": "Azerbaijan",
                "value": 9306023,
                "color": "#d8854f"
            }, {
                "code": "BH",
                "name": "Bahrain",
                "value": 1323535,
                "color": "#eea638"
            }, {
                "code": "BD",
                "name": "Bangladesh",
                "value": 150493658,
                "color": "#eea638"
            }, {
                "code": "BY",
                "name": "Belarus",
                "value": 9559441,
                "color": "#d8854f"
            }, {
                "code": "BE",
                "name": "Belgium",
                "value": 10754056,
                "color": "#d8854f"
            }, {
                "code": "BJ",
                "name": "Benin",
                "value": 9099922,
                "color": "#de4c4f"
            }, {
                "code": "BT",
                "name": "Bhutan",
                "value": 738267,
                "color": "#eea638"
            }, {
                "code": "BO",
                "name": "Bolivia",
                "value": 10088108,
                "color": "#86a965"
            }, {
                "code": "BA",
                "name": "Bosnia and Herzegovina",
                "value": 3752228,
                "color": "#d8854f"
            }, {
                "code": "BW",
                "name": "Botswana",
                "value": 2030738,
                "color": "#de4c4f"
            }, {
                "code": "BR",
                "name": "Brazil",
                "value": 196655014,
                "color": "#86a965"
            }, {
                "code": "BN",
                "name": "Brunei",
                "value": 405938,
                "color": "#eea638"
            }, {
                "code": "BG",
                "name": "Bulgaria",
                "value": 7446135,
                "color": "#d8854f"
            }, {
                "code": "BF",
                "name": "Burkina Faso",
                "value": 16967845,
                "color": "#de4c4f"
            }, {
                "code": "BI",
                "name": "Burundi",
                "value": 8575172,
                "color": "#de4c4f"
            }, {
                "code": "KH",
                "name": "Cambodia",
                "value": 14305183,
                "color": "#eea638"
            }, {
                "code": "CM",
                "name": "Cameroon",
                "value": 20030362,
                "color": "#de4c4f"
            }, {
                "code": "CA",
                "name": "Canada",
                "value": 34349561,
                "color": "#a7a737"
            }, {
                "code": "CV",
                "name": "Cape Verde",
                "value": 500585,
                "color": "#de4c4f"
            }, {
                "code": "CF",
                "name": "Central African Rep.",
                "value": 4486837,
                "color": "#de4c4f"
            }, {
                "code": "TD",
                "name": "Chad",
                "value": 11525496,
                "color": "#de4c4f"
            }, {
                "code": "CL",
                "name": "Chile",
                "value": 17269525,
                "color": "#86a965"
            }, {
                "code": "CN",
                "name": "China",
                "value": 1347565324,
                "color": "#eea638"
            }, {
                "code": "CO",
                "name": "Colombia",
                "value": 46927125,
                "color": "#86a965"
            }, {
                "code": "KM",
                "name": "Comoros",
                "value": 753943,
                "color": "#de4c4f"
            }, {
                "code": "CD",
                "name": "Congo, Dem. Rep.",
                "value": 67757577,
                "color": "#de4c4f"
            }, {
                "code": "CG",
                "name": "Congo, Rep.",
                "value": 4139748,
                "color": "#de4c4f"
            }, {
                "code": "CR",
                "name": "Costa Rica",
                "value": 4726575,
                "color": "#a7a737"
            }, {
                "code": "CI",
                "name": "Cote d'Ivoire",
                "value": 20152894,
                "color": "#de4c4f"
            }, {
                "code": "HR",
                "name": "Croatia",
                "value": 4395560,
                "color": "#d8854f"
            }, {
                "code": "CU",
                "name": "Cuba",
                "value": 11253665,
                "color": "#a7a737"
            }, {
                "code": "CY",
                "name": "Cyprus",
                "value": 1116564,
                "color": "#d8854f"
            }, {
                "code": "CZ",
                "name": "Czech Rep.",
                "value": 10534293,
                "color": "#d8854f"
            }, {
                "code": "DK",
                "name": "Denmark",
                "value": 5572594,
                "color": "#d8854f"
            }, {
                "code": "DJ",
                "name": "Djibouti",
                "value": 905564,
                "color": "#de4c4f"
            }, {
                "code": "DO",
                "name": "Dominican Rep.",
                "value": 10056181,
                "color": "#a7a737"
            }, {
                "code": "EC",
                "name": "Ecuador",
                "value": 14666055,
                "color": "#86a965"
            }, {
                "code": "EG",
                "name": "Egypt",
                "value": 82536770,
                "color": "#de4c4f"
            }, {
                "code": "SV",
                "name": "El Salvador",
                "value": 6227491,
                "color": "#a7a737"
            }, {
                "code": "GQ",
                "name": "Equatorial Guinea",
                "value": 720213,
                "color": "#de4c4f"
            }, {
                "code": "ER",
                "name": "Eritrea",
                "value": 5415280,
                "color": "#de4c4f"
            }, {
                "code": "EE",
                "name": "Estonia",
                "value": 1340537,
                "color": "#d8854f"
            }, {
                "code": "ET",
                "name": "Ethiopia",
                "value": 84734262,
                "color": "#de4c4f"
            }, {
                "code": "FJ",
                "name": "Fiji",
                "value": 868406,
                "color": "#8aabb0"
            }, {
                "code": "FI",
                "name": "Finland",
                "value": 5384770,
                "color": "#d8854f"
            }, {
                "code": "FR",
                "name": "France",
                "value": 63125894,
                "color": "#d8854f"
            }, {
                "code": "GA",
                "name": "Gabon",
                "value": 1534262,
                "color": "#de4c4f"
            }, {
                "code": "GM",
                "name": "Gambia",
                "value": 1776103,
                "color": "#de4c4f"
            }, {
                "code": "GE",
                "name": "Georgia",
                "value": 4329026,
                "color": "#d8854f"
            }, {
                "code": "DE",
                "name": "Germany",
                "value": 82162512,
                "color": "#d8854f"
            }, {
                "code": "GH",
                "name": "Ghana",
                "value": 24965816,
                "color": "#de4c4f"
            }, {
                "code": "GR",
                "name": "Greece",
                "value": 11390031,
                "color": "#d8854f"
            }, {
                "code": "GT",
                "name": "Guatemala",
                "value": 14757316,
                "color": "#a7a737"
            }, {
                "code": "GN",
                "name": "Guinea",
                "value": 10221808,
                "color": "#de4c4f"
            }, {
                "code": "GW",
                "name": "Guinea-Bissau",
                "value": 1547061,
                "color": "#de4c4f"
            }, {
                "code": "GY",
                "name": "Guyana",
                "value": 756040,
                "color": "#86a965"
            }, {
                "code": "HT",
                "name": "Haiti",
                "value": 10123787,
                "color": "#a7a737"
            }, {
                "code": "HN",
                "name": "Honduras",
                "value": 7754687,
                "color": "#a7a737"
            }, {
                "code": "HK",
                "name": "Hong Kong, China",
                "value": 7122187,
                "color": "#eea638"
            }, {
                "code": "HU",
                "name": "Hungary",
                "value": 9966116,
                "color": "#d8854f"
            }, {
                "code": "IS",
                "name": "Iceland",
                "value": 324366,
                "color": "#d8854f"
            }, {
                "code": "IN",
                "name": "India",
                "value": 1241491960,
                "color": "#eea638"
            }, {
                "code": "ID",
                "name": "Indonesia",
                "value": 242325638,
                "color": "#eea638"
            }, {
                "code": "IR",
                "name": "Iran",
                "value": 74798599,
                "color": "#eea638"
            }, {
                "code": "IQ",
                "name": "Iraq",
                "value": 32664942,
                "color": "#eea638"
            }, {
                "code": "IE",
                "name": "Ireland",
                "value": 4525802,
                "color": "#d8854f"
            }, {
                "code": "IL",
                "name": "Israel",
                "value": 7562194,
                "color": "#eea638"
            }, {
                "code": "IT",
                "name": "Italy",
                "value": 60788694,
                "color": "#d8854f"
            }, {
                "code": "JM",
                "name": "Jamaica",
                "value": 2751273,
                "color": "#a7a737"
            }, {
                "code": "JP",
                "name": "Japan",
                "value": 126497241,
                "color": "#eea638"
            }, {
                "code": "JO",
                "name": "Jordan",
                "value": 6330169,
                "color": "#eea638"
            }, {
                "code": "KZ",
                "name": "Kazakhstan",
                "value": 16206750,
                "color": "#eea638"
            }, {
                "code": "KE",
                "name": "Kenya",
                "value": 41609728,
                "color": "#de4c4f"
            }, {
                "code": "KP",
                "name": "Korea, Dem. Rep.",
                "value": 24451285,
                "color": "#eea638"
            }, {
                "code": "KR",
                "name": "Korea, Rep.",
                "value": 48391343,
                "color": "#eea638"
            }, {
                "code": "KW",
                "name": "Kuwait",
                "value": 2818042,
                "color": "#eea638"
            }, {
                "code": "KG",
                "name": "Kyrgyzstan",
                "value": 5392580,
                "color": "#eea638"
            }, {
                "code": "LA",
                "name": "Laos",
                "value": 6288037,
                "color": "#eea638"
            }, {
                "code": "LV",
                "name": "Latvia",
                "value": 2243142,
                "color": "#d8854f"
            }, {
                "code": "LB",
                "name": "Lebanon",
                "value": 4259405,
                "color": "#eea638"
            }, {
                "code": "LS",
                "name": "Lesotho",
                "value": 2193843,
                "color": "#de4c4f"
            }, {
                "code": "LR",
                "name": "Liberia",
                "value": 4128572,
                "color": "#de4c4f"
            }, {
                "code": "LY",
                "name": "Libya",
                "value": 6422772,
                "color": "#de4c4f"
            }, {
                "code": "LT",
                "name": "Lithuania",
                "value": 3307481,
                "color": "#d8854f"
            }, {
                "code": "LU",
                "name": "Luxembourg",
                "value": 515941,
                "color": "#d8854f"
            }, {
                "code": "MK",
                "name": "Macedonia, FYR",
                "value": 2063893,
                "color": "#d8854f"
            }, {
                "code": "MG",
                "name": "Madagascar",
                "value": 21315135,
                "color": "#de4c4f"
            }, {
                "code": "MW",
                "name": "Malawi",
                "value": 15380888,
                "color": "#de4c4f"
            }, {
                "code": "MY",
                "name": "Malaysia",
                "value": 28859154,
                "color": "#eea638"
            }, {
                "code": "ML",
                "name": "Mali",
                "value": 15839538,
                "color": "#de4c4f"
            }, {
                "code": "MR",
                "name": "Mauritania",
                "value": 3541540,
                "color": "#de4c4f"
            }, {
                "code": "MU",
                "name": "Mauritius",
                "value": 1306593,
                "color": "#de4c4f"
            }, {
                "code": "MX",
                "name": "Mexico",
                "value": 114793341,
                "color": "#a7a737"
            }, {
                "code": "MD",
                "name": "Moldova",
                "value": 3544864,
                "color": "#d8854f"
            }, {
                "code": "MN",
                "name": "Mongolia",
                "value": 2800114,
                "color": "#eea638"
            }, {
                "code": "ME",
                "name": "Montenegro",
                "value": 632261,
                "color": "#d8854f"
            }, {
                "code": "MA",
                "name": "Morocco",
                "value": 32272974,
                "color": "#de4c4f"
            }, {
                "code": "MZ",
                "name": "Mozambique",
                "value": 23929708,
                "color": "#de4c4f"
            }, {
                "code": "MM",
                "name": "Myanmar",
                "value": 48336763,
                "color": "#eea638"
            }, {
                "code": "NA",
                "name": "Namibia",
                "value": 2324004,
                "color": "#de4c4f"
            }, {
                "code": "NP",
                "name": "Nepal",
                "value": 30485798,
                "color": "#eea638"
            }, {
                "code": "NL",
                "name": "Netherlands",
                "value": 16664746,
                "color": "#d8854f"
            }, {
                "code": "NZ",
                "name": "New Zealand",
                "value": 4414509,
                "color": "#8aabb0"
            }, {
                "code": "NI",
                "name": "Nicaragua",
                "value": 5869859,
                "color": "#a7a737"
            }, {
                "code": "NE",
                "name": "Niger",
                "value": 16068994,
                "color": "#de4c4f"
            }, {
                "code": "NG",
                "name": "Nigeria",
                "value": 162470737,
                "color": "#de4c4f"
            }, {
                "code": "NO",
                "name": "Norway",
                "value": 4924848,
                "color": "#d8854f"
            }, {
                "code": "OM",
                "name": "Oman",
                "value": 2846145,
                "color": "#eea638"
            }, {
                "code": "PK",
                "name": "Pakistan",
                "value": 176745364,
                "color": "#eea638"
            }, {
                "code": "PA",
                "name": "Panama",
                "value": 3571185,
                "color": "#a7a737"
            }, {
                "code": "PG",
                "name": "Papua New Guinea",
                "value": 7013829,
                "color": "#8aabb0"
            }, {
                "code": "PY",
                "name": "Paraguay",
                "value": 6568290,
                "color": "#86a965"
            }, {
                "code": "PE",
                "name": "Peru",
                "value": 29399817,
                "color": "#86a965"
            }, {
                "code": "PH",
                "name": "Philippines",
                "value": 94852030,
                "color": "#eea638"
            }, {
                "code": "PL",
                "name": "Poland",
                "value": 38298949,
                "color": "#d8854f"
            }, {
                "code": "PT",
                "name": "Portugal",
                "value": 10689663,
                "color": "#d8854f"
            }, {
                "code": "PR",
                "name": "Puerto Rico",
                "value": 3745526,
                "color": "#a7a737"
            }, {
                "code": "QA",
                "name": "Qatar",
                "value": 1870041,
                "color": "#eea638"
            }, {
                "code": "RO",
                "name": "Romania",
                "value": 21436495,
                "color": "#d8854f"
            }, {
                "code": "RU",
                "name": "Russia",
                "value": 142835555,
                "color": "#d8854f"
            }, {
                "code": "RW",
                "name": "Rwanda",
                "value": 10942950,
                "color": "#de4c4f"
            }, {
                "code": "SA",
                "name": "Saudi Arabia",
                "value": 28082541,
                "color": "#eea638"
            }, {
                "code": "SN",
                "name": "Senegal",
                "value": 12767556,
                "color": "#de4c4f"
            }, {
                "code": "RS",
                "name": "Serbia",
                "value": 9853969,
                "color": "#d8854f"
            }, {
                "code": "SL",
                "name": "Sierra Leone",
                "value": 5997486,
                "color": "#de4c4f"
            }, {
                "code": "SG",
                "name": "Singapore",
                "value": 5187933,
                "color": "#eea638"
            }, {
                "code": "SK",
                "name": "Slovak Republic",
                "value": 5471502,
                "color": "#d8854f"
            }, {
                "code": "SI",
                "name": "Slovenia",
                "value": 2035012,
                "color": "#d8854f"
            }, {
                "code": "SB",
                "name": "Solomon Islands",
                "value": 552267,
                "color": "#8aabb0"
            }, {
                "code": "SO",
                "name": "Somalia",
                "value": 9556873,
                "color": "#de4c4f"
            }, {
                "code": "ZA",
                "name": "South Africa",
                "value": 50459978,
                "color": "#de4c4f"
            }, {
                "code": "ES",
                "name": "Spain",
                "value": 46454895,
                "color": "#d8854f"
            }, {
                "code": "LK",
                "name": "Sri Lanka",
                "value": 21045394,
                "color": "#eea638"
            }, {
                "code": "SD",
                "name": "Sudan",
                "value": 34735288,
                "color": "#de4c4f"
            }, {
                "code": "SR",
                "name": "Suriname",
                "value": 529419,
                "color": "#86a965"
            }, {
                "code": "SZ",
                "name": "Swaziland",
                "value": 1203330,
                "color": "#de4c4f"
            }, {
                "code": "SE",
                "name": "Sweden",
                "value": 9440747,
                "color": "#d8854f"
            }, {
                "code": "CH",
                "name": "Switzerland",
                "value": 7701690,
                "color": "#d8854f"
            }, {
                "code": "SY",
                "name": "Syria",
                "value": 20766037,
                "color": "#eea638"
            }, {
                "code": "TW",
                "name": "Taiwan",
                "value": 23072000,
                "color": "#eea638"
            }, {
                "code": "TJ",
                "name": "Tajikistan",
                "value": 6976958,
                "color": "#eea638"
            }, {
                "code": "TZ",
                "name": "Tanzania",
                "value": 46218486,
                "color": "#de4c4f"
            }, {
                "code": "TH",
                "name": "Thailand",
                "value": 69518555,
                "color": "#eea638"
            }, {
                "code": "TG",
                "name": "Togo",
                "value": 6154813,
                "color": "#de4c4f"
            }, {
                "code": "TT",
                "name": "Trinidad and Tobago",
                "value": 1346350,
                "color": "#a7a737"
            }, {
                "code": "TN",
                "name": "Tunisia",
                "value": 10594057,
                "color": "#de4c4f"
            }, {
                "code": "TR",
                "name": "Turkey",
                "value": 73639596,
                "color": "#d8854f"
            }, {
                "code": "TM",
                "name": "Turkmenistan",
                "value": 5105301,
                "color": "#eea638"
            }, {
                "code": "UG",
                "name": "Uganda",
                "value": 34509205,
                "color": "#de4c4f"
            }, {
                "code": "UA",
                "name": "Ukraine",
                "value": 45190180,
                "color": "#d8854f"
            }, {
                "code": "AE",
                "name": "United Arab Emirates",
                "value": 7890924,
                "color": "#eea638"
            }, {
                "code": "GB",
                "name": "United Kingdom",
                "value": 62417431,
                "color": "#d8854f"
            }, {
                "code": "US",
                "name": "United States",
                "value": 313085380,
                "color": "#a7a737"
            }, {
                "code": "UY",
                "name": "Uruguay",
                "value": 3380008,
                "color": "#86a965"
            }, {
                "code": "UZ",
                "name": "Uzbekistan",
                "value": 27760267,
                "color": "#eea638"
            }, {
                "code": "VE",
                "name": "Venezuela",
                "value": 29436891,
                "color": "#86a965"
            }, {
                "code": "PS",
                "name": "West Bank and Gaza",
                "value": 4152369,
                "color": "#eea638"
            }, {
                "code": "VN",
                "name": "Vietnam",
                "value": 88791996,
                "color": "#eea638"
            }, {
                "code": "YE",
                "name": "Yemen, Rep.",
                "value": 24799880,
                "color": "#eea638"
            }, {
                "code": "ZM",
                "name": "Zambia",
                "value": 13474959,
                "color": "#de4c4f"
            }, {
                "code": "ZW",
                "name": "Zimbabwe",
                "value": 12754378,
                "color": "#de4c4f"
            }];


            var map;
            var minBulletSize = 3;
            var maxBulletSize = 70;
            var min = Infinity;
            var max = -Infinity;


            // get min and max values
            for (var i = 0; i < mapData.length; i++) {
                var value = mapData[i].value;
                if (value < min) {
                    min = value;
                }
                if (value > max) {
                    max = value;
                }
            }

            // build map
            AmCharts.ready(function() {
                AmCharts.theme = AmCharts.themes.dark;
                map = new AmCharts.AmMap();
                map.pathToImages = App.getGlobalPluginsPath() + "amcharts/ammap/images/",

                    map.fontFamily = 'Open Sans';
                map.fontSize = '13';
                map.color = '#888';

                map.addTitle("Population of the World in 2011", 14);
                map.addTitle("source: Gapminder", 11);
                map.areasSettings = {
                    unlistedAreasColor: "#000000",
                    unlistedAreasAlpha: 0.1
                };
                map.imagesSettings.balloonText = "<span style='font-size:14px;'><b>[[title]]</b>: [[value]]</span>";

                var dataProvider = {
                    mapVar: AmCharts.maps.worldLow,
                    images: []
                }

                // create circle for each country
                for (var i = 0; i < mapData.length; i++) {
                    var dataItem = mapData[i];
                    var value = dataItem.value;
                    // calculate size of a bubble
                    var size = (value - min) / (max - min) * (maxBulletSize - minBulletSize) + minBulletSize;
                    if (size < minBulletSize) {
                        size = minBulletSize;
                    }
                    var id = dataItem.code;

                    dataProvider.images.push({
                        type: "circle",
                        width: size,
                        height: size,
                        color: dataItem.color,
                        longitude: latlong[id].longitude,
                        latitude: latlong[id].latitude,
                        title: dataItem.name,
                        value: value
                    });
                }

                map.dataProvider = dataProvider;

                map.write("chart_10");
            });

            $('#chart_10').closest('.portlet').find('.fullscreen').click(function() {
                map.invalidateSize();
            });
        }

        var initChartSample11 = function() {
            // svg path for target icon
            var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";
            // svg path for plane icon
            var planeSVG = "M19.671,8.11l-2.777,2.777l-3.837-0.861c0.362-0.505,0.916-1.683,0.464-2.135c-0.518-0.517-1.979,0.278-2.305,0.604l-0.913,0.913L7.614,8.804l-2.021,2.021l2.232,1.061l-0.082,0.082l1.701,1.701l0.688-0.687l3.164,1.504L9.571,18.21H6.413l-1.137,1.138l3.6,0.948l1.83,1.83l0.947,3.598l1.137-1.137V21.43l3.725-3.725l1.504,3.164l-0.687,0.687l1.702,1.701l0.081-0.081l1.062,2.231l2.02-2.02l-0.604-2.689l0.912-0.912c0.326-0.326,1.121-1.789,0.604-2.306c-0.452-0.452-1.63,0.101-2.135,0.464l-0.861-3.838l2.777-2.777c0.947-0.947,3.599-4.862,2.62-5.839C24.533,4.512,20.618,7.163,19.671,8.11z";

            var map = AmCharts.makeChart("chart_11", {
                type: "map",
                "theme": "light",
                pathToImages: App.getGlobalPluginsPath() + "amcharts/ammap/images/",

                "fontFamily": 'Open Sans',

                "color":    '#888',

                dataProvider: {
                    map: "worldLow",
                    linkToObject: "london",
                    images: [{
                        id: "london",
                        color: "#000000",
                        svgPath: targetSVG,
                        title: "London",
                        latitude: 51.5002,
                        longitude: -0.1262,
                        scale: 1.5,
                        zoomLevel: 2.74,
                        zoomLongitude: -20.1341,
                        zoomLatitude: 49.1712,

                        lines: [{
                            latitudes: [51.5002, 50.4422],
                            longitudes: [-0.1262, 30.5367]
                        }, {
                            latitudes: [51.5002, 46.9480],
                            longitudes: [-0.1262, 7.4481]
                        }, {
                            latitudes: [51.5002, 59.3328],
                            longitudes: [-0.1262, 18.0645]
                        }, {
                            latitudes: [51.5002, 40.4167],
                            longitudes: [-0.1262, -3.7033]
                        }, {
                            latitudes: [51.5002, 46.0514],
                            longitudes: [-0.1262, 14.5060]
                        }, {
                            latitudes: [51.5002, 48.2116],
                            longitudes: [-0.1262, 17.1547]
                        }, {
                            latitudes: [51.5002, 44.8048],
                            longitudes: [-0.1262, 20.4781]
                        }, {
                            latitudes: [51.5002, 55.7558],
                            longitudes: [-0.1262, 37.6176]
                        }, {
                            latitudes: [51.5002, 38.7072],
                            longitudes: [-0.1262, -9.1355]
                        }, {
                            latitudes: [51.5002, 54.6896],
                            longitudes: [-0.1262, 25.2799]
                        }, {
                            latitudes: [51.5002, 64.1353],
                            longitudes: [-0.1262, -21.8952]
                        }, {
                            latitudes: [51.5002, 40.4300],
                            longitudes: [-0.1262, -74.0000]
                        }],

                        images: [{
                            label: "Flights from London",
                            svgPath: planeSVG,
                            left: 100,
                            top: 45,
                            labelShiftY: 5,
                            color: "#CC0000",
                            labelColor: "#CC0000",
                            labelRollOverColor: "#CC0000",
                            labelFontSize: 20
                        }, {
                            label: "show flights from Vilnius",
                            left: 106,
                            top: 70,
                            labelColor: "#000000",
                            labelRollOverColor: "#CC0000",
                            labelFontSize: 11,
                            linkToObject: "vilnius"
                        }]
                    },

                        {
                            id: "vilnius",
                            color: "#000000",
                            svgPath: targetSVG,
                            title: "Vilnius",
                            latitude: 54.6896,
                            longitude: 25.2799,
                            scale: 1.5,
                            zoomLevel: 4.92,
                            zoomLongitude: 15.4492,
                            zoomLatitude: 50.2631,

                            lines: [{
                                latitudes: [54.6896, 50.8371],
                                longitudes: [25.2799, 4.3676]
                            }, {
                                latitudes: [54.6896, 59.9138],
                                longitudes: [25.2799, 10.7387]
                            }, {
                                latitudes: [54.6896, 40.4167],
                                longitudes: [25.2799, -3.7033]
                            }, {
                                latitudes: [54.6896, 50.0878],
                                longitudes: [25.2799, 14.4205]
                            }, {
                                latitudes: [54.6896, 48.2116],
                                longitudes: [25.2799, 17.1547]
                            }, {
                                latitudes: [54.6896, 44.8048],
                                longitudes: [25.2799, 20.4781]
                            }, {
                                latitudes: [54.6896, 55.7558],
                                longitudes: [25.2799, 37.6176]
                            }, {
                                latitudes: [54.6896, 37.9792],
                                longitudes: [25.2799, 23.7166]
                            }, {
                                latitudes: [54.6896, 54.6896],
                                longitudes: [25.2799, 25.2799]
                            }, {
                                latitudes: [54.6896, 51.5002],
                                longitudes: [25.2799, -0.1262]
                            }, {
                                latitudes: [54.6896, 53.3441],
                                longitudes: [25.2799, -6.2675]
                            }],

                            images: [{
                                label: "Flights from Vilnius",
                                svgPath: planeSVG,
                                left: 100,
                                top: 45,
                                labelShiftY: 5,
                                color: "#CC0000",
                                labelColor: "#CC0000",
                                labelRollOverColor: "#CC0000",
                                labelFontSize: 20
                            }, {
                                label: "show flights from London",
                                left: 106,
                                top: 70,
                                labelColor: "#000000",
                                labelRollOverColor: "#CC0000",
                                labelFontSize: 11,
                                linkToObject: "london"
                            }]
                        }, {
                            svgPath: targetSVG,
                            title: "Brussels",
                            latitude: 50.8371,
                            longitude: 4.3676
                        }, {
                            svgPath: targetSVG,
                            title: "Prague",
                            latitude: 50.0878,
                            longitude: 14.4205
                        }, {
                            svgPath: targetSVG,
                            title: "Athens",
                            latitude: 37.9792,
                            longitude: 23.7166
                        }, {
                            svgPath: targetSVG,
                            title: "Reykjavik",
                            latitude: 64.1353,
                            longitude: -21.8952
                        }, {
                            svgPath: targetSVG,
                            title: "Dublin",
                            latitude: 53.3441,
                            longitude: -6.2675
                        }, {
                            svgPath: targetSVG,
                            title: "Oslo",
                            latitude: 59.9138,
                            longitude: 10.7387
                        }, {
                            svgPath: targetSVG,
                            title: "Lisbon",
                            latitude: 38.7072,
                            longitude: -9.1355
                        }, {
                            svgPath: targetSVG,
                            title: "Moscow",
                            latitude: 55.7558,
                            longitude: 37.6176
                        }, {
                            svgPath: targetSVG,
                            title: "Belgrade",
                            latitude: 44.8048,
                            longitude: 20.4781
                        }, {
                            svgPath: targetSVG,
                            title: "Bratislava",
                            latitude: 48.2116,
                            longitude: 17.1547
                        }, {
                            svgPath: targetSVG,
                            title: "Ljubljana",
                            latitude: 46.0514,
                            longitude: 14.5060
                        }, {
                            svgPath: targetSVG,
                            title: "Madrid",
                            latitude: 40.4167,
                            longitude: -3.7033
                        }, {
                            svgPath: targetSVG,
                            title: "Stockholm",
                            latitude: 59.3328,
                            longitude: 18.0645
                        }, {
                            svgPath: targetSVG,
                            title: "Bern",
                            latitude: 46.9480,
                            longitude: 7.4481
                        }, {
                            svgPath: targetSVG,
                            title: "Kiev",
                            latitude: 50.4422,
                            longitude: 30.5367
                        }, {
                            svgPath: targetSVG,
                            title: "Paris",
                            latitude: 48.8567,
                            longitude: 2.3510
                        }, {
                            svgPath: targetSVG,
                            title: "New York",
                            latitude: 40.43,
                            longitude: -74
                        }
                    ]
                },

                areasSettings: {
                    unlistedAreasColor: "#FFCC00"
                },

                imagesSettings: {
                    color: "#CC0000",
                    rollOverColor: "#CC0000",
                    selectedColor: "#000000"
                },

                linesSettings: {
                    color: "#CC0000",
                    alpha: 0.4
                },


                backgroundZoomsToTop: true,
                linesAboveImages: true
            });

            $('#chart_11').closest('.portlet').find('.fullscreen').click(function() {
                map.invalidateSize();
            });
        }

        var initChartSample12 = function() {
            var chartData = [];
            generateChartData();

            function generateChartData() {
                var firstDate = new Date(2012, 0, 1);
                firstDate.setDate(firstDate.getDate() - 500);
                firstDate.setHours(0, 0, 0, 0);

                for (var i = 0; i < 500; i++) {
                    var newDate = new Date(firstDate);
                    newDate.setDate(newDate.getDate() + i);

                    var a = Math.round(Math.random() * (40 + i)) + 100 + i;
                    var b = Math.round(Math.random() * 100000000);

                    chartData.push({
                        date: newDate,
                        value: a,
                        volume: b
                    });
                }
            }

            var chart = AmCharts.makeChart("chart_12", {
                type: "stock",
                "theme": "light",
                pathToImages: App.getGlobalPluginsPath() + "amcharts/amcharts/images/",
                "fontFamily": 'Open Sans',

                "color":    '#888',
                dataSets: [{
                    color: "#b0de09",
                    fieldMappings: [{
                        fromField: "value",
                        toField: "value"
                    }, {
                        fromField: "volume",
                        toField: "volume"
                    }],
                    dataProvider: chartData,
                    categoryField: "date",
                    // EVENTS
                    stockEvents: [{
                        date: new Date(2010, 8, 19),
                        type: "sign",
                        backgroundColor: "#85CDE6",
                        graph: "g1",
                        text: "S",
                        description: "This is description of an event"
                    }, {
                        date: new Date(2010, 10, 19),
                        type: "flag",
                        backgroundColor: "#FFFFFF",
                        backgroundAlpha: 0.5,
                        graph: "g1",
                        text: "F",
                        description: "Some longerntext can alson be added"
                    }, {
                        date: new Date(2010, 11, 10),
                        showOnAxis: true,
                        backgroundColor: "#85CDE6",
                        type: "pin",
                        text: "X",
                        graph: "g1",
                        description: "This is description of an event"
                    }, {
                        date: new Date(2010, 11, 26),
                        showOnAxis: true,
                        backgroundColor: "#85CDE6",
                        type: "pin",
                        text: "Z",
                        graph: "g1",
                        description: "This is description of an event"
                    }, {
                        date: new Date(2011, 0, 3),
                        type: "sign",
                        backgroundColor: "#85CDE6",
                        graph: "g1",
                        text: "U",
                        description: "This is description of an event"
                    }, {
                        date: new Date(2011, 1, 6),
                        type: "sign",
                        graph: "g1",
                        text: "D",
                        description: "This is description of an event"
                    }, {
                        date: new Date(2011, 3, 5),
                        type: "sign",
                        graph: "g1",
                        text: "L",
                        description: "This is description of an event"
                    }, {
                        date: new Date(2011, 3, 5),
                        type: "sign",
                        graph: "g1",
                        text: "R",
                        description: "This is description of an event"
                    }, {
                        date: new Date(2011, 5, 15),
                        type: "arrowUp",
                        backgroundColor: "#00CC00",
                        graph: "g1",
                        description: "This is description of an event"
                    }, {
                        date: new Date(2011, 6, 25),
                        type: "arrowDown",
                        backgroundColor: "#CC0000",
                        graph: "g1",
                        description: "This is description of an event"
                    }, {
                        date: new Date(2011, 8, 1),
                        type: "text",
                        graph: "g1",
                        text: "Longer text can\nalso be displayed",
                        description: "This is description of an event"
                    }]
                }],


                panels: [{
                    title: "Value",
                    percentHeight: 70,

                    stockGraphs: [{
                        id: "g1",
                        valueField: "value"
                    }],

                    stockLegend: {
                        valueTextRegular: " ",
                        markerType: "none"
                    }
                }],

                chartScrollbarSettings: {
                    graph: "g1"
                },

                chartCursorSettings: {
                    valueBalloonsEnabled: true,
                    graphBulletSize: 1,
                    valueLineBalloonEnabled:true,
                    valueLineEnabled:true,
                    valueLineAlpha:0.5
                },

                periodSelector: {
                    periods: [{
                        period: "DD",
                        count: 10,
                        label: "10 days"
                    }, {
                        period: "MM",
                        count: 1,
                        label: "1 month"
                    }, {
                        period: "YYYY",
                        count: 1,
                        label: "1 year"
                    }, {
                        period: "YTD",
                        label: "YTD"
                    }, {
                        period: "MAX",
                        label: "MAX"
                    }]
                },

                panelsSettings: {
                    usePrefixes: true
                }
            });

            $('#chart_12').closest('.portlet').find('.fullscreen').click(function() {
                chart.invalidateSize();
            });
        }

        return {
            //main function to initiate the module

            init: function() {

                initChartSample1();
                initChartSample2();
                initChartSample3();
                initChartSample4();
                initChartSample5();
                initChartSample6();
                initChartSample69();
                initChartSample7();
                initChartSample8();
                initChartSample9();
                initChartSample10();
                initChartSample11();
                initChartSample12();
            }

        };

    }();

    jQuery(document).ready(function() {
        ChartsAmcharts.init();
    });
</script>


</body>

</html>