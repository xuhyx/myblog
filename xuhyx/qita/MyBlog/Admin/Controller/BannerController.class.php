<?php
	class BannerController extends Controller{
		//加载轮播图添加界面
		public function add(){
			//实例化Model
			$banner=new Model('banner');
			
			//获取所有用户数量
			$count=$banner->Count();
			
			//
			$this->assign('count',$count);	
			
			$this->display("Banner/add.html");
		}
		
		//执行轮播图添加动作
		public function insert(){
			//获取图片信息
			$data['type']=$_FILES['picture']['type'];
			
			//设置时区
			date_default_timezone_set('PRC');
			
			//添加轮播图发表时间
			$data['insert_at']=date('Y-m-d H:i:s',time());
			
			//图像上传
			//实例化Fileupload类
			$up=new Fileupload();
			
			//设置上传必备参数信息
			$up->set('path','../Public/Uploads/BannerPic');
			$up->set('allowtype',array('jpg','gif','png','jpeg'));
			$up->set('maxsize',10000000);
			$up->set('israndname',true);
			
			//执行图像上传
			$res=$up->upload('picture');
			
			//判断图片是否上传成功
			if($res!=true){
				$this->error($up->getErrorMsg(),'3',"./index.php?c=banner&a=add");
				die();
			}
			
			//剪切图面
			//实例化图片类
			$pic=new Image('../Public/Uploads/BannerPic');
			
			//获取上传成功后图像名称
			$filename=$up->getFileName();
			
			//执行等比缩放
			$res1=$pic->thumb($filename, 200, 200,$qz="th_");
			
			//判断是否缩放成功
			if($res1!=true){
				$this->error("图片缩放失败！",'3',"./index.php?c=banner&a=add");
				die();
			}
			$data['filename']=$filename;
			
			//实例化Model
			$banner=new Model('banner');
			
			//存入数据库
			$res=$banner->add($data);
			
			//判断
			if($res){
				echo"<script>window.location.href='./index.php?c=banner&a=index'</script>";
			}else{
				$this->error('用户添加失败！！','3',"./index.php?c=banner&a=add");
				die();
			}
		}
		
		//查询轮播图的列表信息
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
			$banner=new Model('banner');
			
			//获取所有轮播图数量
			$count=$banner->where($where)->Count();
			$page=ceil($count/10);
			//var_dump($count);
			
			//判断num是否超出轮播图总页数
			if($num>$page){
				$num=$page;
			}
			//limit限制筛选
			$start=($num-1)*10;
			if($where!=''){
				$select=$banner->where($where)->order('id')->limit("$start,10")->select();
			}else{
				$select=$banner->order('id')->limit("$start,10")->select();
			}
		
			//分配参数
			$this->assign('count',$count);	
			$this->assign('num',$num);
			$this->assign('select',$select);
			$this->assign('page',$page);
			$this->assign('url',$url);
			
			//解析
			$this->display('Banner/index.html');
			
		}

		//删除轮播图
		public function delete(){
			//获得eid
			$id=$_GET['id'];
			$filename=$_GET['name'];
			$picSmall="th_".$filename;
			$del=new Fileupload();
				
			//设置上传必备参数信息
			$del->set('path','../Public/Uploads/bannerPic');
				
			//删除原先图片
			$res2=$del->deleteFile($filename);
			
			//判断是否删除成功
			if($res2!=true){
				$this->error("图片删除失败！",'3',"./index.php?c=banner&a=index");
			}
			//删除原先大图片
			$res3=$del->deleteFile($picSmall);
			
			//判断是否删除成功
			if($res3!=true){
				$this->error("小图片删除失败！",'3',"./index.php?c=banner&a=index");
			}
			//实例化Medel
			$banner=new Model('banner');
			
			//删除该eid下的数据
			$res=$banner->del($id);
			
			//判断
			if($res){
				echo"<script>window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
			}else{
				$this->error('用户删除失败！！','3',"./index.php?c=banner&a=index");
				die();
			}
			
		}
	}
?>