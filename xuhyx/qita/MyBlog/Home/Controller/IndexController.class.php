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
		
		//加载默认界面
		public function index(){
			//判断用户是否登录
			$nickname=$_SESSION['h_nickname'] ?? '';
			
			//实例化model类
			$article=new Model('article');
			
			//获得文章列表
			$list=$article->order('click_num desc')->limit('0,20')->select();
			//$list['intro']=
			
			$this->assign('list',$list);
			$this->assign('nickname',$nickname);
			//die;
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