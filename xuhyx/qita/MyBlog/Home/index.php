<?php
	session_start();
	//单入口文件
	include "./Config/config.php";
	include "./Model/Model.class.php";
	include './Libs/Vcode/Vcode.class.php';
	include "./Libs/Image/Image.class.php";
	include "./Libs/Fileupload/Fileupload.class.php";
	//include './Controller/Controller.class.php';
	
	//1.获取到c参数（控制器）
	$control=$_GET['c'] ?? 'Index';
	$action=$_GET['a'] ?? 'index';
	//var_dump($control);
	//2.引入控制器文件
	//include './Controller/'.$control.'Controller.class.php';
	
	//自动加载（魔术函数）
	function __autoload ($className){
		//判断
		if(file_exists('./libs/'.$className.'/'.$className.'.class.php')){
			include './libs/'.$className.'/'.$className.'.class.php';
		}else if(file_exists('./Model/'.$className.'.class.php')){
			include './Model/'.$className.'.class.php';
		}else if(file_exists('./Controller/'.$className.'.class.php')){
			include './Controller/'.$className.'.class.php';
		}else if(file_exists('./Controller/'.$className.'Controller.class.php')){
			include './Controller/'.$className.'Controller.class.php';
		}
	}
	//3.实例化User控制器文件
	$controller=$control.'Controller';
	$user=new $controller();
	
	//4.调用user控制器的方法
	$user->$action();
?>