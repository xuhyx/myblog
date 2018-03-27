<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\Article;

use App\Model\User;
use App\Http\Requests\ArticlePostReques;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * 加载文章列表的方法.
     */
    public function getIndex(Request $request)
    {

         //判断用户是否搜索
           $data=$request->all();
           if(isset($data['search'])){
               //判断搜索条件
                if($data['searchCondition']=='nickname'){
                    $data['searchCondition']='users.nickname';
                }else if($data['searchCondition']=='name'){
                    $data['searchCondition']='cates.name';
                }else{
                    $data['searchCondition']='articles.'.$data['searchCondition'];
                }

                //获取文章总数
                $count=DB::table('articles')->select('articles.*','users.nickname')
                            ->join('users','articles.user_id','=','users.id')
                            ->where($data['searchCondition'],'like','%'.$data['search'].'%')
                            ->count();
               //获取文章信息
               $articles=DB::table('articles')->select('articles.*','users.nickname')
                            ->join('users','articles.user_id','=','users.id')
                            ->where($data['searchCondition'],'like','%'.$data['search'].'%')
                            ->orderBy('created_at','desc')
                            ->paginate(10);
               //获得url
               $url="&search=".$data['search']."&searchCondition=".$data['searchCondition'];
            }else{
               //获取文章总数
               $count=Article::count();

               //获取文章信息
               $articles=DB::table('articles')->select('articles.*','users.nickname')
                            ->join('users','articles.user_id','=','users.id')
                            ->orderBy('created_at','desc')
                            ->paginate(10);
               //获得url
               $url='';
           }
         
           //计算页数
           $page=ceil($count/10);

           //解析模板
           return view('Admin/Article/index',['res'=>$articles,'count'=>$count,'page'=>$page,'url'=>$url]);

    }

    /**
     * 加载文章创建页面的方法
     */
    public function getCreate()
    {
        //解析模板
        return view('Admin/Article/add');
    }

    /**
     * 执行文章添加的方法.
     */
    public function postStore(ArticlePostReques $request)
    {
        //获取添加文章的信息
        $data=$request->except('_token','picture','pid');
       // dd($data);
        
        
        //设置闪存session
        $request->flashOnly('title','descr','content');

        //上传图片
        $file= $request->file('picture');
        
        if ($file->isValid()) {

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

            $savepath = config('constants.img_uf') .'Libs/Uploads/articlePic/';

            //保存文件          配置文件存放文件的名字  ，文件名，路径
            $bool= $file->move($savepath,$filename);

            //判断是否上传成功
            if($bool==false){
                return redirect('/Admin/Article/create')->with('warning','图片上传失败')->withInput();
                die;
            }
        }else{
            return redirect('/Admin/Article/create')->with('warning','图片获取失败')->withInput();
            die;
        }

        //追加创建时间及更新时间
        $data['created_at']=date("Y-m-d H:i:s");
        $data['updated_at']=date("Y-m-d H:i:s");

        //追加图片名称
        $data['picture']=$filename;

        //追加文章名
        $data['user_id']=$request->session()->get('a_id');

        //上传数据库
        $res1=Article::insert($data);
        
        //判断是否保存成功
        if($res1){
            return redirect('/Admin/Article')->with('success','文章创建成功');
        }else{
            //删除图片
            $path=$savepath.$filename;
            if(file_exists($path)){
                @unlink ($path);
            }
            return redirect('/Admin/Article/create')->with('warning','文章创建失败')->withInput();
        }
    }

    /**
     * 显示文章详情页的方法.
     */
    public function getShow($id)
    {

        //获得编辑信息
        $data=DB::table('articles')
                ->join('users','articles.user_id','=','users.id')
                ->select('articles.*','users.nickname')
                ->where('articles.id',$id)
                ->get()[0];
        
        //解析模板
        return view('Admin/Article/details',['data'=>$data]);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        //获得编辑信息
        $data=DB::table('articles')
                ->where('id',$id)
                ->get();

        //解析模板
        return view('Admin/Article/edit',['data'=>$data[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request, $id)
    {
        //获取需修改文章信息
        $data=$request->except('_token');
        $oldInfo=Article::get()[0];
       
        //判断是否更新图片
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
                    return redirect("/Admin/Article/edit/$id")->with('danger','图片格式不正确');
                    die;
                }

                //获取文件的绝对路径，但是获取到的在本地不能打开
                $realPath =$file->getRealPath();

                //要保存的文件名 时间+扩展名
                $filename=date('YmdHis') . '_' . uniqid() .'.'.$ext;

                $savepath = config('constants.img_uf') .'Libs/Uploads/articlePic/';

                //保存文件          配置文件存放文件的名字  ，文件名，路径
                $bool= $file->move($savepath,$filename);

                //判断是否上传成功
                if($bool==false){
                    return redirect("/Admin/Article/edit/$id")->with('danger','图片上传失败');
                    die;
                }

                //删除原有图片
                $path=$savepath.$oldInfo['picture'];
                if(file_exists($path)){
                    @unlink ($path);
                }

                //追加文件名称
                $data['pictuer']=$filename;
            }else{
                return redirect("/Admin/Article/edit/$id")->with('warning','图片路径不存在');
                die;
            }
        }

        //更新数据库
        $res1=Article::where('id',$id)->update($data);
        
        //判断是否保存成功
        if($res1){
            return redirect('/Admin/Article')->with('success','文章修改成功');
        }else{
            return redirect("/Admin/Article/edit/$id")->with('danger','文章修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDestroy($id)
    {
        //获取图片名
        $pic=Article::select('picture')->where('id',$id)->get()[0]['picture'];

        //删除数据库中相应数据
        $res=Article::where('id',$id)->delete();

        //判断是否删除成功
        if($res==false){
            return redirect("/Admin/Article")->with('danger','文章删除失败');
            die;
        }

        //删除文章目录下图片
        $path=config('constants.img_uf') .'Libs/Uploads/articlePic/'.$pic;
        if(file_exists($path)){
            @unlink ($path);
        }
        //回到列表界面
        return redirect('/Admin/Article')->with('success','文章删除成功');
    }
}
