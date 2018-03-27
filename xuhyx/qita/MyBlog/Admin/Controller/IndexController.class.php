<?php
	class IndexController extends Controller{
		//加载默认添加界面
		public function add(){
			echo "加载默认添加界面";
		}
		
		//执行默认添加动作
		public function insert(){
			echo "执行默认添加动作";
		}
		
		//查询默认的列表信息
		public function index(){
			//判断用户是否登录
			if(!isset($_SESSION['nickname'])){
				$this->error('用户没有登录，请确认！！','3',"./index.php?c=login&a=index");
				die;
			}
			
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
			
			//解析
			$this->display('Index/index.html');
		}

		//删除默认
		public function delete(){
			echo "删除默认";
		}
		
		//加载默认修改页面
		public function edit(){
			echo "加载默认修改页面";
		}
		
		//执行默认修改动作
		public function update(){
			echo "执行默认修改动作";
		}
	}
?>