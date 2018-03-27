<?php
	class LoginController extends Controller{
		public function index(){
			//判断用户是否登录
			if(isset($_SESSION['hid'])){
				
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
			$_SESSION['h_code']=$code;
		}
		/*
		 * 执行登录后台管理界面动作
		 * */
		public function doLogin(){
			//获取登录名及密码及验证码；
			$nickname=$_POST['username'];
			$password=$_POST['p'];
			$code=$_POST['code'];
			
			//判断用户名密码是否存在
			if($nickname==''){
				echo"<script>alert('用户名不能为空');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
				die();
			}else if($password==''){
				echo"<script>alert('密码不能为空');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
				die();
			}else if($code!=$_SESSION['h_code']){
				echo"<script>alert('验证码错误！');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
				die();
			}
			
			//实例化Model
			$user=new Model("users");
			//var_dump($nickname);
			//获取数据
			$res=$user->where("nickname='{$nickname}'")->select();
			//var_dump($res);
			
			//var_dump($res);
			//判断
			if($res){
				if(md5($password)==$res[0]['password']){
					$_SESSION['hid']=$res[0]['id'];
					$_SESSION['h_nickname']=$res[0]['nickname'];
					$_SESSION['h_pic']=$res[0]['users_pic'];
					$users_pic=$res[0]['users_pic'];
					//实例化model类
					$article=new Model('article');
					
					//获得文章列表
					$list=$article->select();
					
					//分配变量
					$this->assign('list',$list);
					$this->assign('nickname',$_SESSION['h_nickname']);
					$this->assign('pic',$res[0]['users_pic']);
					
					
					
					$this->display('Index/index.html');
				}else{
					$this->error('用户密码错误，请重试!!!','2','./index.php?c=login&a=index');
				}
			}else{
				$this->error('用户名错误，请重试!!!','2','./index.php?c=login&a=index');
			}
		}
		
		public function doRegister(){
			//获取登录名；
			$nickname=$_POST['user'];
			
			//实例化Model
			$user=new Model("users");
			
			//获取数据
			$res=$user->where("nickname='{$nickname}'")->select();
			
			//判断
			if($res){
				$this->error('改用户名已存在！','2','./index.php?c=login&a=index');
				die;
			}
			
			//保存数据
			$data['nickname']=$_POST['user'];
			$data['password']=$_POST['passwd'];
			$data['phone']=$_POST['phone'];
			$data['users_pic']="unknow.jpg";
			
			//存入数据库
			$res=$user->add($data);		
			
			//判断
			if($res){
				echo"<script>window.location.href='./index.php?c=login&a=index'</script>";
			}else{
				$this->error('用户添加失败！！','3',"./index.php?c=login&a=index");
				die();
			}			
			
			
		}
		public function doLogout(){
			//删除session
			session_unset();
			//var_dump($_SESSION);
			//回到登录界面
			echo"<script>window.location.href='./index.php?c=index&a=index'</script>";
		}
	}
?>