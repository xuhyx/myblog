<?php
/* Smarty version 3.1.30, created on 2018-03-13 06:49:17
  from "D:\xampp\htdocs\www\week6\1520782100511594899\weekend\MyBlog\Home\view\Login\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa7665ded5a85_83974502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '457d1c5738e3d6844e9d5cd6ff26c1d12d131bd9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\www\\week6\\1520782100511594899\\weekend\\MyBlog\\Home\\view\\Login\\index.html',
      1 => 1520582019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa7665ded5a85_83974502 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<head>
<title>Xuhyx的个人博客</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php echo '<script'; ?>
 src="./Public/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./Public/js/register.js"><?php echo '</script'; ?>
>
<link href="./Public/css/login2.css" rel="stylesheet" type="text/css" />

<style>
	body {
		font-family:"Microsoft Yahei";
		font-size:12px;
		margin:0;
		background: #fff url(./Public/images/1.jpg) 50% 0 no-repeat;
	}
	.web_login .input-tips {
		float:left;
		text-align:right;
		padding-right:10px;
		margin-top:10px;
		width:75px;
		height:42px;
		font-size:16px;
		line-height:42px;
		font-family:"Hiragino Sans GB", "Microsoft Yahei";
	}
	.area{
		width: 300px;
		height: 60px;
		margin: 0;
	}
	.web_login .login_form {
		width:300px;
		margin:0 auto;
	}
	.header .switch{
		display: flex;
		justify-content: space-around;
		align-items: center;
		width: 100%;
		left: 0;
		border-bottom: 2px solid transparent;
	}
	.switch a{
		padding: 0 15px;
		margin: 0;
		border-bottom: 2px solid transparent;
	}
	.switch .active{
		border-bottom: 2px solid #848484;
	}
	.header .switch #switch_qlogin{
		
		margin: 0;
	}
	#cArea{
		width: 107px;
	}
	#cArea .inputstyle{
		width: 90px;
		margin-right: 10px;
		vertical-align: middle;
	}
	.vcode_pic {
		float: left;
		margin-top: 11px;
		vertical-align: middle;
	}
</style>

</head>
<body>
<h1>Xuhyx的个人博客<sup>V2018</sup></h1>

<div class="login" style="margin-top:50px;">
    
    <div class="header">
        <div class="switch" id="switch">
        	<a class="switch_btn_focus active" id="switch_qlogin" href="javascript:void(0);" tabindex="7">登录</a>
			<a class="switch_btn" id="switch_login" href="javascript:void(0);" tabindex="8">快速注册</a>
			
        </div>
    </div>    
  
    
    <div class="web_qr_login" id="web_qr_login" style="display: block; height: 270px;margin-top: 20px;">    

            <!--登录-->
            <div class="web_login" id="web_login">
               
               
               <div class="login-box">
    
            
			<div class="login_form">
				<form action="index.php?c=login&a=doLogin" name="loginform" accept-charset="utf-8" id="login_form" class="loginForm" method="post"><input type="hidden" name="did" value="0"/>
	                <input type="hidden" name="to" value="log"/>
	                <div class="uinArea area" id="uinArea">
	                	<label class="input-tips" for="u">帐号：</label>
		                <div class="inputOuter" id="uArea">
		                    
		                    <input type="text" id="u" name="username" class="inputstyle"/>
		                </div>
	                </div>
	                <div class="pwdArea area" id="pwdArea">
	               		<label class="input-tips" for="p">密码：</label> 
		               	<div class="inputOuter" id="pArea">
		                    
		                    <input type="password" id="p" name="p" class="inputstyle"/>
		                </div>
	                </div>
	               	<div class="vcdArea area" id="vcdArea">
	               		<label class="input-tips" for="p">验证码：</label> 
		               	<div class="inputOuter" id="cArea">
		                    
		                    <input type="text" id="code" name="code" class="inputstyle"/>
		                </div>
		                <div class='vcode_pic'><img src="index.php?c=login&a=code" onclick="this.src='index.php?c=login&a=code&vn='+Math.random()"/></div>
	                </div>
	                <div style="width:150px;margin: 0 auto; margin-top:20px;"><input type="submit" value="登 录" style="width:150px;" class="button_blue"/></div>
              </form>
           </div>
           
            	</div>
               
            </div>
            <!--登录end-->
  </div>

  <!--注册-->
    <div class="qlogin" id="qlogin" style="display: none; ">
   
    <div class="web_login">
    	<form name="form2" id="regUser" accept-charset="utf-8"  action="index.php?c=login&a=doRegister" method="post">
	      <input type="hidden" name="to" value="reg"/>
		      		       <input type="hidden" name="did" value="0"/>
        <ul class="reg_form" id="reg-ul">
        		<div id="userCue" class="cue">快速注册请注意格式</div>
                <li>
                	
                    <label for="user"  class="input-tips2">用户名：</label>
                    <div class="inputOuter2">
                        <input type="text" id="user" name="user" maxlength="16" class="inputstyle2"/>
                    </div>
                    
                </li>
                
                <li>
                <label for="passwd" class="input-tips2">密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="passwd"  name="passwd" maxlength="16" class="inputstyle2"/>
                    </div>
                    
                </li>
                <li>
                <label for="passwd2" class="input-tips2">确认密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="passwd2" name="" maxlength="16" class="inputstyle2" />
                    </div>
                    
                </li>
                
                <li>
                 <label for="qq" class="input-tips2">手机：</label>
                    <div class="inputOuter2">
                       
                        <input type="text" id="phone" name="phone" maxlength="11" class="inputstyle2"/>
                    </div>
                   
                </li>
                
                <li>
                    <div class="inputArea">
                        <input type="button" id="reg"  style="margin-top:10px;margin-left:85px;" class="button_blue" value="同意协议并注册"/> <a href="#" class="zcxy" target="_blank">注册协议</a>
                    </div>
                    
                </li><div class="cl"></div>
            </ul></form>
           
    
    </div>
   
    
    </div>
    <!--注册end-->
</div>
<div class="jianyi">*推荐使用ie8或以上版本ie浏览器或Chrome内核浏览器访问本站</div>
</body></html>
<?php }
}
