<?php
	class ArticleController extends Controller{
		//加载文章添加界面
		public function add(){
			//实例化Model
			$article=new Model('article');
			
			//获取所有用户数量
			$count=$article->Count();
			
			//
			$this->assign('count',$count);	
			
			$this->display("Article/add.html");
		}
		
		//执行文章添加动作
		public function insert(){
			//设置时区
			date_default_timezone_set('PRC');
			
			//添加文章发表时间
			$_POST['insert_at']=date('Y-m-d H:m:s',time());
			
			//图像上传
			//实例化Fileupload类
			$up=new Fileupload();
			
			//设置上传必备参数信息
			$up->set('path','../Public/Uploads/articlePic');
			$up->set('allowtype',array('jpg','gif','png','jpeg'));
			$up->set('maxsize',10000000);
			$up->set('israndname',true);
			
			//执行图像上传
			$res=$up->upload('picture');
			
			//判断图片是否上传成功
			if($res!=true){
				$this->error($up->getErrorMsg(),'3',"./index.php?c=article&a=add");
				die();
			}
			
			//剪切图面
			//实例化图片类
			$pic=new Image('../Public/Uploads/articlePic');
			
			//获取上传成功后图像名称
			$filename=$up->getFileName();
			
			//执行等比缩放
			$res1=$pic->thumb($filename, 200, 200,$qz="th_");
			
			//判断是否缩放成功
			if($res1!=true){
				$this->error("图片缩放失败！",'3',"./index.php?c=article&a=add");
				die();
			}
			$_POST['picture']=$filename;
			
			//实例化Model
			$article=new Model('article');
			
			//存入数据库
			$res=$article->add($_POST);
			
			//判断
			if($res){
				echo"<script>window.location.href='./index.php?c=article&a=index'</script>";
			}else{
				$this->error('用户添加失败！！','3',"./index.php?c=article&a=add");
				die();
			}
		}
		
		//查询文章的列表信息
		public function index(){
			//$获取编号
			$num=$_GET['num'] ?? 1;
			
			//判断用户是否登录
			$nickname=$_SESSION['h_nickname'] ?? "unknow";
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
			
			//随机banner图片
			//实例化Model类
			$ban=new Model('banner');
			
			//获取所有banner的id及数量
			$idArr=$ban->field('id')->select();
			$banner_num=$ban->Count();
			//随机数五个banner图
			$bannerArr=array_rand($idArr,5);
			foreach($bannerArr as $k=>$v){
				$data=$ban->field('filename')->where("id=$v+1")->select();
				$banner[]=$data[0];
			}
			
			//实例化Model
			$article=new Model('article');
			
			//获取所有文章数量
			$count=$article->where($where)->Count();
			$page=ceil($count/10);
			//var_dump($count);
			
			//判断num是否超出文章总页数
			if($num>$page){
				$num=$page;
			}
			
			//limit限制筛选
			$start=($num-1)*10;
			if($where!=''){
				$select=$article->where($where)->order('insert_at desc')->limit("$start,5")->select();
			}else{
				$select=$article->order('insert_at desc')->limit("$start,10")->select();
			}
			
			//分配参数
			$this->assign('count',$count);	
			$this->assign('num',$num);
			$this->assign('select',$select);
			$this->assign('page',$page);
			$this->assign('url',$url);
			$this->assign('nickname',$nickname);
			$this->assign('banner',$banner);
			
			//解析
			$this->display('Article/index.html');
			
		}

		//删除文章
		public function delete(){
			//获得eid
			$eid=$_GET['eid'];
			$pic=$_GET['pic'];
			$picSmall="th_".$pic;
			
			$del=new Fileupload();
				
			//设置上传必备参数信息
			$del->set('path','../Public/Uploads/articlePic');
				
			//删除原先图片
			$res2=$del->deleteFile($pic);
			
			//判断是否删除成功
			if($res2!=true){
				$this->error("图片删除失败！",'3',"./index.php?c=article&a=index");
			}
			//删除原先大图片
			$res3=$del->deleteFile($picSmall);
			
			//判断是否删除成功
			if($res3!=true){
				$this->error("小图片删除失败！",'3',"./index.php?c=article&a=index");
			}
			
			//实例化Medel
			$article=new Model('article');
			
			//删除该eid下的数据
			$res=$article->del($eid);
			
			//判断
			if($res){
				echo"<script>window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
			}else{
				$this->error('用户删除失败！！','3',"./index.php?c=article&a=index");
				die();
			}
			
		}
		
		//加载文章修改页面
		public function edit(){
			//获取eid
			$eid=$_GET['eid'];
			
			//实例化Model
			$article=new Model('article');
			
			//获取id下的数据
			$info=$article->find($eid);
			
			//获取所有文章数量
			$count=$article->Count();
			
			//分配参数
			$this->assign('info',$info);
			$this->assign('count',$count);	
			
			//解析
			$this->display("Article/edit.html");
		}
		
		//执行文章修改动作
		public function update(){
			//获取账号id
			$eid=$_GET['eid'];
			$pic=$_GET['pic'];
			
			$picSmall='th_'.$pic;
			
			//引入方法
			if($_FILES['picture']['name']!=''){
				
				$del=new Fileupload();
				
				//设置上传必备参数信息
				$del->set('path','../Public/Uploads/articlePic');
					
				//删除原先图片
				$res2=$del->deleteFile($pic);
				
				//判断是否删除成功
				if($res2!=true){
					$this->error("图片删除失败！",'3',"./index.php?c=article&a=index");
					
				}
				//删除原先小图片
				$res3=$del->deleteFile($picSmall);
				
				//判断是否删除成功
				if($res3!=true){
					$this->error("小图片删除失败！",'3',"./index.php?c=article&a=index");
					
				}
				//图像上传
				//实例化Fileupload类
				$up=new Fileupload();
				
				//设置上传必备参数信息
				$up->set('path','../Public/Uploads/articlePic');
				$up->set('allowtype',array('jpg','gif','png','jpeg'));
				$up->set('maxsize',1000000000);
				$up->set('israndname',true);
				
				//执行图像上传
				$res=$up->upload('picture');
				
				//判断图片是否上传成功
				if($res!=true){
					$this->error($up->getErrorMsg(),'3',"./index.php?c=article&a=edit");
					die();
				}
				
				//剪切图面
				//实例化图片类
				$newPic=new Image('../Public/Uploads/articlePic');
				
				//获取上传成功后图像名称
				$filename=$up->getFileName();
				
				//执行等比缩放
				$res1=$newPic->thumb($filename, 100, 100,$qz="th_");
				
				//判断是否缩放成功
				if($res1!=true){
					$this->error("图片缩放失败！",'3',"./index.php?c=article&a=edit");
					die();
				}
				//添加图片名称
				$_POST['picture']=$filename;
			}

			//实例化Model
			$article=new Model('article');
			
			//修改数据库中的数据
			$res=$article->update($_POST, $eid);
			//var_dump($_POST);
			//判断
			if($res){
				echo"<script>window.location.href='./index.php?c=article&a=index'</script>";
			}else{
				$this->error('用户修改失败！！','3',"./index.php?c=article&a=edit&eid={$eid}&pic={$filename}");
				die();
			}
			
		}
			
	}
?>