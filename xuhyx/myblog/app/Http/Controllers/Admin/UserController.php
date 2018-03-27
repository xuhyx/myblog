<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogPostRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\MessageBag;


   class UserController extends Controller
   {
      /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
       public function index(Request $request)
       {
           //判断用户是否搜索
           $data=$request->all();
           if(isset($data['search'])){
               //判断搜索条件是否为状态
               if($data['searchCondition']=='status'){
                   $data['search']=$data['search']=='激活'?1:0;
               }

               //获得用户总数
               $count = User::where($data['searchCondition'],'like','%'.$data['search'].'%')->count();
               
               //获取用户信息
               $users = User::where($data['searchCondition'],'like','%'.$data['search'].'%')->paginate(10);

               //获得url
               $url="&search=".$data['search']."&searchCondition=".$data['searchCondition'];
         	}else{

               $count = User::count();
               //获取用户信息
               $users = User::paginate(10);
			
               //获得url
               $url='';
           }

           //计算页数
           $page=ceil($count/10);

           //解析模板
           return view('Admin/User/index',['res'=>$users,'page'=>$page,'url'=>$url,'count'=>$count]);
       }

       /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
       public function create()
       {
       
           //解析模板
           return view('Admin/User/add');
       }

       /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
       public function store(StoreBlogPostRequest $request)
       {
         //获取添加用户的信息
         $data=$request->except('_token','picture','password2');
         
         //设置闪存session
         $request->flashOnly('nickname','telphone');

         //上传图片
         $file= $request->file('picture');

         //获取文件的原文件名 包括扩展名
         $originalName = $file->getClientOriginalName();

         //获取文件的扩展名
         $ext=$file->getClientOriginalExtension();

         //获取文件的类型
         $type=$file->getClientMimeType();
        
         //获取文件的绝对路径，但是获取到的在本地不能打开
         $realPath =$file->getRealPath();

         //要保存的文件名 时间+扩展名
         $filename=date('YmdHis') . '_' . uniqid() .'.'.$ext;

         $savepath = config('constants.img_uf') .'Libs/Uploads/headerPic/';

         //保存文件          配置文件存放文件的名字  ，文件名，路径
         $bool= $file->move($savepath,$filename);

         //判断是否上传成功
         if($bool==false){
             return redirect('/Admin/User/create')->with('warning','头像上传失败')->withInput();
             die;
         }
         //追加图片名称
         $data['picture']=$filename;
         
         //password加密
         $data['password']=md5($data['password']);

       		//追加用户创建时间及更新时间
         $data['created_at']=date('Y-m-d H:i:s');
         $data['updated_at']=date('Y-m-d H:i:s');

           //上传数据库
           $res1=User::insert($data);
        
           //判断是否保存成功
           if($res1){
               return redirect('/Admin/User')->with('success','用户创建成功');
           }else{
               //删除图片
               $path=$savepath.$filename;
               if(file_exists($path)){
                   @unlink ($path);
               }
               return redirect('/Admin/User/create')->with('warning','用户创建失败')->withInput();
           }

       }

       /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
       public function show($id)
       {
           //
       }
        /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
     
       public function edit($id)
       {

           $data=User::where('id',$id)->get();
           //解析模板
           return view('Admin/User/edit',['data'=>$data[0]]);
       }

       /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
       public function update(Request $request, $id)
       {
           //获取需修改用户信息
           $data=$request->except('_token','_method');


           $newPassword=$data['password'];

           //判断密码是否修改
           $oldInfo=User::select('nickname','password','picture')->where('id',$id)->get();
           if($newPassword==$oldInfo[0]['password']){
               $password=$newPassword;
           }else{
               $password=md5($newPassword);
           }

            //判断数据库中是否已存在用户名
            $res2=User::where('nickname','=',$data["nickname"])->get();
            
            if(count($res2)==1 && $data["nickname"]!=$oldInfo[0]['nickname']){
                return redirect('/Admin/User/$id')->with('warning','用户名已存在');
                die;
            }
           
           //判断是否更新头像
           if(array_has($data,'picture')){
               //上传图片
               $file= $request->file('picture');
               if ($file->isValid()) {

                   //获取文件的原文件名 包括扩展名
                   $originalName = $file->getClientOriginalName();

                   //获取文件的扩展名
                   $ext=$file->getClientOriginalExtension();

                   //获取文件的类型  
                   $type=$file->getClientMimeType();
				
           				//检查文件格式是否jpg,png,gif,jpeg
           				if($type!='image/jpg'&&$type!='image/png'&&$type!='image/gif'&&$type!='image/jpeg'){
           					return redirect('/Admin/User/$id')->with('warning','只支持jpg,png,gif,jpeg格式的文件');
                    die;
           				}

                   //获取文件的绝对路径，但是获取到的在本地不能打开
                   $realPath =$file->getRealPath();

                   //要保存的文件名 时间+扩展名
                   $filename=date('YmdHis') . '_' . uniqid() .'.'.$ext;

                   $savepath = config('constants.img_uf') .'Libs/Uploads/headerPic/';

                   //保存文件          配置文件存放文件的名字  ，文件名，路径
                   $bool= $file->move($savepath,$filename);

                   //判断是否上传成功
                   if($bool==false){
                       return redirect('/Admin/User/$id')->with('warning','头像上传失败');
                       die;
                   }

                   //删除原有图片
                   $path=$savepath.$oldInfo[0]['picture'];
                   if(file_exists($path)){
                       @unlink ($path);
                   }
               }
           }else{
                $filename=$oldInfo[0]['picture'];
           }
		      
          //追加图片名称
           $data['picture']=$filename;

       		//追加更新时间
       		 $data['updated_at']=date('Y-m-d H:i:s');
       
            //上传数据库
           $res1=User::where('id',$id)->update($data);
        
           //判断是否保存成功
           if($res1){
               return redirect('/Admin/User')->with('success','用户修改成功');
           }else{
               return redirect('/Admin/User/$id')->with('warning','用户修改失败');
           }
       }

       /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
       public function destroy($id)
       {
           //获取图片名
           $pic=User::select('picture')->where('id',$id)->get()[0]['picture'];

           //判断是否为admin账户
           $name=User::select('nickname')->where('id',$id)->get()[0]['nickname'];
           if($name=='admin'){
               return redirect('/Admin/User')->with('warning','系统管理员账户无法删除');
               die;
           }

           //删除数据库中相应数据
           $res=User::where('id',$id)->delete();

           //判断是否删除成功
           if($res==false){
               return redirect('/Admin/User')->with('warning','用户删除失败');
               die;
           }

           //删除头像目录下图片
           $path=config('constants.img_uf') .'Libs/Uploads/headerPic/'.$pic;
           if(file_exists($path)){
               @unlink ($path);
           }
   		//回到列表界面
   		return redirect('/Admin/User')->with('warning','用户删除成功');
       }
   }
