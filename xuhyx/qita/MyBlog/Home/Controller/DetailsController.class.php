<?php
	class DetailsController extends Controller{
		//加载详情页添加界面
		public function add(){
			echo "加载详情页添加界面";
		}
		
		//执行详情页添加动作
		public function insert(){
			echo "执行详情页添加动作";
		}
		
		//加载详情页界面
		public function index(){
			//获得文章id
			$id=$_GET['id'];
			$m=$_GET['m'] ?? '';
			
			//判断用户是否登录
			//var_dump($_SESSION);
			$nickname=$_SESSION['h_nickname'] ?? '';
		
			//实例化model类
			$article=new Model('article');
			
			//更新文章中的回复数量
			$res1=$article->query("update article set click_num=click_num+1 where id=".$id);
			
			//获得文章
			$blog=$article->find($id);
			
			//获得上一篇文章
			$prev=$article->field('id,title')->where("id<{$id}")->order('id desc')->limit(1)->select();
			
			//获得下一篇文章
			$next=$article->field('id,title')->where("id>{$id}")->order('id')->limit(1)->select();
			
			//获得评论信息
			//实例化model类
			$com=new Model('comment');
			$user=new Model('users');
			
			//获得评论数量
			$num=$com->where("aid=$id")->Count();
			
			//获得评论
			//判断是否加载跟多评论
			if(isset($_GET['m']) && $_GET['m']=='more'){
				$comment=$com->where("aid={$id}")->order('insert_at desc')->select();
			}else{
				$comment=$com->where("aid={$id}")->order('insert_at desc')->limit(5)->select();
			}
			
			//判断评论是否为空
			if(!empty($comment)){
				//判断评论是否游客发表
				foreach($comment as $k=>$v){
					if($v['uid']==0){
						$comment[$k]['nickname']="游客";
						$comment[$k]['users_pic']="unknow.jpg";
					}else{
						$info=$user->where("id={$v['uid']}")->select();
						$comment[$k]['nickname']=$info[0]['nickname'];
						$comment[$k]['users_pic']=$info[0]['users_pic'];
					}
				}
			}
			
			//分配变量
			$this->assign('prev',$prev[0]);
			$this->assign('next',$next[0]);
			$this->assign('blog',$blog);
			$this->assign('nickname',$nickname);
			$this->assign('uid',$id);
			$this->assign('num',$num);
			$this->assign('more',$m);
			$this->assign('comment',$comment);
			
			//解析
			$this->display('Details/index.html');
		}

		//回复
		public function replay(){
			//获取文章id
			$data['aid']=$_GET['id'];
			
			//获取评论内容
			$data['content']=$_POST['comment'];
			
			//设置时区
			date_default_timezone_set('PRC');
			
			//添加文章发表时间
			$data['insert_at']=date('Y-m-d H:i:s',time());
			
			//添加uid
			//判断用户是否登录
			if(!isset($_SESSION['hid'])){
				$data['uid']=0;
			}else{
				$data['uid']=$_SESSION['hid'];
			}
			
			//实例化Model类
			$rep=new Model('comment');
			
			//向数据库中存入数据
			$res=$rep->add($data);
			
			//判断
			if($res){
				//更新文章中的回复数量
				$art=new Model('article');
				$res1=$art->query("update article set up_num=up_num+1 where id=".$_GET['id']);
				echo"<script>window.location.href='./index.php?c=details&a=index&id={$_GET['id']}'</script>";
			}else{
				$this->error('评论失败！！','3',"./index.php?c=details&a=index&id={$_GET['id']}");
				die();
			}
			
		}
		
	}
?>