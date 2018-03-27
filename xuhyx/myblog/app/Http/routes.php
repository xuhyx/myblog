<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	//return view('welcome');
   return redirect('/Admin/Index');
});




	//登录路由组
Route::group([],function(){
	//加载登录界面的路由
	Route::get('/Login',function(){
		return view('Admin/Login/index');
	});

	//执行后台登录动作的路由
	Route::controller('/Admin/Login','Admin\LoginController');
});

//后台路由组
Route::group(['middleware'=>'login','prefix'=>'Admin'],function(){
	//后台主页管理路由
	Route::resource('Index','Admin\IndexController');

	//后台用户管理路由
	Route::resource('User','Admin\UserController');

	

	//后台文章管理路由
	Route::controller('Article','Admin\ArticleController');

	
});