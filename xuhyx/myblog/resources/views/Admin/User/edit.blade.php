@extends('Admin.Layouts.index')

{{--这里修改title--}}
@section('title', '个人商城--修改用户信息')

{{--这里修改样式--}}
@section('style')
<style type="text/css">
	.table th,.table td{
		text-align: center;
	}
	.table .td_button{
		display: flex;
		justify-content: center;
	}
	.well{
		display: flex;
		align-items: center;
		justify-content: flex-start;
	}
	.nav-pills:not(.nav-pills-icons){
		display: flex;
		align-items: center;
	}
	.nav-pills:not(.nav-pills-icons) > li{
		padding: 0;
		display: flex;
	}
	.nav-pills:not(.nav-pills-icons) > li > a{
		border-radius: 0;
	}
	.nav-pills:not(.nav-pills-icons) .active> a{
		border-radius: 0;
		background: linear-gradient(60deg, #26c6da, #00acc1);
	}
	.nav-pills.nav-stacked > li + li{
		margin: 0;
	}
	.form-group{
		margin-top: 15px;
	}
	.btn.btn-primary{
		background: #26c6da;
	}

	.form-group input[type=file]{
		opacity: 0.6;
		position:static;
		padding-left: 80px;

	}
</style>
@endsection
{{--这里修改侧边栏class--}}
@section('class2', 'active')

{{--这里修改主体内容标题--}}
@section('main_title', '用户管理')

{{--这里修改主要内容--}}
@section('name', '用户')

{{--这里修改主要内容class--}}

{{--这里修改url--}}
@section('url','/Admin/User')

{{--这里修改count--}}
@section('count')
{{$userCount}}
@endsection

{{--这里修改主体内容--}}
@section('content')
<div class="row">
	@include('Admin/Layouts/header')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">添加用户信息</h4>
				<p class="category"></p>
            </div>
            <div class="card-content">
                <form action="/Admin/User/{{$data['id']}}" method="post" enctype = "multipart/form-data">
                	{{csrf_field()}}
                	{{method_field('PUT')}}
                    <div class="col-md-12">
						<div class="form-group label-floating">
							<label class="control-label">昵称</label>
							<input type="text" class="form-control" name="nickname" value="{{$data['nickname']}}">
						</div>
                    </div>
                    <div class="col-md-12">
						<div class="form-group label-floating">
							<label class="control-label">密码</label>
							<input type="password" class="form-control" name="password" value="{{$data['password']}}">
						</div>
                    </div>
                    <div class="col-md-12">
						<div class="form-group label-floating">
							<label class="control-label">手机</label>
							<input type="text" class="form-control" name="telphone" value="{{$data['telphone']}}">
						</div>
                    </div>
                    <div class="col-md-12">
						<div class="form-group label-floating">
							<label class="control-label">状态</label>
							<div class="row">
								<label class="status col-md-2"><input value="0" type="radio" class="" name="status" {{$data['status']==0?'checked':''}}>锁定</label>
								<label class="status col-md-2"><input value="1" type="radio" class="" name="status" {{$data['status']==1?'checked':''}}>激活</label>
							</div>
						</div>
                    </div>
                    <div class="col-md-12">
						<div class="form-group label-floating">
							<label class="control-label">上传头像</label>
							<input type="file" class="form-control" name="picture">
						</div>
               		</div>
               		<div class="col-md-12">
						<div class="form-group label-floating">
							<label class="control-label">用户权限</label>
							<div class="row">
								<label class="status col-md-2"><input value="0" type="radio" class="" name="auth" {{$data['auth']==0?'checked':''}}>超级管理员</label>
								<label class="status col-md-2"><input value="1" type="radio" class="" name="auth" {{$data['auth']==1?'checked':''}}>普通管理员</label>
								<label class="status col-md-2"><input value="2" type="radio" class="" name="auth" {{$data['auth']==2?'checked':''}}>普通会员</label>
							</div>
						</div>
                    </div>
               		<div class="row col-md-12">
	                    <button type="submit" class="btn btn-primary pull-right">提 交</button>
	                    <button type="reset" class="btn btn-primary pull-right">重 置</button>
               		</div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
		<div class="card card-profile">
			<div class="card-avatar">
				<a href="#pablo">
					<img class="img" src="{{URL::asset('/Libs/Uploads/headerPic/'.$data['picture'])}}" />
				</a>
			</div>

			<div class="content">
				<h6 class="category text-gray">{{ShowStatus($data['status'])}}</h6>
				<h6 class="category text-gray">{{ShowAuth($data['auth'])}}</h6>
				<h4 class="card-title">{{$data['nickname']}}</h4>
				<p class="card-content">{{$data['telphone']}}</p>
				<form action="/Admin/User/{{$data['id']}}" method="post">
        			{{csrf_field()}}
        			{{method_field('DELETE')}}
        			<button type="submit" rel="tooltip" title="删除" class="btn btn-primary pull-center">删除用户</button>
        		</form>
				
			</div>
		</div>
	</div>
</div>
@endsection
