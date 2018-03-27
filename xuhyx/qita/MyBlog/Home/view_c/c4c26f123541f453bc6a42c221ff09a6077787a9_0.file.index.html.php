<?php
/* Smarty version 3.1.30, created on 2018-03-12 11:20:02
  from "D:\xampp\htdocs\www\week6\1520782100511594899\weekend\MyBlog\Home\view\Layouts\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa65452036f98_15984988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4c26f123541f453bc6a42c221ff09a6077787a9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\www\\week6\\1520782100511594899\\weekend\\MyBlog\\Home\\view\\Layouts\\index.html',
      1 => 1520747543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa65452036f98_15984988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Xuhyx的个人博客</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="./Public/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="./Public/css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="./Public/css/magnific-popup.css">
	<!-- Salvattore -->
	<link rel="stylesheet" href="./Public/css/salvattore.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="./Public/css/style.css">
	<!-- Text Edit Style -->
	<link rel="stylesheet" type="text/css" href="./Public/dist/css/wangEditor.css">
	<!-- Icon -->
	<link rel="stylesheet" href="./Public/css/font-awesome.min.css">
	<!-- Swiper -->
	<link rel="stylesheet" href="./Public/css/swiper-3.4.2.min.css">
	<!-- Modernizr JS -->
	<?php echo '<script'; ?>
 src="./Public/js/modernizr-2.6.2.min.js"><?php echo '</script'; ?>
>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
	
	
	<style>
		.set_up{position: fixed;right: 3%;bottom: 3%;width: 60px;height: 60px;z-index: 100;}
		.set_up a{color: #181818;}
		.set_up a:hover{color: #EF5353;}
		.set_up .fa{width: 60px;height: 60px;text-align: center;}
	</style>
	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16613875385aa65451f368a4_10381390', 'style');
?>

	</head>
	<body>
		
	<div id="fh5co-offcanvass">
		
		<a href="#" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">Menu <i class="icon-cross"></i> </a>
		
		<h1 class="fh5co-logo"><a class="navbar-brand" href="index.html"><?php echo (($tmp = @$_SESSION['h_nickname'])===null||$tmp==='' ? 'unknow' : $tmp);?>
</a><a class="header-pic" href="#"><img src="../Public/Uploads/headerPic/<?php echo (($tmp = @$_SESSION['h_pic'])===null||$tmp==='' ? 'unknow.jpg' : $tmp);?>
" /></a></h1>
		
		<ul>
			<li class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6323587205aa65452009e45_88687971', 'style1');
?>
"><a href="index.php?c=index&a=index">主页</a></li>
			<li class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13290522565aa6545200dc03_75876955', 'style2');
?>
"><a href="index.php?c=article&a=index">博客</a></li>
			<li class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9321171005aa654520118f9_03124082', 'style3');
?>
"><a href="#">说说</a></li>
			<li class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6923235055aa65452015709_31526273', 'style4');
?>
"><a href="#">相册</a></li>
			<?php if ($_smarty_tpl->tpl_vars['nickname']->value == '海棠酒满') {?>
			<li class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16623175275aa6545201f575_02336503', 'style5');
?>
"><a href="#">备忘录</a></li>
			<?php }?>
			<li class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17364068265aa654520249b8_50523685', 'style6');
?>
"><a href="#">留言板</a></li>
			<li class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9908982375aa65452028670_69469914', 'style7');
?>
"><a href="index.php?c=login&a=index">登录</a></li>
			<li class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13591479495aa6545202c3b9_07466453', 'style8');
?>
"><a href="index.php?c=login&a=doLogout">退出</a></li>
		</ul>
		<h3 class="fh5co-lead">Connect with us</h3>
		<p class="fh5co-social-icons">
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-instagram"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-youtube"></i></a>
		</p>
	</div>
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#" class="fh5co-menu-btn js-fh5co-menu-btn">Menu <i class="icon-menu"></i></a>
					<a class="navbar-brand" href="index.html">Xuhyx</a>		
				</div>
			</div>
		</div>
	</header>
	<!-- END .header -->
    
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14487707105aa65452030860_68841398', 'main');
?>

	<div class="set_up">
		<a href="#"><i class="fa fa-angle-double-up fa-4x"></i></a>
	</div>
	<footer id="fh5co-footer">
		
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="fh5co-social-icons">
						<a href="#"><i class="icon-twitter"></i></a>
						<a href="#"><i class="icon-facebook"></i></a>
						<a href="#"><i class="icon-instagram"></i></a>
						<a href="#"><i class="icon-dribbble"></i></a>
						<a href="#"><i class="icon-youtube"></i></a>
					</p>
					<p><small>DO YOUR BEST TO DO TODAY, TOMORROW YOU MIGHT HAVE DONE BETTER.</p>
				</div>
			</div>
		</div>
	</footer>


	<!-- jQuery -->
	<?php echo '<script'; ?>
 src="./Public/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./Public/dist/js/lib/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>

	<!-- jQuery Easing -->
	<?php echo '<script'; ?>
 src="./Public/js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
	<!-- Bootstrap -->
	<?php echo '<script'; ?>
 src="./Public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<!-- Waypoints -->
	<?php echo '<script'; ?>
 src="./Public/js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
	<!-- Magnific Popup -->
	<?php echo '<script'; ?>
 src="./Public/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
	<!-- Salvattore -->
	<?php echo '<script'; ?>
 src="./Public/js/salvattore.min.js"><?php echo '</script'; ?>
>
	<!-- Main JS -->
	<?php echo '<script'; ?>
 src="./Public/js/main.js"><?php echo '</script'; ?>
>
	<!-- Text Edit JS -->
    <?php echo '<script'; ?>
 type="text/javascript" src="./Public/dist/js/wangEditor.js"><?php echo '</script'; ?>
>
	<!-- Swiper -->
    <?php echo '<script'; ?>
 type="text/javascript" src="./Public/js/swiper-3.4.2.min.js"><?php echo '</script'; ?>
>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12932241905aa65452034e92_63529096', 'script');
?>


	
	</body>
</html>
<?php }
/* {block 'style'} */
class Block_16613875385aa65451f368a4_10381390 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php
}
}
/* {/block 'style'} */
/* {block 'style1'} */
class Block_6323587205aa65452009e45_88687971 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style1'} */
/* {block 'style2'} */
class Block_13290522565aa6545200dc03_75876955 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style2'} */
/* {block 'style3'} */
class Block_9321171005aa654520118f9_03124082 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style3'} */
/* {block 'style4'} */
class Block_6923235055aa65452015709_31526273 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style4'} */
/* {block 'style5'} */
class Block_16623175275aa6545201f575_02336503 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style5'} */
/* {block 'style6'} */
class Block_17364068265aa654520249b8_50523685 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style6'} */
/* {block 'style7'} */
class Block_9908982375aa65452028670_69469914 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style7'} */
/* {block 'style8'} */
class Block_13591479495aa6545202c3b9_07466453 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style8'} */
/* {block 'main'} */
class Block_14487707105aa65452030860_68841398 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php
}
}
/* {/block 'main'} */
/* {block 'script'} */
class Block_12932241905aa65452034e92_63529096 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
	<?php
}
}
/* {/block 'script'} */
}
