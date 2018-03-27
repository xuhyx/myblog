<?php
	class LoginController extends Controller{
		/*
		 * 加载登录页
		 * */
		public function index(){
			//判断用户是否登录
			if(isset($_SESSION['uid'])){
				
				//实例化Model
				$user=new Model('users');
				
				//获取所有用户数量
				$count=$user->Count();
				
				//实例化Model
				$article=new Model('article');
				
				//获取所有用户数量
				$count_a=$article->Count();
				
				//分配参数
				$this->assign('count',$count);
				$this->assign('count_a',$count_a);		
				
				$this->display('Index/index.html');
				
				die;
			}
			$this->display('Login/index.html');
		}
		/*
		 * 加载验证码
		 * */
		public function code(){
			//实例化vcode
			$vcode=new Vcode();
			
			//加载图片
			$vcode->doimg();
			
			//获取验证码
			$code=$vcode->getCode();
			
			//设置session
			//session_start();
			$_SESSION['code']=$code;
			//var_dump($vcode->doimg());
		}
		/*
		 * 执行登录后台管理界面动作
		 * */
		public function doLogin(){
			//获取登录名及密码及验证码；
			$nickname=$_POST['logname'];
			$password=$_POST['logpass'];
			$code=$_POST['logcode'];
			
			//判断用户名密码是否存在
			if($nickname==''){
				echo"<script>alert('用户名不能为空');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
				die();
			}else if($nickname!='admin'){
				echo"<script>alert('您没有登录后台管理系统的权限！');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
				die();
			}else if($password==''){
				echo"<script>alert('密码不能为空');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
				die();
			}else if($code!=$_SESSION['code']){
				echo"<script>alert('验证码错误！');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
				die();
			}
			
			//实例化Model
			$user=new Model("users");
			
			//获取数据
			$res=$user->where("nickname='{$nickname}'")->select();
			//var_dump($res);
			//判断
			if($res){
				if(md5($password)==$res[0]['password']){
					$_SESSION['uid']=$res[0]['id'];
					$_SESSION['nickname']=$res[0]['nickname'];
					//$_SESSION['password']=$res[0]['password'];
					$_SESSION['pic']=$res[0]['users_pic'];
					echo"<script>window.location.href='./index.php?c=index&a=index'</script>";
				}else{
					$this->error('用户密码错误，请重试!!!','3','./index.php?c=login&a=index');
				}
			}else{
				$this->error('用户名错误，请重试!!!','3','./index.php?c=login&a=index');
			}
		}
		
		public function doLogout(){
			//删除session
			session_unset();
			
			//回到登录界面
			$this->display('Login/index.html');
		}
	}
?>