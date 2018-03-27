<?php
/* Smarty version 3.1.30, created on 2018-03-12 11:20:04
  from "D:\xampp\htdocs\www\week6\1520782100511594899\weekend\MyBlog\Home\view\Details\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa65454b2a609_75500056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30c39fac6e2af8ea77f88a0c34b6cd9a01064b16' => 
    array (
      0 => 'D:\\xampp\\htdocs\\www\\week6\\1520782100511594899\\weekend\\MyBlog\\Home\\view\\Details\\index.html',
      1 => 1520741396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Layouts/index.html' => 1,
  ),
),false)) {
function content_5aa65454b2a609_75500056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18149665125aa65454a98445_09555692', 'style');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17386444115aa65454b20110_46128127', 'main');
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3111122865aa65454b29029_76623585', 'script');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Layouts/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'style'} */
class Block_18149665125aa65454a98445_09555692 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<style>
	li,ol{list-style: none;}
	.container .article_breadcrumb{text-align: right;color: #181818;font-size: 14px;}
	.container a{text-decoration: none;color: #181818;}
	.container a:hover{color: #EF5353;}
	.container .article-title{padding-top: 10px;}
	.container .article-title .title{text-align: center;height: 80px;line-height: 80px;background: #fff;}
	.article-author{display: flex;justify-content: center;padding: 10px;color: #181818;}
	.article-author span{padding-right: 20px;font-size: 13px;color: #181818;}
	.article-author .author em{color: #EF5353;font-style: normal;}
	.article-author .num{display: flex;align-items: center;}
	.article-author .num .fa{width: 15px;height: 15px;margin-right: 5px;}
	.article-author .click_num .cl_icon{display: block;width: 15px;height: 15px;}
	.article_intro{padding-top: 20px;}
	.article_intro .intro{text-indent: 2em;}
	.article_contain{padding-top: 20px;}
	.article_contain p{text-indent: 2em;}
	.article_pic{text-align: center;}
	.article_pic img{}
	.back_article{background: #fff;padding: 20px 50px;}
	.container .link{padding:10px 50px;display: flex;justify-content: space-between;}
	.article_edit{float: right;}
	.article_edit a{padding: 5px;}
	.article_edit .del_article{padding-right: 10px;}
    #comment_edit {width: 90%;min-height: 150px;}
    #comment_btn{height: 40px;background:#EF5353 ;border: none;margin:10px 0 10px 20px;color:#fff;padding: 0 20px;border-radius: 5px;float: right;}
    #comment_btn:hover{background: #444;}
    .panel-body{padding: 20px 40px;background: #fff;position: relative;}
    .panel-body p{margin: 0;}
    .comment_title{position: absolute;margin: 0 5px;border-bottom: 3px solid salmon;left: 0;top: 0;}
    .comment_title strong{font-size: 14px;color: #fff;margin: -1px 0 5px;background: #EF5353;height: 24px;line-height: 24px;display: block;padding: 0 15px;}
    .commentList{padding:20px 0 0;margin: 0;}
    .commentList .item{display: flex;align-items:flex-start;padding: 10px 0;}
    .commentList .more{justify-content: flex-end;}
    .commentList .no_comment{margin: 0;height: 40px;line-height: 40px;justify-content: center;}
    .commentList .item .comment_pic{width: 54px;height: 54px;display: block;margin: 10px 20px 30px 0;}
    .commentList .item .comment_pic img{width: 54px;height: 54px;border-radius: 50%;padding: 1px;border: 1px solid #ccc;}
    .commentList .item .comment-main{border: 1px solid #ccc;border-radius: 3px;flex-grow: 1;}
    .commentList .item .comment-main .comment-meta{padding: 0 10px;display: flex;justify-content: space-between;background: #f8f8f8;font-size: 14px;height: 35px;line-height: 35px;}
    .commentList .item .comment-main .comment-meta .comment-author{color: #999;}
    .commentList .item .comment-main .comment-body{padding: 5px 10px;color: #666;font-size: 14px;line-height: 35px;}
    .panel-body .line{width: 100%;height: 1px;background: #f8f8f8;margin-bottom: 20px;}
</style>

<?php
}
}
/* {/block 'style'} */
/* {block 'main'} */
class Block_17386444115aa65454b20110_46128127 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
	<div id="fh5co-main">
		<div class="container">
			<div class="article_breadcrumb">当前位置：<a href="#">博客</a> / <a href="index.php?c=details&a=index&id=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</a></div>
			<div class="rows">
				<div class="article-title">
					<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</h2>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['nickname']->value == '海棠酒满') {?>
				
					<div class="article_edit"><a class="edit_article" href="#">编辑</a> / <a class="del_article" href="#">删除</a></div>
				
				<?php }?>
				<div class="article-author">
					<span class="author">作者：<em><?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>
</em></span>
					<span class="keywords">关键词：<?php echo $_smarty_tpl->tpl_vars['blog']->value['keywords'];?>
</span>
					<span class="insert_at"><?php echo $_smarty_tpl->tpl_vars['blog']->value['insert_at'];?>
</span>
					<span class="click_num num"><a href="#"><i class="fa fa-eye"></i><?php echo $_smarty_tpl->tpl_vars['blog']->value['click_num'];?>
</a></span>
					<span class="replay_num num"><a href="#comment" name="comment"><i class="fa fa-commenting-o"></i><?php echo $_smarty_tpl->tpl_vars['blog']->value['up_num'];?>
</a></span>
				</div>
				<div class="back_article">
					<div class="article_intro">
						<p class="intro"><?php echo $_smarty_tpl->tpl_vars['blog']->value['intro'];?>
...</p>
					</div>
					<div class="article_pic">
						<img src="../Public/Uploads/ArticlePic/<?php echo $_smarty_tpl->tpl_vars['blog']->value['picture'];?>
"/>
					</div>
					<div class="article_contain">
						<?php echo $_smarty_tpl->tpl_vars['blog']->value['details'];?>

					</div>
				</div>
				<div class="link">
					<?php if ($_smarty_tpl->tpl_vars['prev']->value == false) {?>
						<div class="article_link"><a href="##">上一篇：<span class="prev_article">无</span></a></div>
					<?php } else { ?>
					<div class="article_link"><a href="index.php?c=details&a=index&id=<?php echo $_smarty_tpl->tpl_vars['prev']->value['id'];?>
">上一篇：<span class="prev_article"><?php echo $_smarty_tpl->tpl_vars['prev']->value['title'];?>
</span></a></div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['next']->value == false) {?>
					<div class="article_link"><a href="##">下一篇：<span class="next_article">无</span></a></div>
					<?php } else { ?>
				    <div class="article_link"><a href="index.php?c=details&a=index&id=<?php echo $_smarty_tpl->tpl_vars['next']->value['id'];?>
">下一篇：<span class="next_article"><?php echo $_smarty_tpl->tpl_vars['next']->value['title'];?>
</span></a></div>
				    <?php }?>
				</div>
			</div>
			<div class="panel-body" id="comment">
				<div class="comment_title">
					<strong>评论区</strong>
				</div>
				<ul class="commentList">
					<?php if (empty($_smarty_tpl->tpl_vars['comment']->value)) {?>
					<li class="item no_comment">
						<p>暂无任何评论</p>
					</li>
					<?php } else { ?>
			    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?> 
		            <li class="item"> 
		            	<a href="#" class="comment_pic"><img alt="" src="../Public/Uploads/headerPic/<?php echo $_smarty_tpl->tpl_vars['v']->value['users_pic'];?>
">
		            	</a>
		                <div class="comment-main">
		                    <header class="comment-header">
		                        <div class="comment-meta">
		                        	<span class="comment-author" ><?php echo $_smarty_tpl->tpl_vars['v']->value['nickname'];?>
</span>
		                            <time title="<?php echo $_smarty_tpl->tpl_vars['v']->value['insert_at'];?>
" datetime="<?php echo $_smarty_tpl->tpl_vars['v']->value['insert_at'];?>
" class="f-r"><?php echo $_smarty_tpl->tpl_vars['v']->value['insert_at'];?>
</time>
		                        </div>
		                    </header>
		                    <div class="comment-body">
		                        <p><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</p>
		                    </div>
		                </div>
		            </li>
			    	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			    	<?php }?>
			    	<?php if ($_smarty_tpl->tpl_vars['num']->value > 5 && $_smarty_tpl->tpl_vars['more']->value == '' || $_smarty_tpl->tpl_vars['more']->value == 'less') {?>
			    	
			    	<li class="item more">
			    		<a href="index.php?c=details&a=index&id=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
&m=more#comment" name="comment">更多评论>></a>
			    	</li>
			    	<?php } elseif ($_smarty_tpl->tpl_vars['num']->value > 5 && $_smarty_tpl->tpl_vars['more']->value == 'more') {?>
			    	<li class="item more">
			    		<a href="index.php?c=details&a=index&id=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
&m=less#comment" name="comment">收起评论>></a>
			    	</li>
			    	<?php }?>
		    	</ul>
		    	<div class="line"></div>
		    	<form action="index.php?c=details&a=replay&id=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" method="post">
			        <textarea id="comment_edit" name='comment'>
			            
			        </textarea>
			        <button id="comment_btn" type="submit" disabled="disabled">发 表 评 论</button>
		        </form>
		    </div>
	</div>
<?php
}
}
/* {/block 'main'} */
/* {block 'script'} */
class Block_3111122865aa65454b29029_76623585 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php echo '<script'; ?>
 type="text/javascript">
		var rate=$('.article_pic img').width()/$('.article_pic img').height();
		function imgSize(){
			var w=$('.container .rows').width()*0.8;
			
			if(rate>1){
				$('.article_pic img').width(w);
			}else{
				$('.article_pic img').height(w);
			}
			$('.article_pic img').height();
			console.log(rate);
		}
		$(window).resize(function(){
			imgSize()
		})
        $(function () {
            imgSize();
            var editor = new wangEditor('comment_edit');

            // 自定义菜单
            editor.config.menus = [
                'source',
		        '|',
		        'bold',
		        'underline',
		        'italic',
		        'strikethrough',
		        'eraser',
		        'forecolor',
		        'bgcolor',
		        '|',
		        'fontfamily',
		        'fontsize',
		        'emotion',
		        '|',
		        'undo',
		        'redo',
		        'fullscreen'
            ];
            
            //控制字数
			editor.onchange = function () {
		        // 编辑区域内容变化时，实时打印出当前内容
		        if(this.$txt.html()==''){
		        	$('#comment_btn').prop('disabled','disabled');
		        }else{
		        	$('#comment_btn').prop('disabled','');
		        }
		    };
            editor.create();
            $('#comment_btn').click(function () {
		        
			    
    		});

        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'script'} */
}
