<?php
	class UserController extends Controller{
		//加载用户添加界面
		public function add(){
			//实例化Model
			$user=new Model('users');
			
			//获取所有用户数量
			$count=$user->Count();
			
			//
			$this->assign('count',$count);	
			
			$this->display("User/add.html");
		}
		
		//执行用户添加动作
		public function insert(){
			//图像上传
			//实例化Fileupload类
			$up=new Fileupload();
			
			//设置上传必备参数信息
			$up->set('path','../Public/Uploads/headerPic');
			$up->set('allowtype',array('jpg','gif','png','jpeg'));
			$up->set('maxsize',10000000);
			$up->set('israndname',true);
			
			//执行图像上传
			$res=$up->upload('users_pic');
			
			//判断图片是否上传成功
			if($res!=true){
				$this->error($up->getErrorMsg(),'3',"./index.php?c=user&a=add");
				die();
			}
			
			//剪切图面
			//实例化图片类
			$pic=new Image('../Public/Uploads/headerPic');
			
			//获取上传成功后图像名称
			$filename=$up->getFileName();
			
			//执行等比缩放
			$res1=$pic->thumb($filename, 100, 100,$qz="th_");
			
			//判断是否缩放成功
			if($res1!=true){
				$this->error("图片缩放失败！",'3',"./index.php?c=user&a=add");
				die();
			}
			
			//判断两次密码是否相同
			if($_POST['password']!=$_POST['password2']){
				$this->error("两次密码输入不相同！",'3',"./index.php?c=user&a=add");
				die();
			}		
			//删除重复密码
			unset($_POST['password2']);
			
			//给password加密
			$_POST['password']=md5($_POST['password']);
			
			//添加图片名称
			$_POST['users_pic']='th_'.$filename;
			//var_dump($_POST);
			
			//实例化Model
			$user=new Model('users');
			
			//存入数据库
			$res=$user->add($_POST);
			
			//判断
			if($res){
				echo"<script>window.location.href='./index.php?c=user&a=index'</script>";
			}else{
				$this->error('用户添加失败！！','3',"./index.php?c=user&a=add");
				die();
			}
		}
		
		//查询用户的列表信息
		public function index(){
			//$获取编号
			$num=$_GET['num'] ?? 1;
			
			//定义存储数据数组
			$where='';
			$url='';
			
			//判断用户是否搜索
			if(!empty($_REQUEST['search'])){
				$search=$_REQUEST['search'];
				$searchCondition=$_REQUEST['searchCondition'];
				$where=$searchCondition." like '%".$search."%'";
				$url="&search=".$search."&searchCondition=".$searchCondition;
				//var_dump($where);
			}
			//实例化Model
			$user=new Model('users');
			
			//获取所有用户数量
			$count=$user->where($where)->Count();
			$page=ceil($count/5);
			//var_dump($count);
			
			//limit限制筛选
			$start=($num-1)*5;
			if($where!=''){
				$select=$user->where($where)->limit("$start,5")->select();
			}else{
				$select=$user->limit("$start,5")->select();
			}
			
			
			//分配参数
			$this->assign('count',$count);	
			$this->assign('num',$num);
			$this->assign('select',$select);
			$this->assign('page',$page);
			$this->assign('url',$url);
			
			//解析
			$this->display('User/index.html');
		}

		//删除用户
		public function delete(){
			//获得uid
			//var_dump($_SESSION);
			$uid=$_SESSION['uid'];
			
			//获得eid
			$eid=$_GET['eid'];
			$pic=$_GET['pic'];
			$picBig=ltrim($pic,'th_');
			
			//判断是否为admin账号
			if($eid==$uid){
				$this->error('无法删除本人账户！！','3',"./index.php?c=user&a=index");
				die();
			}
			
			$del=new Fileupload();
				
			//设置上传必备参数信息
			$del->set('path','../Public/Uploads/headerPic');
				
			//删除原先图片
			$res2=$del->deleteFile($pic);
			
			//判断是否删除成功
			if($res2!=true){
				$this->error("图片删除失败！",'3',"./index.php?c=user&a=index");
			}
			//删除原先大图片
			$res3=$del->deleteFile($picBig);
			//var_dump($res3);
			//判断是否删除成功
			if($res3!=true){
				$this->error("大图片删除失败！",'3',"./index.php?c=user&a=index");
				
			}
			
			//实例化Medel
			$user=new Model('users');
			
			//删除该eid下的数据
			$res=$user->del($eid);
			
			//判断
			if($res){
				echo"<script>window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
			}else{
				$this->error('用户删除失败！！','3',"./index.php?c=user&a=index");
				die();
			}
		}
		
		//加载用户修改页面
		public function edit(){
			//获取eid
			$eid=$_GET['eid'];
			
			//实例化Model
			$user=new Model('users');
			
			//获取id下的数据
			$info=$user->find($eid);
			
			//获取所有用户数量
			$count=$user->Count();
			
			//分配参数
			$this->assign('info',$info);
			$this->assign('count',$count);	
			
			//解析
			$this->display("User/edit.html");
		}
		
		//执行用户修改动作
		public function update(){
			//获取账号id
			$eid=$_GET['eid'];
			$pic=$_GET['pic'];
			$picBig=ltrim($pic,'th_');
			//var_dump($pic);
			//引入方法
			if($_FILES['users_pic']['name']!=''){
				
				$del=new Fileupload();
				
				//设置上传必备参数信息
				$del->set('path','../Public/Uploads/headerPic');
					
				//删除原先图片
				$res2=$del->deleteFile($pic);
				
				//判断是否删除成功
				if($res2!=true){
					$this->error("图片删除失败！",'3',"./index.php?c=user&a=index");
					
				}
				//删除原先大图片
				$res3=$del->deleteFile($picBig);
				
				//判断是否删除成功
				if($res3!=true){
					$this->error("大图片删除失败！",'3',"./index.php?c=user&a=index");
					
				}
				//图像上传
				//实例化Fileupload类
				$up=new Fileupload();
				
				//设置上传必备参数信息
				$up->set('path','../Public/Uploads/headerPic');
				$up->set('allowtype',array('jpg','gif','png','jpeg'));
				$up->set('maxsize',1000000000);
				$up->set('israndname',true);
				
				//执行图像上传
				$res=$up->upload('users_pic');
				
				//判断图片是否上传成功
				if($res!=true){
					$this->error($up->getErrorMsg(),'3',"./index.php?c=user&a=edit");
					die();
				}
				
				//剪切图面
				//实例化图片类
				$newPic=new Image('../Public/Uploads/headerPic');
				
				//获取上传成功后图像名称
				$filename=$up->getFileName();
				
				//执行等比缩放
				$res1=$newPic->thumb($filename, 100, 100,$qz="th_");
				
				//判断是否缩放成功
				if($res1!=true){
					$this->error("图片缩放失败！",'3',"./index.php?c=user&a=edit");
					die();
				}
				//添加图片名称
				$_POST['users_pic']="th_".$filename;
				
					
			}

			//实例化Model
			$user=new Model('users');
			
			//修改数据库中的数据
			$res=$user->update($_POST, $eid);
			//var_dump($_POST);
			//判断
			if($res){
				echo"<script>window.location.href='./index.php?c=user&a=index'</script>";
			}else{
				$this->error('用户修改失败！！','3',"./index.php?c=user&a=edit&eid={$eid}&pic=th_{$filename}");
				die();
			}
		}
	}
?>