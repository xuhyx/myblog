@extends('Admin.Layouts.index')

{{--这里修改title--}}
@section('title', '文章详情')

{{--这里修改样式--}}
@section('style')
<link href="/css/article_style.css" rel="stylesheet">
<style type="text/css">
		.card-profile .article-content{
		text-align: left;
		padding: 0 25px;
	}

</style>
@endsection
{{--这里修改侧边栏class--}}
@section('class3', 'active')

{{--这里修改主体内容标题--}}
@section('main_title', '文章管理')

{{--这里修改主要内容--}}
@section('name', '文章')

{{--这里修改url--}}
@section('url','/Admin/Article')

{{--这里修改count--}}
@section('count')
{{$articleCount}}
@endsection

{{--这里修改主要内容class--}}


{{--这里修改主体内容--}}
@section('content')
<div class="row">
	@include('Admin/Layouts/header')
    <div class="col-md-12">
		<div class="card card-profile">
			<div class="card-avatar">
				<a href="{{URL::asset('/Libs/Uploads/articlePic/'.$data['picture'])}}">
					<img class="img" src="{{URL::asset('/Libs/Uploads/articlePic/'.$data['picture'])}}" />
				</a>
			</div>
	
			<div class="content">
				<h4 class="card-title">{{$data['title']}}</h4>
				<h6 class="category text-gray"><span>作者： {{$data['nickname']}}</span>&nbsp&nbsp&nbsp&nbsp&nbsp</h6>

				<h6 class="category text-gray"><span>发布时间：{{$data['created_at']}}</span>&nbsp&nbsp&nbsp&nbsp&nbsp<span>更新时间：{{$data['updated_at']}}</span>&nbsp&nbsp&nbsp&nbsp&nbsp<span>阅读量：{{$data['click_num']}}</span>&nbsp&nbsp&nbsp&nbsp&nbsp<span>评论量：{{$data['replay_num']}}</span></h6>
				<div class="card-content article-content">简介：{!!$data['descr']!!}</div>
				<div class="card-content article-content" >{!!$data['content']!!}</div>
				<div class="row">
					<button type="button" rel="tooltip" title="编辑" class="btn btn-primary pull-center" >
						<a href="/Admin/Article/edit/{{$data['id']}}" style="color: #fff;">编辑文章</a>
					</button>
	    			<button type="button" rel="tooltip" title="删除" class="btn btn-primary pull-center">
	    				<a href="/Admin/Article/destroy/{{$data['id']}}"  style="color: #fff;">删除文章</a>
	    			</button>
		    		
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
