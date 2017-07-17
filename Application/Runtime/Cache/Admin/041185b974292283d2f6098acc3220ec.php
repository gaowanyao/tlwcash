<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>登录-魔币众筹平台</title>

    <meta name="keywords" content="众筹,众筹平台,区块链,比特币,股权众筹,众筹网">
    <meta name="description" content="魔币众筹平台作为首家专注于数字货币众筹、区块链领域的创业众筹融资平台,提供ICO项目,众筹资讯,数据分析等服务,协助您实现自己的创业梦想。">



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
    <link href="/Public/resource/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/resource/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/Public/resource/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/Public/resource/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/Public/resource/pages/css/login.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="index.html">
        <img src="/Public/resource/pages/img/logo-big.png" alt="" /> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form"  style="<?php if($register == 'on'){ echo 'display:none';}?>" action="index.php?&m=admin&a=login_msg" method="post">
        <h3 class="form-title font-green">登录-魔币众筹平台</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert" style="margin-top:5px;"></button>
            <span> 请输入用户名和密码 </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">用户名</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="用户名" name="username" />
        </div>





        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">密码</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="密码" name="password" />
        </div>
        <div class="form-actions">
            <button type="submit" class="btn green uppercase">登录</button>

            <label class="rememberme check mt-checkbox mt-checkbox-outline">
                <input type="checkbox" name="remember" value="1" />记住密码
                <span></span>
            </label>
            <!--<a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>-->
        </div>


        <!--<div class="login-options">-->
            <!--<h4>Or login with</h4>-->
            <!--<ul class="social-icons">-->
                <!--<li>-->
                    <!--<a class="social-icon-color facebook" data-original-title="facebook" href="javascript:;"></a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a class="social-icon-color twitter" data-original-title="Twitter" href="javascript:;"></a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a class="social-icon-color googleplus" data-original-title="Goole Plus" href="javascript:;"></a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a class="social-icon-color linkedin" data-original-title="Linkedin" href="javascript:;"></a>-->
                <!--</li>-->
            <!--</ul>-->
        <!--</div>-->




        <div class="create-account"  id="register-btn">
            <p>
                <a  style="text-decoration: none;" class="uppercase">创建账户</a>
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="index.html" method="post">
        <h3 class="font-green">Forget Password ?</h3>
        <p> Enter your e-mail address below to reset your password. </p>
        <div class="form-group">
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
            <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <form class="register-form" style="<?php if($register == 'on'){ echo 'display:block';}?>" action="index.php?&m=admin&a=register_msg" method="post">
        <h3 class="font-green">注册-魔币众筹平台</h3>




        <p class="hint">请在下面输入您的帐户详细信息： </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">用户名</label>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="用户名" name="username" />
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">密码</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="密码" name="password" />
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">确认密码</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="确认密码" name="rpassword" />
        </div>


        <!--<div class="form-group margin-top-20 margin-bottom-20">-->
            <!--<label class="mt-checkbox mt-checkbox-outline">-->
                <!--<input type="checkbox" name="tnc" /> I agree to the-->
                <!--<a href="javascript:;">Terms of Service </a> &-->
                <!--<a href="javascript:;">Privacy Policy </a>-->
                <!--<span></span>-->
            <!--</label>-->
            <!--<div id="register_tnc_error"> </div>-->
        <!--</div>-->


        <div class="form-actions">
            <button type="button" id="register-back-btn" class="btn green btn-outline">返回</button>
            <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">提交</button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->
</div>
<div class="copyright"> 2017 © 魔币众筹平台 </div>
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


<script>


    var Login = function() {

        var handleLogin = function() {

            $('.login-form').validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules: {
                    username: {
                        required: true
                    },
                    password: {
                        required: true
                    },
                    remember: {
                        required: false
                    }
                },

                messages: {
                    username: {
                        required: "Username is required."
                    },
                    password: {
                        required: "Password is required."
                    }
                },

                invalidHandler: function(event, validator) { //display error alert on form submit
                    $('.alert-danger', $('.login-form')).show();
                },

                highlight: function(element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                success: function(label) {
                    label.closest('.form-group').removeClass('has-error');
                    label.remove();
                },

                errorPlacement: function(error, element) {
                    error.insertAfter(element.closest('.input-icon'));
                },

                submitHandler: function(form) {
                    form.submit(); // form validation success, call ajax form submit
                }
            });

            $('.login-form input').keypress(function(e) {
                if (e.which == 13) {
                    if ($('.login-form').validate().form()) {
                        $('.login-form').submit(); //form validation success, call ajax form submit
                    }
                    return false;
                }
            });
        }

        var handleForgetPassword = function() {
            $('.forget-form').validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                },

                messages: {
                    email: {
                        required: "Email is required."
                    }
                },

                invalidHandler: function(event, validator) { //display error alert on form submit

                },

                highlight: function(element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                success: function(label) {
                    label.closest('.form-group').removeClass('has-error');
                    label.remove();
                },

                errorPlacement: function(error, element) {
                    error.insertAfter(element.closest('.input-icon'));
                },

                submitHandler: function(form) {
                    form.submit();
                }
            });

            $('.forget-form input').keypress(function(e) {
                if (e.which == 13) {
                    if ($('.forget-form').validate().form()) {
                        $('.forget-form').submit();
                    }
                    return false;
                }
            });

            jQuery('#forget-password').click(function() {
                jQuery('.login-form').hide();
                jQuery('.forget-form').show();
            });

            jQuery('#back-btn').click(function() {
                jQuery('.login-form').show();
                jQuery('.forget-form').hide();
            });

        }

        var handleRegister = function() {

            function format(state) {
                if (!state.id) { return state.text; }
                var $state = $(
                    '<span><img src="../assets/global/img/flags/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
                );

                return $state;
            }

            if (jQuery().select2 && $('#country_list').size() > 0) {
                $("#country_list").select2({
                    placeholder: '<i class="fa fa-map-marker"></i>&nbsp;Select a Country',
                    templateResult: format,
                    templateSelection: format,
                    width: 'auto',
                    escapeMarkup: function(m) {
                        return m;
                    }
                });


                $('#country_list').change(function() {
                    $('.register-form').validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
                });
            }

            $('.register-form').validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {

                    fullname: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    address: {
                        required: true
                    },
                    city: {
                        required: true
                    },
                    country: {
                        required: true
                    },

                    username: {
                        required: true
                    },
                    password: {
                        required: true
                    },
                    rpassword: {
                        equalTo: "#register_password"
                    },

                    tnc: {
                        required: true
                    }
                },

                messages: { // custom messages for radio buttons and checkboxes
                    tnc: {
                        required: "Please accept TNC first."
                    }
                },

                invalidHandler: function(event, validator) { //display error alert on form submit

                },

                highlight: function(element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                success: function(label) {
                    label.closest('.form-group').removeClass('has-error');
                    label.remove();
                },

                errorPlacement: function(error, element) {
                    if (element.attr("name") == "tnc") { // insert checkbox errors after the container
                        error.insertAfter($('#register_tnc_error'));
                    } else if (element.closest('.input-icon').size() === 1) {
                        error.insertAfter(element.closest('.input-icon'));
                    } else {
                        error.insertAfter(element);
                    }
                },

                submitHandler: function(form) {
                    form[0].submit();
                }
            });

            $('.register-form input').keypress(function(e) {
                if (e.which == 13) {
                    if ($('.register-form').validate().form()) {
                        $('.register-form').submit();
                    }
                    return false;
                }
            });

            jQuery('#register-btn').click(function() {
                jQuery('.login-form').hide();
                jQuery('.register-form').show();
            });

            jQuery('#register-back-btn').click(function() {
                jQuery('.login-form').show();
                jQuery('.register-form').hide();
            });
        }

        return {
            //main function to initiate the module
            init: function() {

                handleLogin();
                handleForgetPassword();
                handleRegister();

            }

        };

    }();

    jQuery(document).ready(function() {
        Login.init();
    });




</script>


</body>

</html>