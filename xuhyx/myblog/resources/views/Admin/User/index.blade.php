@extends('Admin.Layouts.index')

{{--这里修改title--}}
@section('title', '个人商城--用户管理')

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
		justify-content: space-around;
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
	.search_stadius{
		font-size: 13px;
	}
	.search_submit{
		border: none;
		height: 30px;
		color: #fff;
		font-size: 13px;
		background: linear-gradient(60deg, #26c6da, #00acc1);
	}
	.form-group .form-control{
		margin: 0;
	}
	.form-group{
		margin: 0;
	}
	#search-type{
		padding:5px 10px;
		border: none;
	}
	.pagination-contact{
		float: right;
	}
	.pagination-contact .active a{
		background: linear-gradient(60deg, #26c6da, #00acc1);
		border-color: #ddd;
	}
	a{
		color: #26c6da;
	}
	.btn.btn-primary.btn-simple, .navbar .navbar-nav > li > a.btn.btn-primary.btn-simple{
		color: #26c6da;
	}
</style>
@endsection
{{--这里修改侧边栏--}}
@section('class2', 'active')

{{--这里修改主体内容标题--}}
@section('main_title', '用户管理')

{{--这里修改主要内容--}}
@section('name', '用户')

{{--这里修改主要内容class--}}
@section('class_li1', 'active')

{{--这里修改url--}}
@section('url','/Admin/User')

{{--这里修改count--}}
@section('count')
{{$count??$userCount}}
@endsection

{{--这里修改搜索内容--}}
@section('option')
	<option value="id" selected>ID</option>
	<option value="nickname">昵称</option>
	<option value="status">状态</option>
	<option value="phone">手机号</option>
@endsection

{{--这里插入搜索框--}}
@section('search')
	@include('Admin.Layouts.search')
@endsection

{{--这里修改主体内容--}}
@section('content')
    <div class="row">
		@include('Admin.Layouts.header')
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header" data-background-color="blue">
                    <h4 class="title">@yield('name')列表</h4>
                    <p class="category"></p>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <th>ID</th>
                        	<th>用户名</th>
                        	<th>状态</th>
                        	<th>权限</th>
                        	<th>电话</th>
                        	<th>操作</th>
                        </thead>
                        <tbody>
                        	@foreach($res as $v)
                            <tr>
                            	<td>{{$v['id']}}</td>
                            	<td>{{$v['nickname']}}</td>
                            	<td>{{ShowStatus($v['status'])}}</td>
                            	<td>{{ShowAuth($v['auth'])}}</td>
                            	<td>{{$v['telphone']}}</td>
                            	<td class="td_button">
                            		<button type="button" rel="tooltip" title="编辑" class="btn btn-primary btn-simple btn-xs btn-form" >
										<a href="/Admin/User/{{$v['id']}}/edit"><i class="material-icons">edit</i></a>
									</button>
                            		<form action="/Admin/User/{{$v['id']}}" method="post">
                            			{{csrf_field()}}
                            			{{method_field('DELETE')}}
                            			<button type="submit" rel="tooltip" title="删除" class="btn btn-danger btn-simple btn-xs">
											<i class="material-icons">close</i>
										</button>
                            		</form>
                            		
                            	</td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
       @include('Admin.Layouts.page')
    </div>
@endsection
