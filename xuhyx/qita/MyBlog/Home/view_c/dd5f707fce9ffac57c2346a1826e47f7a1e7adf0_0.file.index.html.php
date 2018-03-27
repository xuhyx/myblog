<?php
/* Smarty version 3.1.30, created on 2018-03-12 11:20:01
  from "D:\xampp\htdocs\www\week6\1520782100511594899\weekend\MyBlog\Home\view\Index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa65451f20168_92786082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd5f707fce9ffac57c2346a1826e47f7a1e7adf0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\www\\week6\\1520782100511594899\\weekend\\MyBlog\\Home\\view\\Index\\index.html',
      1 => 1520742261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5aa65451f20168_92786082 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\xampp\\htdocs\\www\\week6\\1520782100511594899\\weekend\\MyBlog\\Home\\Libs\\smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12323037225aa65451ee1695_66609938', 'style');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16935247695aa65451ee7869_31873207', 'style1');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4721297895aa65451f1df53_38795932', 'main');
?>

	<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style'} */
class Block_12323037225aa65451ee1695_66609938 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
	#fh5co-board .item .fh5co-desc {
	  padding: 10px;
	  float: left;
	  line-height: 20px;
	  font-size: 13px;
	}
	#fh5co-board .item .fh5co-info{
		width: 100%;
		padding-top: 0;
		font-size: 12px;
		display: flex;justify-content: space-between;
	}
	#fh5co-board .intro{
		text-decoration: none;
		color: #818892;
	}
	#fh5co-board .intro:hover{
		color: #EF5353;
	}
	#fh5co-board .item .fh5co-info .fa{
	  width: 15px;
	  height: 15px;
	 margin: 0 5px 0 10px;
	}
	#fh5co-board .item .fh5co-info .icon{
	  display: flex;
	}
	#fh5co-board .item .fh5co-info .icon a{
	    text-decoration: none;
		color: #818892;
	}
	#fh5co-board .item .fh5co-info .icon a:hover{
	    color: #EF5353;
	}
</style>
<?php
}
}
/* {/block 'style'} */
/* {block 'style1'} */
class Block_16935247695aa65451ee7869_31873207 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

active
<?php
}
}
/* {/block 'style1'} */
/* {block 'main'} */
class Block_4721297895aa65451f1df53_38795932 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
	<div id="fh5co-main">
		<div class="container">

			<div class="row">

        <div id="fh5co-board" data-columns>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        	<div class="item">
        		<div class="animate-box">
	        		<a href="../Public/Uploads/ArticlePic/<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
" class="image-popup fh5co-board-img" title=""><img src="../Public/Uploads/ArticlePic/<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"></a>
        		</div>
        		
        		<div class="fh5co-desc"><a class="intro" href="index.php?c=details&a=index&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['intro'],45);?>
</a></div>
        		<div class="fh5co-desc fh5co-info">
            		<span class="insert_at"><?php echo $_smarty_tpl->tpl_vars['v']->value['insert_at'];?>
</span>
            		<div class="icon">
            			<span class="click_num num"><a href="#"><i class="fa fa-eye"></i><?php echo $_smarty_tpl->tpl_vars['v']->value['click_num'];?>
</a></span>
            			<span class="up_num num"><a href="#"><i class="fa fa-commenting-o"></i><?php echo $_smarty_tpl->tpl_vars['v']->value['up_num'];?>
</a></span>
            		</div>
            		
        		</div>
        	</div>
        	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        </div>
       </div>
	</div>
<?php
}
}
/* {/block 'main'} */
}
