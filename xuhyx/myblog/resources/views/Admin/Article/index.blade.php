@extends('Admin.Layouts.index')

{{--这里修改title--}}
@section('title', '文章列表')

{{--这里修改样式--}}
@section('style')
<link href="/css/article_index.css" rel="stylesheet">
@endsection
{{--这里修改侧边栏--}}
@section('class3', 'active')

{{--这里修改主体内容标题--}}
@section('main_title', '文章管理')

{{--这里修改主要内容--}}
@section('name', '文章')

{{--这里修改主要内容class--}}
@section('class_li1', 'active')

{{--这里修改url--}}
@section('url','/Admin/Article')

{{--这里修改count--}}
@section('count')
{{$count??$articleCount}}
@endsection

{{--这里修改搜索内容--}}
@section('option')
	<option value="id" selected>文章ID</option>
	<option value="title">文章标题</option>
	<option value="nickname">文章作者</option>
	<option value="descr">文章简介</option>
	<option value="created_at">上传时间</option>
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
                        	<th>标题</th>
                        	<th>作者</th>
                        	<th>简介</th>
                        	<th>上传时间</th>
                        	<th>更新时间</th>
                        	<th>阅读量</th>
                        	<th>评论量</th>
                        	<th>操作</th>
                        </thead>
                        <tbody>
                        	@foreach($res as $v)
                            <tr>
                            	<td>{{$v['id']}}</td>
                            	<td style="max-width: 100px;">
                            		<a href="/Admin/Article/show/{{$v['id']}}" title="点击查看文章详情" rel="tooltip">{{str_limit($v['title'],20)}}</a>
                            	</td>
                            	<td style="max-width: 100px">{{$v['nickname']}}</td>
                            	<td style="max-width: 400px">{{str_limit($v['descr'],30)}}</td>
                            	<td>{{$v['created_at']}}</td>
                            	<td>{{$v['updated_at']}}</td>
                            	<td>{{$v['click_num']}}</td>
                            	<td>
                            		<a href="" title="查看评论" rel="tooltip">{{$v['replay_num']}}</a>
                            	</td>
                            	<td class="td_button">
                            		<button type="button" rel="tooltip" title="编辑" class="btn btn-primary btn-simple btn-xs btn-form" >
										<a href="/Admin/Article/edit/{{$v['id']}}" ><i class="material-icons">edit</i></a>
									</button>
                        			<button type="submit" rel="tooltip" title="删除" class="btn btn-danger btn-simple btn-xs">
										<a href="/Admin/Article/destroy/{{$v['id']}}"><i class="material-icons">close</i></a>
									</button>
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