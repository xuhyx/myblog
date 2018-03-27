<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //添加登录验证的规则
        if(!$request->session()->has('a_id')){
            return redirect('/Login');
        }
        return $next($request);
    }
}
