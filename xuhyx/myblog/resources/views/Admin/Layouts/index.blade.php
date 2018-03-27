<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>我的个人博客后台--{{--这里修改title--}}@yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href='/css/2d7207a20f294df196f3a53cae8a0def.css' rel='stylesheet' type='text/css'>

    <!--     text editor     -->
    <link href="/dist/css/wangEditor.css" rel="stylesheet">

    <!--          -->
    <link href="/css/mystyle.css" rel="stylesheet">

    <style type="text/css">
    	.sidebar .nav > li.active-pro{
    		position:relative;
    		
    	}
    </style>
    @section('style')
    @show
</head>
<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="blue">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="#" class="simple-text">{{ Session::get('a_nickname') }}</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li class="@yield('class1')">
	                    <a href="/Admin/Index">
	                        <i class="material-icons">Dashboard</i>
	                        <p>主页</p>
	                    </a>
	                </li>
	                <li class="@yield('class2')">
	                    <a href="/Admin/User">
	                        <i class="material-icons">person</i>
	                        <p>用户管理</p>
	                    </a>
	                </li>
	                <li class="@yield('class3')">
	                    <a href="/Admin/Article">
	                        <i class="material-icons">library_books</i>
	                        <p>文章管理</p>
	                    </a>
	                </li>
	                <li class="@yield('class4')">
	                    <a href="maps.html">
	                        <i class="material-icons">view_column</i>
	                        <p>轮播图管理</p>
	                    </a>
	                </li>
	                <li class="@yield('class5')">
	                    <a href="notifications.html">
	                        <i class="material-icons text-gray">textsms</i>
	                        <p>留言管理</p>
	                    </a>
	                </li>
	                <li class="@yield('class6')">
	                    <a href="notifications.html">
	                        <i class="material-icons text-gray">message</i>
	                        <p>评论管理</p>
	                    </a>
	                </li>
	                <li class="@yield('class7')">
	                    <a href="notifications.html">
	                        <i class="material-icons text-gray">photo</i>
	                        <p>相册管理</p>
	                    </a>
	                </li>
					<li class="active-pro">
	                    <a href="/Admin/Login/dologout">
	                        <i class="material-icons">exit_to_app</i>
	                        <p>退出</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">@yield('main_title')</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">{{ Session::get('a_nickname') }}</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">消息</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">个人中心</p>
		 						</a>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
								<input type="text" class="form-control" placeholder="搜索">
								<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
						</form>
					</div>
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
					{{--这里修改主要内容--}}
					@yield('content')

				</div>

			</div>

			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul>
							<li>
								<a href="#">
									Home
								</a>
							</li>
							<li>
								<a href="#">
									Company
								</a>
							</li>
							<li>
								<a href="#">
									Portfolio
								</a>
							</li>
							<li>
								<a href="#">
								   Blog
								</a>
							</li>
						</ul>
					</nav>
					<p class="copyright pull-right">
						&copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Creative Tim</a>
					</p>
				</div>
			</footer>
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	

	<!-- Material Dashboard javascript methods -->
	<script src="/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="/js/demo.js"></script>
	<!-- Text Edit JS -->
    <script type="text/javascript" src="/dist/js/wangEditor.js"></script>

	<script type="text/javascript">
		$(function(){
			@if (count($errors) > 0)
				@foreach ($errors->all() as $error)
				$.notify({
					icon: 'add_alert',
					title: "<strong>警告:</strong> ",
					message: "{{$error}}"
				},{
					type: 'danger',
					delay: 5000,
					timer: 100,
				});
				@endforeach
			@endif
			@if (session('success'))
			   $.notify({
						icon: 'add_alert',
						message: "{{session('success')}}"
					},{
						type: 'success',
						placement: {
							from: "top",
							align: "center"
						},
						delay: 5000,
						timer: 100,
					});
			@endif
			@if (session('warning'))
			   $.notify({
						icon: 'add_alert',
						message: "{{session('warning')}}"
					},{
						type: 'warning',
						placement: {
							from: "top",
							align: "center"
						},
						delay: 5000,
						timer: 100,
					});
			@endif
			@if (session('danger'))
			   $.notify({
						icon: 'add_alert',
						message: "{{session('danger')}}"
					},{
						type: 'danger',
						placement: {
							from: "top",
							align: "center"
						},
						delay: 5000,
						timer: 100,
					});
			@endif
		});
		</script>
	{{--这里修改javescript--}}
	
	@section('javescript')

	@show
</html>
