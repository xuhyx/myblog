<?php
/* Smarty version 3.1.30, created on 2018-03-09 04:36:55
  from "D:\xampp\htdocs\www\week6\day03\MyBlog\Admin\view\User\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa201573a2647_48127584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae45140250d1e73ea9894c18f243edff3e539caf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\www\\week6\\day03\\MyBlog\\Admin\\view\\User\\add.html',
      1 => 1520566613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5aa201573a2647_48127584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7439200015aa2015737e116_91433386', "style");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20923655395aa20157386104_29326412', 'class2');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12004768135aa20157395d12_62076527', "mainpanel");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13736487665aa201573a0967_89011254', "script");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "style"} */
class Block_7439200015aa2015737e116_91433386 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<style>
		.contentpanel{min-height: 500px;}
		.contentpanel>.row{width: 100%;}
		.contentpanel>.row .col-sm-9{width: 100%;}
		.contentpanel>.row .col-sm-9 .mt10{width: 100%;}
		.contentpanel>.row .col-sm-9 .mt10>.row{display: flex;justify-content: center; align-items: center;}
		.contentpanel>.row .col-sm-9 .mt10>.row ul{display: flex;width:260px ;justify-content: center;margin-bottom: 0;}
		.form{background: #e4e7ea;padding: 19px;max-width: 800px;}
		.form p input{width: 90%;padding: 10px;border-radius:5px;border: 1px solid #ccc;}
		.form .btn{width: 100px;height: 40px;border-radius: 5px;background: #fff;margin-right: 10px;}
		.xlg-title{height: 50px;line-height: 50px;}
	</style>

<?php
}
}
/* {/block "style"} */
/* {block 'class2'} */
class Block_20923655395aa20157386104_29326412 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

active
<?php
}
}
/* {/block 'class2'} */
/* {block "mainpanel"} */
class Block_12004768135aa20157395d12_62076527 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="mainpanel" >
	    <div class="contentpanel" style="min-height: 800px;">
	        <div class="row" style="width: 100%;">
	            <div class="col-sm-9" style="width: 100%;">
	                 <h5 class="md-title">用户</h5>
	                
	                
	              
	                <div class="well mt10" style="width: 100%;max-width: 800px;">
	                	
	                    <div class="row" style="display: flex;justify-content:flex-start; align-items: center;">
	                    	<ul class="nav nav-pills nav-stacked nav-contacts" style="display: flex;min-width:300px ;justify-content: center;margin: 0;align-items: center;align-self: center;">
			                    <li style="min-width: 135px;margin-right: 10px;">
			                        <a href="index.php?c=user&a=index" >
			                            	查看用户列表
			                            <span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
			                        </a>
			                    </li>
			                    <li class="active" style="width: 120px;">
			                        <a href="index.php?c=index&a=add" >
			                            	+ 添加用户
			                        </a>
			                    </li>
			                </ul>
	                       
	                        
	                    </div>
	                </div><!-- well -->
	                
	                <br />
	               
	                <h3 class="xlg-title">添加用户</h3>
	                
	                <div class="form">
	                	<form action="index.php?c=user&a=insert" method="post" enctype = "multipart/form-data">
	                		<p><input type="text" name="nickname" id="nickname" value="" placeholder="请输入昵称"/></p>
	                		<p><input type="password" name="password" id="password" value="" placeholder="请输入密码"/></p>
	                		<p><input type="password" name="password2" id="password2" value="" placeholder="请再次输入密码"/></p>
	                		<p><input type="tel" name="phone" id="phone" value="" placeholder="请输入手机号"/></p>
	                		<p>上传头像<input type="file" name="users_pic" id="users_pic" /></p>
	                		<input class="btn" type="submit" value="提交"/>
	                		<input class="btn" type="reset" value="重置"/>
	                	</form>
	                </div><!-- list-group -->
	                
	                
	                
	                
	            </div><!-- col-sm-9 -->
	        </div><!-- row -->  
	    
	    </div><!-- contentpanel -->
	    
	</div>

<?php
}
}
/* {/block "mainpanel"} */
/* {block "script"} */
class Block_13736487665aa201573a0967_89011254 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
	

<?php echo '<script'; ?>
>
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
