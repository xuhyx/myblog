<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libs\Vcode;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        
    }

    /**
     * 执行后台登录.
     *
     * @return \Illuminate\Http\Response
     */
    public function postDologin(Request $request)
    {
        //获得数据
        $data=$request->all();
        $nickname=$data['logname'];
        $password=$data['logpass'];

        //获得code的session
        $code=$request->session()->get('code');

        //判断
        if($nickname==''){
            echo"<script>alert('用户名不能为空');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
            die();
        }else if($password==''){
            echo"<script>alert('密码不能为空');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
            die();
        }else if($code!=$data['logcode']){
            echo"<script>alert('验证码错误！');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
            die();
        }
        
        //验证登录名密码
        $res=DB::table('users')->where('nickname',$nickname)->get();

        //判断
        if($res){
            //判断用户权限
            if($res[0]['auth']==2){
                return view('errors/error',['message'=>$nickname.'您没有登录后台管理系统的权限!!!','url'=>'/Login','seconds'=>'3']);
                die;
            }

            //判断用户状态
            if($res[0]['status']==0){
                return view('errors/error',['message'=>$nickname.'您的账号已被锁定,请联系管理员!!!','url'=>'/Login','seconds'=>'3']);
                die;
            }

            //判断用户名密码是否正确
            if(md5($password)==$res[0]['password']){
                $request->session()->put('a_id',$res[0]['id']);
                $request->session()->put('a_nickname',$nickname);
                return redirect('/Admin/Index')->with('success',$nickname.'登录成功');
            }else{
                return view('errors/error',['message'=>$nickname.'您的密码错误，请重试!!!','url'=>'/Login','seconds'=>'3']);
            }
        }else{
            return view('errors/error',['message'=>'用户不存在，请重试!!!','url'=>'/Login','seconds'=>'3']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getVcode(Request $request)
    {
       //实例化vcode
        $vcode=new Vcode();
        
        //加载图片
        $vcode->doimg();
        
        //获取验证码
        $code=$vcode->getCode();
        
        //设置session
        $request->session()->put('code', $code);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDologout(Request $request)
    {
    	echo"aaaaaa";
        //删除Admin用户session
        $request->session()->forget('a_id');
		$request->session()->forget('a_nickname');
		
		//调回到登录界面
		return redirect('/Login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
