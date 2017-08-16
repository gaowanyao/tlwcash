<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>User Account - Bootstrap Admin</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />    
    
    <link href="/Public/mySpace/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Public/mySpace/css/bootstrap-responsive.min.css" rel="stylesheet" />
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" />
    <link href="/Public/mySpace/css/font-awesome.css" rel="stylesheet" />
    
    <link href="/Public/mySpace/css/adminia.css" rel="stylesheet" /> 
    <link href="/Public/mySpace/css/adminia-responsive.css" rel="stylesheet" /> 
    
    
    <link href="/Public/mySpace/css/pages/plans.css" rel="stylesheet" /> 

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <style>
		  input{
			  height: 25px;
		  }
	  </style>
  </head>

<body>



<div class="navbar navbar-fixed-top">

    <div class="navbar-inner">

        <div class="container">

            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="brand" href="index.php?a=account">用户中心</a>

            <div class="nav-collapse">

                <ul class="nav pull-right">
                    <!--<li>-->
                        <!--<a href="#"><span class="badge badge-warning">7</span></a>-->
                    <!--</li>-->

                    <li class="divider-vertical"></li>

                    <li class="dropdown">

                        <a data-toggle="dropdown" class="dropdown-toggle " href="#">
                            <?php echo ($name); ?> <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="/Public/mySpace/account.html"><i class="icon-user"></i>用户中心</a>
                            </li>

                            <li>
                                <a href="/Public/mySpace/change_password.html"><i class="icon-lock"></i>修改密码</a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="index.php?a=logout"><i class="icon-off"></i> 退出</a>
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
            <img src="/Public/mySpace/img/headshot.png" alt="" class="thumbnail" />
        </div> <!-- /account-avatar -->

        <div class="account-details">

            <span class="account-name"><?php echo ($name); ?></span>

            <span class="account-role">Administrator</span>

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
                <i class="icon-user"></i>
                用户中心
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
					用户中心
				</h1>
				<div class="row">
					
					<div class="span9">
				
						<div class="widget">
							
							<div class="widget-header">
								<h3>基本信息</h3>
							</div> <!-- /widget-header -->
									
							<div class="widget-content">
								<div class="tabable">
						<ul class="nav nav-tabs">
						  <li class="active">
						    <a href="#1" data-toggle="tab">资料</a>
						  </li>
						  <li><a href="#2" data-toggle="tab">实名认证</a></li>
						  <li><a href="#3" data-toggle="tab">头像设置</a></li>
						  <li><a href="#4" data-toggle="tab">修改密码</a></li>
						  <!--<li><a href="#4" data-toggle="tab">安全设置</a></li>-->
						</ul>
						
						<br />
						
							<div class="tab-content">
								<div class="tab-pane active" id="1">
								<form id="personalData" class="form-horizontal" />
									<fieldset>
										<div class="control-group">											
											<label class="control-label" for="username">用户名</label>
											<div class="controls">
												<input type="text" class="input-medium disabled" id="userName" value="<?php echo ($res['user_name']); ?>"  />
												<!--<p class="help-block">用户名不能更改</p>-->
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="userEmail">安全邮箱</label>
											<div class="controls">
												<input type="text" class="input-medium" id="userEmail" value="<?php echo ($res['email']); ?>" />
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="userPassword">登录密码</label>
											<div class="controls">
												<input type="password" class="input-medium" id="userPassword" value="" />
												<p>您还有 <span id="passwordNum">3</span>次输入机会</p>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<div class="control-group">											
											<label class="control-label" for="userMobile">手机号码</label>
											<div class="controls">
												<input type="text" class="input-medium" id="userMobile" value="<?php echo ($res['phone']); ?>" />
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
											<br />
										<div class="form-actions">
											<button disabled type="button" id="perData" class="btn btn-primary">保存</button>
											<button type="button" id="perDataCancel" class="btn">取消</button>
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
								</div>
								<div class="tab-pane" id="2">
									<form id="certification" class="form-horizontal" action="index.php?a=account_upload" enctype="multipart/form-data" method="post"/>
									<fieldset>
										<div class="control-group">
											<label class="control-label" for="area">选择地区</label>
											<div class="controls">
												<select class="selectpicker" id="area">
													<option>大陆</option>
													<option>港澳</option>
													<option>台湾</option>
													<option>海外</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="realName">真实姓名</label>
											<div class="controls">
												<input type="text" class="input-large" id="realName" value="" />
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="IDNumber">身份证号</label>
											<div class="controls">
												<input type="text" id="IDNumber" value="" />
											</div>
										</div>
										<br />

										<div class="form-actions">
											<button type="submit" id="realNameAuth" class="btn btn-primary">保存</button> <button class="btn">取消</button>
										</div>
									</fieldset>
									</form>
									<form id="certificationPic" class="form-horizontal" action="index.php?a=account_upload" enctype="multipart/form-data" method="post"/>
										<fieldset>
											<div class="control-group">
												<label class="control-label"  for="idPicH">手持身份证正面照</label>
												<div class="controls">
													<input type="file" style="width: 160px" name="idcard_hand_url" class="input-large" id="idPicH" />
													<label for="idPicH" style="width: 200px">
														<div id="click2" style="background: url('/Public/img/pic+.png') round;width: 150px;height: 130px;border: 1px solid black"></div>
														<div style="float: left;width: 150px;height: 130px;border: 1px solid black">
															<img width="150px" height="130px" src="/Public/img/imgHand.jpg" alt="">
														</div>
													</label>

												</div>

											</div>
											<div class="control-group">
												<label class="control-label"  for="idPicZ">身份证正面</label>
												<div class="controls">
													<input type="file" style="width: 160px" name="idcard_zm_url" class="input-large" id="idPicZ"  />
													<label for="idPicZ" style="width: 200px">
														<div id="click" style="background: url('/Public/img/pic+.png') round;width: 150px;height: 130px;border: 1px solid black"></div>
													</label>

												</div>

											</div>
											<div class="control-group">
												<label class="control-label"  for="idPicF">身份证反面</label>
												<div class="controls">
													<input type="file" style="width: 160px" name="idcard_fm_url" class="input-large" id="idPicF" />
													<label for="idPicF" style="width: 200px">
														<div id="click1" style="background: url('/Public/img/pic+.png') round;width: 150px;height: 130px;border: 1px solid black"></div>
													</label>

												</div>

											</div>
											<div class="control-group">
												<label class="control-label" for="mobileVerfication">手机验证码</label>
												<div class="controls">
													<input type="text" class="input-large" id="mobileVerfication" style="width: 140px" value="" />
													<button id="getVerficationCode" type="button" class="btn btn-success">获取验证码</button>
												</div>
											</div>

											<br />
											
											<div class="form-actions">
												<button type="submit" id="realNameAuthPic" class="btn btn-primary">保存</button> <button class="btn">取消</button>
											</div>
										</fieldset>
									</form>
								</div>
								<div class="tab-pane" id="3">
									<form id="gravatar" class="form-horizontal" />
									<fieldset>
										<div class="control-group">
											<label class="control-label" for="picHead" >头像设置</label>
											<label for="picHead" style="width: 200px">
												<div class="controls">
													<input type="file" class="input-large" id="picHead"style="width: 200px" />
													<div style="width: 150px;height: 150px;border: 1px solid black"></div>
												</div>
											</label>
										</div>
										<br />

										<div class="form-actions">
											<button id="saveGravatar" type="button" class="btn btn-primary">Save</button> <button class="btn">Cancel</button>
										</div>
									</fieldset>
									</form>
								</div>
								<div class="tab-pane" id="4">
									<form id="modifyPassword" class="form-horizontal" />
									<fieldset>
										<div class="control-group">
											<label class="control-label" for="originalPassword">原始密码</label>
											<div class="controls">
												<input type="password" class="input-medium disabled" id="originalPassword" value=""  />
												<!--<p class="help-block">用户名不能更改</p>-->
											</div> <!-- /controls -->
										</div> <!-- /control-group -->


										<div class="control-group">
											<label class="control-label" for="newPassword">新密码</label>
											<div class="controls">
												<input type="password" class="input-medium" id="newPassword"  />
											</div> <!-- /controls -->
										</div> <!-- /control-group -->


										<div class="control-group">
											<label class="control-label" for="repeatPassword">重复密码</label>
											<div class="controls">
												<input type="password" class="input-medium" id="repeatPassword" />
											</div> <!-- /controls -->
										</div> <!-- /control-group -->


										<!--<div class="control-group">											-->
										<!--<label class="control-label" for="email">资金密码</label>-->
										<!--<div class="controls">-->
										<!--<input type="password" class="input-large" id="email" value="787878788" />-->
										<!--</div> &lt;!&ndash; /controls &ndash;&gt;				-->
										<!--</div> &lt;!&ndash; /control-group &ndash;&gt;-->
										<div class="form-actions">
											<button id="savePassword" type="button" class="btn btn-primary">保存</button>
											<button class="btn">取消</button>
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




<div id="footer">

    <div class="container">
        <hr />
        <p>&copy; 2017 铜锣湾</p>
    </div> <!-- /container -->

</div> <!-- /footer -->


<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
<script>
    document.getElementById('idPicH').addEventListener('change',function(e){
        var files = this.files;
        var img = new Image();
        var reader = new FileReader();
        reader.readAsDataURL(files[0]);
        reader.onload = function(e){
            var mb = (e.total/1024)/1024;
            if(mb>= 2){
                alert('文件大小大于2M');
                return;
            }
            img.src = this.result;
            img.style.width = "150px";
            img.style.height = "130px";
            document.getElementById('click2').style.width="150px";
            document.getElementById('click2').style.height="130px";
            document.getElementById('click2').innerHTML = '';
            document.getElementById('click2').appendChild(img);
        }
    });
    document.getElementById('idPicZ').addEventListener('change',function(e){
        var files = this.files;
        var img = new Image();
        var reader = new FileReader();
        reader.readAsDataURL(files[0]);
        reader.onload = function(e){
            var mb = (e.total/1024)/1024;
            if(mb>= 2){
                alert('文件大小大于2M');
                return;
            }
            img.src = this.result;
            img.style.width = "150px";
            img.style.height = "130px";
            document.getElementById('click').style.width="150px";
            document.getElementById('click').style.height="130px";
            document.getElementById('click').innerHTML = '';
            document.getElementById('click').appendChild(img);
        }
    });
    document.getElementById('idPicF').addEventListener('change',function(e){
        var files = this.files;
        var img = new Image();
        var reader = new FileReader();
        reader.readAsDataURL(files[0]);
        reader.onload = function(e){
            var mb = (e.total/1024)/1024;
            if(mb>= 2){
                alert('文件大小大于2M');
                return;
            }
            img.src = this.result;
            img.style.width = "150px";
            img.style.height = "130px";
            document.getElementById('click1').style.width="150px";
            document.getElementById('click1').style.height="130px";
            document.getElementById('click1').innerHTML = '';
            document.getElementById('click1').appendChild(img);
        }
    });
    //判断个人资料密码是否输入正确
	var num=3;
    $('#userPassword').blur(function () {
        num--;
        console.log(num)
        var password=$('#userPassword').val();
        $('#passwordNum').html(num);
        $.ajax({
			type:"POST",
			url:"index.php?a=account_msg",
			data:{
			    password:password
			},
			success:function (res) {
			    if(res['status']==1){
                    $('#perData').attr("disabled",false);
				}
				if(num==0){
			        window.location='index.php';
				}
            }
		});

    });


    //点击资料保存
	$('#perData').click(function () {
		var dataUserName=$('#userName').val();
		var dataUserEmail=$('#userEmail').val();
		var dataUserPassword=$('#userPassword').val();
		var dataUserMobile=$('#userMobile').val();
        $.ajax({
            type:"POST",
            url:"index.php?a=account_save_msg",
            data:{
                dataUserName:dataUserName,
                dataUserEmail:dataUserEmail,
                dataUserPassword:dataUserPassword,
                dataUserMobile:dataUserMobile
            },
            success:function (data) {

            }
        });
    });

	//点击实名认证
	$('#realNameAuth').click(function () {
	    var area=$('#area').find("option:selected").text();
		var realName=$('#realName').val();
		var IDNumber=$('#IDNumber').val();
        $.ajax({
            type:"POST",
            url:"index.php?a=account_upload_msg",
            data:{
                area:area,
                realName:realName,
                IDNumber:IDNumber
            },
            success:function (data) {
				console.log(data);
            }
        });

    });

	//点击资料取消
	$('#perDataCancel').click(function () {
        window.location='index.php?a=account';
    })
</script>


    

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/Public/mySpace/js/jquery-1.7.2.min.js"></script>


<script src="/Public/mySpace/js/bootstrap.js"></script>

  </body>
</html>