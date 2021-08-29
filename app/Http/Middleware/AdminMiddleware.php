<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Runtime;

class AdminMiddleware
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
        if(!Auth::check() && Auth::user()->role_id == 1){
            return redirect()->route('mgt.show.login');
        }else{
            return $next($request);
        }
    }
}
