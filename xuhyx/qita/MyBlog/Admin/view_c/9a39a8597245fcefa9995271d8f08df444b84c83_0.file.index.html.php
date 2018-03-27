<?php
/* Smarty version 3.1.30, created on 2018-03-12 02:45:35
  from "D:\xampp\htdocs\www\week6\1520782100511594899\weekend\MyBlog\Admin\view\Login\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa5dbbf403303_92833966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a39a8597245fcefa9995271d8f08df444b84c83' => 
    array (
      0 => 'D:\\xampp\\htdocs\\www\\week6\\1520782100511594899\\weekend\\MyBlog\\Admin\\view\\Login\\index.html',
      1 => 1520582019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa5dbbf403303_92833966 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Xuhyx的个人博客后台管理-登录界面</title>
<link rel="stylesheet" type="text/css" href="./Public/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="./Public/css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="./Public/css/component.css" />
<link rel="stylesheet" type="text/css" href="./Public/css/style.add.css" />
<!--[if IE]>
<?php echo '<script'; ?>
 src="js/html5.js"><?php echo '</script'; ?>
>
<![endif]-->

</head>
<body>
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
					<div class="logo_box">
						<h3>Xuhyx的个人博客后台登录系统</h3>
						<form action="index.php?c=login&a=doLogin" name="f" method="post">
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
								<img class="vcode" src="./index.php?c=login&a=code" onclick="this.src='./index.php?c=login&a=code&vc='+Math.random()"/>
							</div>
							<div class="mb2"><input type="submit" class="act-but submit" value="登录"/></div>
							
						</form>
					</div>
				</div>
			</div>
		</div><!-- /container -->
		<?php echo '<script'; ?>
 src="./Public/js/TweenLite.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="./Public/js/EasePack.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="./Public/js/rAF.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="./Public/js/demo-1.js"><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
