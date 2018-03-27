<form class="col-md-12 row" action="{{--这里传递url--}}@yield('url')" method="get">
    <div class="well mt10 ">
       
        	<ul class="nav nav-pills nav-stacked nav-contacts col-lg-4 col-md-4 col-sm-4">
                <li class="@yield('class_li1') col-sm-6">
                    <a href="{{--这里传递url--}}@yield('url')" >
                        	查看@yield('name')列表&nbsp&nbsp&nbsp @yield('count')
                    </a>
                </li>
                <li class="@yield('class_li2') col-sm-6">
                    <a href="{{--这里传递url--}}@yield('url')/create" >
                        	+ 添加@yield('name')
                    </a>
                </li>
            </ul>
            @section('search')
            
            @show
    </div><!-- well -->
</form>