<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
    <link id="theme-style" rel="stylesheet" href="/Public/assets//css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--&lt;!&ndash;[if lt IE 9]>-->
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--<![endif]&ndash;&gt;-->




    <!--[if lt IE 9]><script src="/Public/static/js/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="/Public/static/js/respond.js"></script><![endif]-->


    <link rel="stylesheet" type="text/css" href="<?php echo C('home_css') ?>/tipDialog.css"/>
    <script type="text/javascript" src="<?php echo C('home_js') ?>/tipDialog.js"></script>



</head>

<body class="signup-page access-page has-full-screen-bg">
<div class="upper-wrapper">
    <!-- ******HEADER****** -->
    <header class="header">
        <div class="container">
            <h1 class="logo">
                <img onclick="window.location.href='index.php';" style="width: 150px;line-height: 80px;vertical-align: middle;padding: 10px;" src="/Public/img/logo.png">

                <!--<a href="index.html"><span class="logo-icon"></span><span class="text">Velocity</span></a>-->
            </h1><!--//logo-->

        </div><!--//container-->
    </header><!--//header-->

    <!-- ******Signup Section****** -->
    <section class="signup-section access-section section">
        <div class="container">
            <div class="row">
                <div class="form-box col-md-offset-2 col-sm-offset-0 xs-offset-0 col-xs-12 col-md-8">
                    <div class="form-box-inner">
                        <h2 class="title text-center">
                            <!--Sign up now-->
                            账号注册
                        </h2>
                        <!--<p class="intro text-center">It only takes 3 minutes!</p>-->
                        <div class="row">
                            <div class="form-container col-xs-12 col-md-5">
                                <form class="signup-form">
                                    <div class="form-group email">
                                        <label class="sr-only" for="phone">手机号</label>
                                        <input id="phone" type="tel" class="form-control login-email" placeholder="手机号">
                                    </div><!--//form-group-->
                                    <div class="form-group password">
                                        <label class="sr-only" for="pwd">密码</label>
                                        <input id="pwd" type="password" class="form-control login-password" placeholder="密码">
                                    </div><!--//form-group-->

                                    <div class="form-group password">
                                        <label class="sr-only" for="verify">验证码</label>
                                        <!--<i class="fa fa-envelope-o"></i>-->
                                        <input id="verify" minlength="4" maxlength="4" style="width: 60%;float: left;"  type="text" class="form-control login-password" placeholder="短信验证码">
                                        <button id="verify_send" style="width: 80px;float: right;" type="button" class="btn btn-cta-primary btn-cta-primary" >立即发送</button>

                                        <br/>
                                        <br/>
                                    </div><!--//form-group-->

                                    <button style="clear: both;margin-top: 20px !important;" id="submit" type="button" class="btn btn-block btn-cta-primary">注册</button>



                                    <p class="note">
                                        <!--By signing up, you agree to our terms of services and privacy policy.-->
                                        通过注册，您同意我们的服务条款和隐私政策。
                                    </p>
                                    <p class="lead">
                                        <!--Already have an account?-->
                                        已有帐号
                                        <a class="login-link" id="login-link" href="index.php?a=signin">
                                            <!--Log in-->
                                            点击登录
                                        </a>
                                    </p>
                                </form>
                            </div><!--//form-container-->


                            <div class="social-btns col-md-offset-1 col-sm-offset-0 col-sm-offset-0 col-xs-12 col-md-5">
                                <div class="divider"><span>Or</span></div>
                                <ul class="list-unstyled social-login">
                                    <li><button class="twitter-btn btn" type="button"><i class="fa fa-qq"></i>Sign up with QQ</button></li>
                                    <li><button class="facebook-btn btn" type="button"><i class="fa fa-wechat"></i>Sign up with Wechat</button></li>
                                    <!--<li><button class="twitter-btn btn" type="button"><i class="fa fa-twitter"></i>Sign up with Twitter</button></li>-->
                                    <!--<li><button class="facebook-btn btn" type="button"><i class="fa fa-facebook"></i>Sign up with Facebook</button></li>-->
                                    <li><button class="github-btn btn" type="button"><i class="fa fa-github-alt"></i>Sign up with Github</button></li>
                                    <li><button class="google-btn btn" type="button"><i class="fa fa-google-plus"></i>Sign up with Google</button></li>
                                </ul>
                                <!--<p class="note">Don't worry, we won't post anything without your permission.</p>-->
                            </div><!--//social-login-->
                        </div><!--//row-->
                    </div><!--//form-box-inner-->
                </div><!--//form-box-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//signup-section-->
</div><!--//upper-wrapper-->

<!-- ******FOOTER****** -->

<!-- ******FOOTER****** -->
<!--<footer class="footer" style="background: #253340;">-->
    <footer class="footer" style="background: #304153 !important;">
    <div class="footer-content" >
        <div class="container">
            <div class="row">
                <div class="footer-col links col-md-2 col-sm-4 col-xs-12">
                    <div class="footer-col-inner">
                        <h3 class="title"  style="text-align: center;">


                            <img src="/Public/img/logo.png" >


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
<script type="text/javascript" src="/Public/assets//plugins/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="/Public/assets//plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/assets//plugins/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="/Public/assets//plugins/back-to-top.js"></script>
<script type="text/javascript" src="/Public/assets//plugins/jquery-placeholder/jquery.placeholder.js"></script>
<script type="text/javascript" src="/Public/assets//plugins/FitVids/jquery.fitvids.js"></script>
<script type="text/javascript" src="/Public/assets//plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/Public/assets//js/main.js"></script>



<script>



    $(document).ready(function () {

        $("#verify_send").click(function () {

            var phone = $("#phone").val();
            var pwd = $("#pwd").val();


            console.log(encodeURIComponent(phone));

            if(phone == ""){
                tipDialog("手机号不能为空！",'error','',1);
                return false;
            }

            if(pwd == ""){
                tipDialog("密码不能为空！",'error','',1);
                return false;
            }

            if(pwd.length < 6){
                tipDialog("密码长度为6-20位！",'error','',1);
                return false;
            }

            if(pwd.length > 20){
                tipDialog("密码长度为6-20位！",'error','',1);
                return false;
            }

            $.ajax({
                type:"POST",
                url:"index.php?a=ajaxSandPhone",
                data:{
                    phone:encodeURIComponent(phone)
                },
                success:function (data) {


                    if(data['status'] == 1){
                        tipDialog(data['info'],'ok','',1);
                        $("#verify_send").attr("disabled",true);
                    }else{
                        tipDialog(data['info'],'error','',1);
                        return false;
                    }

                    var second = 60;
                    var t = setInterval(function () {
                        $("#verify_send").html(second);
                        second--;
                        if(second == 0){
                            window.clearInterval(t);
                            $("#verify_send").attr("disabled",false);
                            $("#verify_send").html("立即发送");

                        }

                    },1000);

                }
            });



        });

        $("#submit").click(function () {
            var phone = $("#phone").val();
            var pwd = $("#pwd").val();
            var verify = $("#verify").val();


            console.log(encodeURIComponent(phone));

            if(phone == ""){
                tipDialog("手机号不能为空！",'error','',1);
                return false;
            }

            if(pwd == ""){
                tipDialog("密码不能为空！",'error','',1);
                return false;
            }



            if(pwd.length < 6){
                tipDialog("密码长度为6-20位！",'error','',1);
                return false;
            }

            if(pwd.length > 20){
                tipDialog("密码长度为6-20位！",'error','',1);
                return false;
            }

            if(verify == ""){
                tipDialog("验证码不能为空！",'error','',1);
                return false;
            }

            if(verify.length != 4){
                tipDialog("验证码长度为4！",'error','',1);
                return false;
            }

            $.ajax({
                type:"POST",
                url:"index.php?a=signupMsg",
                data:{
                    phone:encodeURIComponent(phone),
                    pwd:encodeURIComponent(pwd),
                    verify:encodeURIComponent(verify)
                },
                success:function (data) {

                    console.log(data);

                    if(data['status'] == 1){
                        tipDialog(data['info'],'ok','',1);

                        window.location.href='index.php?a=signin';

                    }else{
                        tipDialog(data['info'],'error','',1);
                    }



                }
            });

        });

    });
    


</script>


</body>
</html>