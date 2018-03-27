@extends('Admin.Layouts.index')

{{--这里修改title--}}
@section('title', '编辑文章')

{{--这里修改样式--}}
@section('style')
<link href="/css/article_style.css" rel="stylesheet">
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
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">修改文章信息</h4>
				<p class="category"></p>
            </div>
            <div class="card-content">
                <form action="/Admin/Article/update/{{$data['id']}}" method="post" enctype = "multipart/form-data">
                	{{csrf_field()}}
                    <div class="col-md-12">
						<div class="form-group label-floating">
							<label class="control-label">标题</label>
							<input type="text" class="form-control" name="title" value="{{$data['title']}}">
						</div>
                    </div>
                    <div class="col-md-12">
						<div class="form-group label-floating">
							<label class="control-label">文章配图</label>
							<img class="pic" src="/Libs/Uploads/ArticlePic/{{$data['picture']}}">
							<input type="file" class="form-control" name="picture">
						</div>
               		</div>
                    <div class="col-md-12">
						<div class="form-group label-floating">
							<label class="control-label">文章简介</label>
							<input type="text" class="form-control" name="descr"  value="{{$data['descr']}}"" >
						</div>
                    </div>
                    <div class="col-md-12">
						<div class="form-group label-floating">
							<label class="control-label">文章内容</label>
							<textarea id="div1" class="" name="content" >{{$data['content']}}</textarea>
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
</div>
@endsection
@section('javescript')

	<script type="text/javascript">
		$(function () {
            var editor = new wangEditor('div1');
            editor.create();
        });
	</script>
@endsection