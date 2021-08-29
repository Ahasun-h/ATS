<?php

namespace App\Http\Middleware\UK_Management;

use Closure;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Runtime;

class UKManagerMiddleware
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
        if(Auth::check()){
            if(Auth::user()->role_id == 2){
                return $next($request);
            }
        }else{
            return redirect()->route('mgt.show.login');
        }
    }
}
