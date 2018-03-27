<?php
/* Smarty version 3.1.30, created on 2018-03-13 06:48:32
  from "D:\xampp\htdocs\www\week6\1520782100511594899\weekend\MyBlog\Home\view\Article\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa766306a2bb7_77437702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dc346c1abf22bd9868aa33d269b289812d645d0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\www\\week6\\1520782100511594899\\weekend\\MyBlog\\Home\\view\\Article\\index.html',
      1 => 1520776170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5aa766306a2bb7_77437702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19585930405aa766305d25a4_69619673', "style");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2551957675aa766305d7b46_46145889', 'style2');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_521828865aa76630697b48_12654240', 'main');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_808153825aa766306a1135_02102208', "script");
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "style"} */
class Block_19585930405aa766305d25a4_69619673 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="./Public/css/swiper-3.4.2.min.css">

	<style>
		.container a{text-decoration: none;color: #181818;}
		.container a:hover{color:#EF5353 ;}
		.container li a{text-decoration: none;color: #181818;}
		.container li a:hover{color:#EF5353 ;}
		.container>.row{width: 100%;}
		.container>.row form{padding: 0;}
		.container>.row>.col-sm-9{width: 100%;}
		.container>.row>.col-sm-9 .mt10{width: 100%;}
		.container>.row>.col-sm-9 .mt10>.row{display: flex;justify-content: center; align-items: center;}
		.container>.row>.col-sm-9 .mt10>.row>.text_input{padding: 0;}
		.container>.row>.col-sm-9 .mt10>.row>.search-type{padding: 0 0 0 10px;}
		.container>.row>.col-sm-9 .mt10>.row ul{display: flex;min-width:300px ;margin: 0;padding: 0 10px;}
		.list-group-item{display: flex;align-items: center;width: 100%;}
		.list-group-item .picture{height: 100px;width: 170px;text-align: center;margin-right: 20px;}
		.list-group-item .picture img{height: 100px;}
		.contact-group .list-group-item{margin-bottom: 15px;border-radius: 5px;}
		.contact-group .list-group-item .media-body{flex-flow: 1;display: flex;flex-direction: column;width: 100%;align-items: flex-start;}
		.contact-group .list-group-item .media-body h3{height: 40px;line-height: 40px;font-size: 24px;margin: 0;}
		.contact-group .list-group-item .title-a{display: flex;flex-direction: row;}
		.contact-group .list-group-item .title-a .title{font-size: 22px;}
		.contact-group .list-group-item .title-a .author{padding: 15px 0 0 20px;}
		.contact-group .list-group-item .author-info{display: flex;flex-direction: row;width: 100%;font-size: 12px;}
		.contact-group .list-group-item .author-info span{padding-right: 20px;height: 30px;line-height: 30px;min-width: 50px;}
		.contact-group .list-group-item .author-info .insert_at{flex-grow: 1;}
		.contact-group .list-group-item .author-info .keywords em{color: #EF5353;font-style: normal;}
		.contact-group .list-group-item .author-info .num{display: flex;flex-direction: row;align-items: center;}
		.contact-group .list-group-item .author-info .fa{width: 15px;height: 15px;margin-right: 5px;}
		.contact-group .list-group-item .author-info .edit{width: 100px;padding: 0;display: flex;justify-content: space-around;}
		.contact-group .list-group-item .intro{line-height: 25px;font-size: 14px;}
		.search_submit{width: 120px;margin:0 10px;border: none;background: #EF5353;color: #fff;font-size: 17px;height: 30px;border-radius: 5px;}
		.swiper-container{height: 300px;width: 100%;margin-bottom: 20px;}
		.swiper-container .swiper-wrapper{width: 100%;height: auto;top: 50%;}
		.swiper-container img{width: 100%;}
		
	</style>

<?php
}
}
/* {/block "style"} */
/* {block 'style2'} */
class Block_2551957675aa766305d7b46_46145889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

active
<?php
}
}
/* {/block 'style2'} */
/* {block 'main'} */
class Block_521828865aa76630697b48_12654240 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="fh5co-main">
	    <div class="container">
	        <div class="row">
	        	<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banner']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
					    <div class="swiper-slide"><img src="../Public/Uploads/BannerPic/<?php echo $_smarty_tpl->tpl_vars['v']->value['filename'];?>
"/></div>
					    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</div>
					<div class="swiper-pagination"></div>
				</div>
	            <form class="col-sm-9" action="index.php?c=article&a=index" method="post">
	                <div class="well mt10">
	                    <div class="row">
	                    	<ul class="nav nav-pills nav-stacked nav-contacts">
			                    <li class="active" style="min-width: 135px;margin-right: 10px;">
			                        <a href="index.php?c=article&a=index" style="display: flex;align-items: center;">
			                            	查看文章列表
			                            <span class="badge pull-right" style=""><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
			                        </a>
			                    </li>
			                    <?php if ($_smarty_tpl->tpl_vars['nickname']->value == '海棠酒满') {?>
			                    <li style="width: 120px;">
			                        <a href="index.php?c=article&a=add" >
			                            	+ 添加文章
			                        </a>
			                    </li>
			                    <?php }?>
			                </ul>
			                
	                        <div class="col-sm-9 text_input" style="float: left;height: 40px;">
	                            <input type="text" placeholder="查找文章" class="form-control" name="search" id="uvalue">
	                        </div>
	                        <div class="col-sm-3 search-type" style="width:100px;float: left;">
	                            <select id="search-type" class="" data-placeholder="Search Type" style="width: 80px;height: 30px;" name="searchCondition" >
	                                <option value="title" selected>标题</option>
	                                <option value="author">作者</option>
	                                <option value="intro">简介</option>
	                                <option value="keywords">关键词</option>
	                                <option value="phone">时间</option>
	                            </select>
	                        </div>
	                       		<input class="search_submit" type="submit" value="查询" style=""/>
	                    </div>
	                </div><!-- well -->
	                 </form>
	                <br />
	                <div class="pull-right">
	                    <ul class="pagination pagination-split pagination-sm pagination-contact" >
	                    	<li><a href="index.php?c=article&a=index&num=1<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">首页</a></li>
	                        <li class="<?php if ($_smarty_tpl->tpl_vars['num']->value == 1) {?>disabled<?php } else {
}?>"><a href="<?php if ($_smarty_tpl->tpl_vars['num']->value > 1) {?>index.php?c=article&a=index&num=<?php echo $_smarty_tpl->tpl_vars['num']->value-1;
echo $_smarty_tpl->tpl_vars['url']->value;
} else {
}?>"><i class="fa fa-angle-left"></i></a></li>
	                        <?php if ($_smarty_tpl->tpl_vars['page']->value <= 6) {?>
		                        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
		                       	<li style="" class='<?php if ($_smarty_tpl->tpl_vars['foo']->value == $_smarty_tpl->tpl_vars['num']->value) {?>active<?php }?>'><a href="index.php?c=article&a=index&num=<?php echo $_smarty_tpl->tpl_vars['foo']->value;
echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
		                        <?php }
}
?>

		                    <?php } elseif ($_smarty_tpl->tpl_vars['num']->value <= 3) {?>
		                    	<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 6+1 - (1) : 1-(6)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
		                       	<li style="" class='<?php if ($_smarty_tpl->tpl_vars['foo']->value == $_smarty_tpl->tpl_vars['num']->value) {?>active<?php }?>'><a href="index.php?c=article&a=index&num=<?php echo $_smarty_tpl->tpl_vars['foo']->value;
echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
		                        <?php }
}
?>

		                        <li class="disabled"><a href="##" style="cursor: default;">...</a></li>
		                    <?php } elseif ($_smarty_tpl->tpl_vars['num']->value >= $_smarty_tpl->tpl_vars['page']->value-3) {?>
		                    	<li class="disabled"><a href="##" style="cursor: default;">...</a></li>
		                    	<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['page']->value+1 - ($_smarty_tpl->tpl_vars['page']->value-5) : $_smarty_tpl->tpl_vars['page']->value-5-($_smarty_tpl->tpl_vars['page']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['page']->value-5, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
		                       	<li style="" class='<?php if ($_smarty_tpl->tpl_vars['foo']->value == $_smarty_tpl->tpl_vars['num']->value) {?>active<?php }?>'><a href="index.php?c=article&a=index&num=<?php echo $_smarty_tpl->tpl_vars['foo']->value;
echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
		                        <?php }
}
?>
   
		                    
	                        <?php } else { ?>
	                    		<li class="disabled"><a href="##" style="cursor: default;">...</a></li>
	                        	<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['num']->value+3+1 - ($_smarty_tpl->tpl_vars['num']->value-2) : $_smarty_tpl->tpl_vars['num']->value-2-($_smarty_tpl->tpl_vars['num']->value+3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['num']->value-2, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
		                       	<li style="" class='<?php if ($_smarty_tpl->tpl_vars['foo']->value == $_smarty_tpl->tpl_vars['num']->value) {?>active<?php }?>'><a href="index.php?c=article&a=index&num=<?php echo $_smarty_tpl->tpl_vars['foo']->value;
echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
		                        <?php }
}
?>

	                    		<li class="disabled"><a href="##" style="cursor: default;">...</a></li>
	                        <?php }?>
	                        <li class="<?php if ($_smarty_tpl->tpl_vars['num']->value == $_smarty_tpl->tpl_vars['page']->value) {?>disabled<?php } else {
}?>"><a href="<?php if ($_smarty_tpl->tpl_vars['num']->value < $_smarty_tpl->tpl_vars['page']->value) {?>index.php?c=article&a=index&num=<?php echo $_smarty_tpl->tpl_vars['num']->value+1;
echo $_smarty_tpl->tpl_vars['url']->value;
} else {
}?>"><i class="fa fa-angle-right"></i></a></li>
	                    	<li><a href="index.php?c=article&a=index&num=<?php echo $_smarty_tpl->tpl_vars['page']->value;
echo $_smarty_tpl->tpl_vars['url']->value;?>
">尾页</a></li>
	                    	<li class="disabled"><a href="##" style="cursor: default;">共<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
页</a></li>
	                    </ul>
	              </div>
	                <h3 class="xlg-title">文章列表</h3>
	                
	                <div class="list-group contact-group">
	                	<?php if ($_smarty_tpl->tpl_vars['select']->value == false) {?>
	                	<div class="list-group-item null"  style="justify-content: center;">
	                		<h3>------- 未搜索到相关内容 --------</h3>
	                	</div><!-- list-group-item -->
	                	<?php } else { ?>
	                	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['select']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
	                    <div class="list-group-item">
	                    	<div class="picture">
		                        <img class="" src="../Public/Uploads/articlePic/th_<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
" alt="...">
	                    	</div>
	                        <div class="media-body">
	                        	<div class="title-a"><h3 class="title"><a href="index.php?c=details&a=index&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo strip_tags($_smarty_tpl->tpl_vars['v']->value['title']);?>
</a></h3><span class="author"><?php echo $_smarty_tpl->tpl_vars['v']->value['author'];?>
</span></div>
	                        	<div class="author-info">
	                        		<span class="keywords">关键词：<em><?php echo strip_tags($_smarty_tpl->tpl_vars['v']->value['keywords']);?>
</em></span>
	                        		<span class="insert_at">上传时间：<?php echo strip_tags($_smarty_tpl->tpl_vars['v']->value['insert_at']);?>
</span>
	                        		<span class="click_num num"><a href="##"><i class="fa fa-eye"></i><?php echo strip_tags($_smarty_tpl->tpl_vars['v']->value['click_num']);?>
</a></span>
	                        		<span class="up_num num"><a href="#"><i class="fa fa-commenting-o"></i><?php echo strip_tags($_smarty_tpl->tpl_vars['v']->value['up_num']);?>
</a></span>
	                        		<?php if ($_smarty_tpl->tpl_vars['nickname']->value == '海棠酒满') {?>
	                        		<span class="edit"><a href="index.php?c=article&a=edit&eid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a><a href="index.php?c=article&a=delete&eid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&pic=<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
">删除</a></span>
	                        		<?php }?>
	                        	</div>
	                        	
	                        	<p class="intro"><?php echo strip_tags($_smarty_tpl->tpl_vars['v']->value['intro']);?>
</p>
	                        </div><!-- media-body -->
	                    </div><!-- list-group -->
	                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	                    <?php }?>
	                </div><!-- list-group-item -->
	                
	                
	                
	                
	            
	        </div><!-- row -->  
	    
	    </div><!-- contentpanel -->
	    
	</div>

<?php
}
}
/* {/block 'main'} */
/* {block "script"} */
class Block_808153825aa766306a1135_02102208 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
	
<?php echo '<script'; ?>
 type="text/javascript" src="./Public/js/swiper-3.4.2.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	function autoSwiper(){
		var mySwiper = new Swiper('.swiper-container', {
			speed:5000,
			autoplay:true,
			loop : true,
		})
		var h=-$('.swiper-slide').height()/2+"px";
		$('.swiper-slide').css({
			"transform":"translateY("+h+")"
		});
	}
	autoSwiper();
	$(window).resize(function(){
		autoSwiper();
	})
	
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
