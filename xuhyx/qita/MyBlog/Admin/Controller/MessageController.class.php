<?php
	class MessageController extends Controller{
		//查询文章的列表信息
		public function index(){
			//$获取编号
			$num=$_GET['num'] ?? 1;
			
			//定义存储数据数组
			$where='';
			$url='';
			
			//实例化Model
			$message_user=new Model('message,users');
			$message=new Model('message');
			$user=new Model('users');
			
			//获取所有文章数量
			$count=$message->where($where)->Count();
			$page=ceil($count/10);
			
			//判断num是否超出文章总页数
			if($num>$page){
				$num=$page;
			}
			
			//limit限制筛选
			$start=($num-1)*10;
			
			//判断用户是否搜索
			if(!empty($_REQUEST['search'])){
				$search=$_REQUEST['search'];
				$searchCondition=$_REQUEST['searchCondition'];
				
				//判断是否为按评论人搜索
				if($searchCondition=='nickname'){
					$where="users.".$searchCondition." like '%".$search."%'";
				}else{
					$where="message.".$searchCondition." like '%".$search."%'";
				}
				$url="&search=".$search."&searchCondition=".$searchCondition;
				$select=$message_user->field("message.*,users.users_pic as picture,users.nickname as nickname")->where('message.uid=users.id && '.$where)->order('insert_at desc')->limit("$start,10")->select();
			}else{
				$select=$message->order('insert_at desc')->limit("$start,10")->select();
				//判断评论是否游客发表
				foreach($select as $k=>$v){
					if($v['uid']==0){
						$select[$k]['nickname']="游客";
						$select[$k]['picture']="unknow.jpg";
					}else{
						$info=$user->where("id={$v['uid']}")->select();
						$select[$k]['nickname']=$info[0]['nickname'];
						$select[$k]['picture']=$info[0]['users_pic'];
					}
				}
			}
			
			//分配参数
			$this->assign('count',$count);	
			$this->assign('num',$num);
			$this->assign('select',$select);
			$this->assign('page',$page);
			$this->assign('url',$url);
			
			//解析
			$this->display('message/index.html');
			
		}

		//删除文章
		public function delete(){
			//获得eid
			$id=$_GET['id'];
			
			//实例化Medel
			$message=new Model('message');
			
			//删除该uid下的数据
			$res=$message->del($id);
			
			//判断
			if($res){
				echo"<script>window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
			}else{
				$this->error('文章删除失败！！','3',"./index.php?c=message&a=index");
				die();
			}
			
		}
		
		
			
	}
?>