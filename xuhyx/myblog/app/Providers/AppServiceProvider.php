<?php

namespace App\Providers;
use Illuminate\Http\Request;
use App\Model\User;

use App\Model\Article;

use App\Http\Requests;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        //获取用户总数
        $userCount=User::count();

        
        //获取文章总数
        $articleCount=Article::count();

       
         //共享数据条目数
        view()->share('userCount',$userCount);
        
        view()->share('articleCount',$articleCount);
        
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
