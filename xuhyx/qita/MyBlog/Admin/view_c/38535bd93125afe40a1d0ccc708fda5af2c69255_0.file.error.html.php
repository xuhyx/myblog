<?php
/* Smarty version 3.1.30, created on 2018-03-10 06:21:25
  from "D:\wamp64\www\week6\day05\MyBlog\Admin\view\error.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa3796587b163_03911405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38535bd93125afe40a1d0ccc708fda5af2c69255' => 
    array (
      0 => 'D:\\wamp64\\www\\week6\\day05\\MyBlog\\Admin\\view\\error.html',
      1 => 1520582019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa3796587b163_03911405 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>系统错误</title>
        <link href="./Public/css/404.css" rel="stylesheet" type="text/css" />
        <?php echo '<script'; ?>
 src="./Public/js/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 type="text/javascript">
            $(function() {
                var h = $(window).height();
                $('body').height(h);
                $('.mianBox').height(h);
                centerWindow(".tipInfo");
            });

            //2.将盒子方法放入这个方，方便法统一调用
            function centerWindow(a) {
                center(a);
                //自适应窗口
                $(window).bind('scroll resize',
                        function() {
                            center(a);
                        });
            }

            //1.居中方法，传入需要剧中的标签
            function center(a) {
                var wWidth = $(window).width();
                var wHeight = $(window).height();
                var boxWidth = $(a).width();
                var boxHeight = $(a).height();
                var scrollTop = $(window).scrollTop();
                var scrollLeft = $(window).scrollLeft();
                var top = scrollTop + (wHeight - boxHeight) / 2;
                var left = scrollLeft + (wWidth - boxWidth) / 2;
                $(a).css({
                    "top": top,
                    "left": left
                });
            }
        <?php echo '</script'; ?>
>
        
    </head>
    <body>
        <div class="mianBox">
            <img src="./Public/images/yun0.png" alt="" class="yun yun0" />
            <img src="./Public/images/yun1.png" alt="" class="yun yun1" />
            <img src="./Public/images/yun2.png" alt="" class="yun yun2" />
            <img src="./Public/images/bird.png" alt="" class="bird" />
            <img src="./Public/images/san.png" alt="" class="san" />
            <div class="tipInfo">
                <div class="in">
                    <div class="textThis">
                        <h2><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>
                        <p><span>页面自动<a id="href" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">跳转</a></span><span>等待<b id="wait"><?php echo $_smarty_tpl->tpl_vars['seconds']->value;?>
</b>秒</span></p>
                        
                        <?php echo '<script'; ?>
 type="text/javascript">                            (function() {
                                var wait = document.getElementById('wait'), href = document.getElementById('href').href;
                                var interval = setInterval(function() {
                                    var time = --wait.innerHTML;
                                    if (time <= 0) {
                                        location.href = href;
                                        clearInterval(interval);
                                    }
                                    ;
                                }, 1000);
                            })();
                        <?php echo '</script'; ?>
>
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html><?php }
}
