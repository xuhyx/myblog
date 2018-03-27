<?php
/* Smarty version 3.1.30, created on 2018-03-11 07:40:36
  from "D:\wamp64\www\week6\day05\MyBlog\Admin\view\Article\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa4dd747392b7_17598254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af0ad5590b968b4efbb2cdd8460a08d59c664f1c' => 
    array (
      0 => 'D:\\wamp64\\www\\week6\\day05\\MyBlog\\Admin\\view\\Article\\add.html',
      1 => 1520582019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5aa4dd747392b7_17598254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40515aa4dd7470a4a4_42458058', "style");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140965aa4dd74719ea6_65216612', 'class3');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5215aa4dd74735422_60562690', "mainpanel");
?>



<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "style"} */
class Block_40515aa4dd7470a4a4_42458058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<style>
		.contentpanel{min-height: 500px;}
		.contentpanel>.row{width: 100%;}
		.contentpanel>.row>.col-sm-9{width: 100%;float: none;}
		.contentpanel>.row>.col-sm-9 .mt10{width: 100%;}
		.contentpanel>.row>.col-sm-9 .mt10>.row{display: flex;justify-content: center; align-items: center;}
		.contentpanel>.row>.col-sm-9 .mt10>.row ul{display: flex;min-width:300px ;justify-content: center;margin: 0;}
		.form{padding: 19px;max-width: 800px;}
		.form p input{width: 90%;padding: 10px;border-radius:5px;border: 1px solid #ccc;}
		.form p textarea{width: 90%;padding: 10px;border-radius:5px;border: 1px solid #ccc;min-height: 250px;}
		.form .btn{width: 100px;height: 40px;border-radius: 5px;background: #fff;margin-right: 10px;}
		.search_submit{width: 120px;margin-left: 20px;border: none;background: #337ab7;color: #fff;font-size: 17px;height: 30px;border-radius: 5px;}
		.xlg-title{height: 50px;line-height: 50px;}
	</style>

<?php
}
}
/* {/block "style"} */
/* {block 'class3'} */
class Block_140965aa4dd74719ea6_65216612 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

active
<?php
}
}
/* {/block 'class3'} */
/* {block "mainpanel"} */
class Block_5215aa4dd74735422_60562690 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="mainpanel">
	    <div class="contentpanel">
	        <div class="row">
	            <form class="col-sm-9" action="index.php?c=article&a=index" method="post">
	                <h5 class="md-title">文章</h5>
	                <div class="well mt10">
	                    <div class="row">
	                    	<ul class="nav nav-pills nav-stacked nav-contacts">
			                    <li style="min-width: 135px;margin-right: 10px;">
			                        <a href="index.php?c=article&a=index" >
			                            	查看文章列表
			                            <span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
			                        </a>
			                    </li>
			                    <li class="active" style="width: 120px;">
			                        <a href="index.php?c=article&a=add" >
			                            	+ 添加文章
			                        </a>
			                    </li>
			                </ul>
	                        <div class="col-sm-9" style="float: left;height: 40px;">
	                            <input type="text" placeholder="查找文章" class="form-control" name="search" id="uvalue">
	                        </div>
	                        <div class="col-sm-3" style="width:100px;float: left;">
	                            <select id="search-type" class="" data-placeholder="Search Type" style="width: 100px;height: 30px;" name="searchCondition" >
	                                <option value="title" selected>标题</option>
	                                <option value="author">作者</option>
	                                <option value="intro">简介</option>
	                                <option value="keywords">关键词</option>
	                                <option value="phone">时间</option>
	                            </select>
	                        </div>
	                       	<input class="search_submit" type="submit" value="查询"/>
	                    </div>
	                </div><!-- well -->
	            </form>
                <br />
                <h3 class="xlg-title" >添加文章</h3>
                <div class="form">
                	<form action="index.php?c=article&a=insert" method="post" enctype = "multipart/form-data">
                		<p><input type="text" name="title" id="title" value="" placeholder="请输入标题"/></p>
                		<p><input type="text" name="author" id="author" value="" placeholder="请输入作者"/></p>
                		<p><input type="text" name="intro" id="intro" value="" placeholder="请输入简介"/></p>
                		<p><textarea name="details" id="details" value="" placeholder="请输入文章内容"></textarea></p>
                		<p><input type="text" name="keywords" id="keywords" value="" placeholder="请输入关键词"/></p>
                		<p style="line-height: 25px;">上传图片<input type="file" name="picture" id="picture" /></p>
                		<input class="btn" type="submit" value="提交"/>
                		<input class="btn" type="reset" value="重置"/>
                	</form>
                </div>
	            
	        </div><!-- row -->  
	    
	    </div><!-- contentpanel -->
	    
	</div>

<?php
}
}
/* {/block "mainpanel"} */
}
