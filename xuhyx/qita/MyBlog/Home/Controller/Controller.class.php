<?php
	//公共控制器文件
	class Controller extends Smarty{
		//构造函数
		public function __construct(){
			parent::__construct();
			
			
			//3.设置初始化参数
			$this->template_dir='view';
			$this->compile_dir='view_c';
		}
		
		//判断时显示的模板
		public function error($message,$seconds,$url){
			//4.分配变量
			$this->assign('message',$message);
			$this->assign('seconds',$seconds);
			$this->assign('url',$url);
			
			//5.解释模板
			$this->display('error.html');
		}
	}
?>