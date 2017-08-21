<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>User Account - Bootstrap Admin</title>
    <link rel="shortcut icon" href="/Public/img/ico.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <link href="/Public/mySpace/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/Public/mySpace/css/bootstrap-responsive.min.css" rel="stylesheet"/>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet"/>
    <link href="/Public/mySpace/css/font-awesome.css" rel="stylesheet"/>

    <link href="/Public/mySpace/css/adminia.css" rel="stylesheet"/>
    <link href="/Public/mySpace/css/adminia-responsive.css" rel="stylesheet"/>


    <link href="/Public/mySpace/css/pages/plans.css" rel="stylesheet"/>

    <link rel="stylesheet" href="/Public/assets/plugins/font-awesome/css/font-awesome.css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <link rel="stylesheet" type="text/css" href="/Public/modal/zeroModal.css" />



    <style>
        input {
            height: 25px;
        }
        .nav-tabs>li>a, .nav-pills>li>a{
            padding-left: 6px;
            padding-right: 6px;
        }
        div.controls{
            vertical-align: center;
        }
    </style>
</head>

<body>


<div class="navbar navbar-fixed-top" style="">

    <div class="navbar-inner" style="min-height: 60px!important; ">
        <!--<div class="navbar-inner" style="">-->

        <div class="container" >

            <a class="btn btn-navbar" style="margin-top: 17px;" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="brand" href="index.php">
                <img style="<?php if($pc == 'notpc'){ echo 'margin-left:10px;';} ?>width: 130px;margin-top:0px;vertical-align: middle;" src="/Public/images/logo.png">

                <!--用户中心-->
            </a>

            <div class="nav-collapse">

                <ul class="nav pull-right" style="margin-top: 10px;">
                    <!--<li>-->
                        <!--<a href="#"><span class="badge badge-warning">7</span></a>-->
                    <!--</li>-->

                    <li class="divider-vertical"></li>

                    <li class="dropdown"  style="text-align: center;">

                        <a data-toggle="dropdown" class="dropdown-toggle " href="#">
                            <?php echo $_SESSION['account']['phone']; ?><b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu" style="text-align: center;min-width: 50px!important;">
                            <li>
                                <a href="index.php?a=account"><i class="icon-user"></i><?php echo (L("_user_name")); ?></a>
                            </li>

                            <li>
                                <a href="index.php?a=account"><i class="icon-lock"></i><?php echo (L("_user_home_3")); ?></a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="index.php?a=logout"><i class="icon-off"></i> <?php echo (L("_sign_out")); ?></a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div> <!-- /nav-collapse -->

        </div> <!-- /container -->

    </div> <!-- /navbar-inner -->

</div> <!-- /navbar -->



<div id="content">

    <div class="container">
        <div class="row">
            <div class="span3">

    <div class="account-container">

        <div class="account-avatar">
            <!--<?php echo ($res['head_url']); ?>-->
            <!--<img id="headPic" src="/Public/mySpace/img/headshot.png" alt="" class="thumbnail" />-->
            <img id="headPic" src="<?php if($res['head_url']!=null) {echo $res['head_url'];}else{echo '/Public/mySpace/img/defaultPic.jpg';}?>" onerror="this.src='/Public/mySpace/img/defaultPic.jpg'" alt="" class="thumbnail" />
        </div> <!-- /account-avatar -->

        <div class="account-details">

            <span class="account-name"><?php echo $_SESSION['account']['user_name']; ?></span>

            <span class="account-role"><?php echo $_SESSION['account']['phone']; echo $_SESSION['account']['username']; ?></span>

            <!--<span class="account-actions">-->
							<!--<a href="javascript:;">Profile</a> |-->

							<!--<a href="javascript:;">Edit Settings</a>-->
						<!--</span>-->

        </div> <!-- /account-details -->

    </div> <!-- /account-container -->

    <hr />

    <ul id="main-nav" class="nav nav-tabs nav-stacked">


        <li class="active">
            <a href="index.php?a=account">
                <i class="icon-user"></i><?php echo (L("_user_name")); ?>
            </a>
        </li>
        <li>
        <a href="index.php">
        <i class="icon-home"></i><?php echo (L("_user_home")); ?>
        </a>
        </li>


        <!--<li>-->
            <!--<a href="index.php?a=account">-->
                <!--<i class="icon-home"></i>-->
                <!--ICO产品-->
            <!--</a>-->
        <!--</li>-->

        <!--<li>-->
            <!--<a href="index.php?a=account">-->
                <!--<i class="icon-pushpin"></i>-->
                <!--指数产品-->
            <!--</a>-->
        <!--</li>-->

        <!--<li>-->
            <!--<a href="index.php?a=account">-->
                <!--<i class="icon-th-list"></i>-->
                <!--理财产品-->
            <!--</a>-->
        <!--</li>-->

        <!--<li class="">-->
            <!--<a href="/Public/mySpace/grid.html">-->
                <!--<i class="icon-th-large"></i>-->
                <!--Grid Layout-->
                <!--<span class="label label-warning pull-right">5</span>-->
            <!--</a>-->
        <!--</li>-->

        <!--<li>-->
            <!--<a href="/Public/mySpace/charts.html">-->
                <!--<i class="icon-signal"></i>-->
                <!--Charts-->
            <!--</a>-->
        <!--</li>-->



        <!--<li>-->
            <!--<a href="/Public/mySpace/login.html">-->
                <!--<i class="icon-lock"></i>-->
                <!--Login-->
            <!--</a>-->
        <!--</li>-->

    </ul>



    <hr />

    <!--<div class="sidebar-extra">-->
        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>-->
    <!--</div> &lt;!&ndash; .sidebar-extra &ndash;&gt;-->

    <!--<br />-->

</div> <!-- /span3 -->

            <div class="span9">
                <h1 class="page-title">
                    <i class="icon-th-large"></i>
                    <?php echo (L("_user_name")); ?>
                </h1>
                <div class="row">

                    <div class="span9">

                        <div class="widget">

                            <div class="widget-header">
                                <h3><?php echo (L("_user_information")); ?></h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <div class="tabable" >
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#1" data-toggle="tab">  <?php echo (L("_user_data")); ?></a>
                                        </li>
                                        <li><a href="#2" data-toggle="tab"><?php echo (L("_user_home_1")); ?></a></li>
                                        <li><a href="#3" data-toggle="tab"><?php echo (L("_user_home_2")); ?></a></li>
                                        <li><a href="#4" data-toggle="tab"><?php echo (L("_user_home_3")); ?></a></li>
                                        <!--<li><a href="#4" data-toggle="tab">安全设置</a></li>-->
                                    </ul>

                                    <br/>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="1" >
                                            <form id="personalData" class="form-horizontal"/>
                                            <fieldset>
                                                <div class="control-group">
                                                    <label class="control-label" for="userName"><?php echo (L("_user_home_4")); ?></label>
                                                    <div class="controls">
                                                        <input type="text" class="input-medium disabled" id="userName" maxlength="10" minlength="4"
                                                               value=<?php echo ($res['user_name']); ?> />
                                                        <span id="userNameInfo"></span>
                                                        <p class="help-block" style="width: 160px"></p>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->

                                                <div class="control-group">
                                                    <label class="control-label" for="userPassword"><?php echo (L("_user_home_5")); ?></label>
                                                    <div class="controls">
                                                        <input type="password" class="input-medium" id="userPassword"
                                                               value="" placeholder="<?php echo (L("_user_home_10")); ?>"/> <span id="userPasswordInfo"></span>
                                                        <!--<p>密码由6-16位组成</p>-->
                                                        <p style="color: green;font-weight: bold"><?php echo (L("_user_home_pww1")); ?><span style="color: red ;font-size: 20px" id="passwordNum">10</span><?php echo (L("_user_home_pww2")); ?></p>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="control-group">
                                                    <label class="control-label" for="userEmail"><?php echo (L("_user_home_6")); ?></label>
                                                    <div class="controls">
                                                        <input type="email" class="input-medium" id="userEmail" value="<?php echo ($res['email']); ?>"/> <span id="userEmailInfo"></span>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->



                                                <div class="control-group">
                                                    <label class="control-label" for="userMobile"><?php echo (L("_user_home_7")); ?></label>
                                                    <div class="controls" style="vertical-align: middle">
                                                        <input disabled type="text" class="input-medium" id="userMobile"
                                                               value="<?php echo ($res['phone']); ?>"/><span id="userMobileInfo"></span>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <br/>
                                                <!--<div class="form-actions">-->
                                                <div class="form-actions">
                                                    <button disabled onclick="_success()" type="button" id="perData" class="btn btn-primary">
                                                        <?php echo (L("_user_home_8")); ?>
                                                    </button>
                                                    <!--<button style="<?php if($pc!='pc') echo'float: right';?>" type="button" id="perDataCancel" class="btn">取消</button>-->
                                                    <button  type="button" id="perDataCancel" class="btn"><?php echo (L("_user_home_9")); ?></button>
                                                </div> <!-- /form-actions -->
                                            </fieldset>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="2">
                                            <form id="certification" class="form-horizontal"
                                                  action="index.php?a=account_upload" enctype="multipart/form-data"
                                                  method="post" onsubmit="return allOK()"/>
                                            <fieldset>
                                                <div class="control-group">
                                                    <label class="control-label" for="area"><?php echo (L("_certification_home_1")); ?></label>
                                                    <div class="controls">
                                                        <select class="selectpicker" id="area" name="area" selected="$res['area']" style="width: 200px">
                                                            <option><?php echo (L("_certification_home_1_1")); ?></option>
                                                            <option><?php echo (L("_certification_home_1_2")); ?></option>
                                                            <option><?php echo (L("_certification_home_1_3")); ?></option>
                                                            <option><?php echo (L("_certification_home_1_4")); ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="realName"><?php echo (L("_certification_home_2")); ?></label>
                                                    <div class="controls">
                                                        <input required type="text" class="input-large" id="realName" name="realName" style="width: 190px"
                                                               value="<?php echo ($res['real_name']); ?>"/>
                                                        <span id="realNameInfo"></span>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" name="IDNumber" for="IDNumber"><?php echo (L("_certification_home_3")); ?></label>
                                                    <div class="controls">
                                                        <input required type="text" style="width: 190px" id="IDNumber" name="IDNumber" value="<?php echo ($res['idcard']); ?>"/>
                                                        <span id="IDNumberInfo"></span>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label" for="idPicH"><?php echo (L("_certification_home_4")); ?></label>
                                                    <div class="controls">
                                                        <input type="file" style="width: 160px" name="idcard_hand_url"
                                                               class="input-large" id="idPicH"/>
                                                        <label for="idPicH" style="width: 200px">
                                                            <!--'/Public/img/pic+.png'-->
                                                            <div id="click2" style="background: url(<?php if($res['idcard_hand_url']!=null){echo $res['idcard_hand_url'];}else{echo '/Public/img/pic+.png';}?>) round;width: 150px;height: 130px;border: 1px solid black"></div>
                                                            <div id="handPicDemo" style="<?php if($res['idcard_hand_url']!=null){echo'display:none;';}?>float: left;width: 150px;height: 130px;border: 1px solid black">
                                                                <!--示例：<img width="150px" height="130px" src="/Public/img/imgHand.jpg" alt="">-->
                                                                示例：<img width="150px" height="130px" src="/Public/img/imgHand.jpg" alt="">
                                                            </div>
                                                        </label>

                                                    </div>

                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="idPicZ"><?php echo (L("_certification_home_5")); ?></label>
                                                    <div class="controls">
                                                        <input type="file" style="width: 160px" name="idcard_zm_url"
                                                               class="input-large" id="idPicZ"/>
                                                        <label for="idPicZ" style="width: 200px">
                                                            <div id="click"
                                                                 style="background: url(<?php if($res['idcard_zm_url']!=null){echo $res['idcard_zm_url'];}else{echo '/Public/img/pic+.png';}?>) round;width: 150px;height: 130px;border: 1px solid black"></div>
                                                        </label>

                                                    </div>

                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="idPicF"><?php echo (L("_certification_home_6")); ?></label>
                                                    <div class="controls">
                                                        <input type="file" style="width: 160px" name="idcard_fm_url"
                                                               class="input-large" id="idPicF"/>
                                                        <label for="idPicF" style="width: 200px">
                                                            <div id="click1"
                                                                 style="background: url(<?php if($res['idcard_fm_url']!=null){echo $res['idcard_fm_url'];}else{echo '/Public/img/pic+.png';}?>) round;width: 150px;height: 130px;border: 1px solid black"></div>
                                                        </label>

                                                    </div>

                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="mobileVerfication" style="font-size: 15px">重要提示：</label>
                                                    <div class="controls">
                                                        <input type="text" id="mobileVerfication" disabled
                                                               style="width: 260px;color: red" value="信息只能上传一次！如需修改，请联系客服"/>
                                                        <!--<button id="getVerficationCode" type="button"-->
                                                                <!--class="btn btn-success">获取验证码-->
                                                        <!--</button>-->
                                                    </div>
                                                    <!--<input disabled style="width: 220px;height: 20px;color: red" value="以上信息只能上传一次！请慎重填写">-->
                                                </div>

                                                <br/>

                                                <div class="form-actions" style="margin: 0px">
                                                    <button type="submit" id="realNameAuthPic" class="btn btn-primary">
                                                        <?php echo (L("_user_home_8")); ?>
                                                    </button>
                                                    <button id="realNameAuthPicCancel" type="button" class="btn"><?php echo (L("_user_home_9")); ?></button>
                                                </div>
                                            </fieldset>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="3">
                                            <form id="gravatar" onsubmit="return uploadHead()" class="form-horizontal" method="post" enctype="multipart/form-data" action="index.php?a=account_upload_head"/>
                                            <fieldset>
                                                <div class="control-group">
                                                    <label class="control-label" for="picHead"><?php echo (L("_user_head_1")); ?></label>
                                                    <label for="picHead" style="width: 200px">
                                                        <div class="controls">
                                                            <input type="file" class="input-large" id="picHead" name="picHead"
                                                                   style="width: 170px"/>
                                                            <div id="click3"
                                                                 style="background: url(<?php if($res['head_url']!=null){echo $res['head_url'];}else{echo '/Public/img/pic+.png';}?>) round;width: 150px;height: 130px;border: 1px solid black"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <br/>

                                                <div class="form-actions">
                                                    <button  id="saveGravatar" type="submit" class="btn btn-primary">
                                                        <?php echo (L("_user_home_8")); ?>
                                                    </button>
                                                    <button id="saveGravatarCancel" type="button" class="btn"><?php echo (L("_user_home_9")); ?></button>
                                                </div>
                                            </fieldset>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="4">
                                            <form id="modifyPassword" class="form-horizontal" method="post" action="index.php?a=account_change_password" onsubmit="return changePass()"/>
                                            <fieldset>
                                                <div class="control-group">
                                                    <label class="control-label" for="originalPassword"><?php echo (L("_user_pass_1")); ?></label>
                                                    <div class="controls">
                                                        <input type="password" required minlength="6" maxlength="20" class="input-medium disabled" name="originalPassword"
                                                               id="originalPassword" value=""/>
                                                        <span id="originalPasswordInfo"></span>
                                                        <!--<p class="help-block">用户名不能更改</p>-->
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->


                                                <div class="control-group">
                                                    <label class="control-label" for="newPassword"><?php echo (L("_user_pass_2")); ?></label>
                                                    <div class="controls">
                                                        <input type="password" required minlength="6" maxlength="20" class="input-medium" name="newPassword" id="newPassword"/>
                                                        <span></span>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->


                                                <div class="control-group">
                                                    <label class="control-label" for="repeatPassword"><?php echo (L("_user_pass_3")); ?></label>
                                                    <div class="controls">
                                                        <input type="password" required minlength="6" maxlength="20" class="input-medium" name="repeatPassword"
                                                               id="repeatPassword"/>
                                                        <span id="repeatPasswordInfo"></span>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->


                                                <!--<div class="control-group">											-->
                                                <!--<label class="control-label" for="email">资金密码</label>-->
                                                <!--<div class="controls">-->
                                                <!--<input type="password" class="input-large" id="email" value="787878788" />-->
                                                <!--</div> &lt;!&ndash; /controls &ndash;&gt;				-->
                                                <!--</div> &lt;!&ndash; /control-group &ndash;&gt;-->
                                                <div class="form-actions">
                                                    <button id="savePassword" disabled type="submit" class="btn btn-primary"><?php echo (L("_user_home_8")); ?></button>
                                                    <button id="savePasswordCancel" type="button" class="btn"><?php echo (L("_user_home_9")); ?></button>
                                                </div> <!-- /form-actions -->
                                            </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /widget-content -->

                        </div> <!-- /widget -->

                    </div> <!-- /span9 -->

                </div> <!-- /row -->
            </div> <!-- /span9 -->


        </div> <!-- /row -->

    </div> <!-- /container -->

</div> <!-- /content -->



<!--<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>-->
<script src="/Public/mySpace/js/jquery-1.7.2.min.js"></script>


<script>


    $(document).ready(function () {
        //信息是否完整控制按钮是否启用
        $.ajax({
            type: "POST",
            url: "index.php?a=account_btn_dis",
            data: {
            },
            success: function (data) {
                console.log(data['infook']);
                if(data['infook']==1){
                    $("#realNameAuthPic").attr("disabled",true);
                }
            }
        });
    })

    document.getElementById('idPicH').addEventListener('change', function (e) {
        var files = this.files;
        var img = new Image();
        var reader = new FileReader();
        reader.readAsDataURL(files[0]);
        reader.onload = function (e) {
            var mb = (e.total / 1024) / 1024;
            if (mb >= 2) {
                alert('文件大小大于2M');
                return;
            }
            img.src = this.result;
            img.style.width = "150px";
            img.style.height = "130px";
            document.getElementById('click2').style.width = "150px";
            document.getElementById('click2').style.height = "130px";
            document.getElementById('click2').innerHTML = '';
            document.getElementById('click2').appendChild(img);
        }
    });
    document.getElementById('idPicZ').addEventListener('change', function (e) {
        var files = this.files;
        var img = new Image();
        var reader = new FileReader();
        reader.readAsDataURL(files[0]);
        reader.onload = function (e) {
            var mb = (e.total / 1024) / 1024;
            if (mb >= 2) {
                alert('文件大小大于2M');
                return;
            }
            img.src = this.result;
            img.style.width = "150px";
            img.style.height = "130px";
            document.getElementById('click').style.width = "150px";
            document.getElementById('click').style.height = "130px";
            document.getElementById('click').innerHTML = '';
            document.getElementById('click').appendChild(img);
        }
    });
    document.getElementById('idPicF').addEventListener('change', function (e) {
        var files = this.files;
        var img = new Image();
        var reader = new FileReader();
        reader.readAsDataURL(files[0]);
        reader.onload = function (e) {
            var mb = (e.total / 1024) / 1024;
            if (mb >= 2) {
                alert('文件大小大于2M');
                return;
            }
            img.src = this.result;
            img.style.width = "150px";
            img.style.height = "130px";
            document.getElementById('click1').style.width = "150px";
            document.getElementById('click1').style.height = "130px";
            document.getElementById('click1').innerHTML = '';
            document.getElementById('click1').appendChild(img);
        }
    });
    document.getElementById('picHead').addEventListener('change', function (e) {
        var files = this.files;
        var img = new Image();
        var reader = new FileReader();
        reader.readAsDataURL(files[0]);
        reader.onload = function (e) {
            var mb = (e.total / 1024) / 1024;
            if (mb >= 2) {
                alert('文件大小大于2M');
                return;
            }
            img.src = this.result;
            img.style.width = "150px";
            img.style.height = "130px";
            document.getElementById('click3').style.width = "150px";
            document.getElementById('click3').style.height = "130px";
            document.getElementById('click3').innerHTML = '';
            document.getElementById('click3').appendChild(img);
        }
    });
    //判断个人资料密码是否输入正确
    var num = 10;
    $('#userPassword').blur(function () {
        num--;
        console.log(num)
        var password = $('#userPassword').val();
        $('#passwordNum').html(num);
        $.ajax({
            type: "POST",
            url: "index.php?a=account_msg",
            data: {
                password: password
            },
            success: function (res) {
                if (res['status'] == 1) {
                    $('#perData').attr("disabled", false);
                    $("#userPasswordInfo").html("<i style='color: green' class=\"fa fa-check-square fa-lg\" aria-hidden=\"true\"></i>");
                }else {
                    $("#userPasswordInfo").html("<i style='color: red' class=\"fa fa-times-circle fa-lg\" aria-hidden=\"true\"></i>");
                }
                if (num == 0) {
                    window.location = 'index.php';
                }
            }
        });

    });



    //email验证
    $("#userEmail").blur(function () {
        if (!$("#userEmail").val().match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)){
            $("#userEmailInfo").html("<i style='color: red' class=\"fa fa-times-circle fa-lg\" aria-hidden=\"true\"></i>");
        }else{
            $("#userEmailInfo").html("<i style='color: green' class=\"fa fa-check-square fa-lg\" aria-hidden=\"true\"></i>");
        }
    })
    //mobile验证
    $("#userMobile").blur(function () {
        if (!$("#userMobile").val().match(/^(((13[0-9]{1})|150|151|152|158|159|157|182|187|188|147|155|156|185|186|153|180|189)+\d{8})$/)){
            $("#userMobileInfo").html("<i style='color: red' class=\"fa fa-times-circle fa-lg\" aria-hidden=\"true\"></i>")
        }else {
            $("#userMobileInfo").html("<i style='color: green' class=\"fa fa-check-square fa-lg\" aria-hidden=\"true\"></i>");
        }

    })

    //修改密码的表单验证
    function changePass() {
        if($("#newPassword").val()==$("#repeatPassword").val()){
            _success();
            return true;
        }else {
            $("#repeatPasswordInfo").html("两次输入不一致");
            return false;
        }
    }

    //真实姓名验证
    $("#realName").blur(function () {
        if(!$("#realName").val().match(/^[\u4e00-\u9fa5]{2,4}$/i)){
            $("#realNameInfo").html("<i style='color: red' class=\"fa fa-times-circle fa-lg\" aria-hidden=\"true\"></i>");
        }else {
            $("#realNameInfo").html("<i style='color: green' class=\"fa fa-check-square fa-lg\" aria-hidden=\"true\"></i>");
        }
    })
    //身份证验证
    $("#IDNumber").blur(function () {
        if($("#IDNumber").val().length==18||$("#IDNumber").val().length==15){
            $("#IDNumberInfo").html("<i style='color: green' class=\"fa fa-check-square fa-lg\" aria-hidden=\"true\"></i>");

        }else {
            $("#IDNumberInfo").html("<i style='color: red' class=\"fa fa-times-circle fa-lg\" aria-hidden=\"true\"></i>");
        }
    })
    //实名验证判断是否全部填完
    function allOK() {
        if($("#area").val()&&$("#realName").val()&&$("#IDNumber").val()&&$("#idPicH").val()&&$("#idPicF").val()&&$("#idPicZ").val()){
            _success();
            setTimeout(window.location.href="http://www.jifage.cn/index.php?a=account",3000);
            return true;
        }else{
            alert("请填完信息！")
            return false;
        }
    }
    //ajax验证原始密码是否输入正确
    $("#originalPassword").blur(function () {
        var oldPass=$("#originalPassword").val() ;
        $.ajax({
            type: "POST",
            url: "index.php?a=account_check_password",
            data: {
                oldPass: oldPass
            },
            success: function (data) {
                if(data['status']==1){
                    $("#originalPasswordInfo").html("<i style='color: green' class=\"fa fa-check-square fa-lg\" aria-hidden=\"true\"></i>");
                    $("#savePassword").attr("disabled",false);
                }else {
                    $("#originalPasswordInfo").html("<i style='color: red' class=\"fa fa-times-circle fa-lg\" aria-hidden=\"true\"></i>");
                }
            }
        });
    })

    //用户名验证
    $("#userName").blur(function () {
        if($("#userName").val().length>10||$("#userName").val().length<4){
            $("#userNameInfo").html("<i style='color: red' class=\"fa fa-times-circle fa-lg\" aria-hidden=\"true\"></i>");
        }else {
            $("#userNameInfo").html("<i style='color: green' class=\"fa fa-check-square fa-lg\" aria-hidden=\"true\"></i>");
        }
    })
    //点击资料保存
    $('#perData').click(function () {
        var dataUserName = $('#userName').val();
        var dataUserEmail = $('#userEmail').val();
        var dataUserPassword = $('#userPassword').val();
        var dataUserMobile = $('#userMobile').val();
        $.ajax({
            type: "POST",
            url: "index.php?a=account_save_msg",
            data: {
                dataUserName: dataUserName,
                dataUserEmail: dataUserEmail,
                dataUserPassword: dataUserPassword,
                dataUserMobile: dataUserMobile
            },
            success: function (data) {
                _success();
                setTimeout(window.location.href="http://www.jifage.cn/index.php?a=account",3000);

            }
        });
    });
    $("#saveGravatar").click(function () {
        _success();
        setTimeout(window.location = 'index.php?a=account',3000);

    })

    //点击资料取消
    $('#perDataCancel').click(function () {
        _error();
        setTimeout(window.location = 'index.php?a=account',3000);
    })

    //点击实名认证取消

    $('#realNameAuthPicCancel').click(function () {
        _error();
        setTimeout(window.location = 'index.php?a=account',3000);
    })
    //头像设置取消
    $('#saveGravatarCancel').click(function () {
        _error();
        setTimeout(window.location = 'index.php?a=account',3000);
    })
    //修改密码取消
    $('#savePasswordCancel').click(function () {
        _error();
        setTimeout(window.location = 'index.php?a=account',3000);
    })
</script>


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<script src="/Public/mySpace/js/bootstrap.js"></script>





<script src="/Public/modal/zeroModal.min.js"></script>

<script>

    function _basic() {
        zeroModal.show();
    }

    function _params() {
        zeroModal.show({
            title: 'hello world',
            content: 'this is zeroModal',
            close: false
        });
    }

    function _escape() {
        zeroModal.show({
            title: 'hello world',
            content: '<b>this is zeroModal</b>',
            escape: false
        });
    }

    function _button() {
        zeroModal.show({
            title: 'hello world',
            content: 'this is zeroModal',
            ok: true,
            cancel: true,
            okFn: function(opt) {
                console.log(opt);
                alert('clicked ok and not close');
                return false;
            }
        });
    }

    function _setsize() {
        zeroModal.show({
            title: 'hello world',
            content: 'this is zeroModal',
            width: '60%',
            height: '40%'
        });
    }

    function _notoverlay() {
        zeroModal.show({
            title: 'hello world',
            content: 'this is zeroModal',
            width: '60%',
            height: '40%',
            overlay: false
        });
    }

    function _iframe() {
        zeroModal.show({
            title: 'hello world',
            iframe: true,
            url: 'http://www.baidu.com',
            width: '80%',
            height: '80%',
            cancel: true
        });
    }

    function _esc() {
        zeroModal.show({
            title: 'hello world',
            content: 'this is zeroModal',
            esc: true
        });
    }

    function _resize() {
        zeroModal.show({
            title: 'hello world',
            content: 'this is zeroModal',
            width: '60%',
            height: '40%',
            resize: true
        });
    }

    //    function _maxmin() {
    //        zeroModal.show({
    //            title: 'hello world',
    //            content: 'this is zeroModal',
    //            width: '60%',
    //            height: '40%',
    //            max: true,
    //            min: true
    //        });
    //    }


    var width = '<?php echo ($modal_width); ?>';
    var height = '<?php echo ($modal_height); ?>';
    var left = '<?php echo ($modal_left); ?>';
    //参与众筹点击
    //    $("#crowdFunding").click(function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "index.php?a=index_login",
    //            data: {
    //            },
    //            success: function (data) {
    //                console.log(data['toUrl']);
    //                $("#crowdFunding").attr("href",data['toUrl']);
    //            }
    //        });
    //    })

    var login = "<?php echo ($account); ?>";

    function _maxmin() {
//        $.ajax({
//            type: "POST",
//            url: "index.php?a=index_login",
//            data: {
//            },
//            success: function (data) {
//                console.log(data['toUrl']);
//                $("#crowdFunding").attr("href",data['toUrl']);
//            }
//        });

        console.log(login);
        if(login == "on"){
            console.log(2323);

        }else{
            window.location.href = "index.php?a=signin";
            return;
        }


        zeroModal.show({
            title: '<h2  style="text-align: center;"><?php echo (L("_contact")); ?></h2>',
            content: '<p style="text-align: center;"><img  style="width: 80%;" src="/Public/img/wechatkefu.jpg" />' +
            '<p style="text-align: center;font-size: 20px;"><?php echo (L("_custom_service")); ?></p>' +
            '</p>',
            width: width,
            height: height,
            left:left


//            width: '25%',
//            height: '42%',
//            max: true,
//            min: true
        });
    }

    function _loading(type) {
        zeroModal.loading(type);
    }

    function _progress() {
        zeroModal.progress();
    }

    function _alert1() {
        zeroModal.alert('请选择数据进行操作!');
    }

    function _alert2() {
        zeroModal.alert({
            content: '操作提示!',
            contentDetail: '请选择数据后再进行操作',
            okFn: function() {
                alert('ok callback');
            }
        });
    }

    function _confirm1() {
        zeroModal.confirm("确定提交审核吗？", function() {
            alert('ok');
            //return false;
        });
    }

    function _confirm2() {
        zeroModal.confirm({
            content: '确定提交审核吗？',
            contentDetail: '提交后将不能进行修改。',
            okFn: function() {
                alert('ok');
            },
            cancelFn: function() {
                alert('cancel');
            }
        });
    }

    function _error() {
        zeroModal.error('取消成功！');

        /*zeroModal.error({
            content: '请选择数据进行操作!',
            width: '800px'
        });*/
    }
//    _success()
//    _setOpacity()
    function _success() {
        <?php if($pc=='pc'){echo'zeroModal.success(\'操作成功!\');';} else{ echo'zeroModal.success({title: \'\',content: \'操作成功！\',width: \'60%\',height: \'40%\'});';} ?>
    };

    function _setOpacity() {
        zeroModal.show({
            title: 'hello world',
            content: 'this is zeroModal',
            width: '60%',
            height: '40%',
            opacity: 0.8
        });
    }

    function _drag() {
        zeroModal.show({
            title: 'hello world',
            content: 'this is zeroModal',
            dragHandle: 'container',
            ok: true
        });
    }

    function _custombutton() {
        zeroModal.show({
            title: 'hello world',
            iframe: true,
            url: 'http://www.baidu.com',
            width: '60%',
            height: '60%',
            buttons: [{
                className: 'zeromodal-btn zeromodal-btn-primary',
                name: '这是自定义按钮',
                fn: function(opt) {
                    alert(1);
                    return false;
                }
            }, {
                className: 'zeromodal-btn zeromodal-btn-default',
                name: '取消',
                fn: function(opt) {
                    alert(2);
                }
            }]
        });
    }

    function _setPosition() {
        zeroModal.show({
            title: 'hello world',
            content: 'this is zeroModal',
            top: '30px',
            left: '30px',
            width: '280px',
            height: '600px'
        });
    }

</script>

</body>
</html>