<?php
/* Smarty version 3.1.30, created on 2018-03-09 04:37:02
  from "D:\xampp\htdocs\www\week6\day03\MyBlog\Admin\view\User\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa2015e94a827_22747645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dda65817bbc93afad00e3315cea636d8cde0e4a0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\www\\week6\\day03\\MyBlog\\Admin\\view\\User\\edit.html',
      1 => 1520566531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5aa2015e94a827_22747645 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8009601315aa2015e91cfa5_22616599', "style");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7965586175aa2015e921270_94540084', 'class2');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17573947875aa2015e948746_18521903', "mainpanel");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "style"} */
class Block_8009601315aa2015e91cfa5_22616599 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<style>
		.form{background: #e4e7ea;padding: 19px;max-width: 800px;}
		.form span{display: block;height: 30px;line-height: 30px;}
		.form img{width: 100px;height: 100px;margin: 10px 20px 10px 0;}
		.form p input{width: 90%;padding: 10px;border-radius:5px;border: 1px solid #ccc;}
		.form p #users_pic{width: 70%;}
		.form p label{width: 20%;}
		.form p .status{width: 30%;font-size: 30px;}
		.form .btn{width: 100px;height: 40px;border-radius: 5px;background: #fff;margin-right: 10px;}
		.xlg-title{height: 50px;line-height: 50px;}
	</style>

<?php
}
}
/* {/block "style"} */
/* {block 'class2'} */
class Block_7965586175aa2015e921270_94540084 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

active
<?php
}
}
/* {/block 'class2'} */
/* {block "mainpanel"} */
class Block_17573947875aa2015e948746_18521903 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="mainpanel" >
	    <div class="contentpanel page_edit">
	        <div class="row">
	            <div class="col-sm-9">
	                 <h5 class="md-title">用户</h5>
	                
	                
	              
	                <div class="well mt10">
	                	
	                    <div class="row" style="display: flex;justify-content: center; align-items: center;">
	                    	<ul class="nav nav-pills nav-stacked nav-contacts">
			                    <li class="read_list">
			                        <a href="index.php?c=user&a=index" >
			                            	查看用户列表
			                            <span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
			                        </a>
			                    </li>
			                    <li class="add_article">
			                        <a href="index.php?c=user&a=add" >
			                            	+ 添加用户
			                        </a>
			                    </li>
			                </ul>
	                        <div class="col-sm-9" style="float: left;height: 40px;flex-grow: 1;">
	                            <input type="text" placeholder="查找用户" class="form-control">
	                        </div>
	                        <div class="col-sm-3" style="width:150px;float: left;">
	                            <select id="search-type" class="" data-placeholder="Search Type" style="width: 100px;>
	                               
	                                <option value="nickname" selected>昵称</option>
	                                <option value="status">状态</option>
	                                <option value="phone">手机号</option>
	                            </select>
	                        </div>
	                    </div>
	                </div><!-- well -->
	                
	                <br />
	               
	                <h3 class="xlg-title">编辑用户</h3>
	                
	                <div class="form">
	                	<form action="index.php?c=user&a=update&eid=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
&pic=<?php echo $_smarty_tpl->tpl_vars['info']->value['users_pic'];?>
" method="post" enctype = "multipart/form-data">
	                		<span>修改头像</span>
	                		<p style="display: flex;align-items: center;"><img src="../Public/Uploads/headerPic/<?php echo $_smarty_tpl->tpl_vars['info']->value['users_pic'];?>
"/><input type="file" name="users_pic" id="users_pic" /></p>
	                		<p><input type="text" name="nickname" id="nickname" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['nickname'];?>
" placeholder="请输入昵称"/></p>
	                		<p><input type="password" name="password" id="password" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['password'];?>
" placeholder="请输入密码"/></p>
	                		
	                		<p><input type="tel" name="phone" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['phone'];?>
" placeholder="请输入手机号"/></p>
	                		<p>
	                			<label><input value="0" type="radio" name="status" class="status" <?php if ($_smarty_tpl->tpl_vars['info']->value['status'] == 0) {?>checked<?php } else {
}?>>锁定</label>
	                			<label><input value="1" type="radio" name="status" class="status" <?php if ($_smarty_tpl->tpl_vars['info']->value['status'] == 1) {?>checked<?php } else {
}?>>激活</label>
	                		</p>
	                		
	                		
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
}
