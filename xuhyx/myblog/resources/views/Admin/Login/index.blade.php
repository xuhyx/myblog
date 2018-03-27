<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>个人商城--登录</title>
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo2.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="css/component.css" />
<link rel="stylesheet" type="text/css" href="css/style_login.css" />
<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->

</head>
<body>
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
					<div class="logo_box">
						<h3>Xuhyx的个人博客后台登录系统</h3>
						<form action="/Admin/Login/dologin" name="f" method="post">
						{{ csrf_field() }}
							<div class="input_outer">
								<span class="u_user"></span>
								<input name="logname" class="text"  type="text" placeholder="请输入账户">
							</div>
							<div class="input_outer">
								<span class="us_uer"></span>
								<input name="logpass" class="text text2" value="" type="password" placeholder="请输入密码">
							</div>
							<div class="input_outer" >
								<span class="co_uer"></span>
								<input name="logcode" class="text text3" value="" type="text" placeholder="请输入验证码">
								<img class="vcode" src="/Admin/Login/vcode" onclick="this.src='/Admin/Login/vcode/'+Math.random()"/>
							</div>
							<div class="mb2"><input type="submit" class="act-but submit" value="登录"/></div>
							
						</form>
					</div>
				</div>
			</div>
		</div><!-- /container -->
		<script src="js/TweenLite.min.js"></script>
		<script src="js/EasePack.min.js"></script>
		<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
		<script src="js/rAF.js"></script>
		<script src="js/demo-1.js"></script>
		<script type="text/javascript">
			
		</script>
	</body>
</html>