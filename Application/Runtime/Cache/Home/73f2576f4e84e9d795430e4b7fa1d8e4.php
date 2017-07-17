<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>登录-多宝金豆专注于区块链去中心化数字货币</title>
<meta name="keywords" content="登录,注册,多宝,金豆,多宝金豆,区块链,数字货币">
<meta name="description" content="多宝金豆作为逊和集团有效整合企业和社会中的各种形式积分的一种多功能性数字货币资产，让您的消费变理财，让消费者成为企业的股东，获赠企业利润分红，实现财富盛世。">

<link rel="stylesheet" href="/Public/wap/login/css/style.css">
<body>

<div class="login-container">
    <h1><a href="index.php"><img src="/Public/images/logo1.png" style="width: 200px;"></a></h1>
    <h1>会员登录</h1>

    <div class="connect">
        <p> 多宝金豆为投资人打造的一站式众筹交易服务平台</p>
    </div>

    <form action="index.php?a=login_msg" method="post" id="loginForm">
        <div>
            <input type="text" name="username" class="username" placeholder="用户名/手机号/邮箱" autocomplete="off"/>
        </div>
        <div>
            <input type="password" name="password" class="password" placeholder="密码" oncontextmenu="return false" onpaste="return false" />
        </div>
        <button id="submit" type="submit">登 录</button>
    </form>

    <a href="index.php?a=signup">
        <button type="button" class="register-tis">还没有账号？</button>
    </a>

    <div style="margin-top: 10px;font-size: 14px;">


        <span style="display: inline-block;position:relative;top:-5px;font-weight: 900;">快捷登录：</span>
        <a href="" style="text-decoration: none;display: inline-block;">
            <img src="/Public/wap/tubiao/weibo2.svg" style="width: 20px!important;height: 21px!important;" >&nbsp;
        </a>
        <a href="" style="text-decoration: none;">
             <img src="/Public/wap/tubiao/qq.svg" style="width: 20px!important;height: 21px!important;" >&nbsp;
        </a>

        <a href="" style="text-decoration: none;">
            <img src="/Public/wap/tubiao/wechat2.svg" style="width: 20px!important;height: 21px!important;" >&nbsp;
        </a>

        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        <a href="index.php?a=forget_pwd" style="text-decoration: none;color: red;font-weight: 900;">
            <span style="display: inline-block;position:relative;top:-5px;">忘记密码？</span>
        </a>

    </div>


</div>




</body>
<script src="http://www.jq22.com/jquery/1.11.1/jquery.min.js"></script>
<!--<script src="/Public/wap/login/js/common.js"></script>-->


<script>

    //打开字滑入效果
    window.onload = function(){
        $(".connect p").eq(0).animate({"left":"0%"}, 600);
        $(".connect p").eq(1).animate({"left":"0%"}, 400);
    };
    //jquery.validate表单验证
    $(document).ready(function(){
        //登陆表单验证
        $("#loginForm").validate({
            rules:{
                username:{
                    required:true,//必填
                    minlength:2, //最少6个字符
                    maxlength:30,//最多20个字符
                },
                password:{
                    required:true,
                    minlength:6,
                    maxlength:18,
                },
            },
            //错误信息提示
            messages:{
                username:{
                    required:"必须填写用户名",
                    minlength:"该字段至少为2个字符",
                    maxlength:"该字段至多为30个字符",
                    remote: "用户名已存在",
                },
                password:{
                    required:"必须填写密码",
                    minlength:"密码至少为6个字符",
                    maxlength:"密码至多为18个字符",
                },
            },

        });
        //注册表单验证
        $("#registerForm").validate({
            rules:{
                username:{
                    required:true,//必填
                    minlength:2, //最少6个字符
                    maxlength:12,//最多20个字符
//                    remote:{
//                        url:"http://kouss.com/demo/Sharelink/remote.json",//用户名重复检查，别跨域调用
//                        type:"post",
//                    },
                },
                password:{
                    required:true,
                    minlength:6,
                    maxlength:18,
                },
                email:{
                    required:true,
                    email:true,
                },
                confirm_password:{
                    required:true,
                    minlength:6,
                    equalTo:'.password'
                },
                phone_number:{
                    required:true,
                    phone_number:true,//自定义的规则
                    digits:true,//整数
                }
            },
            //错误信息提示
            messages:{
                username:{
                    required:"必须填写用户名",
                    minlength:"用户名至少为2个字符",
                    maxlength:"用户名至多为12个字符",
                    remote: "用户名已存在",
                },
                password:{
                    required:"必须填写密码",
                    minlength:"密码至少为6个字符",
                    maxlength:"密码至多为18个字符",
                },
                email:{
                    required:"请输入邮箱地址",
                    email: "请输入正确的email地址"
                },
                confirm_password:{
                    required: "请再次输入密码",
                    minlength: "确认密码不能少于6个字符",
                    equalTo: "两次输入密码不一致",//与另一个元素相同
                },
                phone_number:{
                    required:"请输入手机号码",
                    digits:"请输入正确的手机号码",
                },

            },
        });
        //添加自定义验证规则
        jQuery.validator.addMethod("phone_number", function(value, element) {
            var length = value.length;
//            var phone_number = /^(((13[0-9]{1})|(15[0-9]{1}))+\d{8})$/

            var phone_number = /^[1][3-8]\d{9}$|^([6|9])\d{7}$|^[0][9]\d{8}$|^[6]([8|6])\d{5}$/;
            return this.optional(element) || (length == 11 && phone_number.test(value));
        }, "手机号码格式错误");
    });



</script>


<!--背景图片自动更换-->
<script src="/Public/wap/login/js/supersized.3.2.7.min.js"></script>
<!--<script src="/Public/wap/login/js/supersized-init.js"></script>-->


<script>


    jQuery(function($){

        $.supersized({

            // 功能
            slide_interval     : 4000,    // 转换之间的长度
            transition         : 1,    // 0 - 无，1 - 淡入淡出，2 - 滑动顶，3 - 滑动向右，4 - 滑底，5 - 滑块向左，6 - 旋转木马右键，7 - 左旋转木马
            transition_speed   : 1000,    // 转型速度
            performance        : 1,    // 0 - 正常，1 - 混合速度/质量，2 - 更优的图像质量，三优的转换速度//（仅适用于火狐/ IE浏览器，而不是Webkit的）

            // 大小和位置
            min_width          : 0,    // 最小允许宽度（以像素为单位）
            min_height         : 0,    // 最小允许高度（以像素为单位）
            vertical_center    : 1,    // 垂直居中背景
            horizontal_center  : 1,    // 水平中心的背景
            fit_always         : 0,    // 图像绝不会超过浏览器的宽度或高度（忽略分钟。尺寸）
            fit_portrait       : 1,    // 纵向图像将不超过浏览器高度
            fit_landscape      : 0,    // 景观的图像将不超过宽度的浏览器

            // 组件
            slide_links        : 'blank',    // 个别环节为每张幻灯片（选项：假的，'民'，'名'，'空'）
            slides             : [    // 幻灯片影像
//                {image : '/Public/wap/placeholders/intro-slide01.jpg'},
//                {image : '/Public/wap/placeholders/intro-slide02.jpg'},
//                {image : '/Public/wap/placeholders/intro-slide03.jpg'},
//                {image : '/Public/wap/placeholders/intro-slide04.jpg'},
                {image : '/Public/wap/login/images/1.jpg'},
                {image : '/Public/wap/login/images/2.jpg'},
//                {image : '/Public/wap/login/images/3.jpg'}
            ]

        });

    });


</script>


<!--表单验证-->
<script src="/Public/wap/login/js/jquery.validate.min.js?var1.14.0"></script>
</html>