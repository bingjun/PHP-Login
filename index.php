<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="管理平台登录界面">
<meta name="author" content="beanbest">

<title>管理平台登录界面</title>
<link rel="shortcut icon" href="/bootstrap/img/favicon.ico">
<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="/bootstrap/css/bootstrap-simplex.css" rel="stylesheet">
<link href="/bootstrap/css/charisma-app.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>管理平台登录界面</h2>
				</div>
			</div>
			<div class="row-fluid">
                <div class="row-fluid" id="check_join_div">
					<div class="well span4 center login-box">
						<div class="alert alert-info" style="font-size:14px;">[登录(用户名   密码)]</div>
                        <form class="form-horizontal" action="checking.php" name="icson_lf" id="icson_lf" method="post">
                            <fieldset>
                                <div class="input-prepend" style="width:220px;" title="用户名" data-rel="tooltip">
                                    <span class="add-on"><i class="icon-user"></i></span>
                                    <input autofocus class="input-large span10" name="username" id="username" type="text" value="" style="height:18px;line-height:18px;" />
                                </div>
                                <div class="clearfix"></div>
                                <div class="input-prepend" style="width:220px;" title="密码" data-rel="tooltip">
                                    <span class="add-on"><i class="icon-lock"></i></span>
                                    <input class="input-large span10" name="password" id="password" type="password" value="" />
                                </div>
                                <div class="clearfix"></div>
                                <div class="input-prepend" style="width:220px;" title="验证码" data-rel="tooltip">
                                    <span class="add-on"><i class="icon-check"></i></span>
                                    <input class="input-large span10" name="passcode" id="passcode" type="text" value="" style="width: 136px;" />
                                    <img src="/lib/Code.class.php">
                                </div>
                                <div class="clearfix"></div>
                                <p class="center span5">
                                    <button type="button"  id="form_submit" class="btn btn-primary" onclick="">登录</button>
                                </p>
                            </fieldset>
                        </form>
                  </div>
				</div>
			</div>
			<div class="box-content alerts" style="width:700px; margin:0 auto;">
				<div class="alert alert-info" style="font-size:16px;">
					<strong>友情提示：</strong> 推荐使用 Firefox、Chrome、腾讯的高版本浏览器，可以获得更好的用户体验。
				</div>
			</div>
		</div>
	</div>
	<!-- jQuery -->
	<script src="/bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#form_submit").click(function(){
			if(($('#username').val() == '') || ($('#password').val() == '')){
				alert('用户名和密码不能为空!');
				return false;
			}else{
				if($('#passcode').val() == ''){
					alert('请输入验证码!');
					return false;
				}else
					$('#icson_lf').submit();
		  }
		});
	});
	</script>
</body>
</html>
