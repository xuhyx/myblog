{{csrf_field()}}
<div class="col-sm-5 search_user col-sm-5">
    <input type="text" placeholder="查找@yield('name')" class="form-control" name="search" id="uvalue">
</div>
<div class="search_stadius col-sm-2" >
    <select id="search-type" class="" data-placeholder="Search Type" name="searchCondition" >
    @yield('option')
		
	</select>
</div>
<input class="search_submit col-sm-1 active" type="submit" value="查询"/>