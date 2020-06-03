<?php

namespace App\Http\Middleware;

use Closure;

class Sblogin
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

        $ss = session('sblogin');
        if (isset($ss) && ($ss)){
            return $next($request);
        }

        return redirect("/Template/login")->with('status','Vui lòng đăng nhập để tiếp tục');
    }
}
